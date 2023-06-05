<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drill exercises</title>
</head>
<body>
<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

// $room_is_filthy = false;

// if( $room_is_filthy == false ){
//     echo "Yuk, Room is dirty : let's clean it up !";
// 	// echo "<br>Room is now clean!";
// } else {
//     echo "<br>Nothing to do, room is neat.";
// }

// 1.2 Clean your room Exercise, improved

// $possible_states = array('filthy', 'dirty', 'clean');
// $room_filthiness = $possible_states[0]; 

// if($room_filthiness == 'filthy'){
// 	echo "Yuk, Room is Disgusting! Let's clean it up !";
// } else if($room_filthiness == 'dirty'){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// // ...
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }

// 2. "Different greetings according to time" Exercise

// $now = date('H:i');

// if (date('H') >= 5 && date('H') < 9) {
//     echo 'Bonjour ! ';
// } else if (date('H') >= 9 && date('H') < 12) {
//     echo 'Bonne journée ! ';
// } else if (date('H') >= 12 && date('H') < 16) {
//     echo 'Bonjour ! ';
// } else if (date('H') >= 16 && date('H') < 21) {
//     echo 'Bonsoir ! ';
// } else {
//     echo 'Bonne nuit ! ';
// }

?>
<!-- 3. "Different greetings according to age" Exercise -->

<!-- <form method="get" action="">
    <label for="age">Veuillez saisir votre âge :</label>
    <input type="text" name="age">
    <input type="submit" name="submit" value="Greet me now">
    <label for="genre"><br>Homme ou Femme?</label>
    <input type="radio" name="genre" value="man">Homme</input>
    <input type="radio" name="genre" value="woman">Femme</input>
    <label for="genre"><br>Parlez-vous Anglais?</label>
    <input type="radio" name="language" value="yes">Oui</input>
    <input type="radio" name="language" value="no">Non</input>
</form>
<br>

<?php
// if (isset($_GET['age']) && isset($_GET['genre']) && isset($_GET['language'])){
//     if ($_GET['age'] < 12 && $_GET['genre'] == 'woman' && $_GET['language'] == 'yes'){
//         echo "Hello Miss kiddo! ";
//     }else if ($_GET['age'] < 12 && $_GET['genre'] == 'woman' && $_GET['language'] == 'no'){
//         echo "Aloha Girl!";
//     }else if ($_GET['age'] < 12 && $_GET['genre'] == 'man' && $_GET['language'] == 'yes'){
//         echo "Hello Mister kiddo! ";
//     }else if ($_GET['age'] < 12 && $_GET['genre'] == 'man' && $_GET['language'] == 'no'){
//         echo "Aloha Boy! ";
//     }else if ($_GET['age'] >= 12 && $_GET['age'] < 18 && $_GET['genre'] == 'woman' && $_GET['language'] == 'yes'){
//         echo "Hello Miss Teen! ";
//     }else if ($_GET['age'] >= 12 && $_GET['age'] < 18 && $_GET['genre'] == 'woman' && $_GET['language'] == 'no'){
//         echo "Aloha Miss Teen! ";
//     }else if ($_GET['age'] >= 12 && $_GET['age'] < 18 && $_GET['genre'] == 'man' && $_GET['language'] == 'yes'){
//         echo "Hello Mister Teen! ";
//     }else if ($_GET['age'] >= 12 && $_GET['age'] < 18 && $_GET['genre'] == 'man' && $_GET['language'] == 'no'){
//         echo "Aloha Mister Teen! ";
//     }else if ($_GET['age'] >= 18 && $_GET['age'] < 115 && $_GET['genre'] == 'woman' && $_GET['language'] == 'yes'){
//         echo "Hello Miss Adult! ";
//     }else if ($_GET['age'] >= 18 && $_GET['age'] < 115 && $_GET['genre'] == 'woman' && $_GET['language'] == 'no'){
//         echo "Aloha Adult! ";
//     }else if ($_GET['age'] >= 18 && $_GET['age'] < 115 && $_GET['genre'] == 'man' && $_GET['language'] == 'yes'){
//         echo "Hello Mister Adult! ";
//     }else if ($_GET['age'] >= 18 && $_GET['age'] < 115 && $_GET['genre'] == 'man' && $_GET['language'] == 'no'){
//         echo "Aloha Adult! ";
//     }else {
//         echo "Wow! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te prendre dans mes bras? ";
//     }
// }
?> -->

<!-- Equipe de foot féminin entre 21 et 40 ans -->

<!-- <form method="get" action=""> 
<label for="name">Quel est votre nom?</label>
<input type="text" name="name">
</br>
<label for="age">Veuillez saisir votre âge :</label>
<input type="text" name="age">
</br>
<label for="gender">Homme ou Femme?</label>
<input type="radio" name="gender" value="man">Homme</input>
<input type="radio" name="gender" value="woman">Femme</input>
</br>
<input type="submit" name="submit" value="Greet me now">
</form> -->

<?php
// if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])){
//     echo "Désolé, ".$_GET['name']. ", tu n'es pas sélectionnée.";
//     if ($_GET['age'] >= 21 && $_GET['age'] <= 40 && $_GET['gender'] == 'woman'){
//         echo "Bravo, ".$_GET['name']. ", tu es sélectionnée.";
//     }
// }
?>

<!-- <form method="get" action=""> 
    <label for="note">Quelle est ta note?</label>
    <input type="text" name="note">
    <input type="submit" name="submit" value="Send !">
</form> -->

<?php
    // if (isset($_GET['note'])){
    //     $note = $_GET['note']; // Récupère la valeur saisie dans le champ de texte

    //     if ($note <= 4){
    //         echo "Ce travail est vraiment mauvais. Quel gamin idiot !";
    //     } else if ($note > 4 && $note <= 9){ // Corrige la condition ici
    //         echo "Ce n'est pas suffisant. Plus d'études sont nécessaires.";
    //     } else if ($note == 10){
    //         echo "À peine assez !"; 
    //     } else if ($note >= 11 && $note <= 14){ 
    //         echo "Pas mal !";
    //     } else if ($note >= 15 && $note <= 18){ 
    //         echo "Bravo, bravissimo !";
    //     } else{
    //         echo "Trop beau pour être vrai : affrontez le tricheur !";
    //     }
    // }
?>



</body>
</html>