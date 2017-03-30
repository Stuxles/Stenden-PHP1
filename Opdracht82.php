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
            <textarea title="comment" name="comment" rows="5" cols="40"></textarea>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>


        <?php
        if (isset($_POST["comment"])){
            $text = explode(" ", $texthier);
            echo "<h1>Output</h1>";
            foreach ($text as $textout) {
				$textlower = substr($textout, 1);
                if(strtolower($textlower) == $textlower && ucfirst($textout) == $textout){
                    echo $textout . " ";
                }
                else{
                    echo strtolower($textout) . " " ;
                }
            }
		}
        ?>
    </body>
</html>