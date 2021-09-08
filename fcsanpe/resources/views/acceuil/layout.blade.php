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

      <header style="background-color: #fff; margin-bottom: 25px;">
        @include('acceuil/menu')
        <!--div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-interval="5000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/fcsp-2.JPEG" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item">
              <img src="img/C5.GIF" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item">
              <img src="img/m-ofday.JPG" class="d-block w-100" alt="..." height="500">
            </div>
          </div>
        </div-->
      </header>
      @include('acceuil/carrousel')

      <section id="fh5co-projects" style="margin-left: 14px; margin-right: 20px; margin-top: 25px;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <img src="img/leaderboard.JPG" class="img-fluid" alt="" style="width:100%; height: 90px;">
            </div>
            <div class="container-news col-lg-7 col-md-7 col-sm-12" style="margin-top: 25px; margin-right: 12px;">
              <a href="news-id5.php" style="text-decoration: none;">
                <div class="img-hover-zoom img-hover-zoom--brightness">
                  <img src="img/actu1.jpg" class="img-fluid" alt="" style="max-width: 100%; height: 400px; display: block;">
                </div>
                <div class="content-news">
                  <h2 class="fh5co-lead animate-box">Match amical entre les Pétrusiens et l'Entente Sportive du Bafing</h2>
                  <p class="fh5co-sub-lead animate-box" style="padding-left: 5px;">
                    <button type="button" class="btn btn-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg> LIRE L'ARTICLE</button>
                  </p>
                </div>
                <h3 class="title-news fh5co-lead animate-box">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-collection-fill" viewBox="0 0 16 16" style="margin-bottom: 5px; margin-right: 5px;">
                    <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
                  </svg>EQUIPE PRO</h3>
              </a>
            </div>
            <!--div class=" col-lg-5 col-sm-12 col-md-5" style="background: linear-gradient(to top, #cc6600 0%, #800000 81%); height: 400px; margin-left: -10px; margin-top: 25px; padding-top: 5px; width: 40%;">
              <img src="img/lonaci.PNG" class="rounded mx-auto d-block" alt="..." width="200" height="50" style="margin-bottom: 5px; max-width: 100%; height: 50px; display: block;">
                <h6 class="" style="text-align: center; color: #fff;">Match de préparation - LIGUE 1</h6>
                <h6 class="" style="text-align: center; margin-bottom: -20px; color: #fff;"><em>28 AOUT</em></h6>
                  <div class="club">
                    <div class="col" style="background-image: url('img/logo_150px.PNG'); background-repeat: no-repeat; background-size: width: 150px; height: 150px; position: relative; padding-bottom: 5px; margin-top: 0px; width: auto; height: auto;">
                      <p class="club1" style="text-align: center; padding-top: 150px; color: #fff;"><strong>FC SAN PEDRO</strong></p>
                    </div>
                    <div class="col" style="width: 50px; text-align: center; padding-top: 50px; margin-left: 10px;">
                      <h2 class="vs-m-ofday" style="color: #fff;">VS</h2>
                    </div>
                    <div class="col" style="background-image: url('img/rca.PNG'); background-repeat: no-repeat; background-size: width: 150px; height: 150px; position: relative; padding-bottom: 5px; margin-top: 0px; width: auto; height: auto;">
                      <p class="club2" style="text-align: left; padding-top: 150px; color: #fff;"><strong>RACING CLUB</strong></p>
                    </div>
                  </div>
                <div class="" style="text-align: center; color: #fff; margin-top: -5px; margin-left: 24px; background-color:; border-radius: 15px; width: 90%;">
                  <h6 style="color: #fff;">Temps restant avant le match:</h6>
                  <p id="deadline" style="text-align: center; font-size: 25px; font-weight: 700;"></p>
                  <p style="padding-bottom: 10px;"><a class="btn btn-dark" href="#">Voir la fiche de match<i class="icofont-long-arrow-right"></i></a></p>
                </div>  
            </div-->
            <div class="col-lg-5 col-sm-12 col-md-5" style="background-image: url('img/FCSP-ASEC-1.jpg'); background-repeat: no-repeat; background-size: cover; position: relative; width: 40%; height: 400px; margin-top: 25px;  display: flex; justify-content: center;">
              <!--img src="img/lonaci.PNG" class="rounded mx-auto d-block" alt="..." width="200" height="50" style="margin-bottom: 5px; max-width: 100%; height: 50px; display: block;">
                <h6 class="" style="text-align: center; color: #fff;">Match de préparation - LIGUE 1</h6>
                <h6 class="" style="text-align: center; margin-bottom: -20px; color: #fff;"><em>28 AOUT</em></h6>
                  <div class="club">
                    <div class="col" style="background-image: url('img/logo_150px.PNG'); background-repeat: no-repeat; background-size: width: 150px; height: 150px; position: relative; padding-bottom: 5px; margin-top: 0px; width: auto; height: auto;">
                      <p class="club1" style="text-align: center; padding-top: 150px; color: #fff;"><strong>FC SAN PEDRO</strong></p>
                    </div>
                    <div class="col" style="width: 50px; text-align: center; padding-top: 50px; margin-left: 10px;">
                      <h2 class="vs-m-ofday" style="color: #fff;">VS</h2>
                    </div>
                    <div class="col" style="background-image: url('img/rca.PNG'); background-repeat: no-repeat; background-size: width: 150px; height: 150px; position: relative; padding-bottom: 5px; margin-top: 0px; width: auto; height: auto;">
                      <p class="club2" style="text-align: left; padding-top: 150px; color: #fff;"><strong>RACING CLUB</strong></p>
                    </div>
                  </div-->
                <div class="" style="text-align: center; color: #fff; background-color:#000; opacity: 0.5; border-radius: 15px; width: 50%; position: absolute; top: 16em;">
                  <h6 style="color: #fff;">Temps restant avant le match:</h6>
                  <p id="deadline" style="text-align: center; font-size: 25px; font-weight: 700;"></p>
                  <p style="padding-bottom: 10px;"><a class="btn btn-warning" href="#" style="color: #000; font-weight: 700;">Voir la fiche de match<i class="icofont-long-arrow-right"></i></a></p>
                </div>  
            </div>
          </div>
        </div>
      </section>

      <!--debut section-->
      <div class="container-fluid">
        <div class="row" style="padding: 25px;">
          <div class="col-lg-4 col-sm-12 shadow-lg p-3 mb-5 bg-body rounded;" style="padding-right: 25px;">
            <div class="row">
              <div class="col">
                <img src="img/logo.PNG" class="img-fluid" alt="" style="">
                <h6 style="text-align: center;">FC SAN PEDRO</h6>
              </div>
              <div class="col">
              <img src="img/vs.PNG" class="img-fluid" alt="" style="">
              </div>
              <div class="col">
                <img src="img/logo.PNG" class="img-fluid" alt="" style="">
                <h6 style="text-align: center;">FC SAN PEDRO</h6>
              </div>
            </div>
            <div class="row" style="background-color: #000; padding: 10px;">
              <div class="col" style="padding-top: 5px;"><h6 style="color: #fff;">Ligue 1 - 15 sep 2021</h6></div>
              <div class="col" style="text-align: center; background-color: #f65101;"><a href="#" style="text-decoration: none; color: #fff;">INFOS BILLETERIE</a></div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12 shadow-lg p-3 mb-5 bg-body rounded;" style="padding-right: 25px;">
            <div class="row">
              <div class="col">
                <img src="img/logo.PNG" class="img-fluid" alt="" style="">
                <h6 style="text-align: center;">FC SAN PEDRO</h6>
              </div>
              <div class="col">
              <img src="img/vs.PNG" class="img-fluid" alt="" style="">
              </div>
              <div class="col">
                <img src="img/logo.PNG" class="img-fluid" alt="" style="">
                <h6 style="text-align: center;">FC SAN PEDRO</h6>
              </div>
            </div>
            <div class="row" style="background-color: #000; padding: 10px;">
              <div class="col" style="padding-top: 5px;"><h6 style="color: #fff;">Ligue 1 - 15 sep 2021</h6></div>
              <div class="col" style="text-align: center; background-color: #f65101;"><a href="#" style="text-decoration: none; color: #fff;">INFOS BILLETERIE</a></div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12 shadow-lg p-3 mb-5 bg-body rounded;" style="padding-right: 25px;">
            <div class="row">
              <div class="col">
                <img src="img/logo.PNG" class="img-fluid" alt="" style="">
                <h6 style="text-align: center;">FC SAN PEDRO</h6>
              </div>
              <div class="col">
              <img src="img/vs.PNG" class="img-fluid" alt="" style="">
              </div>
              <div class="col">
                <img src="img/logo.PNG" class="img-fluid" alt="" style="">
                <h6 style="text-align: center;">FC SAN PEDRO</h6>
              </div>
            </div>
            <div class="row" style="background-color: #000; padding: 10px;">
              <div class="col" style="padding-top: 5px;"><h6 style="color: #fff;">Ligue 1 - 15 sep 2021</h6></div>
              <div class="col" style="text-align: center; background-color: #f65101;"><a href="#" style="text-decoration: none; color: #fff; padding-top: 15px;">INFOS BILLETERIE</a></div>
            </div>
          </div>
        </div>
      </div>
      <!--fin section-->
      
      <!--prémière section actu + resultat de match-->
      <section>
        <div class="container-fluid blocks-1" style="padding-left: 0px; padding-right: 0px; margin-left:0px; margin-right: 0px;">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12" style="height: auto;">
                <div class="overlay-image-lg img-hover-zoom img-hover-zoom--brightness animate-box"><a href="news-id2.php">  
                  <img src="img/ess1.jpg" class="img-fluid" alt="" style="max-width: 100%; height: 405px; display: block;">
                  <div><img src="img/icones/news.png" class="" alt="" style="width: 50px; height: 50px; padding: 8px 12px; position: absolute; top: 0;"></div>
                  <div class="text" style="padding-bottom: -25px;">
                    <div style="background-color:; position:absolute; text-align: center; top: 300px; left:0px; width:300px; height:190px; z-index:2; font-size:75%; margin-left: -10px;">
                      <p style="padding-bottom: 30px;"><h6 style="border-radius: 0px; padding: 5px; margin-left: 0px; color: #fff; background-color: #f65101; opacity: 1; width: 80%;">Coupe de la Confédération:</h6> Les Pétruciens ont du cran !
                      </p>
                    <h6 style="border-radius: 5px; padding: 5px; margin-left: 5px; color: #f65101; /*background-color: #f65101; opacity: 1;*/ width: 80%; font-weight: 600;">EQUIPE PRO | 23 DECEMBRE 2020</h6>
                      <!--div style="font-size: 50%;">
                        <small style="border-radius: 5px; padding: 5px; background-color: #f65101; opacity: 1">EQUIPE PRO | 15 FEVRIER 2021</small>
                      </div-->
                  </div>
                    </div>
                </a></div>
              </div>
              <!--div class="col-lg-3 col-md-6 col-sm-12" style="height: auto;">
                <div class="overlay-image-lg img-hover-zoom img-hover-zoom--brightness animate-box"><a href="news-id3.php">  
                  <img src="img/nn1.jpg" class="img-fluid" alt="" style="width: 100%; height: 405px; display: block;">
                  <div><img src="img/icon/news3.png" class="" alt="" style="width: 50px; height: 50px; padding: 8px 12px; position: absolute; top: 0;"></div>
                  <div class="text" style="padding-bottom: -25px;">
                    <div style="background-color:; position:absolute; text-align: center; top: 300px; left:0px; width:300px; height:190px; z-index:2; font-size:75%; margin-left: -10px;">
                      <p style="padding-bottom: 30px;"><h6 style="border-radius: 0px; padding: 5px; margin-left: 0px; color: #fff; background-color: #f65101; opacity: 1; width: 80%;">Actualité:</h6> La belle surprise du grand Chef !
                      </p>
                    <h6 style="border-radius: 5px; padding: 5px; margin-left: 5px; color: #f65101; /*background-color: #f65101; opacity: 1;*/ width: 100%; font-weight: 600;">CLUB | 16 DECEMBRE 2020</h6>
                      <!-div style="font-size: 50%;">
                        <small style="border-radius: 5px; padding: 5px; background-color: #f65101; opacity: 1">EQUIPE PRO | 15 FEVRIER 2021</small>
                      </div->
                  </div>
                    </div>
                </a></div>
              </div-->
              <div class="col-lg-3 col-md-6 col-sm-12" style="height: 405px;">
                <div class="overlay-image-lg img-hover-zoom img-hover-zoom--brightness animate-box"><a href="news-id3.php">
                  <div style="border-color:#fff; border: 1px solid; border-radius: 0px;">  
                    <img src="img/nn1.jpg" class="img-fluid" alt="" style="width: 100%; height: 200px; display: block;">
                  </div>  
                  <div><img src="img/icon/news3.png" class="" alt="" style="width: 50px; height: 50px; padding: 8px 12px; position: absolute; top: 0;"></div>
                  <div>
                    <h5>Exemple de titre</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus repellendus quis neque  amet!</p>
                  </div>
                  <div style="display: flex; position: absolute; top: 20em;">
                    <div style="width: auto; margin-right: 1px;">
                      <h6>Equipe Pro</h6>
                    </div>
                    <div style="width: auto; margin-right: 1px;">
                      <h6>|</h6>
                    </div>
                    <div style="width: auto;">
                      <h6>21 Septembre 2021</h6>
                    </div>
                  </div>
                </a></div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12" style="height: auto; padding-right: -50px;">
                <div class="overlay-image-lg img-hover-zoom img-hover-zoom--brightness animate-box"><a href="news-id4.php">  
                  <img src="img/nn2.jpg" class="img-fluid" alt="" style="max-width: 100%; height: 405px; display: block;">
                  <div><img src="img/icon/news2.png" class="" alt="" style="width: 50px; height: 50px; padding: 8px 12px; position: absolute; top: 0;"></div>
                  <div class="text" style="padding-bottom: -25px;">
                    <div style="background-color:; position:absolute; text-align: center; top: 300px; left:0px; width:300px; height:190px; z-index:2; font-size:75%; margin-left: -10px;">
                      <p style="padding-bottom: 30px;"><h6 style="border-radius: 0px; padding: 5px; margin-left: 0px; color: #fff; background-color: #f65101; opacity: 1; width: 80%;">Actualité:</h6> Bonne moisson pour les Pétrusiens
                      </p>
                    <h6 style="border-radius: 5px; padding: 5px; margin-left: 5px; color: #f65101; /*background-color: #f65101; opacity: 1;*/ padding-bottom: -10px; width: 80%; font-weight: 600;">EQUIPE PRO | 15 DECEMBRE 2020</h6>
                      <!--div style="font-size: 50%;">
                        <small style="border-radius: 5px; padding: 5px; background-color: #f65101; opacity: 1">EQUIPE PRO | 15 FEVRIER 2021</small>
                      </div-->
                  </div>
                    </div>
                </a></div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12" style="height: auto;">
                <table class="table table-dark table-sm">
                <h2 class=" bg-dark" style="text-align: center; color: #fff; margin-bottom: -1px; border-bottom: 2px solid; border-color: #fff;">Resultat</h2>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Equipe locale</th>
                      <th scope="col">SCORE</th>
                      <th scope="col">Visiteur</th>
                    </tr>
                  </thead>
                  <tbody>
                  <p class=" bg-dark" style="text-align: center; color: #fff; margin-bottom: -1px; border-bottom: 2px solid; border-color: #fff; opacity: 0.8;">samedi 22 mai 2021</p>
                    <tr>
                      <th scope="row">1</th>
                      <td>Hoffenheim</td>
                      <td style="text-align: center">2-1</td>
                      <td>Hertha</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Celta Vigo</td>
                      <td style="text-align: center">2-3</td>
                      <td>Betis</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Celta Vigo</td>
                      <td style="text-align: center">2-3</td>
                      <td>Betis</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Celta Vigo</td>
                      <td style="text-align: center">2-3</td>
                      <td>Betis</td>
                    </tr>
                  </tbody>
                </table>
                <div style="text-align: center;">
                <button type="button" class="btn btn-dark btn-lg">VOIR TOUS LES RESULTATS</button>
                </div>
              </div>
          </div>
        </div>
      </section>    
      <!-- fin section-->

      <!--deuxième section actu + classement des match-->
      <section style="margin: 25px;">
        <div class="container-fluid blocks-1" style="padding-left: 0px; padding-right: 0px; ">
          <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12" style="height: auto;">
              <div class="overlay-image-lg img-hover-zoom img-hover-zoom--brightness animate-box"><a href="https://youtu.be/ljrVk3XTejU">  
                <img src="img/nn3.jpg" class="img-fluid" alt="" style="max-width: 100%; height: 405px; display: block;">
                <div><img src="img/icones/playbtn2.png" class="" alt="" style="width: 50px; height: 50px; padding: 8px 12px; position: absolute; top: 0;"></div>
                <div class="text" style="padding-bottom: -25px;">
                  <div style="background-color:; position:absolute; text-align: center; top: 300px; left:0px; width: auto; height:190px; z-index:2; font-size:75%; margin-left: 10px;">
                    <p style="padding-bottom: 30px;"><h6 style="border-radius: 0px; padding: 5px; margin-left: 0px; color: #fff; background-color: #f65101; opacity: 1; width: 80%;">LIGUE 1 - 20ème JOURNEES:</h6>FC SAN PEDRO 3-0 ASI - Résumé
                    </p>
                  <h6 style="border-radius: 5px; padding: 5px; margin-left: 5px; color: #f65101; /*background-color: #f65101; opacity: 1;*/ width: 80%; font-weight: 600;">EQUIPE PRO | 15 FEVRIER 2021</h6>
                    <!--div style="font-size: 50%;">
                      <small style="border-radius: 5px; padding: 5px; background-color: #f65101; opacity: 1">EQUIPE PRO | 15 FEVRIER 2021</small>
                    </div-->
                </div>
                  </div>
              </a></div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" style="height: auto;">
              <div class="overlay-image-lg img-hover-zoom img-hover-zoom--brightness animate-box"><a href="photo-id2.php">  
                <img src="img/nn4.jpg" class="img-fluid" alt="" style="max-width: 100%; height: 405px; display: block;">
                <div><img src="img/icon/picture.png" class="" alt="" style="width: 50px; height: 50px; padding: 8px 12px; position: absolute; top: 0;"></div>
                <div class="text" style="padding-bottom: -25px;">
                  <div style="background-color:; position:absolute; text-align: center; top: 300px; left:0px; width:300px; height:190px; z-index:2; font-size:75%; margin-left: -10px;">
                    <p style="padding-bottom: 30px;"><h6 style="border-radius: 0px; padding: 5px; margin-left: 0px; color: #fff; background-color: #f65101; opacity: 1; width: 80%;">Lonaci Ligue 1:</h6> Séance d'entrainement
                    </p>
                  <h6 style="border-radius: 5px; padding: 5px; margin-left: 5px; color: #f65101; /*background-color: #f65101; opacity: 1;*/ width: 80%; font-weight: 600;">EQUIPE PRO | 21 AOÛT 2021</h6>
                    <!--div style="font-size: 50%;">
                      <small style="border-radius: 5px; padding: 5px; background-color: #f65101; opacity: 1">EQUIPE PRO | 15 FEVRIER 2021</small>
                    </div-->
                </div>
                  </div>
              </a></div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" style="height: 300px;">
              <table class="table table-dark table-sm">
              <h2 class=" bg-dark" style="text-align: center; color: #fff; margin-bottom: -1px; border-bottom: 2px solid; border-color: #fff;">Classement</h2>
                <thead>
                  <tr>
                    <th scope="col">Place</th>
                    <th scope="col">Equipe</th>
                    <th scope="col">Point</th>
                    <th scope="col">Buts marqués</th>
                  </tr>
                </thead>
                <tbody>
                <p class=" bg-dark" style="text-align: center; color: #fff; margin-bottom: -1px; border-bottom: 2px solid; border-color: #fff; opacity: 0.8;">6ème journées - LIGUE 1</p>
                  <tr>
                    <th scope="row">1</th>
                    <td>Hoffenheim</td>
                    <td style="text-align: center">22</td>
                    <td style="text-align: center">9</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Celta Vigo</td>
                    <td style="text-align: center">20</td>
                    <td style="text-align: center">7</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Celta Vigo</td>
                    <td style="text-align: center">16</td>
                    <td style="text-align: center">5</td>
                  </tr>
                  <!--tr>
                    <th scope="row">4</th>
                    <td>Celta Vigo</td>
                    <td style="text-align: center">11</td>
                    <td style="text-align: center">2</td>
                  </tr-->
                </tbody>
              </table>
              <div style="text-align: center;">
                <button type="button" class="btn btn-dark btn-lg" style="font-size: 17px;">VOIR LE CLASSEMENT DETAILLE</button>
              </div>
            </div>
            <!--div class="col-lg-3 col-md-6 col-sm-12" style="height: auto;">
              <div class="overlay-image img-hover-zoom img-hover-zoom--brightness animate-box"><a href="URL_LIEN">
                <img src="img/fcsp-4.JPEG" class="img-fluid" alt="" style="width:500px; height: 400px;">
                <div class="text">
                  <p style="margin-top: 400px;">Image + texte Image + texte Coupe de la Confédération Coupe de la Confédération Coupe de la Confédération PAS DE HOVER</p>
                </div>
              </a></div>
            </div-->
          </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto" style="margin: 25px;">
          <a href="group-news1.php" class="btn btn-dark" type="button">VOIR PLUS D'ARTICLES</a>
        </div>
      </section>

      <!-- fin section-->
      <section id="fh5co-features" style="margin-top: 25px;">
        <div class="container-fluids">
          <div class="row text-center row-bottom-padded-md">
            <div class="col-md-12 col-md-offset-2">
              <figure class="fh5co-devices animate-box"><img src="img/banner-sponsor/banner-2.JPG" alt="Free HTML5 Bootstrap Template" class="img-fluid" alt="banner-sponsor1" style="width: 100%; height: 100%;"></figure>
              <h2 class="fh5co-lead animate-box">FCSP TV - FC SAN PEDRO</h2>
              <p class="fh5co-sub-lead animate-box">FCSP TV est la chaine officielle en ligne pour revivre tous les matchs de la saison du FC SAN PEDRO en intégralité.</p>
              {{-- <?php include('fcsptv.php'); ?> --}}
            </div>
          </div>
        </div>
      </section>
      <!--debut section fcsp tv-->
      <//?php include('fcsptv.php'); ?>
      <!--fin section fcsp tv-->
      <!-- fin section-->
      <!--debut section boutique-->
      <div class="">
        <div class="row" style="margin-top: 25px;">
          <div class="container-shop col-lg-12 col-sm-12 animate-box">
            <a href="shop1.php" style="text-decoration: none;">
              <div class="img-hover-zoom img-hover-zoom--brightness">
                <img src="img/banner-shop1.JPG" class="img-fluid" alt="" style="width:100%;">
              </div>
              <div class="content-shop">
                <h2 class="fh5co-lead animate-box">Obtenez la nouvelle collection des maillots extérieurs de FC SAN PEDRO</h2>
                <p class="fh5co-sub-lead animate-box">
                  <button type="button" class="btn btn-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                      <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                    </svg> ACHETER ICI</button>
                </p>
              </div>
              <h3 class="title-shop fh5co-lead animate-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16" style="margin-bottom: 5px;">
                  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg> BOUTIQUE</h3>
            </a>
          </div>
        </div>
      </div>
      <!--fin section boutique-->

    <!--fin section site principal-->
    <!--debut footer-->
      <section id="fh5co-features" style="margin-top: 25px;">
          <div class="container-fluids">
            <div class="row row-bottom-padded-md">
              <div class="col-md-12 col-md-offset-2">
                <figure class="fh5co-devices animate-box"><img src="img/banner-sponsor/banner-2.JPG" alt="Free HTML5 Bootstrap Template" class="img-fluid" alt="banner-sponsor1" style="width: 100%; height: 100%;"></figure>
                <!--h2 class="fh5co-lead animate-box">FCSP TV - FC SAN PEDRO</h2>
                <p class="fh5co-sub-lead animate-box">FCSP TV est la chaine officielle en ligne pour revivre tous les matchs de la saison du FC SAN PEDRO en intégralité.</p-->
        @include('acceuil/footer')
              </div>
            </div>
          </div>
        </section>
    {{-- <//?php include('footer.php');?> --}}
    <script>
      AOS.init();
    </script>
      <script  src ="js/aos.js" > </script>

      <style>
        .transparent {
          position: relative;
          max-width: 800px; /* Maximum width */
          margin: 0 auto; /* Center it */
        }
        
        .transparent .trans {
          position: absolute; /* Position the background text */
          bottom: 0; /* At the bottom. Use top:0 to append it to the top */
          background: rgb(0, 0, 0); /* Fallback color */
          background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
          color: #f1f1f1; /* Grey text */
          width: 100%; /* Full width */
          padding: 20px; /* Some padding */
        }
      </style>

      <style>
        /********* Superposition simple de texte sur une image *******/

          /* Conteneur principal */
          .overlay-image {
          position: relative;
          width: 100%;
          height: auto;
          }

          /* Image originale */
          .overlay-image .image {
          display: block;
          width: 100%;
          height: auto;
          }

          /* Texte original */
          .overlay-image .text {
          color: #fff;
          background: linear-gradient(to top, #800000 11%, #ff6600 100%);
          opacity: 0.3;
          font-size: 30px;
          line-height: 1.5em;
          text-shadow: 2px 2px 2px #000;
          text-align: center;
          position: absolute;
          top: 80%;
          left: 50%;
          transform: translate(-50%, -50%);
          width: 100%;
          height: 900px;
          }
      </style>
      <style>
        .overlay-image-lg {
          position: relative;
          width: 100%;
          height: auto;
          }

          /* Image originale */
          .overlay-image-lg .image {
          display: block;
          width: 100%;
          height: auto;
          }

          /* Texte original */
          .overlay-image-lg .text {
          color: #fff;
          /*background: linear-gradient(to top, #800000 50%, #ff6600 50%);
          opacity: 40%;*/
          font-size: 30px;
          line-height: 1.5em;
          text-shadow: 2px 2px 2px #000;
          text-align: center;
          position: absolute;
          top: 80%;
          left: 50%;
          transform: translate(-50%, -50%);
          width: 100%;
          height: 900px;
          }
      </style>

      <style>
        .overlay-image-lg {
          position: relative;
          width: 100%;
          height: auto;
          }

          /* Image originale */
          .overlay-image-lg .image {
          display: block;
          width: 100%;
          height: auto;
          }

          /* Texte original */
          .overlay-image-lg .text-tv {
          color: #f65100;
          /*background: linear-gradient(to top, #800000 50%, #ff6600 50%);
          opacity: 40%;*/
          font-size: 30px;
          line-height: 1.5em;
          text-align: center;
          position: absolute;
          top: 80%;
          left: 50%;
          transform: translate(-50%, -50%);
          width: 100%;
          height: 900px;
          }
      </style>



      <script type="text/javascript">
        //debut js code du compte à rebours du match à l'affiche
      // Set the date we're counting down to
      var countDownDate = new Date("Sep 8, 2021 15:00:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var Jours = Math.floor(distance / (1000 * 60 * 60 * 24));
        var heures = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var secondes = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("deadline").innerHTML = Jours + " j " + heures + " h " + minutes + " m " + secondes + " s ";

        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("deadline").innerHTML = "Terminé";
        }
      }, 1000);
      </script>

      <!--script>
        AOS.init();
        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
          // Global settings:
          disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
          startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
          initClassName: 'aos-init', // class applied after initialization
          animatedClassName: 'aos-animate', // class applied on animation
          useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
          disableMutationObserver: false, // disables automatic mutations' detections (advanced)
          debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
          throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
          

          // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
          offset: 120, // offset (in px) from the original trigger point
          delay: 0, // values from 0 to 3000, with step 50ms
          duration: 400, // values from 0 to 3000, with step 50ms
          easing: 'ease', // default easing for AOS animations
          once: false, // whether animation should happen only once - while scrolling down
          mirror: false, // whether elements should animate out while scrolling past them
          anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });

      </script-->
    </body>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
    <script src="js/jquery.style.switcher.js"></script>
    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>

  <!-- 
  INFO:
  jQuery Cookie for Demo Purposes Only. 
  The code below is to toggle the layout to boxed or wide 
  ->
  <script src="js/jquery.cookie.js"></script-->
  <!--script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script-->
