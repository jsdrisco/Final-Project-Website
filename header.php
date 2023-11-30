<header>
    <h1>
        <?php
            if(basename($_SERVER['SCRIPT_FILENAME']) == "index.php")
                print 'The 2011 Stanley Cup Champion Boston Bruins';

            elseif(basename($_SERVER['SCRIPT_FILENAME']) == "bergeron.php")
                print 'Patrice Bergeron';

            elseif(basename($_SERVER['SCRIPT_FILENAME']) == "timThomas.php")
                print 'Tim Thomas';

            elseif(basename($_SERVER['SCRIPT_FILENAME']) == "form.php")
                print 'Bruins Form';
        ?>
    </h1>
</header>
