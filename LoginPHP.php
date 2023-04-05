<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
            Username: <input type="text" name="Username"><br><br>
            Password: <input type="text" name="Password"><br><br>
            <input type="submit" name="login" value="Log in">
            <input type="reset" name="cancel" value="Cancel">
        </form>
    <?php
        $connect=mysqli_connect("localhost","root","","shkolladdigjitale");
            mysqli_select_db($connect,"shkolladdigjitale");

            if(isset($_POST['login']))
            {
                $username=$_POST['Username'];
                $password =$_POST['Password'];

                $login = "SELECT * FROM studentat WHERE Emri ='$username' AND Mbiemri = '$password'";

                $query=mysqli_query($connect,$login);
                if(mysqli_num_rows($query)>0){
                    echo "<script>alert('Welcome!');</script>";
                }
                else if (empty($username)|| empty($password)){
                    echo "<script>alert('Username ose Password jane te zbrazta!');</script>";
                }
                else{
                    echo"<script>alert('Username ose Password jane gabim!')</script>";
                }
            }
    
    
    ?>
</body>
</html>