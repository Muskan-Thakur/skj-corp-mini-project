# Task 1 ( User Registration System )

This Task is a simple user registration system with a PHP backend. Users can sign up, log in, and view their profile page.

## Files:

1. **index.php**: Main entry point. Displays buttons to choose between login or sign up.

2. **signup.php**: Sign-up page with a form containing fields for username, email, and password. Server-side validation is implemented to ensure data integrity. The validation rules are:
    - Username cannot contain symbols.
    - Email should be in a valid format.
    - Password must have at least one capital letter, one lowercase letter, one number, and a minimum length of 8 characters.

3. **login.php**: Login page that compares the provided username/email and password with the records in the database. Successful login redirects to `homepage.php`. Displays error messages using JavaScript alert if the login fails.

4. **homepage.php**: User's profile page displaying their username and registration date.

5. **style.css**: Styling file for consistent and appealing UI.

## Setup and Usage
1. **Database Configuration:**
   - Set up a MySQL database. Update the database connection details in `login.php` and `signup.php`.
   - Import the provided SQL script (`database.sql`) to create the necessary table.

2. **Web Server:**
   - Place the project files in the root directory of your web server.

3. **Accessing the Application:**
   - Open a web browser  got localhost address and navigate to the project's root directory.
   - Use `index.php` to navigate to the login and signup pages.

4. **Testing:**
   - Sign up with a new account on `signup.php`.
   - Log in with the created account on `login.php`.
   - View your profile on `homepage.php`.
  

     # Task 2(Blog Posting System (Using Laravel) )
  
How i completed this task, step by step : 

1. **Install Composer:**
   - Download the Composer installer from [https://getcomposer.org/Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe).
   - Run the installer and follow the on-screen instructions to complete the installation.

2. **Reboot System:**
   - After the installation, it's a good practice to reboot your system to ensure that Composer is available in the system's PATH.

3. **Open Terminal in Visual Studio Code:**
   - Open Visual Studio Code.
   - Press `Ctrl` + `` to open the integrated terminal.

4. **Create a New Laravel Project:**
   ```bash
   composer create-project --prefer-dist laravel/laravel blog
   cd blog
   ```

5. **Generate a Model and Migration:**
   ```bash
   php artisan make:model BlogPost -m
   ```
   - Write code in "//app/Models/BlogPost.php".
   - Write code in "//database/migrations/xxxx_xx_xx_create_blog_posts_table.php".
   ```bash
   php artisan migrate
   ```

6. **Generate a Controller:**
   ```bash
   php artisan make:controller BlogPostController
   ```
   - Write code in "//app/Http/Controllers/BlogPostController.php".

7. **Create Blade Views:**
   - Create the following files and write code in them:
     - "//resources/views/index.blade.php"
     - "//resources/views/create.blade.php"
     - "//resources/views/starting_page.blade.php"

8. **Define Routes:**
   - Write code in "//routes/web.php".

9. **Create Stylesheet:**
   - Create "//public/css/style.css" and add your CSS styles.

10. **Run Laravel Development Server:**
    ```bash
    php artisan serve
    ```
    - Open your web browser and go to [http://localhost:8000](http://localhost:8000) to see your Laravel application.



**To Run the Code directly after copying laravel files :**  


1.Open Integrated Terminal in blog Directory, then enter the following commands


2.```bash
    php artisan migrate
    ```
    
3.```bash
    php artisan serve
    ```



# Task 3( Interactive JavaScript Form )

This project is a simple interactive JavaScript form that allows users to input two numbers, calculates the sum dynamically without refreshing the page, and implements client-side validation.


## Project Overview
- **Form Page:** `index.php` contains a form with input fields for two numbers.
- **JavaScript Functionality:** The form utilizes JavaScript to dynamically calculate and display the sum without refreshing.
- **Client-Side Validation:** Validates user input to ensure only numeric values are accepted.
- **Styling:** The project includes a `style.css` file for basic styling.

## Files
- `index.php`: Webpage with the interactive form and JavaScript functionality.
- `style.css`: CSS file for styling the form.

## Setup and Usage
1. **Web Server:**
   - Place the project files in the root directory of your web server.

2. **Accessing the Application:**
   - Open a web browser and navigate to the project's root directory.
   - Open `index.php` in the browser to view the interactive form.

3. **Using the Form:**
   - Input two numeric values into the form fields.
   - Click the "Calculate Sum" button to see the dynamic result.
   - Client-side validation will ensure that only numeric values are accepted.
   - Webpage will not refresh with button click 


# Task 4( SQL Database Interaction) :

**How i completed this task, step by step : **

1. **Install Composer:**
   - Download the Composer installer from [https://getcomposer.org/Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe).
   - Run the installer and follow the on-screen instructions to complete the installation.

2. **Reboot System:**
   - After the installation, reboot your system to ensure that Composer is available in the system's PATH.

3. **Open Terminal in Visual Studio Code:**
   - Open Visual Studio Code.
   - Press `Ctrl` + `` to open the integrated terminal.

4. **Create a New Laravel Project:**
   ```bash
   composer create-project --prefer-dist laravel/laravel blog
   cd blog
   ```

5. **Generate Models and Migrations:**
   ```bash
   php artisan make:model BlogPost -m
   php artisan make:model Comment -m
   ```
   - Write code in "//app/Models/BlogPost.php".
   - Write code in "//app/Models/Comment.php".
   - Write code in "//database/migrations/xxxx_xx_xx_create_blog_posts_table.php".
   - Write code in "//database/migrations/xxxx_xx_xx_create_comments_table.php".
   ```bash
   php artisan migrate
   ```

6. **Generate Controllers:**
   ```bash
   php artisan make:controller BlogPostController
   php artisan make:controller CommentController
   ```
   - Write code in "//app/Http/Controllers/BlogPostController.php".
   - Write code in "//app/Http/Controllers/CommentController.php".

7. **Create Blade Views:**
   - Create the following files and write code in them:
     - "//resources/views/starting_page.blade.php"
     - "//resources/views/index.blade.php"
     - "//resources/views/create.blade.php"

8. **Define Routes:**
   - Write code in "//routes/web.php".

9. **Create Stylesheet:**
   - Create "//public/css/style.css" and add your CSS styles.

10. **Run Laravel Development Server:**
    ```bash
    php artisan serve
    ```
    - Open your web browser and go to [http://localhost:8000](http://localhost:8000) to see your Laravel application.


**To Run the Code directly after copying laravel files :**  



1.Open Integrated Terminal in blog Directory, then enter the following commands

2.```bash
    php artisan migrate
    ```
    
3.```bash
    php artisan serve
    ```






