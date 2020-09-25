<?php require('views/layouts/header.php'); ?>

<div class="container p-5">
    <div class="row">
        <div class="mx-auto col-md-5">
            <?php if (isset($_GET['status'])) { ?>

                <?php if ($_GET['status'] == 'send') { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Information sent,<strong>check your inbox of your email</strong>
                    </div>

                <?php } else if ($_GET['status'] == 'error') { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        At this time you can not get your information, try again later.
                    </div>

                <?php } ?>

            <?php  } ?>
            <div class="form-group">
                <h2>Contact us</h2>
            </div>
            <form method="POST" action="email.php">
                <div class="form-group ">
                    <label for="product">Name <span class="important">*</span></label>
                    <input type="text" name="name" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label for="price">Phone <span class="important">*</span></label>
                    <input type="text" name="phone" class="form-control" required="">

                </div>
                <div class="form-group">
                    <label for="upc">Email <span class="important">*</span></label>
                    <input type="email" name="email" class="form-control" required="">

                </div>
                <div class="form-group">
                    <label for="upc">Captcha <span class="important">*</span><br><img src="captcha.php"></label>
                    <input type="text" name="captcha" class="form-control" required="">

                </div>

                <div class="form-group">
                    <label for="upc">Description <span class="important">*</span></label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Send">
                </div>
            </form>
        </div>
    </div>
</div>
<?php require('views/layouts/footer.php'); ?>