@echo off

:: Memeriksa apakah server Laravel sedang berjalan di port 8000
for /f "tokens=5" %%a in ('netstat -ano ^| findstr :8000') do (
    set PID=%%a
)

if defined PID (
    echo Menemukan server Laravel yang berjalan di port 8000 dengan PID: %PID%
    echo Menghentikan server Laravel...
    taskkill /PID %PID% /F
    echo Server Laravel berhasil dihentikan.
) else (
    echo Tidak ada server Laravel yang berjalan di port 8000.
)

:: Membersihkan cache dengan php artisan optimize:clear
echo Membersihkan cache Laravel...
php artisan optimize:clear
echo Cache Laravel berhasil dibersihkan.

:: Menjalankan server Laravel dengan php artisan serve
echo Menjalankan server Laravel di port 8000...
start php artisan serve

pause
