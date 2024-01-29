<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $con=mysqli_connect("localhost","root","","test");
        $usernameEmail=$_POST['usernameEmail'];
        $password=$_POST['password'];
        $sql1="select * from registration where email='$usernameEmail' and password='$password'";
        $sql2="select * from registration where username='$usernameEmail' and password='$password'";
        $count1=mysqli_num_rows(mysqli_query($con,$sql1));
        $count2=mysqli_num_rows(mysqli_query($con,$sql2));
        echo($count1." ".$count2 );
        if($count1>0)
        {
            $row=mysqli_fetch_array(mysqli_query($con,$sql1));
            $email=$row['email'];
            $targetURL = "homepage.php?email=" . urlencode($email);
            echo "<script>window.location.href='$targetURL';</script>";
            
        }
        else if($count2>0)
        {
            $row=mysqli_fetch_array(mysqli_query($con,$sql2));
            $email=$row['email'];
            $targetURL = "homepage.php?email=" . urlencode($email);
            echo "<script>window.location.href='$targetURL';</script>";

        }
        else
        {  
            echo("
            <script>
            window.alert('Account Doesnt Exist, Please Signup ');
            window.location.href='signup.php';
            </script>
            ");  
            
        }

    }
    ?>
<form action='' method='post'>
    <input type='text' name='usernameEmail' placeholder='Enter Username or Email'><br>
    <input type='password' name='password' placeholder='Enter Password'><br>
    <button type='submit' name='submit'>Login</button>
    </form>
</body>
</html>