# Task 1 ( User Registration System )

This project is a simple user registration system with a PHP backend. Users can sign up, log in, and view their profile page.

## Project Overview--User Registration System 
- **User Registration Page:** `signup.php` allows users to sign up with a username, email, and password.
- **Login Page:** `login.php` handles user authentication and redirects to `homepage.php` upon successful login.
- **Homepage:** `homepage.php` displays the user's username and registration date.
- **Styling:** The project includes a `style.css` file for basic styling.

## Files
- `index.php`: Entry point for the application, provides links to login and signup pages.
- `login.php`: Handles user login, includes server-side validation.
- `signup.php`: Handles user registration, includes server-side validation.
- `homepage.php`: Displays the user's profile information (Name and date).
- `style.css`: Basic styling for the HTML pages.

## Setup and Usage
1. **Database Configuration:**
   - Set up a MySQL database. Update the database connection details in `login.php` and `signup.php`.
   - Import the provided SQL script (`database.sql`) to create the necessary table.

2. **Web Server:**
   - Place the project files in the root directory of your web server.

3. **Accessing the Application:**
   - Open a web browser and navigate to the project's root directory.
   - Use `index.php` to navigate to the login and signup pages.

4. **Testing:**
   - Sign up with a new account on `signup.php`.
   - Log in with the created account on `login.php`.
   - View your profile on `homepage.php`.


