////////////////////// TOLONG INSTALL FILE DALAM FONT AGAR WEB DAPAT TERLIHAT LEBIH BAGUS \\\\\\\\\\\\\\\\\\\\\\

<?php
  include ("function.php");?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo meta()?>
    <title>AIMER DAYDREAM</title>
    <?php echo stylesheet()?>
  </head>
  <body id="page-top" class="index">


<!-- //////////////////////////////////////////////////////// Awal NAVBAR \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse"
              data-target="#target-list">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Daydream</a>

          </div>
          <div class="collapse navbar-collapse" id="target-list">
            <ul class="nav navbar-nav">
                <li><a href="#page-top">Home</a></li>
                <li><a href="#intro">Intro</a></li>
                <li><a href="#album">Album</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search ....  ">
                  <button type="submit" class="btn apik">Search</button>
                </div>
            </form>
          </div>
      </div>
    </nav>

<!-- //////////////////////////////////////////////////////// Akhir NAVBAR \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


<!-- /////////////////////////////////////////////////// Awal CAPTION HEADER \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <header>
        <div class="container">
            <div class="intro-text ">
                <div class="intro-lead-in text-shadow-custom">Welcome To Aimer Disc</div>
                <div class="intro-heading text-shadow-custom">Let Your Desire Out!</div>
                <a href="#intro" class="btn btn-lg apik">Explore!</a>
            </div>
        </div>
    </header>

<!-- /////////////////////////////////////////////////// Akhir CAPTION HEADER \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


<!-- //////////////////////////////////////////////////////// Awal INTRO \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
    <section id="intro" class="jarak">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="">INTRO</h2>
                    <h3 class="text-muted">Daydreaming is Dangerous</h3>
                </div>
            </div>
            <br>
            <div class="row text-center">
                <?php
                    $SongDescription = array(
                'Shred every thing, around the way Erase my memories, feel my fear Clung with all my might,
                and Iam dead Shake yourself off, insane dream',
                'Nothing but memories I wrote down
                into a musical note
                that connect with my quivering voices,
                I do not care at all,
                if someone ridicules my ordinary song
                wherever you are now,
                I give you all my tone',
                'I would like you to tie it tightly such that
                the wings would be big and the knot would be firm
                I would like you to place
                your efforts here and your memories far away');
                    $Title = array('Insane Dream','Tone','Butterfly Knot');
                for ($i=0; $i<3 ; $i++) { ?>
            <div class="col-md-4 col-sm-4">
                <h4 class="service-heading"><b><?php echo $Title[$i]?></b></h4>
                <p class="text-muted"><?php echo $SongDescription[$i]?></p>
            </div>
                <?php } ?>
            </div>
        </div>
    </section>
<!-- //////////////////////////////////////////////////////// Akhir INTRO \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


<!-- ///////////////////////////////////////////////////////  Awal ALBUM   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <section id="album" class="bg-light-gray jarak">
        <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="">ALBUM</h2>
                  <h3 class="text-muted" style="margin-bottom:80px">Fill Your Need in Music with : </h3>
              </div>
          </div>

        <div class="row">
            <?php
                $SongName = array('Tone','Kataomoi','Chouchou Musubi','Insane Dream','Higher Ground','Two Face',);
                $SongPrice = array('¥500','¥450','¥600','¥500','¥450','¥400', );
                $SongImg = array('track1.jpg','track2.jpg','track3.jpg','track4.jpg','track5.jpg','track6.jpg',);
            for ($i=0; $i<count($SongName) ; $i++) { ?>
            <div class="col-md-4 col-sm-6">
                  <a href="#" class="thumbnail" data-toggle="modal" data-target="#mymodal<?php echo $i;?>">
                    <img src="image/<?php echo $SongImg[$i]; ?>" class="img-responsive" alt="">
                    <div class="judul">
                        <h4 class="text-primary"><?php echo $SongName[$i]; ?></h4>
                        <p class="text-muted"><?php echo $SongPrice[$i]; ?></p>
                    </div>
                  </a>

                  <div class="modal fade" id="mymodal<?php echo $i;?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3><?php echo $SongName[$i]; ?></h3>
                        </div>

                        <div class="modal-body"  style="margin-left: 85px">
                          <img src="image/<?php echo $SongImg[$i];?>">

                            <audio controls>
                              <source src="Song/<?php echo $SongName[$i]; ?>.mp3" type="audio/mpeg" >
                                browser lu kagak support
                            </audio><br>
                        <i class="fa fa-stop fa-2x" aria-hidden="true"></i>
                        <p class="text-muted">  Don't forget to stop the song! </p>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <?php } ?>
        </div>

        </div>
    </section>

<!-- //////////////////////////////////////////////////////// Akhir ALBUM  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


<!-- //////////////////////////////////////////////////////// Awal CONTACT \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <section id="contact" class="jarak">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12">
                <h2 class="">CONTACT</h2>
                  <h3 class="text-muted" style="margin-bottom:20px">If you want to buy, You can check this contact out!</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                </div>
            </div>
            <?php echo contact()?>
        </div>
    </section>

<!-- //////////////////////////////////////////////////////// Akhir CONTACT \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<!-- /////////////////////////////////////////////////////// Awal COPYRIGHT \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <footer class="bg-darkest-gray">
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <span class="text-muted">Copyright &copy; Aqshalkun</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline ">
                        <li><a href="https://twitter.com/AqshalTheSleepy"><i class="jos fa fa-twitter fa-3x margin"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/aqshal.fajarputra"><i class="jos fa fa-facebook fa-3x margin"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/aqshalkun/"><i class="jos fa fa-instagram fa-3x margin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline">
                        <li><a href="#" class="text-muted">Privacy Policy</a>
                        </li>
                        <li><a href="#" class="text-muted">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<!-- /////////////////////////////////////////////////////// Akhir COPYRIGHT \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="jquerry/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tambahan.js"></script>
  </body>
</html>
