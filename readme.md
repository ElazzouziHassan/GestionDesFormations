# Gestion de Formations

![Project Logo](link-to-your-logo.png)

Gestion de Formations is a web application developed with Laravel for managing course enrollments in ISEEM training center. The application allows administrators, students, and instructors to interact with the system efficiently.

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [Contributing](#contributing)
- [License](#license)

## Features

- User Authentication with Laravel Breeze:
  - Admin, Student, and Instructor roles.
  - Passwords provided by administrators.

- User Dashboard:
  - View user information.
  - View enrolled or instructed courses.

- Admin Dashboard:
  - List of students, instructors, and courses.
  - Create, read, update, and delete users (students and instructors).
  - Create, read, update, and delete courses.

- Responsive UI Design with Bootstrap/MDBootstrap/Tailwind CSS.
- Consistent and professional page design.

## Prerequisites

- [Laravel](https://laravel.com/docs) - Version ^10.10
- [PHP](https://www.php.net/) - Version ^8.1
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [MySQL](https://www.mysql.com/)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/ElazzouziHassan/GestionDesFormations.git

2. Install project dependencies:
    ```bash
      composer install
      npm install && npm run dev

3. Configure your .env file with database information.

4. Run database migrations:
    ```bash
      php artisan migrate

5. Seed the database with sample data:
    ```bash
      php artisan db:seed

6. Start the development server:
    ```bash
      php artisan serve

7. Visit http://localhost:8000 in your web browser.

## Usage

1. Register as an administrator, student, or instructor.
2. Log in with your role-specific credentials.
3. Explore the features of the application.
4. Manage courses and users from the admin dashboard.*

## Screenshots

## Contributing

Contributions are welcome.

## License

This project is licensed under the MIT License

---


You can customize the content, add relevant images, and update the links according to your project's needs. This README provides an overview of the project, its features, how to install and use it, and how to contribute. 

-by @Elazzouzi Hassan (Wizardy - 🧙‍♂️) 
