<div style="position: fixed; top: 0; right: 0; left: 0; z-index: 1030; background-color: #fff;">
    <div style="background-color: #000; height: 54px;">
      <div class="row">
          <div class="col-2" style="padding-top:18px;">
              <h6 class="title-banner">Flash infos: </h6>
          </div>
          <div class="col-10" style="padding-top:10px;">
              <marquee class="content-banner" behavior="scroll" direction="left">Le coach 𝐓𝐀𝐑𝐄𝐊 𝐉𝐀𝐍𝐈 est de retour à la tête des Pétruciens ! Welcome home Coach .</marquee> 
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-5">
          <div style="left: 1%; bottom: 20%; position: absolute;">
              <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" style="text-decoration: none; font-weight: 600; color: #000;">BILLETERIE</a></li>
                  <li class="list-inline-item" style="margin-left: 10px;"><a href="shop1.php" style="text-decoration: none; font-weight: 600; color: #000;">BOUTIQUE</a></li>
                  <li class="list-inline-item" style="margin-left: 10px;"><a href="#" style="text-decoration: none; font-weight: 600; color: #000;">TRANSFERT DE JOUEUR</a></li>
              </ul>
          </div>
      </div>
      <div class="col-7">
        <img src="img/fc-sanpedro.png" class="rounded float-start" alt="..." width="80" height="75" style="margin-top: 5px; margin-bottom: 5px; margin-left: 50px;">
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-orange" aria-label="Tenth navbar example" style="height: 56px;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="dropdownmenu navbar-nav">
            <li class="nav-item"><a href="index.php">FCSP.CI</a></li><!--
            --><li class="nav-item"><a href="match.php">Match</a></li><!--
            --><li class="nav-item"><a href="group-news1.php">Actualité</a></li><!--
            --><li class="nav-item"><a href="#">Club</a>
                <ul>
                    <li class="h-club"><a href="organigramme.php">Organigramme</a></li>
                    <li class="h-club"><a href="histoire.php">Histoire</a></li>
                    <li class="h-club"><a href="palmares.php">Palmarès</a></li>
                    <li class="h-club"><a href="coach.php">Entraineurs</a></li>
                    <li class="h-club"><a href="centre-d-entrainement.php">Centre d'entrainement</a></li>
                    <li class="h-club"><a href="patenaires.php">Partenaires</a></li>
                </ul>
            </li><!--
            --><li class="nav-item"><a href="{{route('equipepro.index')}}">Equipe Pro</a>
                <ul>
                    <li class="h-pro"><a href="#">Classement</a></li>
                    <li class="h-pro"><a href="#">Resultat</a></li>
                    <li class="h-pro"><a href="#">Calendrier</a></li>
                </ul>
            </li><!--
            --><li class="nav-item"><a href="#">Academie</a>
                <ul>
                    <li class="nav-item h-academie"><a href="#">Staff</a></li>
                    <li class="nav-item h-academie"><a href="{{route('equipepro.index')}}">EQUIPE PRO</a></li>
                    <li class="nav-item h-academie"><a href="#">U13</a></li>
                    <li class="nav-item h-academie"><a href="#">U15</a></li>
                    <li class="nav-item h-academie"><a href="#">U17</a></li>
                    <li class="nav-item h-academie"><a href="#">U20</a></li>
                </ul>
            </li><!--
            --><li class="nav-item"><a href="group-photo1.php">Photos</a></li><!--
            --><li class="nav-item"><a href="group-video1.php">Vidéo</a></li><!--
            --><li class="nav-item"><a href="fans.php">Fans</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  
  <style>
    .dropdownmenu {
        background-color: #f65101;
    }
    /* Suppression des puces et des marges pour les listes du menu et des sous-menus */ 
    .dropdownmenu,
    .dropdownmenu ul {
        list-style-type: none; 
        margin: 0px; 
        padding: 0px;
    } 
    .dropdownmenu ul { /* Masquage des sous-menu par defaut */
        display: none;
    }
    .dropdownmenu li {
        /* Disposition horizontale des elements de menu */
        display: inline-block;
        /* Positionnement relative des elements de menu pour pouvoir    positionner les sous-menu correctement en absolu */
        position: relative;
    }
    .dropdownmenu a {
        /* On transforme les liens en bloc pour pouvoir les dimensionner */
        display: block;
        /* Dimensions des liens */ 
        width: 100%; 
        height: auto; 
        line-height: 30px; 
        /* Doit etre equivalent a la hauteur du menu pour centrer le texte verticalement */
        padding: 3px 10px;
        text-align: center;
    }
  /*redimensionnement des sous menus*/
    .h-club{
      width: 125px;
    }
  
    .h-pro{
      width: 125px;
    }
  
    .h-academie{
      width: 125px;
    }
  
    .dropdownmenu li:hover ul {
        /* Affichage du soumenu au survol */
        display: block;
        /* Positionnement du sous-menu */ 
        position: absolute; 
        top: 36px; /* Hauteur du menu + hauteur du padding top et bottom : 30 + 3 + 3 = 36 */ 
        left: 0px; /* Decalage du sous-menu par rapport aux liens du menu*/ 
        z-index: 100; /* Gestion de la superposition des sous-menus par rapport au reste de la page */
        margin: 
    }
    .dropdownmenu ul a { 
        /* Changement de l'affichage des liens des    sous-menus pour ne pas les afficher en inline-block comme les liens de menu, ils seront donc verticaux */
        display: block;
    }
    /*on supprime le souslignement des liens*/
    a{
        text-decoration: none;
    }
  
    /* Gestion des couleurs */
    .dropdownmenu li { 
        background-color: #f65101; /* Couleur d'arriere-plan du menu */
    }
    .dropdownmenu li a { 
        color: #ccc; /* Couleur du texte du menu */ 
    }
    .dropdownmenu li:hover {
        background-color: #f65101; /* Couleur d'arriere-plan du menu au survol */
    }
    .dropdownmenu li:hover a {
        color: #fff; /* Couleur du texte du menu au survol */ 
    }
    .dropdownmenu ul li { 
        background-color: #f65101; /* Couleur d'arriere-plan des sous-menu */ 
    }
    .dropdownmenu ul li:hover {
        background-color: #000; /* Couleur d'arriere-plan des sous-menu au survol */ 
    }
    .dropdownmenu ul li a {
        color: #fff; /* Couleur du texte des sous-menu */ 
    }
    .dropdownmenu ul li:hover a {
        color: #fff; /* Couleur du texte des sous-menu au survol */
    }
  </style>