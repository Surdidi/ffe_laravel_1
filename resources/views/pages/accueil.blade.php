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

        <h1 class="title"><span>Bienvenue $utilisateur dans votre espace personnel.</span></h1>

        <center><img src="./image/separa.png" alt=""></center>

        <h2 class="subtitle"><span>Liste des/de vos fiches de frais</span></h2>

        <table>
            <thead>
                <th>Fiche n°</th>
                <th>Libellé fiche</th>
                <th>Montant fiche</th>
                <th>Date modification</th>
                <th>État</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Déplacement dans le nord pas de calais</td>
                    <td>35.00 €</td>
                    <td>01/12/2018</td>
                    <td>Refusée</td>
                    <td><img src="./assets/images/info.png" style="height:25px;" alt=""></td>
                </tr>
            </tbody>
        </table>

    </div>

</body>
</html>
