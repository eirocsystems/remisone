<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>About us - Real Estate Management System</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <script src="assets/jquery-1.9.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/script.js"></script>
    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <!-- Owl stylesheet -->

    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
</head>

<body>
    <?php include 'includes/header.php';?>
    <!-- banner -->
    <div class="inside-banner">
        <div class="container">
            <h2>About Us</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="spacer">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2">
                    <img src="images/about.jpg" class="img-responsive thumbnail" alt="realestate">
                    <h3>Business Background</h3>
                    <p> A Tradition of Excellence, Integrity, Knowledge and Service for over 10 years.</p>
                    <h3>Company Profile</h3>
                    <p>At Bandex Real Estate, you are number one. Whether you are a property owner, tenant, or buyer, we
                        value your
                        business and will provide you with the individual attention and service you deserve. We believe
                        in a strict
                        Code of Ethics. We believe in integrity, commitment to excellence, a professional attitude, and
                        personalized
                        care.</p>
                    <p>Bandex provides a wide variety of real estate services to investors. We understand that you do not
                        want to be
                        in the business of real estate and property management.</p>
                </div>

            </div>
        </div>
    </div>

    <?php include 'includes/footer.php';?>

    <!-- Modal -->
    <div id="loginpop" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-6 login">
                        <h4>Login</h4>
                        <form class="" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2"
                                    placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Sign in</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h4>New User Sign Up</h4>
                        <p>Join today and get updated with all the properties deal happening around.</p>
                        <button type="submit" class="btn btn-info" onclick="window.location.href='register.html'">Join
                            Now</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->

</body>

</html>