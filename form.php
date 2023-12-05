<?php
    include 'top.php';

    $dataIsGood = false;
    $errorMessage = '';
    $message = '';

    $firstName = '';
    $lastName = '';
    $email = '';

    $marchand = 0;
    $lucic = 0;
    $krejci = 0;
    $other = 0;
    $memory = 'No';

    function getData($field) {
        if (!isset($_POST[$field])) {
            $data = '';
        } else {
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    function verifyAlphaNum($testString) {
        return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
    }

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        print PHP_EOL . '<!-- Starting Sanitization -->' . PHP_EOL;
    }

    $firstName = getData('txtFirstName');
    $lastName = getData('txtLastName');
    $email = getData('txtEmail');
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    $marchand = (int) getData('chkMarchand');
    $lucic = (int) getData('chkLucic');
    $krejci = (int) getData('chkKrejci');
    $other = (int) getData('chkOther');
    $memory = getData('txtMemory');

    print PHP_EOL . '<!-- Starting Sanitization -->' . PHP_EOL;

    if($firstName == ''){
        $errorMessage .= '<p class="mistake">Please enter your first name</p>';
        $dataIsGood = false;
    } elseif(!verifyAlphaNum($firstName)) {
        $errorMessage .= '<p class="mistake">Your first name contains invalid characters, please just use letters</p>';
        $dataIsGood = false;
    }

    if($lastName == ''){
        $errorMessage .= '<p class="mistake">Please enter your last name</p>';
        $dataIsGood = false;
    } elseif(!verifyAlphaNum($lastName)) {
        $errorMessage .= '<p class="mistake">Your last name contains invalid characters, please just use letters</p>';
        $dataIsGood = false;
    }

    if($email == ''){
        $errorMessage .= '<p class="mistake">Type in your email address</p>';
        $dataIsGood = false;
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage .= '<p class="mistake">Your email address contains invalid characters</p>';
        $dataIsGood = false;
    }

    $totalChecked = 0;

    if($marchand != 1) $marchand = 0;
    $totalChecked += $marchand;

    if($lucic != 1) $lucic = 0;
    $totalChecked += $lucic;

    if($krejci != 1) $krejci = 0;
    $totalChecked += $krejci;

    if($other != 1) $other = 0;
    $totalChecked += $other;

    if($totalChecked == 0) {
        $errorMessage .= '<p class="mistake">Please choose at least one checkbox that describes you.</p>';
        $dataIsGood = false;
    }

print '<!-- Starting saving -->';
if($dataIsGood){
    $sql = 'INSERT INTO tblBruinsSurvey
    (fldFirstName, fldLastName, fldEmail, fldMarchand, fldLucic, fldKrejci, fldOther, fldMemory)';

    $sql .= ' VALUES (?, ?, ?, ?, ?, ?, ?, ?)';

    $data = array($firstName, $lastName, $email, $marchand, $lucic, $krejci, $other, $memory);

    try{
        $statement = $pdo->prepare($sql);
        if($statement->execute($data)){
            $message = '<h2>Thank you</h2>';
            $message .= '<p>Your information was successfully saved </p>';
        } else {
            $message .= '<p>Record was NOT successfully saved.</p>';
        }
    } catch(PDOException $e){
        $message .= '<p>Couldn\'t insert the record, please cross your fingers and try again</p>';
    }
}
    ?>
    <main>
        <?php
        print $message;
        print $errorMessage;

        print '<p>Post Array:</p><pre>';
        print_r($_POST);
        print '</pre>';
        ?>

            <form action="#" method="POST">
                <fieldset class="pInfo">
                    <p>
                        <label for="txtEmail">Email:</label>
                        <input type="email" name="txtEmail" id="email" placeholder="name@domain.com" required>
                    </p>

                    <p>
                        <label for="txtFirstName">First name:</label>
                        <input type="text" name="txtFirstName" id="firstName" required>
                    </p>

                    <p>
                        <label for="txtLastName">Last name:</label>
                        <input type="text" name="txtLastName" id="lastName" required>
                    </p>
                </fieldset>

                <fieldset class="players">
                   <legend> Which players should we write about next? </legend>

                    <p>
                        <input type="checkbox" name="chkMarchand" id="chkMarchand"
                               <?php if($marchand) print 'checked'; ?> value="1">
                        <label for="chkMarchand">Brad Marchand</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkLucic" id="chkLucic"
                               <?php if($lucic) print 'checked'; ?> value="1">
                        <label for="chkLucic">Milan Lucic</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkKrejci" id="chkKrejci"
                               <?php if($krejci) print 'checked'; ?> value="1">
                        <label for="chkKrejci">David Krejci</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkOther" id="chkOther"
                               <?php if($other) print 'checked'; ?> value="1">
                        <label for="chkOther">Other</label>
                    </p>
                </fieldset>

                <fieldset class="memory">
                    <p>
                        <label for="txtMemory"> What is your favorite Bruins memory? </label><br>
                        <textarea id="txtMemory" name="txtMemory" rows="5" cols="50"> </textarea>
                    </p>
                </fieldset>

                <fieldset>
                    <p>
                        <input type="submit">
                    </p>
                </fieldset>
            </form>
    </main>
<?php
    include 'footer.php';
?>
</body>
</html>