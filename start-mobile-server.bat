@echo off
echo Starting Laravel Server for Mobile Network...
echo ==========================================
for /f "tokens=14" %%a in ('ipconfig ^| findstr IPv4') do set _IPAddress=%%a
echo Your computer IP is: %_IPAddress%
echo.
echo Open this link on your Mobile (must be on the same Wi-Fi):
echo http://%_IPAddress%:8080
echo ==========================================
php artisan serve --host=0.0.0.0 --port=8080
pause
