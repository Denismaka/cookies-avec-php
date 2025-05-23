<?php

//  2. Persister la date de naissance dans un cookie 
if (!empty($_POST['birthday'])) {
    setcookie('birthday', $_POST['birthday']);
    $_COOKIE['birthday'] = $_POST['birthday'];
}
// 3. Si l'utilisateur est assez agé lui montrer le contenu -->
$age = null;
if (!empty($_COOKIE['birthday'])) {
    $birthday = (int)$_COOKIE['birthday'];
    $age = (int)date('Y') - $birthday;
}


include('./header.php') ?>

<?php if ($age >= 18): ?>
    <h1>Du contenu reservé aux adultes</h1>
<?php elseif ($age !== null): ?>
    <div class="container">
        <div class="row">
            <div class="alert alert-danger mt-4 text-center">Vous n'avez pas l'age recquis pour regarder ces contenus </div>
        </div>
    </div>
<?php else: ?>
    <!-- - 1. Delander à l'utilisateur sa date de naissance (select 2010-1919) -->
    <div class="container" style="margin-top: 10rem;">
        <div class="row">
            <form action="" method="post">
                <div class="form-group">
                    <label for="birthday">Section réservée pour les adultes entrer votre année de naissance : </label>
                    <select name="birthday" id="birthday" class="form-control">
                        <?php for ($i = 2010; $i > 1919; $i--): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor ?>
                    </select>
                </div>
                <button class="btn btn-primary  m-3">Se connecter</button>
            </form>
        <?php endif; ?>
        </div>
    </div>

    <!-- Exercices  -->
    <!-- - 1. Delander à l'utilisateur sa date de naissance (select 2010-1919) -->
    <!-- - 2. Persister la date de naissance dans un cookie -->
    <!-- - 3. Si l'utilisateur est assez agé lui montrer le contenu -->
    <!-- - 4. Sinon on affiche un message d'erreur -->