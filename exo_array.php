<?php
    // $family = array( 'Louka', 'Livio' , 'Lorena', 'Antonio', 'Linda' ); 
    // print_r($family);

    // $recipe = ['Milk', 'Egg', 'Flour', 'Butter', 'Sugar'];
    // print_r($recipe);

    // echo $movies[0];

    // $countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
    // echo '<pre>';
    // print_r($countries);
    // echo '</pre>';

    // var_dump($countries);

    // $person['function'] = 'Junior Web Developer';
    // $person['function'] = 'Senior Web Developer';
    // echo $person['function'];
    // echo '<pre>';
    // print_r($person);
    // echo '</pre>';

    // $user = array (
    //     'firstname' => 'Juan',
    //     'lastname' => 'Pablo',
    //     'adress' => '3 Paradijsestraat',
    //     'city' => 'Antwerpen'
    // );
    // echo $user['lastname'];

    $me = array(
        'Firstname' => 'Louka',
        'Age' => 21,
        'SeasonFav' => 'Printemps',
        'Football?' => false,
        'hobbies' => ['Gaming', 'Tennis de table', 'Aller se balader'],
        'movies' => ['Les Gardiens de la galaxie 3', "L'apprenti sorcier", 'La Ligne verte', 'Joker'],
        'brother' => [
            'Firstname' => 'Livio',
            'Age' => 25,
            'SeasonFav' => 'Été',
            'Football?' => true,
            'hobbies' => ['Gaming', 'Football', 'Comptabilité'],
            'movies' => ['Les films Marvels', "Fast and furious", 'Le parrain', 'Joker']
        ]
    );
    // Ajout d'un éléments dans un array qui est lui même dans un array
    $me['hobbies'][]='taxidermy';
    // Modification
    $me['brother']['Firstname']='Liviou';


    echo '<pre>';
    print_r($me);
    echo '</pre>';

    $myHobbies = $me['hobbies'];
    $myHobbiesCount = count($myHobbies);
    echo "j'ai ".$myHobbiesCount." passe-temps.";

    $brotherHobbies = $me['brother']['hobbies'];
    $brotherHobbiesCount = count($brotherHobbies);
    echo "Mon frère a " . $brotherHobbiesCount . " passe-temps.";

    $totalHobbiesCount = $myHobbiesCount + $brotherHobbiesCount;
    echo "Le nombre total de passe-temps est ".$totalHobbiesCount;

?>