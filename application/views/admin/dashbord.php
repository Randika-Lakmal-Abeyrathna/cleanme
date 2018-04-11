
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link href="<?= base_url() ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>public/customcss/nevigator.css" rel="stylesheet" type="text/css"/>\
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>




    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-car"></i> <span class="sitename">cleanme.</span><span>lk</span></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-user navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> User</a></li>
                        <li><a href="#about"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <nav class="navbar-primary">
            <!--<a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left">&times;</span></a>-->
            <a href="#" class="btn-expand-collapse"><span>&#9776</span></a>
            <ul class="navbar-primary-menu">
                <li>
                    <a href="#pawning" id ="pawning">
                        <i class="glyphicon glyphicon-user"/> <span class="nav-label">User Management</span></a>
                    <a href="#redeeming" id ="redeeming"></a>
                    <a href="#partpayment" id ="ppayment"></a>
                    <a href="#auction" id ="auction"></a>
                    <a href="#reports" id ="reports"></a>
                </li>
            </ul>
        </nav>
        <div class="main-content" id="includedContent">
            
        </div>
        <script>
            $('.btn-expand-collapse').click(function (e) {
                $('.navbar-primary').toggleClass('collapsed');
            });
            $('#pawning').click(function () {
                $("#includedContent").load("pawning_2.html");
            });
            $('#redeeming').click(function () {
                $("#includedContent").load("redeem_2.html");
            });
            $('#ppayment').click(function () {
                $("#includedContent").load("partpayment_2.html");
            });
            $('#auction').click(function () {
                $("#includedContent").load("auction.html");
            });
            $('#reports').click(function () {
                $("#includedContent").load("reports.html");
            });
        </script>
        <script src="jquery.js"></script> 
        <script>

        </script> 
    </body>
</html>
