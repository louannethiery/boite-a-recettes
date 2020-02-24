<div class="boite-recettes">

<?php 
require("head.php");
//echo "Bonjour " . $_SESSION["pseudo"];

require("functions/database.php");
$req = $db->prepare("SELECT * FROM users_recettes WHERE pseudo = :pseudo");
$req->bindParam(":pseudo", $_GET["pseudo"]);
$req->execute();
?>

<?php
while($result = $req->fetch(PDO::FETCH_ASSOC)){
    ?>
    
    <div class="recettes-container">
    <div class="infos">
    
    <h1><?php echo $result["recette"];?></h1>
    
    <div class="imgplusingredients">
    <div class="gauche">
    <?php 
    $result=str_replace(array("\r\n","\n"),'<br />',$result);
    ?> 
    <h2>Ingrédients</h2>
    <p><?php echo $result["ingredients"];?></p> <br>
    </div>
    <div class="droite">
    <img class="img" src="<?=$result['image']?>">
    </div>
    </div>
    <h2>Étapes</h2>
    <p><?php echo $result["etapes"];?></p>
    </div>
    
    </div>
    <?php
}   
?>
<div class="btn-disconnect"> <a class="disconnect" href="functions/disconnectAction.php">Se déconnecter</a> </div>

</div>