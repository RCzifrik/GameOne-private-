<?php $name = "Dikke Jan"; ?>
<header class="border">
    <div class="p-3 d-flex me-auto ">
        <img src="img/dikke_jan.jpg" class="profilePicture rounded-circle img-fluid" id="profilePicture" alt="dikke jan">
        <?php
            echo "<h3 class='align-self-end mx-3'>Welcome " . $name . "!</h3>";
        ?>
        <div class="search">
            <form class="" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <button class="d-flex ms-auto">
            <i class="bi bi-list d-flex align-self-center"></i>
        </button>
    </div>
</header>
