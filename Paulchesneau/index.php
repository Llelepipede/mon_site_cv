<?php require_once("inc/header.php") ?>
    <div>
        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
            <div class="w-100">
                <h1 class="mb-0">Chesneau
                <span class="text-primary">Paul</span>
                </h1>
                <div class="subheading mb-5">
                <a href="mailto:name@email.com">paul.chesneau@ynov.com</a>
                </div>
                <p class="lead mb-5">etudiant a Paris YNOV campus en bachelor INGESUPP premiere année </p>
            </div>
        </section>
    
        <section>
        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
            <div class="w-100">
                <h3>experience</h3>
                <?php 
                    $base_de_donnee = $pdo->query("SELECT * FROM experience ORDER BY id_experience DESC");
                    while ($experience = $base_de_donnee->fetch(PDO::FETCH_OBJ)) { ?>

                        <div>
                                <div>
                                        <div class="exper">
                                            <div>
                                                <h5><?php echo $experience->titre; ?></h5>
                                            </div>
                                            <div>
                                                <p><?php echo $experience->date; ?></p>
                                            </div>
                                        </div>
                                        <p><?php echo $experience->description; ?></p>
                                </div>
                        </div>  
                    <?php } ?>
            </div>
        </section>
    </div>




<?php require_once("inc/footer.php") ?>