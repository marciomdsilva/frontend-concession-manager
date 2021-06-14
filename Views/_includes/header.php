<!doctype html>
<html>
<head>
    <title><?php echo $this->pageTitle; ?></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/1d1280b1aa.js" crossorigin="anonymous"></script>

    <link href="<?php echo HOME_URL; ?>/Includes/css/glyphicon.css" rel="stylesheet">
    <link href="<?php echo HOME_URL; ?>/Includes/css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="<?php echo HOME_URL; ?>/index">DashBoard</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <!--------------------------------------------------------------------------------------------------------------------->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo HOME_URL; ?>/help">help <span class="sr-only">(current)</span></a>
            </li>
            <!--------------------------------------------------------------------------------------------------------------------->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo HOME_URL; ?>/error">Error <span class="sr-only">(current)</span></a>
            </li>
            <!--------------------------------------------------------------------------------------------------------------------->
            <!--                <li class="nav-item active">-->
            <!--                    <a class="nav-link" href="posts.html">Posts <span class="sr-only">(current)</span></a>-->
            <!--                </li>-->
            <!--------------------------------------------------------------------------------------------------------------------->
            <!--                <li class="nav-item active">-->
            <!--                    <a class="nav-link" href="users.html">Users <span class="sr-only">(current)</span></a>-->
            <!--                </li>-->
            <!--------------------------------------------------------------------------------------------------------------------->
            <!--                <li class="nav-item">-->
            <!--                    <a class="nav-link" href="#">Link</a>-->
            <!--                </li>-->
            <!--------------------------------------------------------------------------------------------------------------------->
            <!--                <li class="nav-item">-->
            <!--                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
            <!--                </li>-->
            <!--------------------------------------------------------------------------------------------------------------------->
<!--                            <li class="nav-item dropdown">-->
<!--                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"-->
<!--                                   aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
<!--                                <div class="dropdown-menu" aria-labelledby="dropdown01">-->
<!--                                    <a class="dropdown-item" href="#">Action</a>-->
<!--                                    <a class="dropdown-item" href="#">Another action</a>-->
<!--                                    <a class="dropdown-item" href="#">Something else here</a>-->
<!--                                </div>-->
<!--                            </li>-->
            <!--------------------------------------------------------------------------------------------------------------------->
        </ul>
        <div class="btn-group">
<!--            <button type="button">Action</button>-->
            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class=" glyphicon glyphicon-user" aria-hidden="true"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Márcio</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <!--------------------------------------------------------------------------------------------------------------------->
        <ul class="navbar-nav navbar-right">
            <li class="nav-item active">
                <a class="nav-link" href="#">  Márcio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <?php if (classMainSession::get('accessToken') == true) ?>
                <a class="nav-link" href="<?php echo HOME_URL; ?>/index/logout">Logout <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
