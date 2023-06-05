<html>
<head><title>Ma Personne</title>
</head>
<body>
    <?php 
    $prenom = "Louka";
    $age = 21;
    $color_eyes = "marron";
    $family = array('Linda', 'Antonio', 'Lorena', 'Livio', 'Louka');
    $faim = true;
    ?>
    <p>Salut! Mon prénom est <?php echo $prenom; ?>.</p>
    <p>j'ai <?php echo $age; ?> ans.</p>
    <p>Mes yeux sont <?php echo $color_eyes; ?>.</p>
    <p>La première personne de ma famille est <?php echo $family[0]; ?>.</p>
    <?php if ($faim == true){
        echo 'Louka a faim!';
        } else {
        echo "Louka n'a pas faim.";
        } ?>
</body>
</html>
