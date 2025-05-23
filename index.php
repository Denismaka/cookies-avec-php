<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <title>Apprentissage des cookies avec php</title>
</head>

<body>
    <!-- ############## -->
    <!-- cookies -->
    <!-- ############## -->
    <section class="cookie" id="cookie">
        <div class="container">
            <div class="row">
                <?php
                $nom = null;
                if (!empty($_GET['action']) && $_GET['action'] === 'deconnecter') {
                    unset($_COOKIE['utilisateur']);
                    setcookie('utilisateur', '', time() - 10);
                }
                if (!empty($_COOKIE['utilisateur'])) {
                    $nom = $_COOKIE['utilisateur'];
                }
                if (!empty($_POST['nom'])) {
                    setcookie('utilisateur', $_POST['nom']);
                    $nom = $_POST['nom'];
                }

                ?>

                <?php if ($nom): ?>
                    <h1>Bonjour <?= htmlentities($nom) ?></h1>
                    <a href="index.php?action=deconnecter">Se deconnecter</a>
                <?php else: ?>
                    <!-- Affiche le formulaire  -->
                    <form action="" method="post">
                        <div class="form-group m-3">
                            <input class="form-group mb-2" name="nom" placeholder="Entrer votre nom"> <br>
                            <button class="btn btn-primary  m-3">Se connecter</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </section>





</body>

</html>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>