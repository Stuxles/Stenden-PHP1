<!DOCTYPE html>
<html>
    <head>
        <title>INDEX</title>
    </head>
    <body>
        <?php
        $texthier = " ";

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
        $text = explode(",", $texthier);
        echo "<h1>Output</h1>";
        foreach ($text as $textout) {
            //$textout = substr_replace($textout, substr($textout, 0,1), strlen($textout)-1,1);
            $back = substr($textout, 0, 1);
            $front = substr($textout, -1);
            $middle = substr($textout, 1, strlen($textout)-2);
            $textcomplete = $front .= $middle .= $back;
            if(strlen($textout) >= 4){
            echo "$textcomplete</br>";
            }
            else{
                echo "$textout</br>";
            }
        }
        ?>
    </body>
</html>