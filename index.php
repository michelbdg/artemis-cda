<?php 

require 'classes/Book.php';
require 'classes/Publisher.php';

use Artemis\Book;
use Artemis\Publisher;

// Instanciations
$editeur_1 = new Publisher(1, 'Gallimard');
$editeur_2 = new Publisher(2, 'Hachette');
$editeur_3 = new Publisher(3, 'Nathan');
$livre_1 = new Book(
    1, 
    'Le seigneur des anneaux', 
    'Un livre de fantaisie', 
    '123456789',
    1, 
    2);

// Affichage
echo 'Voici le livre : ' . $livre_1->getTitle() . '<br>';
echo 'Il est publié par la maison d\'édition : ' . null . '<br>';

var_dump($livre_1);


die();









include __DIR__ . '/templates/header.php';

include __DIR__ . '/templates/hero.php';

include __DIR__ . '/templates/last.php';

include __DIR__ . '/templates/footer.php';