<?php require_once("inc/header.php") ?>
<?php



if (!empty($_POST)) {

    
    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES);
    $_POST["date"] = htmlentities($_POST["date"], ENT_QUOTES);
    $_POST["description"] = htmlentities($_POST["description"], ENT_QUOTES);


    
    if (!empty($_GET['modif'])) {
        $id = $_GET['modif'];
        $pdo->exec("UPDATE experience SET titre = \"$_POST[titre]\" WHERE id_experience= $id");
        $pdo->exec("UPDATE experience SET date = \"$_POST[date]\"  WHERE id_experience= $id");
        $pdo->exec("UPDATE experience SET description = \"$_POST[description]\" WHERE id_experience= $id");
    }
    
    else {
        $requeteSQL = "INSERT INTO experience (titre, date, description) VALUE ('$_POST[titre]', '$_POST[date]', '$_POST[description]')";
        $result = $pdo->exec($requeteSQL);
    }
    
    
    
}
else if (!empty($_GET)) {
    if (!empty($_GET['delete'])){
        $to_suppr = $_GET['delete'];
        $pdo->exec("DELETE FROM experience WHERE id_experience = $to_suppr ");
    }
    if (!empty($_GET['modif'])) {

        echo "en cours de modification de l'experience numero ". $_GET['modif'];
    }
}


?>



<div>  
    <?php require("inc/admin_area.php") ?>
    <div>
        <h3>experience</h3>
        <?php 
            $base_de_donnee = $pdo->query("SELECT * FROM experience ORDER BY id_experience DESC");
            while ($experience = $base_de_donnee->fetch(PDO::FETCH_OBJ)) { ?>

                <div>
                        <div>
                                <div class="exper">
                                    <div>
                                        <h5 class="card-title"><?php echo $experience->titre; ?></h5>
                                    </div>


                                    <?php echo '<a href="admin.php?delete='. $experience->id_experience. '" >' ?> supprimer</a> 
                                    <?php echo '<a href="admin.php?modif='. $experience->id_experience. '" >' ?> modifier</a> 
                                    
                                </div>
                        </div>
                </div>
            <?php } ?>
    </div>


<?php
?>

</div>



<?php require_once("inc/footer.php") ?>