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
