## Requirements

This repository contains a project created using the Laravel framework, and to successfully run it, you will need to install XAMPP and Laravel.

## Running the Project

To run the project, follow these steps:
- Rename file ".env.example" to ".env"

1. Update the project's dependencies using Composer:

    ```bash
    composer update
    ```

2. Generate the application key:

    ```bash
    php artisan key:generate
    ```

3. Run the database migrations:

    ```bash
    php artisan migrate
    ```

4. Optionally, seed the database with initial data:

    ```bash
    php artisan db:seed
    ```

5. Start the development server:

    ```bash
    php artisan serve
    ```

**Project Description:**

Author: Rostyslawn02
