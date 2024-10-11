::SCRIPT PARA MIGRAÇÕES
@echo off
call php artisan migrate%*
pause