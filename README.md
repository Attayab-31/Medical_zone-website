# Medical Zone Website

Welcome to the Medical Zone website repository. This project aims to provide a comprehensive platform for medical information, services, and user interaction. Below, you'll find detailed information about the project structure, features, database schema, setup instructions, and more.

## Features

- **User Authentication**: Secure registration and login system using PHP and MySQL.
- **Contact Form**: Allows users to submit inquiries and messages, stored in the database.
- **Specialized Sections**: Dedicated pages for various medical specialties like Cardiology, Dental Science, ENT, and more.
- **Responsive Design**: Utilizes Bootstrap 4 for a mobile-first, responsive layout.
- **Database Integration**: MySQL database (`medical_zone`) with tables for storing user registrations (`sign_up`) and contact form submissions (`contact_us`).

## Files Included

### HTML Files

- `index.html`: Home page of the Medical Zone website.
- `about-us.html`: Information about the Medical Zone project and team.
- `contact-us.html`: Contact form for user inquiries.
- `speech.html`, `cardiology.html`, `dental.html`, `ent.html`, `general.html`: Specialized pages for various medical specialties.
- `login.html`: User login form.
- `sign-up.html`: User registration form.

### CSS Files

- `style.css`: Custom CSS for styling the website.

### PHP Files

- `Connection contact.php`: PHP script for handling database connection and storing contact form submissions.
- `Connection Login.php`: PHP script for handling user login authentication.
- `Connection HomePage.php`: PHP script for handling database connection and storing User Sign-up form.

## Database Schema

### Database: `medical_zone`

#### Table: `contact_us`

- `name` VARCHAR(100): Name of the user submitting the form.
- `phone_no` VARCHAR(20): Phone number of the user.
- `email_id` VARCHAR(100): Email address of the user.
- `message` VARCHAR(500): Message or inquiry submitted by the user.

#### Table: `sign_up`

- `Email` VARCHAR(100): Email address of the user.
- `psw` VARCHAR(50): Encrypted password entered during registration.
- `psw_repeat` VARCHAR(50): Confirmation of the password entered during registration.

## Setup Instructions

1. **Database Setup**: //First watch xampp tutorial of 5 mins before doing this...
   - Create a MySQL database named `medical_zone` on Xampp local host.
   - Create the tables `contact_us` and `sign_up` with the above specified coloumns for each table.

2. **Web Server Setup**:
   - Place the repository files in your C:/Xampp/htdocs directory basically in htdocs folder present in Xampp folder.

3. **Database Configuration**:
   - Update database connection details (`$servername`, `$username`, `$password`, `$database`) in PHP files (`connection.php`, `login.php`) as per your local environment.

4. **Access**:
   - Access the website through your web server's URL (e.g., `http://localhost/index.html`).

## Contributing

Contributions are welcome! If you have suggestions or want to contribute to this project, please fork the repository and create a pull request. For major changes, please open an issue first to discuss what you would like to change.

## Acknowledgments

- Icons provided by Icons8 (https://icons8.com).
- Bootstrap framework for responsive design (https://getbootstrap.com).

## Author
Muhammad Attayab Ashraf
F2021065194@umt.edu.pk
03136237781
