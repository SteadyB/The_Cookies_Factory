<?php
session_start();
if(empty ($_SESSION)) {
    header('Location: http://127.0.0.1:8000/index.php');
}

require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <section class="cookies container-fluid">
            <div class="row">
                <?php if (key_exists('cookie46', $_SESSION)) : ?>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                        <figcaption class="caption">
                            <h3>Pecan nuts</h3>
                            <hr class="my-2">
                            <?php if (key_exists('cookie46', $_SESSION)): ?>
                                <h3> quantity : <span class="label label-warning"> <?php echo  $_SESSION['cookie46']; ?></span></h3>
                            <?php endif; ?>

                            <?php if (!key_exists('cookie46', $_SESSION)) : ?>
                                <h3> quantity : <span class="label label-lg label-warning">  <?php echo "0 in the cart"; ?></span></h3>
                            <?php endif; ?>
                        </figcaption>
                    </figure>
                </div>
                <?php endif; ?>
                <?php if (key_exists('cookie36', $_SESSION)) : ?>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                        <figcaption class="caption">
                            <h3>Chocolate chips</h3>
                            <hr class="my-2">
                             <?php if (key_exists('cookie36', $_SESSION)): ?>
                                 <h3> quantity : <span class="label label-warning"> <?php echo  $_SESSION['cookie36']; ?></span></h3>
                            <?php endif; ?>

                            <?php if (!key_exists('cookie36', $_SESSION)) : ?>
                                <h3> quantity : <span class="label label-lg label-warning">  <?php echo "0 in the cart"; ?></span></h3>
                            <?php endif; ?>
                        </figcaption>
                    </figure>
                </div>
                <?php endif; ?>
                <?php if (key_exists('cookie58', $_SESSION)) : ?>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                        <figcaption class="caption">
                            <h3>Chocolate cookie</h3>
                            <hr class="my-2">
                            <?php if (key_exists('cookie58', $_SESSION)): ?>
                                <h3> quantity : <span class="label label-warning"> <?php echo  $_SESSION['cookie58']; ?></span></h3>
                            <?php endif; ?>

                            <?php if (!key_exists('cookie58', $_SESSION)) : ?>
                                <h3> quantity : <span class="label label-lg label-warning">  <?php echo "0 in the cart"; ?></span></h3>
                            <?php endif; ?>
                        </figcaption>
                    </figure>
                </div>
                <?php endif; ?>
                <?php if (key_exists('cookie32', $_SESSION)) : ?>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                        <figcaption class="caption">
                            <h3>M&M's&copy; cookies</h3>
                            <hr class="my-2">
                            <?php if (key_exists('cookie32', $_SESSION)): ?>
                                <h3> quantity : <span class="label label-warning"> <?php echo  $_SESSION['cookie32']; ?></span></h3>
                            <?php endif; ?>

                            <?php if (!key_exists('cookie32', $_SESSION)) : ?>
                                <h3> quantity : <span class="label label-lg label-warning">  <?php echo "0 in the cart"; ?></span></h3>
                            <?php endif; ?>
                        </figcaption>
                    </figure>
                </div>
                <?php endif; ?>
            </div>
        </section>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
