@echo off 
call pnpm build 
call php artisan serve
pause