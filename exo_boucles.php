<?php
    // Exo exemple 
    // $pronous = ['I', 'You', 'He/She', 'We', 'You', 'They'];

    // foreach($pronous as $pronou){
    //     echo $pronou . " code.<br>";
    // }
    // Exo 

    // $mount = 1;
    // while ($mount <= 120){
    //     echo $mount.'<br>';
    //     $mount ++;
    // }
    
    // for ($mounts = 1; $mounts <= 120; $mounts ++){
    //         echo $mounts.'<br>';
    // }

    // $names = ['Nikko', 'Jodie', 'Julien', 'Noa', 'Steve', 'Marine'];
    // foreach($names as $name){
    //     echo $name. '<br>';
    // }
?>

<?php
$pays = array(
    'FR' => "France",
    'DE' => "Allemagne",
    'ES' => "Espagne",
    'IT' => "Italie",
    'UK' => "Royaume-Uni",
    'US' => "États-Unis",
    'CA' => "Canada",
    'AU' => "Australie",
    'JP' => "Japon",
    'BR' => "Brésil"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sélection de pays</title>
</head>
<body>
    <form>
        <label for="pays">Sélectionnez un pays :</label>
        <select id="pays" name="pays">
            <?php foreach ($pays as $code => $nom) {
                echo "<option value='$nom'>$code</option>";
            } ?>
        </select>
        <input type="submit" value="Valider">
    </form>
</body>
</html>