<?php
require_once "headerColor.php";

    $naamsend = $achternaamSend = $emailSend = $emailCom = $gender = "";
    $naamsendErr = $achternaamSendErr = $emailSendErr = $emailComErr = $genderErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["naam"])) {
            $naamsendErr = "Naam is verplicht";
        } else {
            $naamsend = test_input($_POST["naam"]);
        }
        if (empty($_POST["achternaam"])) {
            $achternaamSendErr = "Achternaam is verplicht";
        } else {
            $achternaamSend = test_input($_POST["achternaam"]);
        }
        if (empty($_POST["e-mail"])) {
            $emailSendErr = "E-mail is verplicht";
        } else {
            $emailSend = test_input($_POST["e-mail"]);
        }
        if (empty($_POST["comment"])) {
            $emailComErr = "Opmerking is verplicht";
        } else {
            $emailCom = test_input($_POST["comment"]);
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Moet dit nou weer!";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <title>Home</title>
    </head>
    <style>
        body {
            background-color: <?php echo $weatherColor ?>;
        }
    </style>
    <body>
    <div class="all">
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="weer.php">Weer</a></li>
                <li><a href="location.php">Location</a></li>
                <li><a href="form.php">Form</a></li>
            </ul>
        </div>
        <div class="content">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                Naam:<br><input type="text" name="naam" placeholder="vul&nbsp;in&nbsp;voornaam" <?php if (isset($_POST['naam'])) echo 'value="'.$_POST['naam'].'"';?>>
                <span class="error">* <?php echo $naamsendErr;?></span>
                <br>
                Achternaam:<br><input type="text" name="achternaam" placeholder="vul&nbsp;in&nbsp;achternaam" <?php if (isset($_POST['achternaam'])) echo 'value="'.$_POST['achternaam'].'"';?>>
                <span class="error">* <?php echo $achternaamSendErr;?></span>
                <br>
                e-mail:<br><input type="email" name="e-mail" placeholder="vul&nbsp;in&nbsp;email" <?php if (isset($_POST['e-mail'])) echo 'value="'.$_POST['e-mail'].'"';?>>
                <span class="error">* <?php echo $emailSendErr;?></span>
                <br>
                Opmerking:<br><textarea title="comment" id="comment" name="comment" rows=4 cols=8><?php if (isset($_POST['comment'])) echo $_POST['comment'];?></textarea>
                <span class="error">* <?php echo $emailComErr;?></span>
                <br>
                <input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
                <span class="error">* <?php echo $genderErr;?></span>
                <br>
                <input type="submit" value="Verzenden" name="submit">
            </form>
            <?php
                if (isset($_POST["submit"])) {
                    if (empty($naamsendErr || $achternaamSendErr || $emailSendErr || $emailComErr || $genderErr)) {

                        echo "<p>Voornaam: $naamsend</p>";
                        echo "<p>Achternaam: $achternaamSend </p>";
                        echo "<p>Mail: $emailSend </p>";
                        echo "<p>Comment: $emailCom</p>";
                        echo "<p>Geslacht: $gender</p>";
                    }else{
                        echo "<p>Alle velden invullen a.u.b.</p>";
                    }
                }
            ?>
        </div>
        <?php
        require_once "footer.php";
        ?>
    </div>
    </body>
</html>