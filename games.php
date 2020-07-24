<?php
$open = false;
require 'lib/site.inc.php';
$view = new \Clue\GamesView($site, $_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<body class="games_body">
<div class="games">

    <head>

<!--        <meta charset="utf-8">-->
<!--        <title>Open Games</title>-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--        <link rel="stylesheet" href="lib/clue1.css">-->
        <?php echo $view->head();?>

    </head>

    <header>
        <?php echo $view->header();?>
    </header>

    <?php echo $view->present();?>

</div>

</body>
</html>
