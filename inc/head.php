<?php
session_start();


if (isset($_POST['loginname']) AND !empty($_POST['loginname'])){
    $_SESSION['user'] = $_POST['loginname'];
    header('Location: index.php');
    exit();
}


if (isset($_GET['add_to_cart'])) {
    if (isset($_COOKIE['card'])) {
        $counter = $_COOKIE['card'][$_GET['add_to_cart']];
    } else {
        $counter = 0;
    }
    setcookie("card[" . $_GET['add_to_cart'] . "]", $counter+1);
    header('Location: index.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}
$arrayCookies = [
    46 => [
        "img" => "assets/img/product-46.jpeg",
        "name" => "Pecan nuts",
        "cooker" => "Penny"
    ],
    36 => [
        "img" => "assets/img/product-36.jpeg",
        "name" => "Chocolate chips",
        "cooker" => "Bernadette"
    ],
    32 => [
        "img" => "assets/img/product-32.jpeg",
        "name" => "M&M's&copy; cookies",
        "cooker" => "Penny"
    ],
    58 => [
        "img" => "assets/img/product-58.jpeg",
        "name" => "Chocolate cookie",
        "cooker" => "Bernadette"
    ]
];



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>
  <title>The Cookie Factory</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/styles.css" />
<body>
  <header>
    <!-- MENU ENTETE -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" >
          <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
          <h1>The Cookies Factory</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Chocolates chips</a></li>
          <li><a href="#">Nuts</a></li>
          <li><a href="#">Gluten full</a></li>
          <li>
            <a href="./cart.php" class="btn btn-warning navbar-btn">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
              Cart
            </a>
          </li>
            <li>
            <?php
            if (!empty($_SESSION['user'])) :
            ?>
            <a href="?logout" class="btn btn-warning navbar-btn">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                Logout
            </a>
               <?php endif;
                ?>
            </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container-fluid text-right">
    <strong>Hello <?php echo $_SESSION['user'] ?>  !</strong>
  </div>
</header>
