## Installation

Arifhossen.dev is a regular Laravel application; it's build on top of Laravel 11 and uses Inertia and Vue with TailwindCSS for frontend development. If you are familiar with Laravel, and Vue you should feel right at home.

In terms of local development, you can use the following requirements:

- PHP 8.3 - with SQLite, GD, and other common extensions.
- Node.js 16 or more recent.

If you have these requirements, you can start by cloning the repository and installing the dependencies:

```bash
git clone https://github.com/arifhossen-dev/arifhossen.dev.git

cd arifhossen.dev
```

Next, install the dependencies using [Composer](https://getcomposer.org) and [NPM](https://www.npmjs.com):

```bash
composer install

npm install
```

After that, set up your `.env` file:

```bash
cp .env.example .env

php artisan key:generate
```

Prepare your database and run the migrations:

```bash
touch database/database.sqlite

php artisan migrate
```

In a **separate terminal**, build the assets in watch mode:

```bash
npm run dev
```


Finally, start the development server:

```bash
php artisan serve
```
