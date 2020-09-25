<?php require('views/layouts/header.php'); ?>

<?php

$id=rand(1,8);

if ($id == 1) { ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 mx-auto" src="resources/img/img1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img1.png" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <p><b>Product: </b>Just another product name sports shirt</p>
                <p><b>Description: </b>T-shirt ready for the active athlete.</p>
                <p><b>Price: </b>$179.00</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tobuy">
                    Buy
                </button>

            </div>
        </div>
    </div>


<?php
} else if ($id == 2) {  ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 mx-auto" src="resources/img/img2.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img2.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img2.png" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <p><b>Product: </b>Just another product name sporty t-shirt</p>
                <p><b>Description: </b>T-shirt made of cotton.</p>
                <p><b>Price: </b>$280.00</p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tobuy">
                    Buy
                </button>

            </div>
        </div>
    </div>

<?php
} else if ($id == 3) { ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 mx-auto" src="resources/img/img3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img3.jpg" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <p><b>Product: </b>Just another product name Sports shorts</p>
                <p><b>Description: </b>Short made with cotton.</p>
                <p><b>Price: </b>$56.00</p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tobuy">
                    Buy
                </button>

            </div>
        </div>
    </div>

<?php
} else if ($id == 4) { ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 mx-auto" src="resources/img/img4.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img4.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img4.png" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <p><b>Product: </b>Just another product name Sports Backpack</p>
                <p><b>Description: </b>Sports backpack made of cotton.</p>
                <p><b>Price: </b>$179.00</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tobuy">
                    Buy
                </button>

            </div>
        </div>
    </div>

<?php
} else if ($id == 5) { ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 mx-auto" src="resources/img/img5.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img5.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img5.png" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <p><b>Product: </b>Just another product name sweatshirt</p>
                <p><b>Description: </b>Sweatshirt made of cotton.</p>
                <p><b>Price: </b>$179.00</p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tobuy">
                    Buy
                </button>

            </div>
        </div>
    </div>

<?php
} else if ($id == 6) { ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 mx-auto" src="resources/img/img6.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img6.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img6.png" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <p><b>Product: </b>Just another product name headphones</p>
                <p><b>Description: </b>Hearing aids by brand.</p>
                <p><b>Price: </b>$280.00</p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tobuy">
                    Buy
                </button>

            </div>
        </div>
    </div>

<?php
} else if ($id == 7) { ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 mx-auto" src="resources/img/img7.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img7.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img7.png" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <p><b>Product: </b>Just another product name Smart watch</p>
                <p><b>Description: </b>Smart watch ready for sport.</p>
                <p><b>Price: </b>$56.00</p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tobuy">
                    Buy
                </button>

            </div>
        </div>
    </div>
<?php
} else if ($id == 8) { ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 mx-auto" src="resources/img/img8.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img8.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="resources/img/img8.png" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <p><b>Product: </b>Just another product name Laptop</p>
                <p><b>Description: </b>Gray computer.</p>
                <p><b>Price: </b>$179.00</p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tobuy">
                    Buy
                </button>

            </div>
        </div>
    </div>

<?php
} else {
   echo "<script> window.location='404.php'; </script>";
}
?>

<section class="section-content py-5">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Popular Products</h3>
        </header>

        <div class="row">
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img1.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="information.php?id=1" class="title hint--bottom hint--success hint--rounded" aria-label="Comprar Ahora">Just another product name</a>

                        <div class="d-flex rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active ">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted pl-2">34 reviws</span>
                        </div>
                        <div class="price mt-1">$179.00</div>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img2.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="information.php?id=2" class="title hint--bottom hint--success hint--rounded" aria-label="Comprar Ahora">Just another product name</a>

                        <div class="d-flex rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted pl-2">34 reviws</span>
                        </div>
                        <div class="price mt-1">$280.00</div>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img3.jpg" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="information.php?id=3" class="title hint--bottom hint--success hint--rounded" aria-label="Comprar Ahora">Just another product name</a>

                        <div class="d-flex rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted pl-3">34 reviws</span>
                        </div>
                        <div class="price mt-1">$56.00</div>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img4.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="information.php?id=4" class="title hint--bottom hint--success hint--rounded" aria-label="Comprar Ahora">Just another product name</a>

                        <div class="d-flex rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted pl-3">34 reviws</span>
                        </div>
                        <div class="price mt-1">$179.00</div>
                    </figcaption>
                </div>
            </div>
        </div>

    </div>
</section>



<!-- modal -->
<div id="tobuy" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="emailproduct.php">
                    <div class="modal-body">
                        <p class="text-success"><small>This information will be sent to your Email.</small></p>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 mt-2 mb-2 info-inputs">
                                <input type="text" name="name" class="form-control " placeholder="Name *" required=""><br>
                                <input type="text" name="phone" class="form-control" placeholder="Phone *" required=""><br>
                                <input type="email" name="email" class="form-control" placeholder="E-mail *" required=""><br>
                                <!-- Captcha * <img src="./Rey Palomo Store2_files/captcha.php"> -->
                                <input type="text" name="captcha" class="form-control" placeholder="captcha *" required=""><br>
                            </div>

                            <div class="col-sm-12 col-md-6 mt-2 mb-2">

                                <?php
                                if ($id == 1) { ?>
                                    <p><b>Product: </b>Just another product name sports shirt</p>
                                    <p><b>Description: </b>T-shirt ready for the active athlete.</p>
                                    <p><b>Price: </b>$179.00</p>

                                    <input type="text" class="info-email" name="product" value="Just another product name sports shirt">
                                    <input type="text" class="info-email" name="description" value="T-shirt ready for the active athlete.">
                                    <input type="text" class="info-email" name="price" value="$179.00">

                                <?php
                                } else if ($id == 2) { ?>
                                    <p><b>Product: </b>Just another product name sporty t-shirt</p>
                                    <p><b>Description: </b>T-shirt made of cotton.</p>
                                    <p><b>Price: </b>$280.00</p>

                                    <input type="text" class="info-email" name="product" value="Just another product name sporty t-shirt">
                                    <input type="text" class="info-email" name="description" value="T-shirt made of cotton.">
                                    <input type="text" class="info-email" name="price" value="$280.00">

                                <?php
                                } else if ($id == 3) { ?>

                                    <p><b>Product: </b>Just another product name Sports shorts</p>
                                    <p><b>Description: </b>Short made with cotton.</p>
                                    <p><b>Price: </b>$56.00</p>

                                    <input type="text" class="info-email" name="product" value="Just another product name Sports shorts">
                                    <input type="text" class="info-email" name="description" value="Short made with cotton.">
                                    <input type="text" class="info-email" name="price" value="$56.00">

                                <?php
                                } else if ($id == 4) { ?>
                                    <p><b>Product: </b>Just another product name Sports Backpack</p>
                                    <p><b>Description: </b>Sports backpack made of cotton.</p>
                                    <p><b>Price: </b>$179.00</p>

                                    <input type="text" class="info-email" name="product" value="Just another product name Sports Backpack">
                                    <input type="text" class="info-email" name="description" value="Sports backpack made of cotton.">
                                    <input type="text" class="info-email" name="price" value="$179.00">


                                <?php
                                } else if ($id == 5) { ?>
                                    <p><b>Product: </b>Just another product name sweatshirt</p>
                                    <p><b>Description: </b>Sweatshirt made of cotton.</p>
                                    <p><b>Price: </b>$179.00</p>

                                    <input type="text" class="info-email" name="product" value="Just another product name sweatshirtk">
                                    <input type="text" class="info-email" name="description" value="Sweatshirt made of cotton.">
                                    <input type="text" class="info-email" name="price" value="$179.00">

                                <?php
                                } else if ($id == 6) { ?>

                                    <p><b>Product: </b>Just another product name headphones</p>
                                    <p><b>Description: </b>Hearing aids by brand.</p>
                                    <p><b>Price: </b>$280.00</p>

                                    <input type="text" class="info-email" name="product" value="Just another product name headphones">
                                    <input type="text" class="info-email" name="description" value="Hearing aids by brand.">
                                    <input type="text" class="info-email" name="price" value="$280.00">

                                <?php
                                } else if ($id == 7) { ?>
                                    <p><b>Product: </b>Just another product name Smart watch</p>
                                    <p><b>Description: </b>Smart watch ready for sport.</p>
                                    <p><b>Price: </b>$56.00</p>

                                    <input type="text" class="info-email" name="product" value="Just another product name Smart watch">
                                    <input type="text" class="info-email" name="description" value="Smart watch ready for sport">
                                    <input type="text" class="info-email" name="price" value="$56.00">

                                <?php
                                } else if ($id == 8) { ?>
                                    <p><b>Product: </b>Just another product name Laptop</p>
                                    <p><b>Description: </b>Gray computer.</p>
                                    <p><b>Price: </b>$179.00</p>

                                    <input type="text" class="info-email" name="product" value="Just another product name Laptop">
                                    <input type="text" class="info-email" name="description" value="Gray computer.">
                                    <input type="text" class="info-email" name="price" value="$179.00">

                                <?php
                                } else { ?>
                                    <h2>error </h2>

                                <?php
                                }
                                ?>
                            </div>
                            <?php if (isset($_GET['id'])) { ?>



                            <?php  } ?>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                        <input type="submit" class="btn btn-success" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require('views/layouts/footer.php'); ?>

<!-- modal -->
