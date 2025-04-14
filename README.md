# Laravel User Management System

This project is a modular **User Management System** built with Laravel, designed with a clean and scalable architecture. It follows industry-standard design patterns like:

- DAO (Data Access Object) – Handles all direct database interactions
- BO (Business Object) – Manages business logic and data processing
- Service Layer – Acts as a bridge between your logic and controllers
- Controllers – Handle incoming requests and send responses
- Request Validation – Ensures user input is clean and valid
- Caching – Boosts performance by reducing repeated database calls  

## Folder Structure
```
app/
├── DAOs/
   |── UserDAO.php
├── BOs/
   |── UserBO.php
├── Services/
   |── UserService.php
├── Http/
    ├── Controllers/
       |── UserController.php
    |── Requests/
       |── UserRequest.php

database/
|── migrations/
    |── 2024_01_01_000000_create_users_table.php

routes/
|── api.php
```

## Setup Instructions

1. **Clone the repository (or extract the zip)**:
   ```bash
   unzip UserManagementSystem.zip
   cd UserManagementSystem
   ```

2. **Install dependencies**:
   ```bash
   composer install
   ```

3. **Set up environment**:
   Copy `.env.example` to `.env` and configure your database and cache.

4. **Run migrations**:
   ```bash
   php artisan migrate
   ```

5. **Serve the app**:
   ```bash
   php artisan serve
   ```

6. **Test the API**:
   You can test the API using tools like Postman or Curl with these routes:

   - **GET /api/users**: List all users  
   - **GET /api/users/{id}**: Get details of a specific user by ID  
   - **POST /api/users**: Create a new user  
   - **PUT /api/users/{id}**: Update an existing user by ID 

    

## Validations
- Name: Required
- Email: Required, must be unique and valid 
- Password: Required for creation, optional for updates (minimum 6 characters)  

## Features
- Clean layered architecture
- Password encryption
- Caching for improved performance
- Modular and scalable

## CREATED BY AADYA PARASAR (DEVELOPER)
