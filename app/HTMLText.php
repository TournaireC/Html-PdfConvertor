<?php

namespace ChallengeNova;

use ChallengeNova\Features\TextEditor;


class HTMLText implements TextEditor
{   
    private $html;

    public function __construct($title)
    {
        $this->init($title);
    }

    public function init($title){
        $this->html = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>PDF Creator</title>
            
        </head>
        <body>
        <h1>' . $title . '</h1>';
    }

    public function addTitle($title)
    {
        $this->html .='<h2>'. $title . '</h2>';
    }

    public function addParagraph($text)
    {
        $this->html .= '<p>' . $text . '</p>';
    }

    public function renderDoc()
    {
        $this->html .= '
        </body>
        </html>';
    }
}



