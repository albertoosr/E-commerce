<?php require('views/layouts/header.php'); ?>

<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> &nbsp All Category</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fashion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Supermarket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Electronics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Baby & Toys</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fitness sport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Clothing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Furnitures</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="section-intro padding-y-sm">
    <div class="container">
        <div class="intro-banner-wrap">
            <img src="resources/img/banner.jpg" class="img-fluid rounded">
        </div>
    </div>
</section>


<section class="section-content padding-y-sm">
    <div class="container">
        <article class="card card-body">

            <div class="row">
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Fast Delivery</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Creative Strategy</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">High Secured </h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </article>

    </div>
</section>


<section class="section-content">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Popular Products</h3>
        </header>

        <div class="row">
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img1.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just another product name</a>

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
                        <a href="#" class="title">Just another product name</a>

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
                        <a href="#" class="title">Just another product name</a>

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
                        <a href="#" class="title">Just another product name</a>

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


<section class="section-content">
    <div class="container">

        <header class="section-heading">
            <h3 class="section-title">New Arrived</h3>
        </header>

        <div class="row">
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img5.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just Another Product Name</a>

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
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img6.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just Another Product Name</a>

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
                        <div class="price mt-1">$280.00</div>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img7.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just Another Product Name</a>

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
                    <a href="#" class="img-wrap"> <img src="resources/img/img8.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just Another Product Name</a>

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


<section class="section-content padding-bottom-sm">
    <div class="container">

        <header class="section-heading">
            <a href="#" class="btn btn-outline-primary float-right">See All</a>
            <h3 class="section-title">Recommended</h3>
        </header>

        <div class="row">
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img7.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just Another Product Name</a>
                        <div class="price mt-1">$179.00</div>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img4.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just Another Product Name</a>
                        <div class="price mt-1">$280.00</div>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img2.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just Another Product Name</a>
                        <div class="price mt-1">$56.00</div>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="resources/img/img5.png" style="max-width: 100%;"> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just Another Product Name</a>
                        <div class="price mt-1">$179.00</div>
                    </figcaption>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section-name bg padding-y-sm">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Our Brands</h3>
        </header>

        <div class="row">
            <div class="col-md-2 col-6">
                <figure class="box item-logo">
                    <a href="#"><img src="resources/img/microsoft.png" style="max-width: 100%;"></a>
                    <figcaption class="border-top pt-2">36 Products</figcaption>
                </figure>
            </div>
            <div class="col-md-2  col-6">
                <figure class="box item-logo">
                    <a href="#"><img src="resources/img/amazon1.0.png" style="max-width: 100%;"></a>
                    <figcaption class="border-top pt-2">980 Products</figcaption>
                </figure>
            </div>
            <div class="col-md-2  col-6">
                <figure class="box item-logo">
                    <a href="#"><img src="resources/img/oracle.png" style="max-width: 100%;"></a>
                    <figcaption class="border-top pt-2">25 Products</figcaption>
                </figure>
            </div>
            <div class="col-md-2  col-6">
                <figure class="box item-logo">
                    <a href="#"><img src="resources/img/microsoft.png" style="max-width: 100%;"></a>
                    <figcaption class="border-top pt-2">72 Products</figcaption>
                </figure>
            </div>
            <div class="col-md-2  col-6">
                <figure class="box item-logo">
                    <a href="#"><img src="resources/img/oracle.png" style="max-width: 100%;"></a>
                    <figcaption class="border-top pt-2">41 Products</figcaption>
                </figure>
            </div>
            <div class="col-md-2  col-6">
                <figure class="box item-logo">
                    <a href="#"><img src="resources/img/amazon1.0.png" style="max-width: 100%;"></a>
                    <figcaption class="border-top pt-2">12 Products</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="section-name padding-y">
    <div class="container">
        <h3 class="mb-3">Download App Demo Text</h3>
        <a href="#"><img src="resources/img/download.png" height="45"></a>
        <a href="#"><img src="resources/img/download.png" height="45"></a>

    </div>
</section>

<?php require('views/layouts/footer.php'); ?>