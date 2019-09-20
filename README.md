# Générateur de texte sous deux formats, HTML et PDF

## Contexte

On souhaite pouvoir formater des contenus pour la lecture web directe et pour une sortie PDF, sans avoir à réécrire plusieurs fois les contenus texte. Pour cela nous envisageons de créer une classe utilitaire (helper) qui nous permet de coder ce contenu une seule fois et de pouvoir le générer dans le format voulu (HTML, PDF, autre à  terme : texte, markdown).

(Pour vous y aider, voir les ressources fiches récap' en bas de ce readme).

# Notions

- Générer un composer.json qui incluera :
    - la dépendance FPDF (https://packagist.org/packages/setasign/fpdf)
    - un autoload PSR-4 pour nos classes
- Créer une interface TextEditor qui doit contenir :
    - une méthode init($title) qui génère l'en-tête de la page (gros titre)
    - une méthode addTitle($title) qui ajoute un titre
    - une méthode addParagraph($text) qui ajoute un paragraphe
    - une méthode renderDoc() qui affiche le document final
- Implémenter 2 classes :
    - une classe HTMLText qui implémente TextEditor
    - une classe PDFText qui hérite de FPDF et implémente TextEditor
    
**L'idée est de générer des sections (addTitle) et des textes (addParagraph) à la volée.**

## HTMLText

A l'instanciation de cette classe, on crée l'en-tête HTML + la balise title + un titre H1.

Puis on utilisera les balises suivantes :

- addTitle() => utiliser une balise H2
- addParagraph => utiliser une balise P

## PDFText

A l'instanciation de cette classe, on crée une première page avec un gros titre.

Pour manipuler notre texte on utilisera les fonctions :

- AddPage
- SetFont
- Cell
- Ln
- Output

de la librairire FPDF (http://fpdf.org/ => Manuel + Tutorials).

Vous pouvez bien sûr faire évoluer cette base :) !

## Bootstrap

Votre code devrait fonctionner avec ces appels :

```
<?php
require_once "vendor/autoload.php";

ini_set('display_errors', 1);

//use TextEditor\PDFText;
use TextEditor\HTMLText;

$doc = new HTMLText('Document de test');

$doc->addTitle('Section 1');

$doc->addParagraph('nulla facilisi cras fermentum odio');
$doc->addParagraph('pellentesque diam volutpat commodo sed');
$doc->addParagraph('dignissim eu tincidunt tortor aliquam');

$doc->addTitle('Section 2');

$doc->addParagraph('magna fermentum iaculis eu non');
$doc->addParagraph('posuere ac ut consequat semper');

$doc->renderDoc();
```

> Note : Attention, pour que l'affichage du PDF soit opérationnel, il ne faut qu'aucun echo/dump/print_r (un retour) ne soit effectué **avant** (= erreur : header already sent).

## Infos

Librairie FPDF sur packagist : https://packagist.org/packages/setasign/fpdf

Manuel : http://fpdf.org/ => Manuel

Ne pas hésiter à définir les erreurs dans votre index.php pour débugguer plus facilement si votre php.ini n'est pas bien configuré pour ça :
```
ini_set('display_errors', 1);
```

# Ressources

- [Fiche récap > PHP > Composer](https://github.com/O-clock-Alumnis/fiches-recap/blob/master/php/composer.md)
- [Fiche récap > PHP > Namespaces](https://github.com/O-clock-Alumnis/fiches-recap/blob/master/php/namespaces.md)
- [Fiche récap > PHP > POO](https://github.com/O-clock-Alumnis/fiches-recap/blob/master/php/programmation-objet.md)
- [Fiche récap > PHP > Héritage](https://github.com/O-clock-Alumnis/fiches-recap/blob/master/php/heritage.md)

