<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Contact us - Real Estate Management System</title>
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
    <!-- slitslider -->
    <script src='assets/google_analytics_auto.js'></script>
</head>

<body>
    <?php include 'includes/header.php';?>
    <!-- banner -->
    <div class="inside-banner">
        <div class="container">
            <h2>Contact Us</h2>
        </div>
    </div>
    <!-- banner -->

    <div class="container">
        <div class="spacer">
            <div class="row contact">
                <div class="col-lg-6 col-sm-6 ">
                    <input type="text" class="form-control" placeholder="Full Name">
                    <input type="text" class="form-control" placeholder="Email Address">
                    <input type="text" class="form-control" placeholder="Contact Number">
                    <textarea rows="6" class="form-control" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn-success" name="Submit">Send Message</button>
                </div>
                <div class="col-lg-6 col-sm-6 ">
                    <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.981908751368!2d32.619492068996315!3d0.3462231518915161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177db97f66557e69%3A0xb5c2a8f60dc9e3fc!2sKyambogo%2C%20Kampala!5e0!3m2!1sen!2sug!4v1720446341832!5m2!1sen!2sug"></iframe>
                    </div>
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