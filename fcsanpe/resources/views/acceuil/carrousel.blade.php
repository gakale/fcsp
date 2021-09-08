
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" style="padding-top: 170px;">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/diapo2.gif" class="d-block w-100" alt="..." height="500">

            <div class="container">
            <div class="carousel-caption">
                <!--h1>Example headline.</h1>
                <p style="font-size: 25px;">Bienvenue sur le site internet officiel des Pétruciens.</p-->
                <p><a class="btn btn-lg btn-dark" href="histoire.php">HISTORIQUE DU CLUB</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/diapo4.JPG" class="d-block w-100" alt="..." height="500">

            <div class="container">
            <div class="carousel-caption">
                <!--h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p-->
                <p><a class="btn btn-lg btn-dark" href="news-diapo.php">LIRE L'ARTICLE</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/news-id1.JPG" class="d-block w-100" alt="..." height="500">

            <div class="container">
            <div class="carousel-caption">
                <h1 style="color: #fff;">4 Académiciens du FC SAN PEDRO en Or !</h1>
                <p style="font-size: 25px;">La campagne royale des U17 de CÔTE D'IVOIRE, a été marquée par les belles...</p>
                <p><a class="btn btn-lg btn-dark" href="news-id1.php">LIRE L'ARTICLE</a></p>
            </div>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>