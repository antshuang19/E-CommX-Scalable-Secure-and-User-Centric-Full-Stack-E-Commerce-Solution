# E-commerce Web Application

## Project Overview

This project is a full-stack web application designed to demonstrate a robust and scalable E-commerce platform using **JavaScript**, **PHP**, and **JSON** files for data storage. It features user authentication, dynamic product catalog management, a shopping cart system, and an order management system.

### Problem Statement:
The primary goal of this project is to build a scalable, secure, and responsive E-commerce website that enables users to browse products, manage shopping carts, and simulate secure online transactions. Additionally, it provides an admin interface to manage product inventory and process orders.

### Core Features:
- **User Authentication**: Implement secure login and registration systems using PHP sessions and hashed passwords.
- **Product Catalog**: Display a dynamic list of products, filterable by category, price, etc.
- **Shopping Cart**: Allow users to add, update, and remove items from their cart, and calculate total order cost.
- **Checkout Process**: Simulate a checkout process with order review and submission (integrating JSON file-based persistence).
- **Order Management**: Admin interface to view and manage orders.
- **Security**: Implement basic input validation, password hashing, and secure form handling.

### Technologies:
- **Frontend**: HTML5, CSS3 (SASS), JavaScript (ES6+), jQuery
- **Backend**: PHP, JSON for data storage
- **Security**: HTTPS, Password Hashing with bcrypt, CSRF Tokens
- **Deployment**: Docker, Apache/Nginx, Heroku/AWS
- **Tools**: Git, Docker, Postman for API testing

---

## System Architecture

The system follows a **Model-View-Controller (MVC)** architecture pattern, ensuring a clean separation of concerns and ease of maintenance.

1. **Model**:
   - Data is managed using JSON files (`products.json`, `orders.json`). For larger applications, consider moving to a full-fledged database like MySQL or MongoDB.
   
2. **View**:
   - HTML, CSS, and JavaScript render the UI dynamically. React or Vue.js could be considered for future iterations for a more dynamic experience.

3. **Controller**:
   - PHP handles the routing, business logic, and processing of requests such as adding products to the cart, submitting orders, etc.
   - Session management is handled via PHP sessions, ensuring security and data persistence during the user's visit.

---

## Folder Structure

The project uses a modular folder structure to promote scalability and maintainability.

