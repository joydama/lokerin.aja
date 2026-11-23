<div align="center">

# LOKERIN AJA

### Online Job Application Submission Platform

A web-based job application platform designed to simplify the application process by allowing candidates to submit their personal information, select job positions, upload CV documents, and provide additional application details through an integrated digital system.

**Academic Group Project**

[GitHub Repository](https://github.com/joydama/lokerin.aja)

<br>

<img src="https://img.shields.io/badge/Laravel-10-FF2D20?logo=laravel&logoColor=white" alt="Laravel 10">
<img src="https://img.shields.io/badge/PHP-8.1%2B-777BB4?logo=php&logoColor=white" alt="PHP">
<img src="https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql&logoColor=white" alt="MySQL">
<img src="https://img.shields.io/badge/JavaScript-ES6-F7DF1E?logo=javascript&logoColor=black" alt="JavaScript">
<img src="https://img.shields.io/badge/Vite-5-646CFF?logo=vite&logoColor=white" alt="Vite">

</div>

---

## Overview

**LOKERIN AJA** is a web-based job application submission system developed as an academic group project. The application provides a platform for job applicants to submit their applications through an online form.

The system allows applicants to enter their personal information, choose their desired job position, upload their Curriculum Vitae (CV), and provide additional information such as portfolio links and cover letters.

The application is built using Laravel 10 as its backend framework, with MySQL as the database management system.

## Key Features

- **Online Job Application** — Providing an online form for submitting job applications.
- **Applicant Information** — Collecting personal information, including name, email address, and phone number.
- **Job Position Selection** — Allowing applicants to choose available positions, including Frontend Developer, Backend Developer, and UI/UX Designer.
- **CV Upload** — Supporting CV document uploads through the application form.
- **Portfolio Submission** — Allowing applicants to provide portfolio links.
- **Cover Letter** — Providing an additional field for applicants to introduce their qualifications and interests.
- **Form Validation** — Validating required applicant information before submission.
- **Application Data Storage** — Storing submitted application information in the MySQL database.
- **Submission Confirmation** — Displaying a confirmation page after successful application submission.

## Application Workflow

The application follows a simple submission process:

1. **Accessing the Website** — Applicants open the LOKERIN AJA application.
2. **Completing the Application Form** — Applicants enter their personal information and select a desired position.
3. **Uploading Documents** — Applicants attach their CV and provide additional application details.
4. **Submitting the Application** — The system validates the submitted information.
5. **Saving Application Data** — Valid application data is stored in the database.
6. **Displaying Confirmation** — Applicants receive an on-screen confirmation after successful submission.

## Technology Stack

| Technology | Description |
|---|---|
| Laravel 10 | Backend framework |
| PHP 8.1+ | Server-side programming language |
| MySQL | Relational database management system |
| HTML | Web page structure |
| CSS | Website styling |
| JavaScript | Client-side functionality |
| Vite | Frontend asset build tool |
| Composer | PHP dependency management |
| NPM | JavaScript package management |

## Database Structure

The application uses a MySQL database to store submitted job applications.

The `lamarans` table contains the following information:

| Field | Description |
|---|---|
| id | Application identifier |
| nama | Applicant's full name |
| email | Applicant's email address |
| hp | Applicant's phone number |
| posisi | Selected job position |
| portfolio | Portfolio link |
| cover_letter | Applicant's cover letter |
| cv | Uploaded CV filename |
| created_at | Application creation timestamp |
| updated_at | Last update timestamp |

## Project Structure

```text
lokerin.aja/
│
├── app/
│   ├── Http/Controllers/
│   └── Models/
│
├── bootstrap/
│   └── cache/
│
├── config/
│
├── database/
│   ├── migrations/
│   ├── factories/
│   └── seeders/
│
├── public/
│   ├── css/
│   ├── images/
│   ├── js/
│   └── upload/
│
├── resources/
│   └── views/
│
├── routes/
│   └── web.php
│
├── storage/
│
├── tests/
│
├── artisan
├── composer.json
├── composer.lock
├── package.json
└── vite.config.js
```

## Installation and Setup

### Requirements

- PHP 8.1 or later
- Composer
- MySQL
- Node.js and NPM

### Installation Steps

1. Clone the repository:

```bash
git clone https://github.com/joydama/lokerin.aja.git
```

2. Navigate to the project directory:

```bash
cd lokerin.aja
```

3. Install PHP dependencies:

```bash
composer install
```

4. Create the environment configuration:

```bash
cp .env.example .env
```

5. Generate the application key:

```bash
php artisan key:generate
```

6. Configure the MySQL database connection in the `.env` file.

7. Run database migrations:

```bash
php artisan migrate
```

8. Install frontend dependencies:

```bash
npm install
```

9. Build frontend assets:

```bash
npm run build
```

10. Start the Laravel development server:

```bash
php artisan serve
```

The application can then be accessed through:

```text
http://127.0.0.1:8000
```

## File Upload Directory

Uploaded CV documents are stored in the `public/upload/` directory.

For security and privacy reasons, uploaded applicant documents are not included in this repository.

## Project Information

- **Project Name:** LOKERIN AJA
- **Project Type:** Web-Based Application
- **Project Category:** Job Application System
- **Development Framework:** Laravel 10
- **Database:** MySQL
- **Repository:** [joydama/lokerin.aja](https://github.com/joydama/lokerin.aja)

---

<div align="center">

**LOKERIN AJA**

*Connecting Talent with Opportunity.*

</div>
