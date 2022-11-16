<?php $name = "Dikke Jan"; ?>
<header class="border">

    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-sm-1">
                <img src="img/dikke_jan.jpg" class="profilePicture rounded-circle img-fluid" alt="dikke jan">
            </div>
            <div class="col-sm-2 align-items-end">
                <?php
                    echo "<h3 class='mx-3 d-flex welcomeName'>Welcome " . $name . "!</h3>";
                ?>
            </div>
            <div class="col-sm-5"></div>
            <div class="col-sm-3">
                <div class="search">
                    <form class="d-flex justify-content-start" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-1">
                <button class="d-flex ms-auto darkMode rounded-2">
                    <i class="bi bi-list d-flex align-self-center"></i>
                </button>
            </div>
        </div>
    </div>
</header>
