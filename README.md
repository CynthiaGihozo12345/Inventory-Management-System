Project: Inventory Management System
Developed by:
•	KAMANZI Samuel
o	Branch: group-33-22RP02314-Inventory-Management-System
o	Role: Backend Developer
o	Contributions: Database design, API development, login and registration
•	ISHIMIRWE GIHOZO Cynthia
o	Branch: group-3-22RP02466- Inventory-Management-System
o	Role: Frontend Developer
o	Contributions: UI/UX design, Responsive layouts, Report generation

Project Overview
The Inventory Management System is a Laravel-based web application designed to help managers effectively track and manage inventory. It provides tools for handling stock-in, stock-out, and generating detailed inventory reports.

Features
•	User Authentication: Secure login and registration system
•	Inventory Management: Add, update, and delete stock items
•	Stock In/Out Tracking: Record and monitor incoming and outgoing stock
•	Category Management: Organize inventory by categories for better insights
•	Reports & Analytics: Generate reports on stock levels, movements, and summaries
•	Responsive Design: Fully functional across desktop, tablet, and mobile devices

Technology Stack
•	Backend: Laravel 10.x
•	Frontend: Blade Templates, Bootstrap CSS
•	Database: MySQL
•	Authentication: Laravel Breeze
•	Icons: Font Awesome

Installation Instructions
Prerequisites
•	PHP 8.1 or higher
•	Composer
•	MySQL 5.7 or higher
•	Node.js and NPM
Setup Steps
1.	Clone the repository: git clone https://github.com/CynthiaGihozo12345/Inventory-Management-System 
cd Inventory-Management-System 
2.	Install PHP dependencies
: composer install
3.	Install JavaScript dependencies
    : npm install
4.	Create environment file
cp .env.example .env
5.	Generate application key
php artisan key: generate
6.	Configure database
Open .env and update:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventorys
DB_USERNAME=root
DB_PASSWORD=
7.	Run migrations
php artisan migrate
8.	Compile assets
npm run dev
9.	Start the development server
php artisan serve
10.	Access the application
Open your browser and go to: http://localhost:8000.

Usage
1.	Register a new account or log in
2.	Add inventory items and categorize them
3.	Record stock-in (new stock arriving) and stock-out (stock being used or sold)
4.	View reports to monitor stock status and performance
5.	Manage account settings and preferences

Project Structure
•	app/Http/Controllers: Handles application logic
•	app/Models: Contains Eloquent models
•	database/migrations: Database schema definitions
•	Resources/views: Blade templates for UI
•	Routes: Web and API routes

License
This project is licensed under the MIT License – see the LICENSE file for details.


