<?php  ?>

<!DOCTYPE html>
<html lang="en" class="top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plant Scape</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>
<body>
    <header class="fixed-top">
        <div class="navbar navbar-light border-bottom shadow-sm p-3">
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <img src="img/logo2.png" height="30">
                </a>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-3 scroll-ease" href="#home">Home</a>
                    <a class="p-3 scroll-ease" href="#about">About Us</a>
                    <a class="p-3 scroll-ease" href="#order">Order Now</a>
                    <a class="p-3 scroll-ease" href="#contact">Contact Us</a>
                </nav>
            </div>
        </div>
    </header>
    <div id="home" class="banner position-relative overflow-hidden p-md-5 text-center">
        <div class="cover"></div>
        <div class="col-md-12 p-lg-5 mx-auto my-5">
            <h1 class="display-2 mt-5 font-weight-normal">Enliven your Space</h1>
            <p class="col-md-7 mx-auto lead font-weight-normal mt-5">Enliven up your living place with the best-looking potted plants and make your interior spaces greener.</p>
            <a class="btn btn-outline-secondary mt-5 scroll-ease" href="#about">
                Scroll Down
            </a>
        </div>
    </div>

    <main class="container">
        <div id="about" class="row section text-center">
            <div class="col-md-12">
                <h1 class="mt-1">We sell potted indoor plants.</h1>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <img src="/img/a.jpg" width="250" height="200">
                    <h4 class="mt-4">MODERN AND STYLISH</h4>
                    <p>Our modern and stylish plant & planter combinations are designed to add peace and serenity to your living space.</p>
                    <button type="submit" class="btn btn-primary col-md-4">Learn more</button>
                </div>
                <div class="col">
                    <img src="/img/b.jpg" width="250" height="200">
                    <h4 class="mt-4">EASY TO CARE FOR</h4>
                    <p>All the plants you’ll find at our shop are easy to care for. They aren’t picky about light and water conditions!</p>
                    <button type="submit" class="btn btn-primary col-md-4">Learn more</button>
                </div>
                <div class="col">
                    <img src="/img/c.jpg" width="250" height="200">
                    <h4 class="mt-4">AIR PURIFYING</h4>
                    <p>We choose only air-purifying plants that work to remove harmful airborne toxins and increase oxygen & moisture levels in the air. </p>
                    <button type="submit" class="btn btn-primary col-md-4">Learn more</button>
                </div>
            </div>
        </div>
        <hr>
        <div id="order" class="row section">
            <div class="col-md-7">
                <h2 class="featurette-heading">Place your order now. <span class="text-muted">Make your interior spaces greener.</span></h2>
                <p class="lead mt-4">We're pleased to offer a wide range of easy-care houseplants and low-maintenance office plants.</p>
                <button type="submit" class="btn btn-primary col-md-4 mt-4">Order Now</button>
            </div>
            <div class="col-md-5">
                <img src="img/plant.jpg" width="450" height="300">
            </div>
        </div>
        <hr>
        <div id="contact" class="row section">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h1>Subscribe to our Newsletter</h1>
                    <p>Get the latest updates and offers. Request for a free consultation.</p>
                </div>
                <form class="text-center pt-5">
                    <div class="form-row justify-content-md-center">
                        <div class="form-group col col-md-7">
                            <input type="email" class="form-control" placeholder="Enter your Email">
                        </div>
                        <div class="form-group col col-md-3 pl-4 text-left">
                            <button type="submit" class="btn btn-primary col-md-12">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <div class="mt-4 text-center">
                    <i class="fab fa-facebook-square fa-3x p-2"></i>
                    <i class="fab fa-instagram fa-3x p-2"></i>
                    <i class="fab fa-twitter-square fa-3x p-2"></i>
                    <i class="fab fa-google-plus-square fa-3x p-2"></i>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer p-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md">
                     <img src="img/logo2.png" height="15">
                </div>
                <div class="col-md text-right">
                    <h1>© 2018 All Rights Reserved</h1>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>