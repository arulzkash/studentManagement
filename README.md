# Student Management System (Laravel 12)

A robust web application designed to manage school ecosystems, including Students, Teachers, Classes, and Academic Grades. This project was developed as part of a **Laravel 12 Deep Dive** course to implement modern backend patterns and complex Eloquent relationships.

## 📸 Preview

| Student List Interface | Teacher Management |
<img width="1910" height="985" alt="image" src="https://github.com/user-attachments/assets/9d1da263-08a7-4edd-8d9b-d85d42f3ff58" />
<img width="1912" height="984" alt="image" src="https://github.com/user-attachments/assets/4f5e608e-d1e6-4d6f-8fcb-19e449030425" />
<img width="1913" height="984" alt="image" src="https://github.com/user-attachments/assets/0b00d633-6258-4d48-864b-d8ec03cc6e5c" />
<img width="1910" height="990" alt="image" src="https://github.com/user-attachments/assets/57f5d275-dbbc-4f2b-8983-2064f72c11ad" />
<img width="1914" height="992" alt="image" src="https://github.com/user-attachments/assets/e63d9e43-387d-4141-9dec-db1b64704a53" />
<img width="1913" height="999" alt="image" src="https://github.com/user-attachments/assets/7beb1014-a830-4475-bd1c-7137305cc8df" />

## 🚀 Key Features

* **Complete CRUD Ecosystem**: Manage Students, Teachers, Classes, and Subjects.
* **Advanced Image Handling**: Student profile photo uploads with automatic file cleanup upon record deletion.
* **Complex Database Relationships**:
* **Many-to-Many**: Class & Subjects, Students & Subjects (via Grades).
* **Polymorphic**: Images and Comments system.
* **Advanced Eloquent**: Has-One-Through and Has-Many-Through implementations.
* **Security & Authorization**:
* **Role-Based Access**: Dedicated Middleware for Teacher access.
* **Policies**: Secure Student updates (Users can only edit their own records).
* **Search & Efficiency**: Built-in search functionality using Laravel's `whereAny` and paginated results.
* **Soft Deletes**: Database-level protection against accidental data loss.

## 🛠️ Tech Stack

* **Framework**: Laravel 12
* **Language**: PHP 8.2+
* **Frontend**: Bootstrap 5 (via Laravel UI), Vite, Axios
* **Database**: MySQL
* **Auth**: Laravel UI Scaffolding

## 💻 Installation & Setup

Follow these steps to get the project running on your local machine:

### 1. Prerequisites

Ensure you have **PHP 8.2+**, **Composer**, **Node.js & NPM**, and a **MySQL** server (like XAMPP or Laragon) installed.

### 2. Clone the Repository

```bash
git clone https://github.com/yourusername/your-repo-name.git
cd your-repo-name

```

### 3. Run Automated Setup

I have provided a custom shortcut to handle the heavy lifting:

```bash
composer setup

```

*This command will: Install PHP dependencies, copy `.env`, generate the app key, install NPM packages, and compile assets.*

### 4. Database Configuration

1. Open your MySQL tool (phpMyAdmin/TablePlus) and create a database named **`students`**.
2. Open the `.env` file and ensure the credentials match your local setup:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=students
DB_USERNAME=root
DB_PASSWORD=

```

### 5. Migration & Seeding

Populate the database with 100+ Teachers and 300+ Students for testing:

```bash
php artisan migrate:fresh --seed
php artisan storage:link

```

### 6. Run the Application

Start the development server and the asset compiler simultaneously:

```bash
composer dev

```

Now, visit **`http://localhost:8000`** in your browser.

## 📂 Project Structure Note

* **Controllers**: Logic for Student and Teacher management, including file handling.
* **Models**: Contains advanced Eloquent relationships and Polymorphic links.
* **Policies**: Located in `app/Policies` to handle authorization logic.
* **Seeding**: Use `DatabaseSeeder` to generate a full school environment instantly.

## 📝 Acknowledgments

This project was built following the **Laravel 12 Course** on YouTube. It serves as a portfolio piece to demonstrate proficiency in PHP, Laravel Eloquent, and modern web development workflows.
