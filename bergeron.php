<?php include 'top.php';?>
<main>
<section id="image">
    <figure>
        <img src="images/patriceBergeron.jpg" alt="Patrice Bergeron circa 2011">
        <figcaption> <cite>Source: Boston Globe<cite> </figcaption>
    </figure>
</section>

<section id="bio">
    <p>
        <h2>Biography</h2>
        Hailing from the French Province of Quebec in Canada, Bergeron spent all 19 of his NHL seasons with the Boston Bruins.
        Bergeron quickly became known as one of the most dynamic two-way forwards in the league, tallying impressive goal numbers and providing rock-solid defensive play.
        The Frank J. Selke Trophy is awarded each NHL season to the best defensive forward.
        Bergeron holds the NHL record with six Selke trophies and 12 nominations.
        Patrice Bergeron's presence as a locker room leader was equally  significant as his on-ince contributions.
        After wearing the 'A' on his jersey for most of his career, he finally earned the title of being the Bruins team captain after Zdeno Chara's retirement in 2021.
        Bergeron's long career with the Bruins included two additional Stanley Cup final appearances in addition to winning the 2011 cup.
        His long and illustrious career with the Bruins will surely lead to his jersey numbers being hung in the garden rafters soon after his recent retirement following the 2022-2023 NHL season.
    </p>
    <p>
        During the 2011 Stanley Cup playoffs, Bergeron sustained a concussion in the fourth game of the second round following a hit from Flyers player Claude Giroux.
        After missing a handful of games in the fourth round, Bergeron returned with a vengeance.
        The Bruins dropped the first, second and fifth games of the Stanley Cup Final, forcing the series to go to game seven. Bergeron scored two goals in the final game, including the game winning goal.
        Bergeron's most impressive playoff performance would come during the 2013 Stanley Cup Finals against the Chicago Blackhawks.
        In an awe-inspiring display of toughness, Bergeron played through a multitude of injuries including a punctured lung, seperated shoulder, broken rib and a broken nose.
        This along with his many other displays of resilience, determination and passion for the game of hockey cement him among the greatest hockey players of all time.
    </p>
</section>

<section id="stats">
    <h2>Career Statistics</h2>
    <table>
        <tr>
            <th>Year</th>
            <th>Team</th>
            <th>Games Played</th>
            <th>Goals</th>
            <th>Assists</th>
            <th>Points</th>
        </tr>
        <?php
        $sql = 'SELECT fldSeason, fldTeam, fldGamesPlayed, fldGoals, fldAssists, fldPoints FROM tblBergeron';
        $statement = $pdo->prepare($sql);
        $statement->execute();

        $records = $statement->fetchAll();

        foreach($records as $record){
            print '<tr>';
            print '<td>' . $record['fldSeason'] . '</td>';
            print '<td>' . $record['fldTeam'] . '</td>';
            print '<td>' . $record['fldGamesPlayed'] . '</td>';
            print '<td>' . $record['fldGoals'] . '</td>';
            print '<td>' . $record['fldAssists'] . '</td>';
            print '<td>' . $record['fldPoints'] . '</td>';
            print '</tr>' . PHP_EOL;
        }
        ?>
    </table>
</section>

<section id="video">
    <h2>Iconic Moment</h2>
    <p>This play highlights Bergeron's incredible defensive abilities that made him such a valuable asset to the Bruins</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/q6SUYwBh3zc?si=3_S6jjUHb5QYGvHG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</section>
</main>
</body>
</html>