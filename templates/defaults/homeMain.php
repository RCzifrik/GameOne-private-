<div class="container-md">
    <row>
        <?php global $categories ?>
        <?php
        foreach ($categories as $category){
            echo "
            <div class='card d-inline-flex mx-5' style='width:25%'>
                <img src='./img/placeholder.png'>
                <div class='card-img-overlay text-center'>
                    <h5 class='card-title text-light text-center'>".
                $category->name
                    ."</h5>
                    <a href='$category->id' class='btn btn-dark cardButton'>Go to collection</a>
                </div>
            </div>
            ";
        }
        ?>
<!--        <div class="col d-flex justify-content-center pt-5">-->
<!--            <div class="card d-inline-flex mx-5" style="width:25%">-->
<!--                <img src="./img/placeholder.png">-->
<!--                <div class="card-img-overlay text-center">-->
<!--                    <h5 class="card-title text-light text-center">Card title</h5>-->
<!--                    <a href="#" class="btn btn-dark cardButton">Go to collection</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card d-inline-flex mx-5" style="width:25%">-->
<!--                <img src="./img/placeholder.png">-->
<!--                <div class="card-img-overlay text-center">-->
<!--                    <h5 class="card-title text-light text-center">Card title</h5>-->
<!--                    <a href="#" class="btn btn-dark cardButton">Go to collection</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </row>-->
<!--    <row>-->
<!--        <div class="col d-flex justify-content-center pt-5">-->
<!--            <div class="card d-inline-flex mx-5" style="width:25%">-->
<!--                <img src="./img/placeholder.png">-->
<!--                <div class="card-img-overlay text-center">-->
<!--                    <h5 class="card-title text-light text-center">Card title</h5>-->
<!--                    <a href="#" class="btn btn-dark cardButton">Go to collection</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card d-inline-flex mx-5" style="width:25%">-->
<!--                <img src="./img/placeholder.png">-->
<!--                <div class="card-img-overlay text-center">-->
<!--                    <h5 class="card-title text-light text-center">Card title</h5>-->
<!--                    <a href="#" class="btn btn-dark cardButton">Go to collection</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </row>
</div>
