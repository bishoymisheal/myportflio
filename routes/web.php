<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

// ─────────────────────────────────────────────
//  AUTH ROUTES (Guest only — redirect if logged in)
// ─────────────────────────────────────────────

// Login
Route::get('/login', function () {
    if (Auth::check()) return redirect('/');
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email'    => 'required|email',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials, true)) {
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    return back()
        ->withInput(['email' => $request->email])
        ->with('error', 'Incorrect email or password. Please try again.');
});

// Register
Route::get('/register', function () {
    if (Auth::check()) return redirect('/');
    return view('auth.register');
})->name('register');

Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'name'                  => 'required|string|max:255',
        'email'                 => 'required|email|unique:users,email|max:255',
        'password'              => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
        'name'     => $data['name'],
        'email'    => $data['email'],
        'password' => Hash::make($data['password']),
    ]);

    Auth::login($user);
    $request->session()->regenerate();

    return redirect('/')->with('success', 'Welcome, ' . $user->name . '! 🎉');
});

// Logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');


// ─────────────────────────────────────────────
//  PROTECTED PORTFOLIO ROUTES (Logged-in users only)
// ─────────────────────────────────────────────

Route::middleware([\App\Http\Middleware\AuthUser::class])->group(function () {

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/socials', function () {
        return view('socials');
    });

    Route::get('/qualifications', function () {
        return view('qualifications');
    });

    Route::get('/skills', function () {
        return view('skills');
    });

    Route::post('/contact', function (Request $request) {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Message::create($data);

        return response()->json(['message' => 'Your message has been received successfully. Thank you!']);
    });
});


// ─────────────────────────────────────────────
//  ADMIN ROUTES
// ─────────────────────────────────────────────

Route::prefix('admin')->group(function () {

    Route::get('/login', function () {
        if (Session::has('admin_logged_in')) {
            return redirect('/admin/dashboard');
        }
        return view('admin.login');
    });

    Route::post('/login', function (Request $request) {
        $password = $request->input('password');
        if ($password === env('ADMIN_PASSWORD', 'admin123')) {
            Session::put('admin_logged_in', true);
            return redirect('/admin/dashboard');
        }
        return back()->with('error', 'Invalid password');
    });

    Route::get('/logout', function () {
        Session::forget('admin_logged_in');
        return redirect('/admin/login');
    });

    // Protected Admin Routes
    Route::middleware([\App\Http\Middleware\AdminAuth::class])->group(function () {
        Route::get('/dashboard', function () {
            $messages = Message::latest()->get();
            return view('admin.dashboard', compact('messages'));
        });

        Route::post('/messages/{id}/delete', function ($id) {
            Message::findOrFail($id)->delete();
            return back()->with('success', 'Message deleted');
        });
    });
});
