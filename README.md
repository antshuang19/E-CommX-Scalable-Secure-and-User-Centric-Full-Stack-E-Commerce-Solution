# E-CommX: Scalable, Secure, and User-Centric Full-Stack E-Commerce Solution

## Abstract

This project presents the design and implementation of a **full-stack E-commerce web application** that demonstrates the integration of **PHP**, **JavaScript**, and **JSON data management** for developing scalable, secure, and user-friendly online retail solutions. The project employs modern web development principles, including modular architecture, secure data handling, and responsive user interfaces, to create an e-commerce platform capable of managing products, user authentication, shopping carts, and orders, all with file-based persistence using JSON.

The application’s key features include a dynamic **product catalog**, an interactive **shopping cart** system, a **secure checkout** process, and an **admin interface** for product and order management. The thesis evaluates the technical challenges of building a full-stack application with JSON as the primary data storage medium, comparing it to traditional relational database management systems (RDBMS) in terms of scalability, performance, and maintainability.

## Project Overview

The project explores the full-stack development lifecycle, from frontend design and backend logic to deployment strategies. Using PHP as the server-side scripting language and JavaScript (ES6+) for dynamic frontend interactions, the application is designed to be both **modular** and **scalable**, facilitating the integration of new features, such as a payment gateway, real-time order tracking, and support for additional product categories.

The platform serves as an effective case study in balancing performance, security, and ease of development for small to medium-sized E-commerce businesses. The implementation emphasizes ease of use and modular design, with future considerations for adopting containerization technologies like Docker for cross-platform deployment, and using cloud services like AWS or Heroku for hosting and scaling the application.

## Key Objectives
- **Modular Full-Stack Architecture**: Design a flexible, modular full-stack architecture that allows for independent scaling of the frontend and backend.
- **Secure and Efficient User Authentication**: Implement strong authentication mechanisms, including password hashing, token-based sessions, and prevention of common web application vulnerabilities.
- **Interactive and Dynamic Frontend**: Utilize modern JavaScript techniques to create a responsive, user-friendly frontend with asynchronous interactions (AJAX).
- **Robust Product Catalog and Cart System**: Design a dynamic product catalog that allows for real-time filtering and sorting, alongside a shopping cart system with persistence through PHP sessions.
- **Scalable Data Management**: Implement data storage using JSON files, with considerations for transitioning to a more robust DBMS (e.g., MySQL, MongoDB) in larger systems.
- **Order Management Interface**: Develop an administrative interface to manage products and process customer orders effectively.

## Technologies Used
- **Frontend**:
  - **HTML5** for semantic markup.
  - **CSS3 (SASS)** for modular, scalable styling.
  - **JavaScript (ES6+)** for dynamic content, including product filtering, shopping cart management, and order processing.
  - **jQuery** for simplifying DOM manipulation and AJAX requests.

- **Backend**:
  - **PHP** for server-side logic, including form processing, data management, and routing.
  - **JSON** for lightweight, file-based storage of product and order data (with consideration for future database scaling).
  - **Session Management**: PHP session handling for cart persistence and user authentication.

## System Architecture

The architecture of the application follows the **Model-View-Controller (MVC)** design pattern, allowing for clean separation of concerns and easy maintenance.

### 1. **Model**:
   - Data for products and orders are managed using JSON files (`products.json`, `orders.json`). For future scalability, the system can be extended to use relational or NoSQL databases such as MySQL or MongoDB.
   - Each product is represented by a structured JSON object containing essential details such as name, price, category, description, and stock quantity.
   - Orders are stored with user details and ordered items in JSON format, providing a simple but effective way to manage customer transactions.

### 2. **View**:
   - The frontend is built with **HTML5** and **CSS3** (SASS), ensuring a responsive layout and an engaging user experience. The product catalog, cart system, and checkout pages are designed for easy navigation.
   - JavaScript (ES6) dynamically updates the content of the pages, ensuring an interactive experience without the need for full-page reloads.
   - The cart system uses JavaScript to update item quantities, calculate totals, and provide real-time feedback.

### 3. **Controller**:
   - PHP is used for handling backend requests such as adding products to the cart, processing orders, and handling user authentication.
   - The PHP controller routes requests and serves dynamic content by reading from and writing to the JSON files.
   - Security features, such as session management and form validation, are implemented at the controller level to protect against unauthorized access and common security threats.

## Core Features and Functionalities

### 1. **User Authentication and Authorization**:
   - **Session-based Login**: Users can register, log in, and access their shopping cart.
   - **Password Management**: Passwords are securely hashed using the **bcrypt** algorithm before being stored.
   - **CSRF Protection**: Each form is protected against CSRF attacks by embedding a unique token that is validated before the form submission is processed.

### 2. **Dynamic Product Catalog**:
   - **Product Filtering**: Users can filter products by category, price range, or brand using AJAX, which updates the page dynamically without requiring a reload.
   - **Product Sorting**: Users can sort products based on price, name, or popularity.
   - **Product Detail Page**: Each product has its own page that displays detailed information, including product images, descriptions, and an "Add to Cart" button.

### 3. **Shopping Cart System**:
   - **Cart Persistence**: Items in the cart are stored in PHP sessions and persist across page reloads.
   - **Cart Modification**: Users can add, remove, or modify the quantity of items in their cart.
   - **Price Calculation**: The total price of items in the cart is updated dynamically as items are added or removed.

### 4. **Checkout and Order Management**:
   - **Order Review**: Before placing an order, users can review their cart, including item names, quantities, and the total price.
   - **Order Submission**: Orders are stored in the `orders.json` file, where admins can later view them.
   - **Admin Panel**: An admin panel allows authorized users to view and manage orders, update product inventories, and process customer transactions.

## Installation Instructions

### Prerequisites:
- **PHP 7.4+** for backend scripting.
- **Node.js and npm** (for future JavaScript modules if added).

### 1. Clone the Repository:
```bash
git clone https://github.com/your-username/ecommerce-web-app.git
cd ecommerce-web-app](https://github.com/antshuang19/E-CommX-Scalable-Secure-and-User-Centric-Full-Stack-E-Commerce-Solution.git)
