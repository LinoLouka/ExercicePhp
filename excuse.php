<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générator Excuse</title>
</head>
<body>
    <h1>Générateur d'excuses</h1>
    <form method="get" action="">
        <label for="kind">Donnée de l'enfant</label><br>
        <input type="text" name="nameE">Nom de l'élève<br>
        <input type="radio" name="gender" value="female">Fille<br>
        <input type="radio" name="gender" value="male">Garçon<br>
        <input type="text" name="nameP">Nom du professeur<br>
        <label for="motif">Motif d'absence :</label><br>
        <input type="radio" name="motif" value="maladie">Maladie?<br>
        <input type="radio" name="motif" value="mort">Décès?<br>
        <input type="radio" name="motif" value="activity">activité parascolaire?<br>
        <input type="radio" name="motif" value="other">autre excuse...?<br><br>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>

<?php
    if (isset($_GET['nameE']) AND isset($_GET['nameP']) AND isset($_GET['gender']) AND isset($_GET['motif'])){
        if ($_GET['gender'] == 'female'){
            if ($_GET['motif'] == 'maladie'){
                echo 'Mr/Mme '.$_GET['nameP']. ' veuillez excuser notre fille ' .$_GET['nameE']. ' de son absence, elle était malheureusement malade.';
            }else if ($_GET['motif'] == 'mort'){
                echo 'Mr/Mme '.$_GET['nameP']. ' veuillez excuser notre fille ' .$_GET['nameE']. ' de son absence, il y a eu malheureusemet un décès dans la famille.';
            }else if ($_GET['motif'] == 'activity'){
                echo 'Mr/Mme '.$_GET['nameP']. ' veuillez excuser notre fille ' .$_GET['nameE']. ' de son absence, elle a eu son activité parascolaire.';
            }else{
                echo 'Mr/Mme '.$_GET['nameP']. ' veuillez excuser notre fille ' .$_GET['nameE']. " de son absence, mon enfant est débile et utilise des générateurs d'excuse.";
            }
        }else{
            if ($_GET['motif'] == 'maladie'){
                echo 'Mr/Mme '.$_GET['nameP']. ' veuillez excuser notre fils ' .$_GET['nameE']. ' de son absence, il était malheureusement malade.';
            }else if ($_GET['motif'] == 'mort'){
                echo 'Mr/Mme '.$_GET['nameP']. ' veuillez excuser notre fils ' .$_GET['nameE']. ' de son absence, il y a eu malheureusemet un décès dans la famille.';
            }else if ($_GET['motif'] == 'activity'){
                echo 'Mr/Mme '.$_GET['nameP']. ' veuillez excuser notre fils ' .$_GET['nameE']. ' de son absence, il a eu son activité parascolaire.';
            }else{
                echo 'Mr/Mme '.$_GET['nameP']. ' veuillez excuser notre fils ' .$_GET['nameE']. " de son absence, mon enfant est débile et utilise des générateurs d'excuse.";
            }
        }
    }
?>