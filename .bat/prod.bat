REM SCRIPT PARA RODAR EM APENAS UM SERVIDOR SÓ .
@echo off 
call pnpm build 
call php artisan serve
pause