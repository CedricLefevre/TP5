<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <center>
            <p>
                Veuillez saisir le code de sécurité suivant :
            </p>
            <br>
                    <div>
                        <?php

                        SESSION_START();

                        echo "<img src='script-captchas.php' alt='captchas' />";

                        ?>

                        <form method="POST" action="index.php">
                            <input type="text" name="answer">
                            <input type="submit" value="vérifier" name="submit">
                        </form>
                    </div>

    </body>

<?php

    if (isset($_POST['submit']))
    {
        if (empty($_POST['answer']))
        {
            echo "<p>Le code de sécurité doit être impérativement saisi.</p>";
        }
        else
        {
            if ($_POST['answer'] == $_SESSION['code'])
            {
                echo "<p>Le code de sécurité est valide</p>";
            }
            else
            {
                echo "<p>Le code de sécurité est invalide</p>";
            }
        }
    }
?>
        </center>
</html>