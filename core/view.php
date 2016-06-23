<?php

class View
{
    function generate($content, $data = null, $template=true)
    {
        if ($template === true) {
            include 'views/template/header.php';
            include 'views/' . $content;
            include 'views/template/footer.php';
        } else {
            include 'views/' . $content;
        }
    }
}