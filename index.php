<html>
<head>
    <title>Project 2</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="my-container">
    <header>
        <p
                style="<?php if(2*intval(date('d')/2)==date('d')){ echo 'color:brown';} else{ echo 'color: orange;'; } ?>">
            <?= date('d m y'); ?>
        </p>
    </header>


    <article class="content">

        <p>

        </p>

    </article>

    <nav class="navbar">
        <ul>
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
    </nav>

    <footer class="foot">
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
</div>
</body>
</html>
