<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Davidson</title>
      <!-- font awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <style>
        .bg {
            background :url(https://th.bing.com/th/id/R.92eda3ed19a3be9bd1527114f305a2ac?rik=994abWeymphaXA&pid=ImgRaw&r=0);
            background-size: cover;
            background-position: center;
            min-height: 500px;
        }
        header{
            /* background :url(https://th.bing.com/th/id/R.92eda3ed19a3be9bd1527114f305a2ac?rik=994abWeymphaXA&pid=ImgRaw&r=0);
            background-size: cover;
            background-position: center;
            min-height: 500px; */
        }
        .section{
            padding-top: 4vw;
            padding-bottom: 4vw;
        }
        .tabs .indicator{
            background-color: #1a237e;
        }
        .tabs .tab a:focus, .tabs .tab a:focus.active{
            background: transparent;
        }
        @media screen and (max-width: 670px){
            .parallax-container {
                height: 150px;
            }
            header{
            min-height: 500px;
        }
        footer{
            vertical-align: bottom;
        }
        h3 {
            font-family: 'Lato', sans-serif;
            font-style: normal;
            font-weight: normal;
        }
    }
    </style>
</head>
<body>
        <!-- Navbar -->
        <header>
        <nav class="nav-wrapper grey darken-1">
            <div class="container">
                <a href="index.php" class="brand-logo">Mark D</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php?=#experience">Experience</a></li>
                    <li><a href="index.php?=#aboutMe">About Me</a></li>
                    <li><a href="index.php?=#contact">Contact</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="" class="tooltipped btn-floating btn-small grey darken-4" data-tooltip="linkedin">
                        <i class="fab fa-linkedin"></i>
                    </a></li>
                    <li><a href="https://github.com/mdavidson744" target="_blank" class="tooltipped btn-floating btn-small grey darken-4" data-tooltip="github">
                        <i class="fab fa-github"></i>
                    </a></li>
                </ul>
                <ul class="sidenav grey lighten-2" id="mobile-menu">
                    <li><a href="index.php?=#experience">Experience</a></li>
                    <li><a href="index.php?=#aboutMe">About Me</a></li>
                    <li><a href="index.php?=#contact">Contact</a></li>
                    <li><a href="projects.php">Projects</a></li>
                </ul>
            </div>
        </nav>
    </header>