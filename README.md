

Requisitos:
    Laravel 11
    Php 8.2
    Composer
    VSCode
    Laragon

Para salvar alterações do código:
    cd C:\laragon\www\unetvale_avaliacao
    git status
    git remote add origin https://github.com/rafaelram0s/unetvale_teste.git
    git add .
    git commit -m "O que foi feito"
    git push -u origin master

Para o avaliador:
    git clone https://github.com/rafaelram0s/unetvale_teste.git
    cd unetvale_teste
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    php artisan serve

Para acessar do seu navegador a página vá em:
    localhost:8000/todos