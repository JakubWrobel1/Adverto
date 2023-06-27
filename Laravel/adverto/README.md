<p align="center"><img src="{{ asset('img/images/icons/logo.png') }}" width="400" alt="Laravel Logo"></a></p>


# Adverto Project - README

This Adverto project is a web application based on the Laravel framework. It allows users to add, browse, and search classified ads in various categories.

## Project Features

- User registration and login
- Adding, editing, and deleting classified ads
- Browsing classified ads in different categories
- Searching for classified ads
- User roles and permissions (administrator, user)
- Messaging system between users
- Management of ad categories

## System Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Composer
- Node.js

## Installation

1. Clone the repository to your local environment:

git clone https://github.com/your-username/online-classifieds-project.git

2. Navigate to the project directory:

cd online-classifieds-project

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

- To configure the SMS notification service, set the SMS provider details in the .env file:

SMS_PROVIDER=twilio
TWILIO_SID=your-twilio-sid
TWILIO_TOKEN=your-twilio-token
TWILIO_PHONE_NUMBER=your-twilio-phone-number

## Authors

This project was created by:

- Jan Kowalski <jan.kowalski@example.com>
- Anna Nowak <anna.nowak@example.com>

If you have any questions or feedback regarding the project, please contact us.