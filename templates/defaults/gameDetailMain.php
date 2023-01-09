<div class="container-md">
        <?php global $detailGame ?>
        <?php global $review ?>
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

    echo "<div class='col-3'><h2 class='text-light'>Description</h2><br><p class='text-light'>" . $game->description . "</p></div></div>";

    foreach ($review as $data) {
        echo "<p class='text-light'> . $data->description . </p>";
    }

}

?>