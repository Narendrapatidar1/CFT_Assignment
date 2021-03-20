<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="jumbotron hero-spacer">
            <h1>Welcome!</h1>
            <p>User Name: <?php echo $_SESSION['name'];?></p>
            <p><a  href="logout.php" class="btn btn-primary btn-large">Logout </a>
            </p>
        </header>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php } ?>