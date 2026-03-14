<?php
require_once('functions/search_city_time.php');
require_once('functions/search_city_weather.php');
$tokyo = searchCityTime('東京');
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);
$tokyoWeather = searchCityWeather('東京');
$comparisonWeather = searchCityWeather($city);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">World Clock</a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $tokyo['img'] ?>" alt="国旗">
                    </div>
                    <div class="result-card__body--top">
                        <p class="result-card__city"><?php echo $tokyo['name'] ?></p>
                        <p class="result-card__time"><?php echo $tokyo['time'] ?></p>
                    </div>
                    <div class="result-card__body--bottom">
                        <div class="result-card__weather">
                            <span> <?php echo $tokyoWeather['weather']; ?>
                            <span class="result-card__weather-icon">
                                <img src="https://openweathermap.org/img/wn/<?php echo $tokyoWeather['icon']; ?>@2x.png" alt="天気アイコン">
                            </span>
                            </span>
                        </div>
                        <p class="result-card__temp"><?php echo '🌡️ ' . $tokyoWeather['temp'] . '℃'; ?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $comparison["img"] ?>" alt="国旗">
                    </div>
                    <div class="result-card__body--top">
                        <p class="result-card__city"><?php echo $comparison['name'] ?></p>
                        <p class="result-card__time"><?php echo $comparison['time'] ?></p>
                    </div>
                    <div class="result-card__body--bottom">
                        <div class="result-card__weather">
                            <span> <?php echo $comparisonWeather['weather']; ?>
                            <span class="result-card__weather-icon">
                                <img src="https://openweathermap.org/img/wn/<?php echo $comparisonWeather['icon']; ?>@2x.png" alt="天気アイコン">
                            </span>
                            </span>
                        </div>
                        <p class="result-card__temp"><?php echo '🌡️ ' . $comparisonWeather['temp'] . '℃'; ?></p>
                    </div>

                </div>
            </div>
        </div>
    </main>
</body>

</html>