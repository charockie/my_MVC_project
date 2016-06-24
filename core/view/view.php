<?php

class View
{
    function generate($content, $data = null, $template=true)
    {
        if ($template === true) {
            include __DIR__ . '/../../views/template/header.php';
            include __DIR__ . '/../../views/' . $content;
            include __DIR__ . '/../../views/template/footer.php';
        } else {
            include 'views/' . $content;
        }
    }
}