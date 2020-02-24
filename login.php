<?php
require("head.php");
// var_dump($_POST);
?>

<body>
    <div class="form-container">
    <?php
        if( isset($_GET["message"])){
            echo $_GET["message"];
            }
        ?>
        
        <h1>La boîte à recettes</h1>
        <form action="functions/loginAction.php" method="post">
            <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo">
            <input type="submit" value="Connexion">
        </form>
    </p>
</body>
</html>