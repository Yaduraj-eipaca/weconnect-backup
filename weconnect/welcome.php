<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<html>
<head>

    <title>
        Registration
    </title>
</head>

<body>
<h1>Welcome</h1><br>
<?php
echo $_SESSION['email'];
?>
<h3>You recently asked following doubts -</h3><br>

<h1><a href="logout.php">Logout here</a> </h1>


</body>

</html>

