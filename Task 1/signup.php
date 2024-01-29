<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php  
    if(isset($_POST['submit'])){
        $con=mysqli_connect("localhost","root","","test");
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $flag=1;
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $flag=0;
            echo("
            <script>
            window.alert('Invalid Email Address');
            </script>
            ");  
        }
        $count=mysqli_num_rows(mysqli_query($con,"select * from registration where email='$email'"));
        if($count>0)
        {   
            $flag=0;
            echo("
            <script>
            window.alert('Use Different Email ,Another Account Associated with this email Exist');
            </script>
            ");  
        }
        if (!preg_match('/^[a-zA-Z0-9_]{1,20}$/', $username)) {
            $flag=0;
            echo("
            <script>
            window.alert('Invalid Username, Only Contain Alphanumeric and atmost 20 character long');
            </script>
            ");  
        }
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,25}$/', $password)) {
            $flag=0;
            echo("
            <script>
            window.alert('password should be at least 8 characters long and contain at least one uppercase, one lowercase, and one numeric character.');
            </script>
            ");  
        }
        if($flag==1)
        {   $registerDate=date("d-m-Y");
            $sql="insert into registration values ('$username','$email','$password','$registerDate')";
            if(mysqli_query($con,$sql))
            {
                echo("
                <script>
                window.alert('Registration Successful,You can login now');
                window.location.href='login.php';
                </script>
                ");  
            }        
        }
    }
    ?>
    <form action='' method='post'>
    <input type='text' name='username' placeholder='Enter Username'><br>
    <input type='text' name='email' placeholder='Enter Email'><br>
    <input type='password' name='password' placeholder='Enter Password'><br>
    <button type='submit' name='submit'>Sign up</button>
    </form>
</body>
</html>