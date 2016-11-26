<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Materialize-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="app/css/materialize.min.css"  media="screen,projection"/>

    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="../../public/css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!--Custom Font for Logo-->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">

    <!--Meta tags and Title-->
    <meta keywords="helpdesk, ticketing system, asset tracking, it management application">
    <a href="index.blade.php"><title>Totally Helpdesk</title></a>
</head>

<body>
<nav class="purple" role="navigation">
    <div class="nav-wrapper container s12 light"><a id="logo-container" href="index.php" class="brand-logo"><img src="img/totally.png" width="80" height="80"><span class="helpdesk" style="vertical-align: top">Helpdesk</span></a>
        <ul class="right hide-on-med-and-down" id="login">
            <li><a href="login.php" id="mysignin">Login</a></li>
        </ul>
        <ul class="right hide-on-med-and-down" id="login">
            <li><a href="pricing.php">Pricing</a></li>
        </ul>
        <ul class="right hide-on-med-and-down" id="login">
            <li><a href="features.php">Features</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="login.php">Login</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="pricing.php">Pricing</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="features.php">Features</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer class="page-footer purple">
    <div class="container">
        <div class="row">
            <div class="col l9 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">My name is Tiffany, and I am completing the Full Stack Developer certificate program through University of Central Florida.  This is my final project made with HTML, CSS, JavaScript, PHP, Laravel, and MySQL.</p>

            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Contact</h5>
                <ul>
                    <li><a class="white-text" href="mailto:tiffihaag@gmail.com">My Email</a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>
</body>
</html>