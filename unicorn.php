<!DOCTYPE html>
<html>
<head>
    <title>Formulaire Unicorn</title>
</head>
<body>
    <?php
        if (isset($_GET['creature'])){
            if ($_GET['creature'] == 'humain'){
                echo '<iframe src="https://giphy.com/embed/vvBsAcNyjKk6iOkVx3" width="480" height="400" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/theoffice-season-9-the-office-tv-vvBsAcNyjKk6iOkVx3">via GIPHY</a></p>';
            }else if($_GET['creature'] == 'chat'){
                echo '<iframe src="https://giphy.com/embed/8vQSQ3cNXuDGo" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cat-moment-remember-8vQSQ3cNXuDGo">via GIPHY</a></p>';
            }else{
                echo '<iframe src="https://giphy.com/embed/HULqwwF5tWKznstIEE" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/storyful-national-unicorn-day-HULqwwF5tWKznstIEE">via GIPHY</a></p>';
            }
        }
    ?>
    
    <form method="get" action="">
        <label for="creature">Êtes-vous un humain, un chat ou une licorne ?</label><br>
        <input type="radio" name="creature" value="humain">Humain<br>
        <input type="radio" name="creature" value="chat">Chat<br>
        <input type="radio" name="creature" value="licorne">Licorne<br><br>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
