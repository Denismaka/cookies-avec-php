<?php
$user = [
    'prenom' => 'Justine',
    'nom' => 'amr',
    'age' => '21'
];
setcookie('utilisateur', serialize($user));
// setcookie('nom', $user['nom']);
include('./header.php');
?>;
<!-- Infos plus complexe -->
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