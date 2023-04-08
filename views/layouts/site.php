<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Туризм в Крыму</title>
    <link rel="shortcut icon" href="image/title.png">
</head>
<body>

<header>
    <?php 
    require_once __DIR__ . '/_header.php';
    ?>
</header>
<article>
    <div class="bg-image">
    <div>Крым
        <ul class="article">
            <li class="article-list"><a href="#" class="link">Туристические места</a></li> 
            <li class="article-list"><a href="#" class="article-list-br"></a></li>   
            <li class="article-list"><a href="#" class="link">Малоизвестные места</a></li>   
            <li class="article-list"><a href="#" class="article-list-br"></a></li>   
            <li class="article-list"><a href="#" class="link">Достопремичательности</a></li> 
        </ul>
        </div>
    </div>
</div>
</article>

<nav>
    <div class="nav-info">
        <div class="nav-title">
            <h2>Площадь Крыма</h2>
            <p>Около 26 860 км</p>
        </div>
        <div class="nav-title">
            <h2>Достопримечательностей</h2>
            <p>Более 350</p>
        </div>
        <div class="nav-title">
            <h2>Длина Крымских гор</h2>
            <p>Около 160 км</p>
        </div>
        <div class="nav-title">
            <h2>Наивысшая точка</h2>
            <p>Гора Роман-Кош высотой 1545 м</p>
        </div>
    </div>

    <div class="nav-box">
        <div class="nav-box123">
            <div class="nav-box1"><img src="image/nav_image1.jpg" class="nav-image"> </div>
            <div class="nav-box2"><img src="image/nav_image5.jpg" class="nav-image"></div>
            <div class="nav-box3">
                <h2>Крым</h2>
                <p>Привлекательность полуострова обусловлена 
                    его богатой и многообразной природой, целебным климатом,
                    древней историей и большим числом памятников культурного наследия и
                    достопримечательностей.</p>
            </div>
            <div class="nav-box4"><img src="image/nav_image2.jpg" class="nav-image"></div>
        </div>

        <div class="nav-box45">
            <div class="nav-box5"><img src="image/nav_image3.jpg" class="nav-image"></div>
            <div class="nav-box6"><img src="image/nav_image4.jpg" class="nav-image"></div>
            <div class="nav-box7"><img src="image/nav_image6.jpg" class="nav-image"></div>
        </div>
    </div>
</nav>
<main>
<?php 
    require_once $page;
    ?>
</main>


<footer>
    <?php 
    require_once __DIR__ . '/_footer.php';
    ?>
</footer>
<script src="script/script1.js"></script>
<script src="script/script2.js"></script>
</body>
</html>
