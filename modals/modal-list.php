<!-- modal list 2 -->
<div class="row">
    <!---------------coluna-->
    <div class="col-md-12">
        <?php

        $ColList2 = [
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
            ]

        ];
        $count = 1;

        foreach ($ColList2 as $List2) {
        ?>

            <!--item 1-->
            <div class="box-list box-list2" style="width: 100%;">
                <p style="width: 10%;"><?php echo $count ?>.</p>
                <button style="width: 20%;" type="button" class="btn btn-primary btn-lg btn-floating btn-play2" tabindex="0"><i class="fas fa-play"></i></button>
                <a href="" style="width: 30%;">
                    <h1><?php echo $List2['music'] ?></h1>
                </a>
                <a href="album.php" style="width: 15%;">
                    <p><?php echo $List2['album'] ?></p>
                </a>
                <a href="../artist.php" style="width: 15%;">
                    <p><?php echo $List2['artist'] ?></p>
                </a>
                <span style="width: 10%;"><?php echo $List2['time'] ?></span>
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