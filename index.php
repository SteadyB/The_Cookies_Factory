<?php
session_start();
 if(!empty ($_GET)) {
     $cookieId = 'cookie' . $_GET["add_to_cart"];
     if (!key_exists($cookieId, $_SESSION)) {
         $_SESSION[$cookieId] = 0;
     }
     if (!key_exists('cookies', $_SESSION)) {
         $_SESSION['cookies'] = 0;
     }
     $_SESSION[$cookieId] = $_SESSION[$cookieId] + 1;
     $_SESSION['cookies'] = $_SESSION['cookies'] + 1;
 }?>

<?php
require 'inc/head.php';
?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <?php if(!empty($_SESSION)) : ?>
          <a  href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
            <?php endif;?>
            <p> <?php if (key_exists('cookie46', $_SESSION)) {
              echo  $_SESSION['cookie46'] ." in the cart"; } ?></p>
            <p> <?php if (!key_exists('cookie46', $_SESSION)) {
                    echo "0 in the cart"; } ?></p>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <?php if(!empty($_SESSION['user_name'])) : ?>
          <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
            <?php endif;?>
            <p> <?php if (key_exists('cookie36', $_SESSION)) {
                    echo  $_SESSION['cookie36'] ." in the cart"; } ?></p>
            <p> <?php if (!key_exists('cookie36', $_SESSION)) {
                    echo "0 in the cart"; } ?></p>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <?php if(!empty($_SESSION)) : ?>
              <a  href="?add_to_cart=58" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </a>
            <?php endif;?>
            <p> <?php if (key_exists('cookie58', $_SESSION)) {
                    echo  $_SESSION['cookie58'] ." in the cart"; } ?></p>
            <p> <?php if (!key_exists('cookie58', $_SESSION)) {
                    echo "0 in the cart"; } ?></p>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <?php if(!empty($_SESSION)) : ?>
              <a  href="?add_to_cart=32" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </a>
            <?php endif;?>
            <p> <?php if (key_exists('cookie32', $_SESSION)) {
                    echo  $_SESSION['cookie32'] ." in the cart"; } ?></p>
            <p> <?php if (!key_exists('cookie32', $_SESSION)) {
                    echo "0 in the cart"; } ?></p>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
