<div class="container">
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
                                    <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play"><i class="fas fa-play"></i></button>
                                    <div class="dropdown">
                                      <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownHot1" data-mdb-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-bars"></i>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownHot1">
                                        <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                                        <li>
                                          <button class="dropdown-item btn-options-item" type="button">Another action</button>
                                        </li>
                                        <li>
                                          <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <!-- fim conteudo hover -->
                                  </div>
                                </div>
                                <div class="box-single-text">
                                  <h1><?php echo $List['music'] ?></h1>
                                  <p><?php echo $List['artist'] ?></p>
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
                                    <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play"><i class="fas fa-play"></i></button>
                                    <div class="dropdown">
                                      <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownHot1" data-mdb-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-bars"></i>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownHot1">
                                        <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                                        <li>
                                          <button class="dropdown-item btn-options-item" type="button">Another action</button>
                                        </li>
                                        <li>
                                          <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <!-- fim conteudo hover -->
                                  </div>
                                </div>
                                <div class="box-single-text">
                                  <h1><?php echo $List['music'] ?></h1>
                                  <p><?php echo $List['artist'] ?></p>
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
