<html>
    <head>
        <title>ITWE - Project 2 - Main Page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="head">
            <?php
                if(2*intval(date('d')/2)==date('d')){ ?>
                    <p style="color:brown"><?= date('d m y'); ?></p>
             <?php   } else{ ?>
                    <p style="color: orange;"><?= date('d m y'); ?></p>
             <?php
                     }
             ?>
        </header>

        <section class="secondary">
            <div class="article">

            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a id="info" href="pages/info.php">
                            Something about you
                        </a>
                    </li>
                    <li>
                        <a id="sports" href="pages/sports.php">
                            The list of your favourite sport activities
                        </a>
                    </li>
                    <li>
                        <a id="courses" href="pages/courses.php">
                            The list of your courses in the current semester in the University of Lodz
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <footer>
            <?php
                $now = date('H');
                $clause = 20;
                if($now < $clause){
            ?>
                <p style="<?php if(2*intval(date('d')/2)==date('d')){ echo 'color:brown';}else{ echo 'color:orange';} ?>">
                    <?= date('l'); ?>
                </p>
            <?php }else{ ?>
                <p style="<?php if(2*intval(date('d')/2)==date('d')){ echo 'color:brown';}else{ echo 'color:orange';} ?>">
                    Filankesov Filankes
                </p>
            <?php } ?>
        </footer>
    </body>
</html>
