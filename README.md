# Laravel Web Application

This is a Laravel-based web application providing services like social media marketing, graphic design, and SEO, along with an admin panel for managing the site.

## Features
- **Dynamic Pages**: Home, About, Services, Portfolio, Contact, Testimonials, Blog, and more.
- **Admin Panel**: Manage site content, user accounts, and service inquiries.
- **Authentication**: Secure login system for admins.
- **Pre-built Sections**: Includes sections like "Our Success," "Why Choose Us," and "Our Clients."

## Installation

### Prerequisites
- PHP >= 8.0
- Composer
- MySQL
- Laravel CLI

### Steps
1. Clone the repository:
   git clone https://github.com/AbdullahAhmad-0/E-Social-Sphere.git
   cd E-Social-Sphere.git

2. Install dependencies:
   composer install

3. Set up environment variables:
   - Copy the `.env.example` file and rename it to `.env`.
   - Update the `.env` file with your database credentials.

4. Run migrations and seed data:
   Don't need to do it :-)
   If you accidentally do it then run: php artisan migrate:reset

5. Import sample data into the MySQL database:
   - Use the `esocialsphere.sql` file to populate the database.
   - Database name: `esocialsphere`
   - Execute the SQL file:
     mysql -u <username> -p <database_name> < esocialsphere.sql or simply import the esocialsphere.sql into your phpmyadmin or mysql database.

6. Start the development server:
   php artisan serve

## Admin Panel
Access the admin panel at: `http://<your-domain>/admin`.

### Credentials:
- **Username**: `admin@gmail.com`
- **Password**: `1234`

## Routes Overview

### Public Routes:
- `/` - Home page
- `/services` - List of services
- `/services/{id}` - Service details
- `/about` - About page
- `/contact` - Contact page (supports form submission)
- `/portfolio` - Portfolio page
- `/pricing` - Pricing page (not yet created)
- `/testimonials` - Testimonials page (supports adding and viewing messages)
- `/faq`, `/terms-and-conditions`, `/privacy-policy` - Informational pages

### Admin Routes:
- `/admin` - Admin dashboard
- `/admin/account` - Manage website and user details
- `/admin/contact` - View and manage contact inquiries
- `/admin/work` - View and manage work inquiries
- `/admin/review` - View and manage reviews

### Authentication Routes:
- `/login` - Admin login page
- `/logout` - Admin logout

## Page and Section Structure

### Pages and Their Sections:
- **Home**: Header, About, Our Success, Service, Why You Choose Us, Our Clients, Contact, Footer
- **About**: Header, About, Our Mission, Our Team, Work With Us, Why You Choose Us, Service, Our Clients, Contact, Footer
- **Services**: Header, Services, Footer
- **Portfolio**: Header, Portfolio, Footer
- **Testimonials**: Header, Message Add, Message Show, Footer
- **Work With Us**: Header, Work With Us Form, Footer
- **Contact Us**: Header, Contact Form, Footer
- **Privacy Policy**: Header, Information on Data Collection and Usage, Cookie Policy, User Rights and Data Security, Footer
- **Terms and Conditions**: Header, Terms and Conditions, Service Agreement, Payment and Refund Policy, Footer
- **Blog**: Complete blog site functionality

## License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## Contact
For inquiries or support, please contact via the [email](mailto:abdullah.devloper@gmail.com).