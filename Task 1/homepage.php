<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
    if(isset($_GET['email']))
    {
        $email = $_GET['email'] ;
        $con=mysqli_connect("localhost","root","","test");
        $sql="select * from registration where email='$email'";
        $count=mysqli_num_rows(mysqli_query($con,$sql));
        if($count>0)
        {
            $row=mysqli_fetch_array(mysqli_query($con,$sql));
            $registerDate=$row['registerDate'];
            $username=$row['username'];
        }
        ?>
        <div class="container">
            <h2>Username: <?php echo $username; ?></h2>
            <p>REGISTRATION DATE: <?php echo $registerDate; ?></p>
        </div>
        <?php
    }
    ?>
</body>
</html>