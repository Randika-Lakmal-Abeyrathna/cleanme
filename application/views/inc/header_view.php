<!doctype html>

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clean Me</title>

        <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?= base_url() ?>public/customcss/home_view.css"/>

        <script src="<?= base_url() ?>public/js/jquery.js"></script>
        <script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div >

            <nav role="navigation" class="navbar navbar-default navbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Clean Me </a>

                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collection of nav links and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?= base_url() ?>user/registration">User Registration</a></li>
                        <li><a href="<?= base_url() ?>Home/companyRegistration">Company Registration</a></li>
                        <li><a href="#">Vehical Registration</a></li>
                        <li><a href="<?= base_url() ?>Home/index">Home</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--Navigation bar Finish-->


