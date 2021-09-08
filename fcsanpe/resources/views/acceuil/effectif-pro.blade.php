<!doctype html>
  <html lang="zxx">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Rodrigue N'doufou">
      <meta name="generator" content="Hugo 0.80.0">
      <title>Site officiel de San Pédro Football club</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/card.css">
      <!-- Animate.css -->
      <link rel="stylesheet" href="css/animate.css">
      <!-- Flexslider -->
      <link rel="stylesheet" href="css/flexslider.css">
      <!-- Icomoon Icon Fonts-->
      <link rel="stylesheet" href="css/icomoon.css">
      <!-- Magnific Popup -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="font/fontawesome-free-5.15.3-web/css/fontawesome.css">
      <link rel="stylesheet" href="font/icofont/icofont.css">
      <link rel="stylesheet" href="font/bootstrap-icons-1.5.0/fonts/bootstrap-icons.woff">
      <link rel="stylesheet" href="font/bootstrap-icons-1.5.0/fonts/bootstrap-icons.woff2">
      <!-- Slick Slider  CSS>
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/slick-theme.css"-->
      <!--carroussel patenaire>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"-->
    </head>

    <body>
       @include('acceuil/menu')

        <main>
           @foreach ($joueur as $joueurs)
                
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6">
                        <a href="#">
                            <div class="player container">
                                <img src="{{Storage::url($joueurs->photo_joueurs)}}" class="img-fluid" alt="photo joueur">
                                <div class="number-player">{{$joueurs->numero_maillot}}</div>
                                <div class="poste-player">{{$joueurs->position_terrain}}</div>
                                <div class="name-player">{{$joueurs->nom}}</div>
                                <hr class="line-player">
                                <div class="button-player">voir fiche du joueur</div>
                                <div class="overlay">
                                    <div class="statistic">
                                        <div class="stat-1">
                                            <h3>buts marqués</h3>
                                            <p>51</p>
                                        </div>
                                        <div class="stat-2">
                                            <h3>macth joués</h3>
                                            <p>21</p>
                                        </div>
                                        <div class="stat-3">
                                            <h3>passes décisive</h3>
                                            <p>15</p>
                                        </div>
                                        <div class="stat-4">
                                            <h3>minutes</h3>
                                            <p>425</p>
                                        </div>
                                        <!--div class="group-stat--1">
                                            <div class="stat-1">
                                                <h3>buts marqués</h3>
                                                <p>51</p>
                                            </div>
                                            <div class="stat-2">
                                                <h3>macth joués</h3>
                                                <p>21</p>
                                            </div>
                                        </div>
                                        <div class="group-stat--2">
                                            <div class="stat-2">
                                                <h3>passes décisive</h3>
                                                <p>15</p>
                                            </div>
                                            <div class="stat-1">
                                                <h3>minutes</h3>
                                                <p>425</p>
                                            </div>
                                        </div-->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                  
                
                </div>
            </div>
        </main>
    </body>

    <style>
        main{
            margin-top: 200px;
        }
        .player{
            position: relative;
            max-width: 100%;
            height: auto;
            color: #000;
        }

        .number-player{
            position: absolute;
            top: 0;
            left: 0;
            font-size: 5em;
            font-weight: 700;
            color: #f65101;
        }

        .line-player{
            color: #fff;
        }

        .button-player{
            position: absolute;
            bottom: 0;
            left: 0;
            font-weight: 500;
            font-size: 1.5em;
            margin-bottom: 0.5em;
            border-radius: 0px;
            border-top: 2px;
            border-color: #000;
            text-align: center;
        }

            a {
            text-decoration: none;
            color: #f65101;
        }

        a:hover{
            color: #f65101;
        }

        .poste-player{
            position: absolute;
            top: 14.5em;
            left:  1em;
            font-size: 1.2em;
            font-weight: 700;  
        }

        .name-player{
            position: absolute;
            top: 13em;
            left:  1em;
            font-size: 1.5em;
            font-weight: 900;
        }

        .container {
            position: relative;
            width: 100%;
            }

            /*.image {
            display: block;
            width: 100%;
            height: auto;
            }*/

            .overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .5s ease;
                background-color: #f65101;
            }

            .container:hover .overlay {
            opacity: 0.9;
            }

            .statistic {
                color: white;
                font-size: 20px;
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;
            }

            /*
            
            .group-stat--1{
                flex: 1;
                display: block;
                margin: auto;
            }

            .group-stat--2{
                flex: 1;
                display: block;
                margin: auto;
            }*/

            .stat-1{
                
            }

            .stat-2{
               
            }

            .stat-3{
                
            }

            .stat-4{
                
            }


    </style>