<html>
    <head>
        <title>Project 2</title>
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
    <header class="header">
        <p
                style="<?php if(2*intval(date('d')/2)==date('d')){ echo 'color:brown';} else{ echo 'color: orange;'; } ?>">
            <?= date('d m y'); ?>
        </p>
    </header>

        <section class="menu-and-information">
            <div class="information">
                The list of your courses in the current semester in the University of Lodz
            </div>
            <div class="navigator">
                <ul class="navigation">
                    <li>
                        <a href="about.php">
                            Something about you
                        </a>
                    </li>
                    <li>
                        <a href="list1.php">
                            The list of your favourite sport activities
                        </a>
                    </li>
                    <li>
                        <a href="list2.php">
                            The list of your courses in the current semester in the University of Lodz
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="foot">
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
        </section>
    </body>
</html>
