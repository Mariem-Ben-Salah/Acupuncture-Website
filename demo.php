salut les gens
<?php
$eleve = [
    'nom'=> 'doe',
    'prenom' => 'marc', 
    'notes' => [10,20,14]
];
$eleve['prenom'] = 'jean';
echo $eleve['prenom'] . ' ' . $eleve['nom'];
?>

<?php
$note = (int)readline('Entrez votre note :');
if ($note > 10) {
    echo "Bravo, vous avez la moyenne";

} elseif ($note === 10) {
    echo "vous avez juste la moyenne";
} else {
    echo "dommage, vous n'avez pas la moyenne\n";
}
?>
<?php
$action = (int)readline('Entrez votre actin (1: attaquer, 2:défendre, 3: passer mon tour) :');
switch ($action) {
    case 1:
        echo 'attaque';
        break;
    case 2:
        echo 'defendre';
        break;
    case 3:
        echo 'fais rien';
        break;
    default:
    echo 'commande inconnue';
}
?>
