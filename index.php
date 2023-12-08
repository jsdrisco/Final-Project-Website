<?php
   include 'top.php';
?>

            <section id="image">
                <h2>The Bruins celebrate at the net after their 4-0 game 7 victory</h2>
                <figure>
                    <img src="images/netCelly.jpeg" alt="The Bruins celebrate at the net after their 4-0 game 7 victory">
                    <figcaption><cite> Source: City News Canada </cite></figcaption>
                </figure>
            </section>

            <section id="bio">
                <h2>Bruins 2011 Stanley Cup GOATs</h2>
                <p>
                    The Boston Bruins won the 2011 Stanley Cup, beating the Vancouver Canucks 4-3 in seven games.
                    The entire 2011 Bruins team was special, but a few players in particular were top of their
                    class on the championship roster. The 2011 Bruins <strong>G</strong>reatest <strong>O</strong>f <strong>A</strong>ll
                    <strong>T</strong>ime players are Patrice Bergeron, Zdeno Chara, and  Tim Thomas.
                </p>
            </section>

            <section id="stats">
                <h2> Game-by-Game Stats </h2>
                    <table>
                        <tr>
                            <th> Game </th>
                            <th> Series Record (BOS-VAN) </th>
                            <th> BOS </th>
                            <th> VAN </th>
                        </tr>
                    <?php
                    $sql = 'SELECT pmkGame, fldRecord, fldBruinsScore, fldVancouverScore FROM tblGameStats';
                    $statement = $pdo->prepare($sql);
                    $statement->execute();

                    $records = $statement->fetchAll();

                    foreach($records as $record){
                        print '<tr>';
                        print '<td>' . $record['pmkGame'] . '</td>';
                        print '<td>' . $record['fldRecord'] . '</td>';
                        print '<td>' . $record['fldBruinsScore'] . '</td>';
                        print '<td>' . $record['fldVancouverScore'] . '</td>';
                        print '</tr>' . PHP_EOL;
                    }
                    ?>
                    </table>

            </section>

            <section id="video">
                <h2>Iconic Moment</h2>
                <video controls>
                    <source src="videos/bruins.mp4" type="video/mp4">
                </video>
                <cite><br> The Bruins close out Game 7 to win the cup on 06/16/2011. <br>Source: NHL</cite>
            </section>
<?php
include 'footer.php';
?>

