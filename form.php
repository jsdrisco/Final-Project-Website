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

?>

            <form action="#" method="POST">
                <fieldset class="pInfo">
                    <p>
                        <label for="txtEmail">Email:</label>
                        <input type="email" name="txtEmail" id="email" placeholder="name@domain.com"
                    </p>

                    <p>
                        <label for="txtFirstName">First name:</label>
                        <input type="text" name="txtFirstName" id="firstName">
                    </p>

                    <p>
                        <label for="txtLastName">Last name:</label>
                        <input type="text" name="txtLastName" id="lastName">
                    </p>
                </fieldset>

                <fieldset class="players">
                   <legend> Which players should we write about next? </legend>

                    <p>
                        <input type="checkbox" name="chkMarchand" id="chkMarchand" value="1">
                        <label for="chkMarchand">Brad Marchand</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkLucic" id="chkLucic" value="1">
                        <label for="chkLucic">Milan Lucic</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkKrejci" id="chkKrejci" value="1">
                        <label for="chkKrejci">David Krejci</label>
                    </p>

                    <p>
                        <input type="checkbox" name="chkOther" id="chkOther" value="1">
                        <label for="chkGeothermal">Other</label>
                    </p>
                </fieldset>

                <fieldset class="memory">
                    <p>
                        <label for="txtMemory"> What is your favorite Bruins memory? </label><br>
                        <textarea name="txtMemory" rows="5" cols="50"> </textarea>
                    </p>
                </fieldset>
            </form>

        </body>
<?php
include 'footer.php';
?>
    </main>
</html>