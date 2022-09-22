<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Domande frequenti - Privacy e termini - Google
    </title>
    <link rel="stylesheet" href="./style/index.css">
</head>

<body>
    <?php
    $nav_links = [
        [
            'Introduzione',
            '',
        ],
        [
            'Norme sulla privacy',
            '',
        ],
        [
            'Termini di servizio',
            '',
        ],
        [
            'Tecnologie',
            '',
        ],
        [
            'Domande Frequenti',
            'active',
        ],
    ];
    ?>
    <header class="main_header">
        <div class="logo_wrapper">
            <img src="./img/googlelogo_clr_74x24px.svg" alt="logo google">
        </div>
        <div class="header_link_wrapper">
            <a class="header_link" href="#">
                Privacy e termini
            </a>
        </div>
        <div class="account_wrapper">
            <div class="grid_el">
                <?php
                $dim_grid = 3;
                for ($i = 0; $i < $dim_grid; $i++) {
                    for ($j = 0; $j < $dim_grid; $j++) {
                ?>
                        <span class="dot"></span>
                <?php
                    }
                }
                ?>
            </div>
            <div class="img_wrapper">
                <img src="./img/profile-public.png" alt="profile img">
            </div>
        </div>
        <nav class="main_nav">
            <ul class="nav_list">
                <?php
                foreach ($nav_links as $link) {
                    $active = $link[1];
                    $link_text = $link[0];
                ?>
                    <li class="list_item">
                        <a href="#" class="<?= $active ?>">
                            <?php
                            echo $link_text;
                            ?>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </header>
</body>

</html>