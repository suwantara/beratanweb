# Dairy Web


## About Dairy Web

Dairy Web is a web application built with Laravel that helps manage dairy-related business operations. Our platform provides essential features including:

- User Authentication & Authorization
- Contact Form Management
- Modern Dashboard Interface
- Responsive Design
- Message Management System

## Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/MariaDB
- Laravel 11.x

## Installation

1. Clone the repository:
```bash
git clone https://github.com/suwantara/dairyweb.git
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install NPM packages:
```bash
npm install
```

4. Copy environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dairyweb
DB_USERNAME=username
DB_PASSWORD=
```

7. Run database migrations:
```bash
php artisan migrate
```

8. Build assets:
```bash
npm run dev
```

## Features

- **User Management**
  - Authentication
  - Profile Management
  - Password Reset

- **Message System**
  - Contact Form
  - Message Management
  - Read/Unread Status
  - Message Preview

- **Dashboard**
  - Message Overview
  - User Statistics
  - Activity Logs

## Usage

1. Register a new account or login with existing credentials
2. Access the dashboard to manage messages
3. Use the contact form to send messages
4. Manage user profile and settings

## Contributing

If you'd like to contribute to this project, please:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/improvement`)
3. Make your changes
4. Commit your changes (`git commit -am 'Add new feature'`)
5. Push to the branch (`git push origin feature/improvement`)
6. Create a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## Credits

- [Your Name](https://github.com/suwantara)
- [Laravel Framework](https://laravel.com)
- [Bootstrap](https://getbootstrap.com)

## Contact

If you have any questions, feel free to reach out:
- Email: your.email@example.com
- Website: [www.yourwebsite.com](http://www.yourwebsite.com)
