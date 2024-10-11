 ::SCRIPT PARA RODAR QUALQUER COMANDO LISTADO PELO ARTISAN. 
 ::ADICIONE UM ARGUMENTO DEPOIS DE CHAMAR O ARQUIVO .BAT
 :: artisan serve onde serve é um dos argumentos que o artisan aceita ou migrate ou qualquer outro do laravel
@echo off
call php artisan %*
pause