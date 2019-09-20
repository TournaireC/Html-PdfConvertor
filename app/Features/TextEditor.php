<?php 

namespace ChallengeNova\Features;

interface TextEditor
{
    public function init($title);

    public function addTitle($title);

    public function addParagraph($text);

    public function renderDoc();
}