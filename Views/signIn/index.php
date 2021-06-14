<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $this->pageTitle; ?></title>

    <link href="<?php echo HOME_URL; ?>/Includes/css/glyphicon.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>

    <!--CSS que só se aplica a esta pagina-->
    <style type="text/css">

        .video-background {
            position: fixed;
            top: 50%;
            left: 0;
            padding-top: 56.25%;
            width: 100%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: 2s opacity ease;
            transition: 2s opacity ease;
            opacity: 1;
        }

        .video-foreground,
        .video-background iframe {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .bg-login {
            /*background: url("

        <?php echo HOME_URL; ?>  Includes/img/loginbackground.jpg") no-repeat;*/
            width: 100%;
            height: 100vh;
        }

        #videoBG {
            position: fixed;
            z-index: -1;
        }

        @media (min-aspect-ratio: 16/9) {
            #videoBG {
                width: 100%;
                height: auto;
            }
        }

        @media (max-aspect-ratio: 16/9) {
            #videoBG {
                width: auto;
                height: 100%;
            }
        }

        @media (max-width: 767px) {
            #videoBG {
                display: none;
            }

            body {
                background: url("<?php echo HOME_URL; ?>/Includes/img/waves.png") no-repeat;
                background-size: cover;
            }
        }

        .form-container {
            /*background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url("../img/loginbackgroundtransparent.png") no-repeat;*/
            background: url("<?php echo HOME_URL; ?>/Includes/img/loginbackgroundtransparent.png") no-repeat;
            /*background-color: #fff;*/
            /*border: 1px solid #ffffff;*/
            padding: 50px 60px;
            /*margin-top: 20vh;*/

            /*Centrar ao topo do ecrã*/
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            /*Bordas*/
            border-radius: 30px 30px 30px 30px;
            -moz-border-radius: 30px 30px 30px 30px;
            -webkit-border-radius: 30px 30px 30px 30px;
            border: 0px solid #000000;

            /*Sombra*/
            -webkit-box-shadow: 1px 4px 15px 1px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 1px 4px 15px 1px rgba(0, 0, 0, 0.75);
            box-shadow: 1px 4px 15px 1px rgba(0, 0, 0, 0.75);
        }

        .alert{
            position: fixed;
            top: -20%;
            left: 0%;
            transition: all 1s ease;
            opacity:0;
        }

    </style>

</head>

<body>
<!--    video-->
<video id="videoBG" poster="poster.JPG" autoplay muted loop>
    <source src="<?php echo HOME_URL; ?>/Includes/video/waves.mp4">
</video><!---->
<div class="container-fluid bg-login">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <!--form start-->
            <form id="formSignIn" class="form-container" method="post">
                <h3>Concession Manager</h3>
                <h4 class="text-center"><?php echo $this->pageTitle; ?></h4>
                <!--Email-->
                <div class="form-group">
                    <label for="exampleemail1">Email</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="glyphicon glyphicon-envelope"
                                                                aria-hidden="true"></span></div>
                        </div>
                        <input type="email" class="form-control" id="exampleemail1" aria-describedby="usernameHelp"
                               placeholder="Inserir email" name="email">
                    </div>
<!--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone-->
<!--                        else.</small>-->
                </div>
                <!-- Username -->
                <div class="form-group">
                    <label for="exampleUsername">Username</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="glyphicon glyphicon-user"
                                                                aria-hidden="true"></span></div>
                        </div>
                        <input type="text" class="form-control" id="exampleUsername" placeholder="Inserir username"
                               name="username">
                    </div>
                </div>
                <!--Password-->
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="glyphicon glyphicon-lock"
                                                                aria-hidden="true"></span></div>
                        </div>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Inserir password"
                               name="password">
                    </div>
                    <small id="passwordHelp" class="form-text text-muted">We'll never share your password with anyone
                        else.</small>
                </div>
                <!--Botão-->
<!--                <div class="form-group form-check">-->
<!--                    <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                    <label class="form-check-label" for="exampleCheck1">Remember me</label>-->
<!--                </div>-->
                <button type="submit" class="btn btn-primary btn-block">Registar</button>
                <div class="text-right mt-2">
                <a href="login" class="btn btn-info btn-sm">Login</a>
                </div>
            </form>
            <!--form End-->
        </div>
        <div class="col"></div>
    </div>
</div>

<script>
    $("#formSignIn").submit(function(event) {
        event.preventDefault(); // avoid to execute the actual submit of the form.

        // var formData = JSON.stringify(jQuery($(this)).serializeArray()); // store json string
        var data = {
            'data': JSON.stringify(jQuery($(this)).serializeArray())
        }
        // var json = JSON.parse(data);


        // console.log(data)

        $.ajax({
            url: "<?php echo HOME_URL; ?>/signIn/register",
            type: "post",
            data: data,
            success: function(response) {
                if (response) {
                    var obj = JSON.parse(response)
                    var msg = JSON.parse(obj['response'])
                    console.log(msg)
                    if (obj['statusCode'] === 201) {
                        var tmpl = '<div class="alert alert-success alert-dismissable">' +
                            '<button class="close" data-dismiss="alert">&times;</button>' + msg['message'] + '</div>';
                    } else if (obj['statusCode'] === 500) {
                        var tmpl = '<div class="alert alert-danger alert-dismissable">' +
                            '<button class="close" data-dismiss="alert">&times;</button>' + msg['message'] + '</div>';
                    } else  {
                        var tmpl = '<div class="alert alert-warning alert-dismissable">' +
                            '<button class="close" data-dismiss="alert">&times;</button>' + msg['message'] + '</div>';
                    }

                    $('.form-container').append(tmpl)

                    $(".alert").fadeTo(7000, 500).slideUp(500, function(){
                        $(".alert").slideUp(500);
                        $(".alert").alert('close');
                    });

                } else {
                    window.location.href = "<?php echo HOME_URL; ?>/index";
                }
            }
        });
    });
</script>

</body>
</html>
