<!doctype html>

<html lang="en">
    <head>
        <title>Clean Me</title>
       
        <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css"/>

        <script src="<?= base_url() ?>public/js/jquery.js"></script>
        <script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div>
            <nav class="navbar navbar" style="margin-bottom: 0px;">
                <div class="container-fluid">
                    <div class="navbar navbar-header"><a class="navbar-brand" href="#">Clean Me </a></div>
                    <ul class="nav navbar-nav navbar-right" >
                        <li><a href="<?= base_url() ?>Home/index">Home</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </nav>    
            <nav class="navbar navbar-default" >
                <ul class="nav navbar-nav navbar-right" >
                    <li><a href="<?= base_url() ?>user/registration">User Registration</a></li>
                    <li><a href="<?= base_url() ?>Home/companyRegistration">Company Registration</a></li>
                    <li><a href="#">Vehical Registration</a></li>
                </ul>
            </nav>    
        </div>
        <!--Navigation bar Finish-->


