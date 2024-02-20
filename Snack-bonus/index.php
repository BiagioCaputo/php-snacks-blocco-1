<?php
$paragraph ="Naruto (NARUTO -ナルト-?) è un manga scritto e disegnato da Masashi Kishimoto e pubblicato dal 4 ottobre 1999 al 10 novembre 2014 sulla rivista Weekly Shōnen Jump di Shūeisha, per un totale di 15 anni di serializzazione. I 700 capitoli realizzati sono stati raccolti in 72 volumi tankōbon sotto l'etichetta Jump Comics; il manga è stato tradotto e pubblicato in diverse lingue, tra cui in inglese da Viz Media, in italiano da Planet Manga, in francese da Kana, in tedesco da Banzai! e in spagnolo da Glénat.

La trama segue le peripezie e le vicissitudini del giovane Naruto Uzumaki, il quale, partendo da ninja inetto e diventando via via più forte, cerca di cambiare il suo mondo, inseguendo il sogno di diventare hokage.

Dal manga sono state tratte due serie televisive anime entrambe prodotte dalla Pierrot e andate in onda su TV Tokyo: la prima, Naruto (NARUTO -ナルト-?), composta da 220 episodi che adatta i primi 27 volumi, andata in onda dal 15 febbraio 2007 al 23 marzo 2017, adatta il seguito della vicenda dal volume 28 in poi. Inoltre, la serie è stata trasposta in altri media come romanzi, videogiochi, film e OAV.

Naruto, con le sue oltre 250 milioni di copie, è diventato il quinto manga più venduto al mondo, dietro One Piece, Golgo 13, Detective Conan e Dragon Ball[1].";


$paragraphs = explode('.', $paragraph);

//preg_split
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack bonus</title>
</head>
<body>
    <h1>Naruto</h1>
    <div>
        <?php foreach($paragraphs as $paragraph ) : ?>
            <p><?= $paragraph ?>. </p>
        <?php endforeach ?>
    </div>
</body>
</html>

