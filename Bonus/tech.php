<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Tecnologie - Privacy e termini - Google
    </title>
    <link rel="stylesheet" href="./style/index.css">
</head>

<body>
    <?php
    $nav_links = [
        [
            'Introduzione',
            '',
            './index.php',
        ],
        [
            'Norme sulla privacy',
            '',
            './privacy.php',
        ],
        [
            'Termini di servizio',
            '',
            './termini.php',
        ],
        [
            'Tecnologie',
            'active',
            './tech.php',
        ],
        [
            'Domande Frequenti',
            '',
            './faqs.php',
        ],
    ];

    $foot_links = [
        'Google',
        'Tutto su Google',
        'Privacy',
        'Termini',
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
                    $link_text = $link[0];
                    $active = $link[1];
                    $link_href = $link[2];
                ?>
                    <li class="list_item">
                        <a href="<?= $link_href ?>" class="<?= $active ?>">
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
    <main class="main_content">
        <section class="section faqs">
            <div class="container">
                    <div class="faq_wrapper">
                        <h3 class="faq_title">
                            Tech
                        </h3>
                    </div>
            </div>
        </section>
    </main>
    <footer class="main_footer">
        <div class="container">
            <div class="footer_list_wrapper">
                <ul class="list_wrapper">
                    <?php
                    foreach ($foot_links as $link) {
                    ?>
                        <li>
                            <a href='#'>
                                <?= $link ?>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="lang_wrapper">
                <select>
                    <option>Italiano</option>
                    <option>Inglese</option>
                    <option>Tedesco</option>
                </select>
            </div>
        </div>
    </footer>
</body>

</html>