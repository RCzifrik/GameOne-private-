<div class="container-md">
    <row>
        <?php global $games ?>
        <?php
        foreach ($games as $game){
            echo "
            <div class='card d-inline-flex mx-5' style='width:25%'>
                <img src='./img/placeholder.png'>
                <div class='card-img-overlay text-center'>
                    <h5 class='card-title text-light text-center'>".
                $game->name
                ."</h5>
                    <a href='$game->name' class='btn btn-dark cardButton'>Go to game details</a>
                </div>
            </div>
            ";
        }
        ?>
