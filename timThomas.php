<?php
    include 'top.php';
?>

            <section id="image">
                <figure>
                    <img src="images/timThomas.jpg" alt="2011 Stanley Cup Finals MVP Tim Thomas">
                    <figcaption><cite> Source: Getty Images </cite></figcaption>
                </figure>
            </section>

            <section id="bio">
                <h2> Biography </h2>
                <p>
                    Tim Thomas was born April 15, 1974 in Michigan. He played college hockey
                    for the University of Vermont for four years from 1993 to 1997; during this
                    time he was drafted by the Quebec Nordiques (now the Colorado Avalanche)
                    but did not accept the offer. During his college career, he went 81-43-15
                    with a 2.70 goals against average, and still holds the third spot for saves
                    in NCAA Division I history.<br><br>

                    Following his time in college hockey, he spent a few years in the EHCL and AHL,
                    signing with Boston in 2001 and playing for their AHL affiliate in Providence.
                    He was called up four times throughout the 2002-03 season, where he played four
                    games in the NHL and got his first win in a 4-3 October game versus the Oilers.

                    Thomas began his starting role as goaltender for the Bruins in the 2006-07
                    NHL season. His best years came in 2008-09 and 2010-11, in which he posted
                    excellent .933 and .938 save percentages, respectively. Tim Thomas had an excellent series against the Canucks in the 2011 Stanley
                    Cup Finals; his 4-3-0 record in the series hides a truly remarkable performance.
                    In the seven game series, he posted a very low GAA of 1.15, and an outstanding
                    .967 save percentage - 238 out of the 246 shots he saw.
                </p>
            </section>

            <section id="stats">
                <h2> Career Stats </h2>
                <table>
                    <tr>
                        <th> Year </th>
                        <th> Team </th>
                        <th> Wins </th>
                        <th> Losses </th>
                        <th> Save% </th>
                        <th> GAA </th>
                    </tr>
                    <?php
                        $sql = 'SELECT fldSeason, fldTeam, fldWins, fldLosses, fldSavePercent, fldGAA FROM tblThomas';
                        $statement = $pdo->prepare($sql);
                        $statement->execute();

                        $records = $statement->fetchAll();

                        foreach($records as $record) {
                            print '<tr>';
                            print '<td>' . $record['fldSeason'] . '</td>';
                            print '<td>' . $record['fldTeam'] . '</td>';
                            print '<td>' . $record['fldWins'] . '</td>';
                            print '<td>' . $record['fldLosses'] . '</td>';
                            print '<td>' . $record['fldSavePercent'] . '</td>';
                            print '<td>' . $record['fldGAA'] . '</td>';
                            print '</tr>' . PHP_EOL;
                        }
                    ?>
                </table>
            </section>

            <section id="video">
                <h2> Iconic Moment </h2>
                <video controls>
                    <source src="videos/timThomas.mp4" type="video/mp4">
                </video>
                <cite><br> Thomas hits Hendrik in front of the net <br>
                Game 3 of the 2011 Stanley Cup, 06/06/2011</cite>
            </section>
        </main>
    </body>
</html>