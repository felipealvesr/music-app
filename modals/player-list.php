<div class="container-fluid player-z">

  <div class="media-player-list">
    <div class="row-media">
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="player-music2">
        <div class="player-music-artist">
          <div class="player-music-artist-photo"></div>
          <div class="player-music-artist-text">
            <h1>musica</h1>
            <div class="text-music">
              <a href="artist.php">artista</a>
              <a href="album.php">album</a>
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
          <button class="btn btn-primary btn-control btn-mobile1"><i class="fas fa-bars"></i></button>
          <!--MOBILE -->
          <button class="btn btn-primary btn-control btn-mobile3"><i class="fas fa-bars"></i></button>

          <button type="button" class="btn btn-primary btn-lg btn-floating btn-player btn-mobile5" tabindex="0"><i class="fas fa-play"></i></button>
          <button class="btn btn-primary btn-control btn-mobile5"><i class="fas fa-step-forward"></i></button>
        </div>
      </div>
    </div>
    <!-- list -->
    <!-- modal list 2 -->
    <div class="row media-player-content-list">
      <div class="container-fluid player-title">
        <span style="width: 12%; visibility: hidden;">.</span>
        <div class="player-time">
          <h1>fila de reprodução</h1>
          <p>12 músicas . 1h 02min</p>
        </div>
      </div>
      <!---------------coluna-->
      <div class="col-md-12">
        <?php

        $PlayerList = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "album" => "album",
            "artist" => "avenged sevenfold",
            "time" => "4:35"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "album" => "album",
            "artist" => "nirvana",
            "time" => "4:35"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "album" => "album",
            "artist" => "oasis",
            "time" => "4:35"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "album" => "album",
            "artist" => "alice in chains",
            "time" => "4:35"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "album" => "album",
            "artist" => "alice in chains",
            "time" => "4:35"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "album" => "album",
            "artist" => "alice in chains",
            "time" => "4:35"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "album" => "album",
            "artist" => "alice in chains",
            "time" => "4:35"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "album" => "album",
            "artist" => "alice in chains",
            "time" => "4:35"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "album" => "album",
            "artist" => "alice in chains",
            "time" => "4:35"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "album" => "album",
            "artist" => "alice in chains",
            "time" => "4:35"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "album" => "album",
            "artist" => "alice in chains",
            "time" => "4:35"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "album" => "album",
            "artist" => "alice in chains",
            "time" => "4:35"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "album" => "album",
            "artist" => "alice in chains",
            "time" => "4:35"
          ]

        ];
        $count = 1;

        foreach ($PlayerList as $ListP) {
        ?>

          <!--item 1-->
          <div class="box-list box-list2" style="width: 100%;">
            <p style="width: 10%;"><?php echo $count ?></p>
            <!-- -->
            <div class="player-music-artist player-list-music">
              <div class="box-artist1-music-photo box-player-list" style="background-image: url('img/photo-music/<?php echo $ListP['img']; ?>');">
                <div class="box-artist1-music-photo-content">
                  <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                </div>
              </div>
              <div class="player-music-artist-text">
                <a href="">
                  <h1><?php echo $ListP['music'] ?></h1>
                </a>
                <div class="text-music">
                  <a href="artist.php">
                    <p><?php echo $ListP['artist'] ?></p>
                  </a>
                </div>
              </div>
            </div>
            <!-- -->
            <div class="player-list-album">
            <a href="album.php"><?php echo $ListP['album'] ?></a>
            </div>
            <span class="player-list-time"><?php echo $ListP['time'] ?></span>
            <div class="dropdown player-list-drop">
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
          </div>
          <div class="hr-list"></div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--fim coluna -->
    </div>

    <!-- fim modal list 2-->
  </div>
</div>