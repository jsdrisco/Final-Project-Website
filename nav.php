
<nav>
        <a class="<?php
        if ($pathParts['filename'] == "bergeron") {
            print 'activePage';
        }
        ?>" href="bergeron.php"> Patrice Bergeron </a>

        <a class="<?php
        if ($pathParts['filename'] == "chara") {
            print 'activePage';
        }
        ?>" href="chara.php"> Zdeno Chara </a>

        <a class="<?php
        if ($pathParts['filename'] == "index") {
            print 'activePage';
        }
        ?>" href="index.php"> Home Page </a>

        <a class="<?php
        if ($pathParts['filename'] == "timThomas") {
            print 'activePage';
        }
        ?>" href="timThomas.php"> Tim Thomas </a>

        <a class="<?php
        if ($pathParts['filename'] == "form") {
            print 'activePage';
        }
        ?>" href="form.php"> Form </a>
</nav>