
<?php  
require 'config/config.php';


if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");  // if session is set then userLoggedIn is equals to $_SESSION['username']
	$user = mysqli_fetch_array($user_details_query);
}
//else {
	//header("Location: register.php"); //if its not set then sends it back to register page0
//}

?>


<html>
    <head>
        <title>FFN'S Social</title>

         <!-- Javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>  <!-- Jquery-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/604ed8ea4b.js" crossorigin="anonymous"></script> <!-- fontawesome-->

         <!-- CSS-->
        <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css-->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    </head>
    <body>

    <div class="top_bar">
      <div class="logo">
        <a href="index.php">TalkSphere</a>  <!-- if I want images then use img instead of a and link of the image-->
      </div>
      
      <nav>
        <a href="index.php"><i class="fa-solid fa-house-user"></i></i></a> <!-- home-->
        <a href="#"><i class="fa-solid fa-inbox"></i></a> <!-- messages/inbox/chat-->
        <a href="#"><i class="fa-solid fa-gear"></i></a> <!-- settings-->
        <a href="#"><i class="fa-regular fa-bell"></i></a> <!-- notifications-->
        <a href="#"><i class="fa-solid fa-users"></i></a> <!-- friend request / users-->


      
      </nav>

    </div>



