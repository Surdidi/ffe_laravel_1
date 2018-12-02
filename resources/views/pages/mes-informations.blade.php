<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'inc/nav.inc.php'; ?>

    <div id="content">

        <img src="http://www.echecs.asso.fr/images/bandeau-ffe.png" alt="" class="banniere">

        <h1 class="title"><span>$nom_prenom : vos informations</span></h1>

        <form method="POST" id="infos__user">

            <div class="infos__vous">

                <b>Informations sur vous</b> <br><br>

                <label for="identifiant">Identifiant : </label> <input type="text" name="identifiant" value="$extraire_identifiant" readonly/> <br>
                <label for="nom_famille">Nom de famille : </label> <input type="text" name="nom_famille" value="$extraire_nom_famille" readonly/> <br>
                <label for="prenom">Prénom : </label> <input type="text" name="prenom" value="$extraire_prenom" readonly/> <br>
                <label for="mdp1">Mot de passe : </label> <input type="password" name="mdp1" /> <br>
                <label for="mdp2">Confirmation du mot de passe : </label> <input type="password" name="mdp2" /> <br> <br>

            </div>

            <div class="infos__addr">

                <b>Votre adresse</b> <br> <br>

                <label for="ville">Ville : </label> <input type="text" name="ville" value="$extraire_ville"/> <br>
                <label for="cp">Code postal : </label> <input type="text" pattern="0-9{5}" value="$extraire_cp"/> <br>
                <label for="rue">Rue : </label> <input type="text" name="rue" value="$extraire_rue"> <br><br>

            </div>


            <div class="infos__autre">

                <b>Autres informations</b> <br><br>

                <label for="tel">N° de téléphone : </label> <input type="tel" name="tel" pattern="0-9{10}" value="$extraire_tel"/> <br>
                <label for="mail">Adresse e-mail : </label> <input type="mail" name="mail" value="$extraire_mail"/>
                <label for="rib">RIB (Relevé d'Identité Bancaire) : </label> <input type="text" name="rib" pattern=""/>

            </div>

            <input type="submit" value="Sauvegarder les modifications">

        </form>

    </div>

</body>
</html>
