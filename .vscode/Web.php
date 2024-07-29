<?php 
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername, $username, $password);
if(!$conn)
{
    die("connection failed: ". mysqli_connect_error($conn));
}
mysqli_select_db($conn,"info");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['username'];
    $Age = $_POST['password'];
    $DOB = $_POST['password'];
    $A = $_POST['password'];

    $sql = "INSERT INTO users(username, password)VALUES ('$username' , '$password')";
    if($conn->query($sql)==TRUE)
    {
        echo "New record created successfully";
    }else{
        echo "Error: " .$sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sign up form</title>
</head>
<body>
    <h2>Signup form</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="sign up">
    </form>
</body>
</html>