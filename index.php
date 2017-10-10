
<?php require 'inc/head.php';


?>
<?php
if (empty($_SESSION['user'])) :
    ?>
    <div class="container" style="margin-top:40px">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Sign in to continue</strong>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="#"  method="POST">
                            <fieldset>
                                <div class="row">
                                    <div class="center-block">
                                        <img class="profile-img"
                                             src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                        <div class="form-group">
                                            <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-user"></i>
                    </span>
                                                <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="panel-footer ">
                        Don't have an account ? <a href="#" onClick="">Too bad !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif;
?>

<?php
if (!empty($_SESSION['user'])) :
?>
<section class="cookies container-fluid">
  <div class="row">


     <?php foreach ($arrayCookies as $key =>$cookie): ?>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
          <img src="<?php echo $cookie['img']; ?>" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3><?php echo $cookie['name']; ?></h3>
          <p><?php echo $cookie['cooker']; ?></p>
          <a  href="?add_to_cart=<?php echo $key; ?>" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
         <?php endforeach; ?>
  </div>
</section>
<?php endif;
?>


<?php require 'inc/foot.php'; ?>
