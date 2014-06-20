<?php

use UglyXTC\Core\Config;
?>
<!DOCTYPE html>
<!--
The MIT License (MIT)

Copyright (c) 2014 DarkXTC
For the complete license see "LICENSE"
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?= $values['meta'] ?>
        <title><?= $values['title'] ?></title>
        <link rel="stylesheet" href="./style/Main.css" />
    </head>
    <body>
        <header id="header">
            <?= $values['title'] ?>
        </header>
        <div class="colmask leftmenu">
            <div class="colright">
                <div class="col1wrap">
                    <section class="content">
                        <?= $values['content']; ?>
                    </section>
                </div>
                <nav class="navigation">
                    <ul>
                        <?= $values['menu'] ?>
                    </ul>
                </nav>
            </div>
        </div>
        <footer id="footer">
            License: <a href="<?= Config::getLicenseLink() ?>" alt="License Download"> <?= Config::getLicense() ?></a> <br />
            <?= Config::getLicenseLong() ?><br />
            Rendering took: <?= microtime() - $values['start']?>ms
        </footer>
    </body>
</html>
