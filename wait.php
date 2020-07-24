<?php
$open = false;
require 'lib/site.inc.php';
$view = new Clue\WaitView($site, $_SESSION, $_GET);
if($view->isRedirect()) {
header("location: " . $site->getRoot());
exit;
}
if($view->checkStatus()) {
    header("location: " . $site->getRoot() . "/hand.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $view->head();
    echo $view->presentSocket(); ?>
</head>
<body>
<div class="index">
    <header>
        <?php echo $view->header(); ?>

    </header>
    <?php echo $view->present();?>
</body>
</div>
</html>