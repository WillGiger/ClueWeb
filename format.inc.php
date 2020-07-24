<?php
/**
 * Create the HTML for the header block
 * @param $title string The page title
 * @return string HTML for the header block
 */
function presentHeader($title) {
    $html = <<<HTML
<p>
<a href="login.php">Log in</a>
<a href="instructions.php">Instructions</a>
</p>
<h1><a href="index.php">$title</a></h1>

HTML;

    return $html;
}