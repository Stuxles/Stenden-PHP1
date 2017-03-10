<!DOCTYPE html>
<html>
    <head>
        <title>INDEX</title>
    </head>
    <body>
        <?php
        $texthier = "leeg";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $texthier = $_POST["comment"];
        }
        ?>

        <h1>Comment:</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
            <textarea name="comment" rows="5" cols="40"></textarea>
            </br>
            <input type="submit" name="submit" value="Submit">
        </form>


        <?php
        echo "<h1>Output</h1>";
        echo "$texthier"
        ?>
    </body>
</html>