<?php
require_once "vendor/autoload.php";

ini_set('display_errors', 1);

use ChallengeNova\PDFText;
// use ChallengeNova\HTMLText;

$doc = new PDFText('Document de test');

$doc->addTitle('Section 1');

$doc->addParagraph('nulla facilisi cras fermentum odio');
$doc->addParagraph('pellentesque diam volutpat commodo sed');
$doc->addParagraph('dignissim eu tincidunt tortor aliquam');

$doc->addTitle('Section 2');

$doc->addParagraph('magna fermentum iaculis eu non');
$doc->addParagraph('posuere ac ut consequat semper');

$doc->renderDoc();