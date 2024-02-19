<?php

$matches = [
    [
        'house_team' => 'Milan',
        'transfert_team' => 'Inter',
        'score_h' => 20,
        'score_t' => 30
    ],
    [
        'house_team' => 'Juve',
        'transfert_team' => 'Torino',
        'score_h' => 12,
        'score_t' => 45
    ],
    [
        'house_team' => 'Roma',
        'transfert_team' => 'Venezia',
        'score_h' => 90,
        'score_t' => 67
    ],
    [
        'house_team' => 'Lecce',
        'transfert_team' => 'Anzio',
        'score_h' => 11,
        'score_t' => 29
    ],
    [
        'house_team' => 'Antinomia',
        'transfert_team' => 'Coccode',
        'score_h' => 21,
        'score_t' => 11
    ],
]; 
?>

<ul>
    <?php foreach ($matches as $match) :?>
    <li>
        <?php echo $match['house_team'] . ' - ' . $match['transfert_team'] . ' | ' . $match['score_h']. '-' . $match['score_t']; ?>
    </li>
    <?php endforeach; ?>

</ul>

