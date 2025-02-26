<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

### 1️⃣ Clonar o repositório

```bash
git clone git@github.com:karoline-gaia/Teste-PHP.git
cd Teste-PHP
```

### 2️⃣ Instalar as dependências do Laravel

```bash
composer install
```

### 3️⃣ Copiar o arquivo de ambiente e gerar a chave da aplicação

```bash
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Subir os containers com Laravel Sail

Se você ainda não configurou o Laravel Sail, execute o seguinte comando:

```bash
php artisan sail:install
```

Após a instalação, suba os containers:

```bash
./vendor/bin/sail up -d
```

> **Nota:** O comando `-d` executa os containers em segundo plano.



## 🚀 Como Usar

A API possui uma rota `POST` para encontrar as strings mais longas em um array.

### 📌 Rota: `/longest-strings`

**Método:** `POST`

**Exemplo de Requisição:**

```json
{
    "inputArray": ["aba", "aa", "ad", "vcd", "aba"]
}
```

**Exemplo de Resposta:**

```json
{
    "stringsMaisLongas": ["aba", "vcd", "aba"]
}
```

Você pode testar a API utilizando ferramentas como **Postman**, **Insomnia** ou via terminal com `cURL`:

```bash
curl -X POST http://localhost/longest-strings \
     -H "Content-Type: application/json" \
     -d '{"inputArray": ["aba", "aa", "ad", "vcd", "aba"]}'
```

---

## 🛠 Testes

Para rodar os testes unitários com PHPUnit, execute:

```bash
./vendor/bin/sail test
```

---

## 🛑 Parando o Ambiente Docker

Caso queira parar os containers do Laravel Sail, execute:

```bash
./vendor/bin/sail down
```

---


