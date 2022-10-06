<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>MegaPlay | Music Dashboard</title>

  <!-- MDB icon -->
  <link rel="icon" href="img/brands/favicon.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!--Slick-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <link rel="stylesheet" href="css2/mdb.min.css" />
  <!-- PRISM -->
  <link rel="stylesheet" href="dev/css/new-prism.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/style.css" />
  <style>
    @media (min-width: 1400px) {

      main,
      header,
      #main-navbar {
        padding-left: 240px;
      }
    }
  </style>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- ****** inicio Sidenav left ******* -->
    <div id="sidenav-left-2" class="sidenav bg-sidenav width-sidenav" role="navigation" data-hidden="false" data-accordion="true">
      <a class="ripple d-flex justify-content-center py-4" href="#!" data-ripple-color="danger">
        <img id="MDB-logo" src="img/brands/logo.png" alt="MDB Logo" draggable="false" style="width: 70%;" />
      </a>

      <ul class="sidenav-menu">
        <!--item 0-->
        <li class="sidenav-item">
          <a class="sidenav-link"><i class="fab fa-buffer icon-sidenav"></i><span class="item-sidenav">Entreterimento</span></a>
          <ul class="sidenav-collapse">
            <li class="sidenav-item">
              <a class="sidenav-link item-sidenav sidenav-module" >Apps&Jogos</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link item-sidenav sidenav-module">Filmes</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link item-sidenav sidenav-module">Música</a>
            </li>
          </ul>
        </li>
        <!-- fim item 0-->
        <li class="sidenav-item ">
          <!--item 1-->
          <a class="sidenav-link link-active ripple" href="index.php">
            <i class="fas fa-home icon-sidenav "></i><span class="item-sidenav">INÍCIO</span></a>
        </li>
        <!--fim item 1 -->
        <li class="sidenav-item " >
          <!--item 2-->
          <a class="sidenav-link ripple" href="music.php">
            <i class="fas fa-music  icon-sidenav"></i><span class="item-sidenav">MÚSICAS</span></a>
        </li>
        <!--fim item 2 -->
        <li class="sidenav-item">
          <!--item 4-->
          <a class="sidenav-link  ripple" href="artists.php">
            <i class="fas fa-user  icon-sidenav"></i><span class="item-sidenav">ARTISTAS</span></a>
        </li>
        <!--fim item 4-->
        <li class="sidenav-item ">
          <!--item 5-->
          <a class="sidenav-link ripple" href="playlists.php">
            <!--pr-3-->
            <i class="fas fa-headphones  icon-sidenav"></i><span class="item-sidenav">PLAYLISTS</span>
          </a>
        </li>
        <!--fim item 5-->

      </ul>
    </div>
    <!-- ******* fim Sidenav left ******* -->

    <!-- ******* inicio Navbar top ***** -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-sidenav fixed-top height-sidenav">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggler -->
        <button data-toggle="sidenav" data-target="#sidenav-left-2" class="btn shadow-0 p-0 mr-3 d-block d-xxl-none" aria-controls="#sidenav-left-2" aria-haspopup="true">
          <i class="fas fa-bars fa-lg"></i>
        </button>

        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto form-source-control">
          <input autocomplete="off" type="search" class="form-control form-source-control rounded src-color" placeholder='Pesquise por música, álbum ou artista' style="min-width: 350px" />
          <button class="input-group-text border-0 btn-submit"><i class="fas fa-search"></i></button>
        </form>

        <!-- Right links -->
        <ul class="navbar-nav ml-auto d-flex flex-row">
          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="square-photo" height="35" alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="profile.php">Meu Perfil</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
          <!--fim avatar-->
          <!-- Icon -->
          <li class="nav-item">
            <a class="nav-link mr-3 mr-lg-0" href="#">
              <span>Suzana Vieira</span>
            </a>
          </li>
          <!-- Icon -->
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- ******** fim Navbar top ********* -->
  </header>
  
  <!-- ------------------- fm Main Navigation--------------------- -->

  <!--Main layout-->
  <!--********************top banner************-->
  <div class="container-fluid container-fluid-gradient">
    <div class="slider-banner">
      <?php

      $BGSlide = [
        [
          "img" => "img01.jpg",
          "title" => "estação pop",
          "text" => "lorem ispum dolor sit amet"
        ],  [
          "img" => "img01.jpg",
          "title" => "estação rock",
          "text" => "lorem ispum dolor sit amet"
        ],  [
          "img" => "img01.jpg",
          "title" => "estação samba",
          "text" => "lorem ispum dolor sit amet"
        ]

      ];
      $count = 1;

      foreach ($BGSlide as $BGList) {
      ?>




        <div class="banner-geral" style="background-image: url('img/<?php echo $BGList['img'] ?>');">
          <div class="artist-banner-gradient">
            <div class="artist-banner-container2 container-fluid">
              <!----------photo-->
              <div class="artist-banner-photo2">
              </div>
              <!---------fim photo-->
              <!---------box-->
              <div class="banner-box container-fluid">
                <h1><?php echo $BGList['title'] ?></h1>
                <br>
                <div class="artist-banner-controls">
                  <button type="button" class="btn btn-danger btn-floating btn-artist"><i class="fas fa-play"></i></button>
                  <button type="button" class="btn btn-danger btn-floating btn-artist"><i class="far fa-heart"></i></button>
                </div>
              </div>
              <!--------fim box-->
            </div>
          </div>
        </div>

      <?php
        $count++;
      }
      ?>
    </div>
  </div>
  <!--********************fim top banner************-->
  <section class="body-main">

    <section class="section-1">

      <!--title carousel top-->
      <!--include -->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal box -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">
                <?php include_once("modals/modal-box.php") ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim modal box-->
      <div class="hr"></div>
      <!------------------------CAROUSEL top------------------------>
      <div class="slider-1 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome as $hlist) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo" style="background-image: url('img/photo-music/<?php echo $hlist['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!--FIM CAROUSEL-->
      <!-----------------------------fim CAROUSEL top---------------------------------------->

      <!---------------------section hot singles------------------------->
      <section class="container-fluid container-margin2 ">
        <div class="row">
          <div class="col-md-6">
            <!--text-->
            <div class="text-single">
              <h1>Hot Singles</h1>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                VER TODOS
              </button>
              <!-- ***************** MODAL ************************ -->
              <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title title-modal" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body ">
                      <?php include_once("modals/modal-duble.php") ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                        Reproduzir Todas
                      </button>
                      <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                  </div>
                </div>
              </div>
              <!-- ****** FIM MODAL ******** -->
            </div>
            <!--fim text single-->
            <div class="hr"></div>
            <!--box-->
            <div class="row">
              <!------------------coluna 1-->
              <div class="col-md-6">
                <?php

                $ColList = [
                  [
                    "img" => "avenged.png",
                    "music" => "so far away",
                    "artist" => "avenged sevenfold"
                  ],  [
                    "img" => "nirvana.jpg",
                    "music" => "come as you are",
                    "artist" => "nirvana"
                  ],  [
                    "img" => "oasis.png",
                    "music" => "wonderwall",
                    "artist" => "oasis"
                  ],  [
                    "img" => "alice.jpg",
                    "music" => "man in the box",
                    "artist" => "alice in chains"
                  ]

                ];
                $count = 1;

                foreach ($ColList as $List) {
                ?>

                  <!--box 1-->

                  <div class="box-single">
                    <!--geral controlador -->
                    <div class="box-single-photo" style="background-image:url('img/photo-music/<?php echo $List['img'] ?>');">
                      <div class="box-single-photo-content">
                        <!--conteudo hover-->
                        <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                      </div>
                    </div>
                    <div class="box-single-text">
                      <a href="">
                        <h1><?php echo $List['music'] ?></h1>
                      </a>
                      <a href="artist.php">
                        <p><?php echo $List['artist'] ?></p>
                      </a>
                    </div>
                  </div>


                  <!--fim box 1-->



                <?php
                  $count++;
                }
                ?>

              </div>
              <!--------------fim coluna 1-->
              <!---------------coluna 2-->
              <div class="col-md-6">
                <?php

                $ColList2 = [
                  [
                    "img" => "avenged.png",
                    "music" => "so far away",
                    "artist" => "avenged sevenfold"
                  ],  [
                    "img" => "nirvana.jpg",
                    "music" => "come as you are",
                    "artist" => "nirvana"
                  ],  [
                    "img" => "oasis.png",
                    "music" => "wonderwall",
                    "artist" => "oasis"
                  ],  [
                    "img" => "alice.jpg",
                    "music" => "man in the box",
                    "artist" => "alice in chains"
                  ]

                ];
                $count = 1;

                foreach ($ColList2 as $List2) {
                ?>

                  <!--box 1-->

                  <div class="box-single">
                    <!--geral controlador -->
                    <div class="box-single-photo" style="background-image:url('img/photo-music/<?php echo $List2['img'] ?>');">
                      <div class="box-single-photo-content">
                        <!--conteudo hover-->
                        <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                      </div>
                    </div>
                    <div class="box-single-text">
                      <a href="">
                        <h1><?php echo $List2['music'] ?></h1>
                      </a>
                      <a href="artist.php">
                        <p><?php echo $List2['artist'] ?></p>
                      </a>
                    </div>
                  </div>

                  <!--fim box 1-->

                <?php
                  $count++;
                }
                ?>

              </div>
              <!--fim coluna 2-->
            </div>


          </div>
          <!---------------list-->
          <div class="col-md-6">
            <!--title text single-->
            <div class="text-single">
              <h1>Os Seus Sons Favoritos</h1>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalList">
                VER TODOS
              </button>
              <!-- Modal -->
              <div class="modal fade" id="ModalList" tabindex="-1" aria-labelledby="ModalListLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title title-modal" id="ModalListLabel">Sons Favoritos</h5>
                      <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                      <?php include_once("modals/modal-list.php") ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                        Reproduzir Todas
                      </button>
                      <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--fim text single-->
            <div class="hr"></div>
            <div class="row">
              <!--coluna-->
              <div class="col-md-12">
                <!--item 1-->
                <div class="box-list">
                  <button type="button" class="btn btn-primary btn-lg btn-floating btn-play2" tabindex="0"><i class="fas fa-play"></i></button>
                  <a href="">
                    <h1>Come As You Are</h1>
                  </a>
                  <a href="artist.php">
                    <p>Nirvana</p>
                  </a>
                  <span>4:20</span>
                </div>
                <div class="hr-list"></div>
                <!--fim item 1-->
                <!--item 1-->
                <div class="box-list">
                  <button type="button" class="btn btn-primary btn-lg btn-floating btn-play2" tabindex="0"><i class="fas fa-play"></i></button>
                  <a href="">
                    <h1>Come As You Are</h1>
                  </a>
                  <a href="artist.php">
                    <p>Nirvana</p>
                  </a>
                  <span>4:20</span>
                </div>
                <div class="hr-list"></div>
                <!--fim item 1-->
                <!--item 1-->
                <div class="box-list">
                  <button type="button" class="btn btn-primary btn-lg btn-floating btn-play2" tabindex="0"><i class="fas fa-play"></i></button>
                  <a href="">
                    <h1>Come As You Are</h1>
                  </a>
                  <a href="artist.php">
                    <p>Nirvana</p>
                  </a>
                  <span>4:20</span>
                </div>
                <div class="hr-list"></div>
                <!--fim item 1-->
                <!--item 1-->
                <div class="box-list">
                  <button type="button" class="btn btn-primary btn-lg btn-floating btn-play2" tabindex="0"><i class="fas fa-play"></i></button>
                  <a href="">
                    <h1>Come As You Are</h1>
                  </a>
                  <a href="artist.php">
                    <p>Nirvana</p>
                  </a>
                  <span>4:20</span>
                </div>
                <div class="hr-list"></div>
                <!--fim item 1-->
                <!--item 1-->
                <div class="box-list">
                  <button type="button" class="btn btn-primary btn-lg btn-floating btn-play2" tabindex="0"><i class="fas fa-play"></i></button>
                  <a href="">
                    <h1>Come As You Are</h1>
                  </a>
                  <a href="artist.php">
                    <p>Nirvana</p>
                  </a>
                  <span>4:20</span>
                </div>
                <div class="hr-list"></div>
                <!--fim item 1-->
                <!--item 1-->
                <div class="box-list">
                  <button type="button" class="btn btn-primary btn-lg btn-floating btn-play2" tabindex="0"><i class="fas fa-play"></i></button>
                  <a href="">
                    <h1>Come As You Are</h1>
                  </a>
                  <a href="artist.php">
                    <p>Nirvana</p>
                  </a>
                  <span>4:20</span>
                </div>
                <div class="hr-list"></div>
                <!--fim item 1-->
              </div>
              <!--fim coluna-->
            </div>
          </div>
          <!----------------fim list-->
        </div>
      </section>
      <!-------------------fim section hot singles------------------>
      <!-- *********slide mini 1**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome2 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome2 as $hlist2) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist2['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist2['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist2['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 1********** -->
      <!-- *********slide mini 2**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome3 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome3 as $hlist3) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist3['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist3['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist3['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 2********** -->

      <!-- *********slide mini 3**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome4 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome4 as $hlist4) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist4['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist4['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist4['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 3********** -->

      <!-- *********slide mini 4**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome5 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome5 as $hlist5) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist5['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist5['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist5['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 4********** -->


      <!--container-artist1-->
      <div class="container-fluid">
        <div class="row">
          <!--name artist-->
          <div class="col-md-12">
            <h1>Selecionadas Para Você</h1>
            <div class="hr" style="margin-bottom: 4%;"></div>
            <div class="text-single">
              <!--name-->
              <div class="box-artist1">
                <div class="box-artist1-photo">
                </div>
                <div class="box-artist1-name">
                  <h1>Músicas para você</h1>
                  <p>as mais populares</p>
                </div>
              </div>
              <!--fim name-->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalArtistOne">
                VER TODOS
              </button>
              <!-- Modal -->
              <div class="modal fade" id="ModalArtistOne" tabindex="-1" aria-labelledby="ModalArtistOneLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalArtistOneLabel">Mais polulares de <span style="color:#e3496b;">Nirvana</span></h5>
                      <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">...</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        Close
                      </button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hr"></div>
          </div>
          <!--fim name artist-->
        </div>
        <!-------------------------------Carousel artist 1-->
        <div class="carousel-artist2">

          <!-- INCLUDE -->
          <?php

          $MusicList = [
            [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],

          ];

          $count = 1;

          foreach ($MusicList as $MList) {
          ?>

            <!--Box 1-->
            <div class="col-md-4">
              <div class="box-artist1-music-geral">
                <!--item top-->
                <div class="box-artist1-music">
                  <div class="box-artist1-music-photo" style="background-image:url('img/photo-music/<?php echo $MList['img'] ?>');">
                    <div class="box-artist1-music-photo-content">
                      <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                    </div>
                  </div>
                  <div class="box-artist1-music-txt">
                    <a href=""><h1><?php echo $MList['music'] ?></h1></a>
                    <a href="artist.php"><p><?php echo $MList['artist'] ?></p></a>
                  </div>
                </div>
                <!--fim item top--><br>
                <!-- item bottom -->
                <div class="box-artist1-music">
                  <div class="box-artist1-music-photo" style="background-image:url('img/photo-music/<?php echo $MList['img2'] ?>');">
                    <div class="box-artist1-music-photo-content">
                      <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                    </div>
                  </div>
                  <div class="box-artist1-music-txt">
                  <a href=""><h1><?php echo $MList['music2'] ?></h1></a>
                    <a href="artist.php"><p><?php echo $MList['artist2'] ?></p></a>
                  </div>
                </div>
                <!--fim item bottom-->
              </div>
            </div>
            <!--Fim Box 1-->

          <?php
            $count++;
          }
          ?>
          <!-- FIM INCLUDE -->
        </div>
        <!--------------------fim Carousel artist 1-->
      </div>
      <!--fim container artist 2 -->
      <!-- *********slide mini 5**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome6 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome6 as $hlist6) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist6['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist6['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist6['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 5********** -->




      <!-- *********slide mini 6**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome7 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome7 as $hlist7) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist7['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist7['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist7['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 6********** -->
      <!--container-artist1-->
      <div class="container-fluid">
        <div class="row">
          <!--name artist-->
          <div class="col-md-12">
            <h1>Selecionadas Para Você</h1>
            <div class="hr" style="margin-bottom: 4%;"></div>
            <div class="text-single">
              <!--name-->
              <div class="box-artist1">
                <div class="box-artist1-photo">
                </div>
                <div class="box-artist1-name">
                  <h1>Músicas para você</h1>
                  <p>as mais populares</p>
                </div>
              </div>
              <!--fim name-->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalArtistOne">
                VER TODOS
              </button>
              <!-- Modal -->
              <div class="modal fade" id="ModalArtistOne" tabindex="-1" aria-labelledby="ModalArtistOneLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalArtistOneLabel">Mais polulares de <span style="color:#e3496b;">Nirvana</span></h5>
                      <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">...</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        Close
                      </button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hr"></div>
          </div>
          <!--fim name artist-->
        </div>
        <!-------------------------------Carousel artist 1-->
        <div class="carousel-artist2">

          <!-- INCLUDE -->
          <?php

          $MusicList2 = [
            [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],  [
              "img" => "avenged.png",
              "music" => "so far away",
              "artist" => "avenged sevenfold",
              "img2" => "avenged.png",
              "music2" => "so far away",
              "artist2" => "avenged sevenfold"
            ],

          ];

          $count = 1;

          foreach ($MusicList2 as $MList2) {
          ?>

            <!--Box 1-->
            <div class="col-md-4">
              <div class="box-artist1-music-geral">
                <!--item top-->
                <div class="box-artist1-music">
                  <div class="box-artist1-music-photo" style="background-image:url('img/photo-music/<?php echo $MList2['img'] ?>');">
                    <div class="box-artist1-music-photo-content">
                      <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                    </div>
                  </div>
                  <div class="box-artist1-music-txt">
                  <a href=""><h1><?php echo $MList2['music'] ?></h1></a>
                    <a href="artist.php"><p><?php echo $MList2['artist'] ?></p></a>
                  </div>
                </div>
                <!--fim item top--><br>
                <!-- item bottom -->
                <div class="box-artist1-music">
                  <div class="box-artist1-music-photo" style="background-image:url('img/photo-music/<?php echo $MList2['img2'] ?>');">
                    <div class="box-artist1-music-photo-content">
                      <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                    </div>
                  </div>
                  <div class="box-artist1-music-txt">
                    <a href=""><h1><?php echo $MList2['music'] ?></h1></a>
                    <a href="artist.php"><p><?php echo $MList2['artist'] ?></p></a>
                  </div>
                </div>
                <!--fim item bottom-->
              </div>
            </div>
            <!--Fim Box 1-->

          <?php
            $count++;
          }
          ?>
          <!-- FIM INCLUDE -->
        </div>
        <!--------------------fim Carousel artist 1-->
      </div>
      <!--fim container artist 2 -->
      <!-- *********slide mini 7**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome8 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome8 as $hlist8) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist8['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist8['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist8['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 7********** -->

      <!-- *********slide mini 8**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome9 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome9 as $hlist9) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist9['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist9['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist9['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 8********** -->

      <!-- *********slide mini 9**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome10 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome10 as $hlist10) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist10['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist10['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist10['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 9********** -->
      <!-- *********slide mini 10**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome11 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome11 as $hlist11) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist11['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist11['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist11['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 10********** -->

      <!-- *********slide mini 11**********-->
      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome12 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome12 as $hlist12) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist12['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist12['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist12['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 11********** -->


      <div class="text-single">
        <h1>Mais Recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
          VER TODOS
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalMusic" tabindex="-1" aria-labelledby="ModalMusicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalMusicLabel">Mais Recomendadas</h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                  Reproduzir Todas
                </button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideHome13 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideHome13 as $hlist13) {
        ?>

          <!--item 1-->
          <div class="section-1-box">
            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $hlist13['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content2">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <a href="">
                <h1><?php echo $hlist13['music'] ?></h1>
              </a>
              <a href="artist.php">
                <p><?php echo $hlist13['artist'] ?></p>
              </a>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 5********** -->



      <section class="container-fluid" style="margin-bottom: 100px;">
        <!--CAROUSEL ARTIST-->
        <!--text single-->
        <div class="text-single">
          <h1>Artistas que você vai gostar</h1>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalArtist">
            VER TODOS
          </button>
          <!-- Modal -->
          <div class="modal fade" id="ModalArtist" tabindex="-1" aria-labelledby="ModalArtistLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title title-modal" id="ModalArtistLabel">Artistas</h5>
                  <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body"><?php include_once("modals/modal-circle.php") ?></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                    Reproduzir Todas
                  </button>
                  <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--fim text single -->
        <div class="hr"></div>
        <!--Carousel-->
        <div class="carousel-artist">
          <!---------------coluna-->
          <?php

          $CarArtist = [
            [
              "img" => "ozzy.jpg",
              "artist" => "ozzy osbourne"
            ],  [
              "img" => "ghost.jpg",
              "artist" => "ghost b.c"
            ],  [
              "img" => "kreator.jpg",
              "artist" => "kreator"
            ],  [
              "img" => "acdc.jpg",
              "artist" => "ac/dc"
            ],  [
              "img" => "manson.jpg",
              "artist" => "marilyn manson"
            ],  [
              "img" => "stratovarius.jpg",
              "artist" => "stratovarius"
            ],  [
              "img" => "avantasia.jpg",
              "artist" => "avantasia"
            ],  [
              "img" => "mush.jpg",
              "artist" => "mushroomhead"
            ]

          ];
          $count = 1;

          foreach ($CarArtist as $CarArtistList) {
          ?>
            <!--item 1-->
            <div class="box-artist">
              <div class="box-artist-photo" style="background-image:url('img/photo-artist/<?php echo $CarArtistList['img'] ?>');">
              </div>
              <div class="box-artist-text" style="margin-top: 10px;">
                <a href="artist.php"><h1><?php echo $CarArtistList['artist'] ?></h1></a>
              </div>
            </div>
            <!--fm item 1-->


          <?php
            $count++;
          }
          ?>

        </div>
        <!--FIM CAROUSEL-->

      </section>


    </section>
    <!--Footer-->
    <div class="container-fluid player-z">
      <div class="media-player2">
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="player-music">
          <div class="player-music-artist">
            <div class="player-music-artist-photo"></div>
            <div class="player-music-artist-text">
              <a href=""><h1>musica</h1></a>
              <div class="text-music">
                <a href="artist.php"><p>artista</p></a>
                <a href="album.php"><p>album</p></a>
              </div>
            </div>
          </div>
          <div class="player-music-controls">
            <button class="btn btn-primary btn-control btn-mobile1"><i class="fas fa-sync-alt"></i></button>
            <button class="btn btn-primary btn-control btn-mobile2"><i class="fas fa-step-backward"></i></button>
            <button type="button" class="btn btn-primary btn-lg btn-floating btn-player btn-mobile4" tabindex="0"><i class="fas fa-play"></i></button>
            <button class="btn btn-primary btn-control btn-mobile4"><i class="fas fa-step-forward"></i></button>
            <button class="btn btn-primary btn-control btn-mobile1"><i class="fas fa-random"></i></button>

          </div>
          <div class="player-music-options">
            <p class="btn-mobile1">4:20</p>
            <button class="btn btn-primary btn-control btn-mobile1"><i class="fas fa-volume-up"></i></button>
            <button class="btn btn-primary btn-control btn-mobile1"><i class="fas fa-bars"></i></button>
            <!--MOBILE -->
            <button class="btn btn-primary btn-control btn-mobile3"><i class="fas fa-bars"></i></button>

            <button type="button" class="btn btn-primary btn-lg btn-floating btn-player btn-mobile5" tabindex="0"><i class="fas fa-play"></i></button>
            <button class="btn btn-primary btn-control btn-mobile5"><i class="fas fa-step-forward"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!--Footer-->

    <?php include_once("modals/player-list.php"); ?> 

  </section>
  <!--Main layout-->




  <!--<script src="js/player.js"></script>-->
  <!-- ---------------------SCRIPTS----------------------- -->
  <!-- PRISM -->
  <script type="text/javascript" src="dev/js/new-prism.js"></script>
  <!-- MDB SNIPPET -->
  <script type="text/javascript" src="dev/js/dist/mdbsnippet.min.js"></script>
  <!-- jsMDB -->
  <script type="text/javascript" src="js2/mdb2.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>


  <!--Slick JS-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
  <script type="text/javascript">
    $('.carousel').slick({
      dots: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });
  </script>
  <script type="text/javascript">
    $('.carousel-artist').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 7,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1700,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },{
          breakpoint: 1399,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 1250,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>
  <script type="text/javascript">
    $('.carousel-artist2').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1399,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 1250,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>
  <script type="text/javascript">
    $('.slider-1').slick({
      dots: false,
      infinite: false,
      speed: 300,
      autoplay: false,
      slidesToShow: 5,
      slidesToScroll: 2,
      responsive: [{
          breakpoint: 1700,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },{
          breakpoint: 1400,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },{
          breakpoint: 1100,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>
  <script type="text/javascript">
    $('.slider-banner').slick({
      dots: false,
      infinite: true,
      arrows: false,
      fade: true,
      speed: 200,
      cssEase: 'linear',
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>
  <script type="text/javascript">
    $('.slider-2').slick({
      dots: false,
      infinite: false,
      speed: 300,
      autoplay: false,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1700,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 1340,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 560,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>

  <!-- Custom scripts -->
  <script type="text/javascript">
    const sidenavleft = document.getElementById("sidenav-left-2");
    const instance = mdb.Sidenav.getInstance(sidenavleft);

    let innerWidth = null;

    const setMode = (e) => {
      // Check necessary for Android devices
      if (window.innerWidth === innerWidth) {
        return;
      }

      innerWidth = window.innerWidth;

      if (window.innerWidth < 1400) {
        instance.changeMode("over");
        instance.hide();
      } else {
        instance.changeMode("side");
        instance.show();
      }
    };

    setMode();

    // Event listeners
    window.addEventListener("resize", setMode);
  </script>
</body>

</html>