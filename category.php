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
        <div id="sidenav-1" class="sidenav bg-sidenav width-sidenav" role="navigation" data-hidden="false" data-accordion="true">
            <a class="ripple d-flex justify-content-center py-4" href="#!" data-ripple-color="danger">
                <img id="MDB-logo" src="img/brands/logo.png" alt="MDB Logo" draggable="false" style="width: 70%;" />
            </a>

            <ul class="sidenav-menu">
                <!--item 0-->
                <li class="sidenav-item">
                    <a class="sidenav-link"><i class="fab fa-buffer icon-sidenav"></i><span class="item-sidenav">Entreterimento</span></a>
                    <ul class="sidenav-collapse">
                        <li class="sidenav-item">
                            <a class="sidenav-link item-sidenav sidenav-module">Apps&Jogos</a>
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
                <li class="sidenav-item">
                    <!--item 1-->
                    <a class="sidenav-link ripple" href="index.php">
                        <i class="fas fa-home icon-sidenav "></i><span class="item-sidenav">INÍCIO</span></a>
                </li>
                <!--fim item 1 -->
                <li class="sidenav-item">
                    <!--item 2-->
                    <a class="sidenav-link ripple" href="music.php">
                        <i class="fas fa-music  icon-sidenav"></i><span class="item-sidenav">MÚSICAS</span></a>
                </li>
                <!--fim item 2 -->
                <li class="sidenav-item">
                    <!--item 4--> 
                    <a class="sidenav-link ripple" href="artist.php">
                        <i class="fas fa-user  icon-sidenav"></i><span class="item-sidenav">ARTISTAS</span></a>
                </li>
                <!--fim item 4-->
                <li class="sidenav-item">
                    <!--item 5-->
                    <a class="sidenav-link ripple"  href="playlists.php">
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
                <button data-toggle="sidenav" data-target="#sidenav-1" class="btn shadow-0 p-0 mr-3 d-block d-xxl-none" aria-controls="#sidenav-1" aria-haspopup="true">
                    <i class="fas fa-bars fa-lg"></i>
                </button>

                <!-- Search form -->
                <form class="d-none d-md-flex input-group w-auto my-auto form-source-control">
                    <input autocomplete="off" type="search" class="form-control form-source-control rounded " placeholder='Pesquise por música, álbum ou artista' style="min-width: 350px" />
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
                    "title" => "estação da categoria",
                    "text" => "lorem ispum dolor sit amet"
                ],  [
                    "img" => "img01.jpg",
                    "title" => "playlist categoria",
                    "text" => "lorem ispum dolor sit amet"
                ],  [
                    "img" => "img01.jpg",
                    "title" => "mais famosa",
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
        <!--CAROUSEL ARTIST-->
        <section class="container-fluid ">
            <!--text single-->
            <div class="text-single">
                <h1>Reproduzido Recentemente</h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalArtist">
                    VER TODOS
                </button>
                <!-- fim Modal circle-->
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
            <!-- MODAL duble -->
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
            </div>
            <!-- FIM MODAL duble -->
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
            <!--fim text single -->
            <div class="hr"></div>
            <!--Carousel-->
            <div class="slider-2 container-fluid">

                    <!--slide php -->
                    <?php

                    $HeadSlide = [
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

                    foreach ($HeadSlide as $slide) {
                    ?>

                        <!--item 1-->
                        <div class="section-1-box">
                            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $slide['img'] ?>');">
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
                                    <h1><?php echo $slide['music'] ?></h1>
                                </a>
                                <a href="artist.php">
                                    <p><?php echo $slide['artist'] ?></p>
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

            <!-- ********fim slide****** -->




            <!--container-artist1-->
            <div class="container-fluid">
                <div class="row">
                    <!--name artist-->
                    <div class="col-md-12">
                        <div class="hr" style="margin-bottom: 4%;"></div>
                        <div class="text-single">
                            <!--name-->
                            <div class="box-artist1">
                                <div class="box-artist1-photo">
                                </div>
                                <div class="box-artist1-name">
                                    <h1>Categoria</h1>
                                    <p>as mais populares</p>
                                </div>
                            </div>
                            <!--fim name-->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalArtistOne">
                                VER TODOS
                            </button>
                        </div>
                        <div class="hr"></div>
                    </div>
                    <!--fim name artist-->
                </div>
                <!-------------------------------Carousel artist 1-->
                <div class="carousel-artist">

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
                                        <a href="">
                                            <h1><?php echo $MList['music'] ?></h1>
                                        </a>
                                        <a href="artist.php">
                                            <p><?php echo $MList['artist'] ?></p>
                                        </a>
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
                                        <a href="">
                                            <h1><?php echo $MList['music2'] ?></h1>
                                        </a>
                                        <a href="artist.php">
                                            <p><?php echo $MList['artist2'] ?></p>
                                        </a>
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


                <!--container-artist1-->
                <div class="container-fluid">
                    <div class="row">
                        <!--name artist-->
                        <div class="col-md-12">
                            <div class="hr" style="margin-bottom: 4%;"></div>
                            <div class="text-single">
                                <!--name-->
                                <div class="box-artist1">
                                    <div class="box-artist1-photo">
                                    </div>
                                    <div class="box-artist1-name">
                                        <h1>Categoria </h1>
                                        <p>mais escutadas</p>
                                    </div>
                                </div>
                                <!--fim name-->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalArtistOne">
                                    VER TODOS
                                </button>
                            </div>
                            <div class="hr"></div>
                        </div>
                        <!--fim name artist-->
                    </div>
                    <!-------------------------------Carousel artist 1-->
                    <div class="carousel-artist">

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
                                            <a href="">
                                                <h1><?php echo $MList['music'] ?></h1>
                                            </a>
                                            <a href="artist.php">
                                                <p><?php echo $MList['artist'] ?></p>
                                            </a>
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
                                            <a href="">
                                                <h1><?php echo $MList['music2'] ?></h1>
                                            </a>
                                            <a href="artist.php">
                                                <p><?php echo $MList['artist2'] ?></p>
                                            </a>
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

                


                <!-- slider -->
                <div class="text-single">
                    <h1>Mais Recomendadas</h1>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="light" data-mdb-toggle="modal" data-mdb-target="#ModalMusic">
                        VER TODOS
                    </button>
                </div>
                <!--fim title carousel top-->
                <div class="hr"></div>

                <div class="slider-2 container-fluid" style="margin-bottom: 100px;">

                    <!--slide php -->
                    <?php

                    $HeadSlide = [
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

                    foreach ($HeadSlide as $slide) {
                    ?>

                        <!--item 1-->
                        <div class="section-1-box">
                            <div class="section-1-box-photo2" style="background-image: url('img/photo-music/<?php echo $slide['img'] ?>');">
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
                                    <h1><?php echo $slide['music'] ?></h1>
                                </a>
                                <a href="artist.php">
                                    <p><?php echo $slide['artist'] ?></p>
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
                <!-- fim  -->
        </section>
        <!--Main layout-->

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
                            <a href="">
                                <h1>musica</h1>
                            </a>
                            <div class="text-music">
                                <a href="artist.php">
                                    <p>artista</p>
                                </a>
                                <a href="album.php">
                                    <p>album</p>
                                </a>
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
                infinite: false,
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
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
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
                slidesToShow: 5,
                slidesToScroll: 2,
                responsive: [{
                        breakpoint: 1340,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false
                        }
                    }, {
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
            $('.carousel-artists').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 7,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1700,
                        settings: {
                            slidesToShow: 6,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false
                        }
                    }, {
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
            $('.slider-initial').slick({
                dots: false,
                infinite: false,
                fade: true,
                speed: 300,
                cssEase: 'linear',
                autoplay: false,
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
            $('.slider-3').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
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

        <!-- Custom scripts -->
        <script type="text/javascript">
            const sidenav = document.getElementById("sidenav-1");
            const instance = mdb.Sidenav.getInstance(sidenav);

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