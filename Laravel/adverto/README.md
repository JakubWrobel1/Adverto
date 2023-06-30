![logo_blue](https://github.com/zwolinskidominik/Adverto/assets/94808072/e36c3493-5665-41b6-9322-b2a8f30085c7)

# Adverto Project - README

This Adverto project is a web application based on the Laravel framework. It allows users to add, browse, and search classified ads in various categories.

## Project Features

- User registration and login
- Adding, editing, and deleting classified ads
- Browsing classified ads in different categories
- Searching for classified ads
- User roles and permissions (administrator, user)
- Management of ad categories

## System Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Composer
- Node.js

## Installation

1. Clone the repository to your local environment:

git clone https://github.com/zwolinskidominik/Adverto.git

2. Navigate to the project directory:

cd Adverto

3. Install PHP dependencies using Composer:

composer install

4. Copy the .env.example file and rename it to .env:

cp .env.example .env

5. Generate the application key:

php artisan key:generate

6. Set up the MySQL database connection in the .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

7. Run the database migration:

php artisan migrate

8. Build the assets using npm:

npm install
npm run dev

9. Start the development server:

php artisan serve

10. Open the application in your browser:

 ```
 http://localhost:8000
 ```

## Configuration

- To configure mail in the project, set the SMTP details in the .env file:

MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=your@example.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your@example.com
MAIL_FROM_NAME="${APP_NAME}"

- To configure the Google Sign Up and Google Places API service, set the provider details in the .env file:

GOOGLE_CLIENT_ID=YOUR_CLIENT_ID
GOOGLE_CLIENT_SECRET=YOUR_SECRET_CODE

GOOGLE_MAP_KEY=YOUR_MAP_KEY

## Authors

This project was created by:

- Dominik Zwoliński
- Jakub Wróbel

If you have any questions or feedback regarding the project, please contact us.