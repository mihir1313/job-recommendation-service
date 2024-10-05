# Laravel Todo API

This is a Laravel-based API project for managing job recommendations.The project uses Laravel Sanctum for API.

## Table of Contents
- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Environment Variables](#environment-variables)
- [Running Migrations and Seeders](#running-migrations-and-seeders)
- [API Endpoints](#api-endpoints)
- [Authentication](#authentication)
- [Usage](#usage)
- [License](#license)


Follow the instructions below to set up and run the project locally.

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL or any other database
- Laravel >= 9
- Node.js and npm (if using frontend assets)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/mihir1313/todo-apis.git
   cd todo-apis
   

2. **Install Composer:**
   ```bash
    composer install
   
3. **Install laravel/sanctum:**
   ```bash
   composer require laravel/sanctum
4. **Copy the .env.example to create your own .env file:**
     ```bash
    cp .env.example .env
5. **Configure the .env file: Update the following lines in the .env file to match your local setup:**
     ```bash
    APP_NAME="Job Recommendation API"
    APP_URL=http://localhost:8000

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=job_recommendations
    DB_USERNAME=root
    DB_PASSWORD=
6. **Generate the application key:**
     ```bash
    php artisan key:generate
7. **Run migrations:**
    ```bash
    php artisan migrate
8. **Seed the database:**
     ```bash
    php artisan db:seed
9.**Serve the application:**
   ```bash
    php artisan serve

### API Endpoints (Protected)

Below are the API endpoints for managing todos. Each endpoint requires user authentication via Laravel Sanctum.

| **Method** | **Endpoint**          | **Description**                            |
|------------|-----------------------|--------------------------------------------|
| `GET`      | `/api/todos`          | Get job recommendations for a specific user|

