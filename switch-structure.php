<form method="get" action=""> 
    <label for="note">Quelle est ta note?</label>
    <input type="number" name="note">
    <input type="submit" name="submit" value="Send !">
</form>

<?php
    if (isset($_GET['note'])){
        $note = $_GET['note']; 

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
    
        switch ($note){
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                echo "Ce travail est vraiment mauvais. Quel gamin idiot !";
                break;
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                echo "Ce n'est pas suffisant. Plus d'études sont nécessaires.";
                break;
            case 10:
                echo "À peine assez !";
                break;
            case 11:
            case 12:
            case 13:
            case 14: 
                echo "Pas mal !";
            case 15:
            case 16:
            case 17:
            case 18:
                echo "Bravo, bravissimo !";
                break;  
            case 19:
            case 20:
                echo "Trop beau pour être vrai : affrontez le tricheur !";
                break; 
            default:
                echo "T'es con ou quoi?";
                break;
        };
    }
?>