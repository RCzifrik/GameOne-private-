<div class="container-md">
        <?php global $detailGame ?>
        <?php global $review ?>
        <?php global $userReview ?>
<?php
foreach ($detailGame as $game){
    echo "
            <div class='row'><div class='card d-inline-flex mx-5' style='width:25%'>
                <img src='./img/placeholder.png'>
                <div class='card-img-overlay text-center'>
                    <h5 class='card-title text-light text-center'>".
        $game->name
        ."</h5>
                </div>
            </div>
            ";

    echo "<div class='col-3'><h2 class='text-light'>Description</h2><br><p class='text-light'>" . $game->description . "</p>";

    $gameId = $game->id;

    echo "<br><br><br><br>";
    echo "<h2 class='text-light'>reviews</h2><br>";
    foreach ($review as $data) {

        $userId = $data->user_id;
        $reviewUsername = "";


        if ($data->game_id === $gameId) {
            echo "<div class='border border-light p-2'><p class='text-light'> . $reviewUsername . </p><br><p class='text-light'> . $data->description . </p></div></div></div> <br>";
        } else {
            echo "";
        }
        //echo "<br><br><br><br><h2 class='text-light'>reviews</h2><br><p class='text-light'> . $data->description . </p></div></div>";
    }

}

?>