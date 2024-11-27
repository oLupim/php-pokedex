<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# projeto-pokemon-laravel

Como clonar o repositório
```
git clone https://github.com/oLupim/php-pokedex/
```

Após clonar basta entrar na pasta

```
cd php-pokedex
```

E é necessário criar uma copia do arquivo .env.example com o nome .env

```
cp .env.example .env
```

E posteriormente baixar as dependências e gerar a chave do laravel executando os seguintes comandos (Um de cada vez)

```
composer install
php artisan key:generate
```

E por último atualiza a migrate

```
php artisan migrate

ou

php artisan migrate:fresh
```
