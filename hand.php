<?php
$open = false;
require __DIR__ . '/lib/game.inc.php';
//$view = new \Clue\GamesView($site, $_SESSION);


/// reset for project2 dont need this
//if (!isset($_GET["hand"])){
//    header("location: new.php"); // We redirect the user to
//}



// not needed for project 2 would get index of hand array
//$hand_page = $_GET["hand"];


//error checking for project 1
///**
// * In case the user decides to override the hand page variable
// * manually -- Help Prevent odd behaviors
// */
//if ($hand_page > $game->GetNumPlayers()){
//    header("location: hand.php?hand=1");
//}

$user = $_SESSION[\Clue\User::SESSION_NAME];
///Get the player for this page
//$player_i = $game->getPlayerArray()[$hand_page-1];
//make new view for this player


//pseudo for testing and moving onto the next page

$players = new Clue\PlayerTable($site);
$userTurn = $players->getUserTurn($user->getId());

$handview = new \Clue\HandView($game->pullHand($userTurn));

?>


<!DOCTYPE html>
<html lang="en">
<head>
<!--    <meta charset="UTF-8">-->
<!--    <title>Hand</title>-->
<!--    <link href="lib/clue2.css" type="text/css" rel="stylesheet" />-->
    <?php echo $handview->head();?>
</head>

<body>
    <header>
        <h1>Cards for player <?php echo $user->getUsername(); ?></h1>

        <!-- We can either generate the hands in the new.php right after
        the choices are made ( I think that will be easier or we can do it here
        The code below shows it's doable -->
<!--        <img src="--><?php //echo $player_i->getImage();?><!--" alt="--><?php //echo $player_i->getName(); ?><!--">-->

    </header>

    <div class="print-only">
        <p>Held Cards</p>

        <?php echo $handview->presentHeldCards();?>

        <p>Other Cards</p>
        <?php echo $handview->presentOtherCards();?>

    </div>
    <div class="no-print">
        <form method="post" action="post/hand-post.php">
            <input type="button" onclick="window.print();return false;" value="Print">
<!--            last project-->
<!--            <input type="hidden" name="hand" value="--><?php //echo $hand_page;?><!--">-->
            <input type="submit" value="Next">
        </form>
    </div>

</body>
</html>












