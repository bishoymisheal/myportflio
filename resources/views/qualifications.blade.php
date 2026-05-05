@extends('layouts.app')

@section('content')
<section class="page-header hidden-section">
    <h1>Qualifications & Courses</h1>
    <p>My academic background and professional certifications in technology.</p>
</section>

<section id="qualifications" class="hidden-section" style="padding: 2rem 5%;">
    <h2 style="margin-bottom: 2rem; color: var(--accent-pink);">Academic Qualifications</h2>
    <div class="projects-grid">
        <div class="project social-card">
            <i class="fas fa-graduation-cap" style="font-size: 3rem; color: var(--accent-cyan); margin-bottom: 1rem;"></i>
            <h3>Bachelor of Computer Science</h3>
            <p>University of Applied Sciences - Graduated 2023</p>
            <p style="font-size: 0.9rem; color: var(--text-secondary);">Focused on Software Engineering, Data Structures, and Web Development.</p>
        </div>
        
        <div class="project social-card">
            <i class="fas fa-school" style="font-size: 3rem; color: var(--accent-purple); margin-bottom: 1rem;"></i>
            <h3>High School Diploma</h3>
            <p>Major in Mathematics - 2019</p>
            <p style="font-size: 0.9rem; color: var(--text-secondary);">Strong focus on analytical thinking and problem-solving.</p>
        </div>
    </div>

    <h2 style="margin-top: 5rem; margin-bottom: 2rem; color: var(--accent-cyan);">Professional Courses</h2>
    <div class="projects-grid">
        <div class="project social-card">
            <i class="fab fa-laravel" style="font-size: 3rem; color: #ff2d20; margin-bottom: 1rem;"></i>
            <h3>Advanced Laravel Mastery</h3>
            <p>Udemy - 2024</p>
            <p style="font-size: 0.9rem; color: var(--text-secondary);">Backend architecture, API development, and database optimization.</p>
        </div>

        <div class="project social-card">
            <i class="fab fa-react" style="font-size: 3rem; color: #61dbfb; margin-bottom: 1rem;"></i>
            <h3>Full-Stack React Development</h3>
            <p>Coursera - 2023</p>
            <p style="font-size: 0.9rem; color: var(--text-secondary);">Building scalable SPAs with React, Redux, and Node.js.</p>
        </div>

        <div class="project social-card">
            <i class="fas fa-code" style="font-size: 3rem; color: var(--accent-lime); margin-bottom: 1rem;"></i>
            <h3>JavaScript Algorithms</h3>
            <p>FreeCodeCamp - 2022</p>
            <p style="font-size: 0.9rem; color: var(--text-secondary);">Mastering ES6+, data structures, and algorithmic complexity.</p>
        </div>
    </div>
</section>

<style>
    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }
    .social-card {
        text-align: center;
        padding: 3rem 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .social-card h3 {
        margin-bottom: 0.5rem;
    }
</style>
@endsection
