<?php
    include 'top.php';
?>

<section id="image">
    <h2>2011 Stanley Cup Winner Zdeno Chara</h2>
<figure>
    <img src="images/zdenoChara2.jpg" alt="2011 Stanley Cup Winner Zdeno Chara">
    <figcaption><cite>Source: Getty Image</cite></figcaption>
</figure>
</section>
<section id="bio">
<h2>Biography</h2>
    <p>Zdeno Chara, was born in 1977 in Slovakia. He played in the NHL for 24 seasons, from 1998-2022, playing for the New York Islanders, Ottawa Senators, Boston Bruins, and the Washington Capitals.
        His career began with the New York Islanders, but he spent a majority of his years with the Bruins, from 2006-2020. At the end of his career, he played for the New York Islanders, but in 2022
        he signed a one-day contract with the Bruins, to official retire as a member of the team. During his time in the NHL, Chara set multiple notable records, such as tallest player in history at 6
        foot 9 inches, most games played by a defenceman at, and NHL All-Star Skills competition, with the hardest slap shot, at 108.8 mph in 2012, and more. Chara's height allowed him to be one of few exceptions to the NHL's rule on maximum stick length.
        He also is one of 20 players to score 1,500 goals in the NHL. He also holds the record for the most games played by a defenceman in the NHL.

        </p>

        <p>Chara is notable outside his hockey career as well. Chara is fluent in seven different languages, and has a real estate license, so he will not bored during his retirement. </p>
</section>
<section id="stats">
    <h2>Career Stats</h2>
    <table>
        <tr>
            <th>Year</th>
            <th>Team</th>
            <th>Games played</th>
            <th>Goals</th>
            <th>Assists </th>
            <th>Points </th>
        </tr>
        <?php
        $sql = 'SELECT fldSeason, fldTeam, fldGamesPlayed, fldGoals, fldAssists, fldPoints FROM tblChara';
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
    <video controls>
        <source src="videos/zdenoChara.mp4" type="video/mp4">
    </video>
    <cite><br>Chara gleefully carries the Stanley Cup after their iconic win<br> Source: NBC</cite>
</section>
<?php
include 'footer.php';
?>
