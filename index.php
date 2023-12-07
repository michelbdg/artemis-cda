<?php 

require __DIR__.'classes/Book.php';
require __DIR__.'classes/Publisher.php';
require __DIR__.'classes/Ebook.php';

use Artemis\Book;
use Artemis\Ebook;
use Artemis\Publisher;

$ebook = new Ebook(
    2,
    'Macron à la plage',
    'Les aventures du président',
    '123-334-123',
    3,
    3
);

$ebooks->setIsAugmented(true)
        ->setAvailability(30)
        ->setIsDownloadable(false);

var_dump($ebook);
die();









include __DIR__ . '/templates/header.php';

include __DIR__ . '/templates/hero.php';

include __DIR__ . '/templates/last.php';

include __DIR__ . '/templates/footer.php';