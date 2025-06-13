# coursemanagement_system

The Course Management System is a web-based application designed to streamline and simplify the management of courses, categories, and student enrollments. It provides an organized platform to manage course details, student registrations, and enrollment data efficiently, while also offering robust filtering options to easily access specific course and enrollment information.
-------------------------------------------------------------------------------------------
The application opens with a user-friendly landing page, where users can navigate to the admin dashboard by clicking on the "Go to Admin Dashboard" button. The dashboard serves as the master control panel for managing all core entities in the system.

Key Features
--------------
- Efficient management of categories and courses, including creation, updating, and detailed viewing.

- Student registration and management, allowing administrators to create and maintain comprehensive student records.

- Handling of student enrollment processes (optional, depending on requirements), associating students with their chosen courses.

- Ability to view the number of enrollments per course, providing insights into course popularity.

- Powerful filtering capabilities enabling admins to search courses by category and course name.

- Detailed filtering of enrollments to retrieve specific student-course relationships.

# Technologies Used
--------------------
- Backend: Laravel 10 (PHP Framework)  
- Frontend: Blade Templates, Bootstrap  
- Database: MySQL  
- ORM: Eloquent  
- Design Pattern: DTOs, Service Layer

# Installation & Setup
-----------------------
```bash
git clone https://github.com/Sujith052/coursemanagement_system.git
cd course-management-system
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
