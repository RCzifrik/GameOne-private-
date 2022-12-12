<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid d-flex">
        <div class="d-flex flex-grow-1 justify-content-center" id="">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <div class="dropdown">
                        <a class="hoverChange toggleChange dropdown-toggle text-light border-0" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <?php
                                try {
                                    global $pdo;
                                    $query = $pdo->prepare("SELECT * FROM genre");
                                    $query->execute();
                                    $result = $query->fetchAll(PDO::FETCH_CLASS);
                                    foreach ($result as &$data) {
                                        echo "<li><a href='/category/" . $data->id . "'><button class='dropdown-item' type='button'>" . $data->name . "</button></a></li>";
                                    }
                                } catch (PDOException $e) {
                                    die("Error!: " . $e->getMessage());
                                }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>