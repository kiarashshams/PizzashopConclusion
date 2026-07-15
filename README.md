# 🍕 Pizza Shop

A secure Pizza Shop web application developed with **PHP**, **MySQL**, **Bootstrap 5**, and **XAMPP** for the Web Programming & Security course.

---

## 📌 Features

### 👤 User Features

- User Registration
- Secure Login
- Logout
- Profile Page
- Edit Profile
- Change Password
- Password Strength Meter
- Google Authenticator (2FA)
- Order History
- Shopping Cart
- Checkout System

---

### 🍕 Product Features

- Browse Pizza & Drinks
- Product Search
- Add to Cart
- Quantity Management
- Remove Items
- Maximum Order Limits
  - 30 Pizzas
  - 40 Drinks
- Out of Stock Products

---

### 📦 Checkout

- Delivery Address
- Phone Number
- Order Notes
- Order Confirmation
- Order History

---

### 🔐 Security Features

- Password Hashing
- Prepared Statements
- SQL Injection Protection
- XSS Protection
- CSRF Protection
- Google reCAPTCHA v3
- Session Regeneration
- Login Rate Limiting
- Account Lock after Failed Attempts
- Google Authenticator Two-Factor Authentication

---

### 👨‍💼 Admin Panel

- Admin Dashboard
- View Users
- View Orders
- View Order Details
- Product Management
- Add Product
- Edit Product
- Delete Product
- Toggle Product Availability (In Stock / Out of Stock)
- Product Search

---

## 🛠 Technologies

- PHP 8
- MySQL
- Bootstrap 5
- HTML5
- CSS3
- JavaScript
- Google reCAPTCHA v3
- Google Authenticator (PragmaRX Google2FA)

---

## 📂 Project Structure

```
Pizzashop/
│
├── assets/
├── includes/
├── vendor/
│
├── index.php
├── menu.php
├── cart.php
├── checkout.php
├── profile.php
├── edit_profile.php
├── change_password.php
├── my_orders.php
│
├── login.php
├── register.php
├── logout.php
│
├── admin_dashboard.php
├── admin_products.php
├── admin_orders.php
├── admin_users.php
│
├── add_product.php
├── edit_product.php
├── delete_product.php
├── toggle_stock.php
│
├── enable_2fa.php
├── disable_2fa.php
├── verify_2fa.php
├── verify_password_2fa.php
│
├── csrf.php
├── security.php
├── recaptcha.php
└── config.php
```

---

## 🚀 Installation

1. Clone the repository.

```bash
git clone https://github.com/yourusername/Pizzashop.git
```

2. Import the SQL database into MySQL.

3. Configure `config.php`.

4. Install dependencies.

```bash
composer install
```

5. Start Apache and MySQL using XAMPP.

6. Open:

```
http://localhost/Pizzashop
```

---

## 🔑 Default Admin

Create a normal user and set the following field manually in the database:

```
is_admin = 1
```

---

## 📷 Screenshots

- Home
- Menu
- Shopping Cart
- Checkout
- User Profile
- Admin Dashboard
- Product Management
- Orders Management

---

## 👨‍💻 Author

Mohammad Hossein Shams Yousefi

University of Messina

Web Programming & Security Project


about the project:
Introduction
This project presents the development of a Pizza Shop web application using PHP, MySQL, Bootstrap and XAMPP. The main objective was to build a functional e-commerce style website where users can browse pizzas, register, log in, manage a shopping cart and complete orders. The project also focuses on implementing practical web security techniques and clean database design.
This project presents the development of a Pizza Shop web application using PHP, MySQL, Bootstrap and XAMPP. The main objective was to build a functional e-commerce style website where users can browse pizzas, register, log in, manage a shopping cart and complete orders. The project also focuses on implementing practical web security techniques and clean database design.
Project Objectives
The objectives were to create a responsive website, implement user authentication, develop a shopping cart with quantity management, store orders in a relational database, and improve security using modern web development practices.
The objectives were to create a responsive website, implement user authentication, develop a shopping cart with quantity management, store orders in a relational database, and improve security using modern web development practices.
Technologies Used
The application was developed with PHP for server-side programming, MySQL for database management, Bootstrap for responsive user interface design, HTML, CSS and JavaScript for the frontend, and XAMPP as the local development environment. Git and GitHub were used for version control.
The application was developed with PHP for server-side programming, MySQL for database management, Bootstrap for responsive user interface design, HTML, CSS and JavaScript for the frontend, and XAMPP as the local development environment. Git and GitHub were used for version control.
System Features
The homepage provides navigation to the menu, shopping cart and user account. Users can register, log in, browse pizzas, add products to the cart, increase or decrease quantities, remove products, complete checkout and review previous orders in their personal profile.
The homepage provides navigation to the menu, shopping cart and user account. Users can register, log in, browse pizzas, add products to the cart, increase or decrease quantities, remove products, complete checkout and review previous orders in their personal profile.
The homepage provides navigation to the menu, shopping cart and user account. Users can register, log in, browse pizzas, add products to the cart, increase or decrease quantities, remove products, complete checkout and review previous orders in their personal profile.
Database Design
The database contains separate tables for users, pizzas, orders and order_items. Relationships between tables ensure that each order belongs to a user while each order item references a pizza. This structure minimizes redundancy and supports future expansion.
The database contains separate tables for users, pizzas, orders and order_items. Relationships between tables ensure that each order belongs to a user while each order item references a pizza. This structure minimizes redundancy and supports future expansion.
Security Implementation
Several security mechanisms were implemented. Passwords are stored using password_hash() and verified with password_verify(). Prepared statements reduce SQL Injection risks. User output is escaped to reduce Cross-Site Scripting (XSS). CSRF tokens were added to important forms. Google reCAPTCHA v3 helps prevent automated registrations. Session regeneration after successful login reduces the risk of session fixation attacks. Input validation was also applied where appropriate.
Several security mechanisms were implemented. Passwords are stored using password_hash() and verified with password_verify(). Prepared statements reduce SQL Injection risks. User output is escaped to reduce Cross-Site Scripting (XSS). CSRF tokens were added to important forms. Google reCAPTCHA v3 helps prevent automated registrations. Session regeneration after successful login reduces the risk of session fixation attacks. Input validation was also applied where appropriate.
Several security mechanisms were implemented. Passwords are stored using password_hash() and verified with password_verify(). Prepared statements reduce SQL Injection risks. User output is escaped to reduce Cross-Site Scripting (XSS). CSRF tokens were added to important forms. Google reCAPTCHA v3 helps prevent automated registrations. Session regeneration after successful login reduces the risk of session fixation attacks. Input validation was also applied where appropriate.
Testing
The application was tested by creating user accounts, logging in with valid and invalid credentials, adding products to the shopping cart, updating quantities, removing products and completing orders. Security mechanisms such as authentication and validation were also verified.
The application was tested by creating user accounts, logging in with valid and invalid credentials, adding products to the shopping cart, updating quantities, removing products and completing orders. Security mechanisms such as authentication and validation were also verified.
The application was tested by creating user accounts, logging in with valid and invalid credentials, adding products to the shopping cart, updating quantities, removing products and completing orders. Security mechanisms such as authentication and validation were also verified.
Challenges
During development several challenges were encountered, including session management, shopping cart synchronization, database relationships and implementing security features. GitHub was used to manage project versions and simplify collaboration.
During development several challenges were encountered, including session management, shopping cart synchronization, database relationships and implementing security features. GitHub was used to manage project versions and simplify collaboration.
Future Improvements
Future work may include an administration panel, payment gateway integration, email notifications, advanced search and filtering, product reviews, order tracking, two-factor authentication and deployment to a public web server.
Future work may include an administration panel, payment gateway integration, email notifications, advanced search and filtering, product reviews, order tracking, two-factor authentication and deployment to a public web server.
Conclusion
The Pizza Shop project successfully demonstrates the development of a dynamic web application using PHP and MySQL. It combines practical web programming concepts with database management and essential security practices. The project provided valuable experience in backend development, user authentication, session handling, database design and secure coding.
The Pizza Shop project successfully demonstrates the development of a dynamic web application using PHP and MySQL. It combines practical web programming concepts with database management and essential security practices. The project provided valuable experience in backend development, user authentication, session handling, database design and secure coding.
