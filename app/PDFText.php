<?php

namespace ChallengeNova;

use ChallengeNova\Features\TextEditor;

class PDFText extends \FPDF implements TextEditor
{

    public function __construct($title)
    {
        $this->init($title);
    }

    public function init($title){

        $this->AddPage();
        $this->AddFont('Arial', 'B', 16);

    }

    public function addTitle($title)
    {
        $this->Cell(0, 0, $title);
    }

    public function addParagraph($text)
    {
        $this->Cell(0, 0, $text);
    }

    public function renderDoc()
    {
        $this->Output();
    }
}