<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/constants.css">
    <link rel="stylesheet" href="css/city.css">
    <title>Cobra Weather</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&700display=swap" rel="stylesheet">
</head>
<?php require 'constants/header.php'; ?>

<div class="body">
<div class="precise">
    <div class="h3"><!--<img src="img/cloud.png" alt="Oblacno" class="img-cq">--><h3>Subotica</h3></div>
    <div class="h1"><h1>5.74 °C</h1></div>
    <div class="city-main-info">
        <p>Humidity</p>
        <p>85 %</p>
    </div>
    <div class="city-main-info">
        <p>Temperature</p>
        <p>5.74 °C</p>
    </div>
    <div class="city-main-info">
        <p>Visibility</p>
        <p>10,0 km</p>
    </div>
    <div class="city-main-info">
        <p>Wind</p>
        <p>8.19 356 1</p>
    </div>
    <div class="city-main-info">
        <p>Pollution</p>
        <p>34 AQI</p>
    </div>
    
    </div>
    <div class="day">
        <table>
            <tr>
                <td>03:00</td>
                <td>06:00</td>
                <td>09:00</td> 
                <td>12:00</td> 
                <td>15:00</td>
                <td>18:00</td> 
                <td>21:00</td> 
                <td>00:00</td>  
            </tr>
            <tr>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res" width="25%">4°C</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res" width="25%">4°C</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res" width="25%">4°C</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res" width="25%">4°C</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res" width="25%">4°C</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res" width="25%">4°C</td> 
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res" width="25%">4°C</td> 
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res" width="25%">4°C</td>  
            </tr>
        </table>
    </div>
    <div class="week">
        <table>
            <tr>
                <td>Monday</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res"></td>
                <td>MAX: 4°C</td>
                <td>MIN: 4°C</td>  
                <td>45 AQI</td>
            </tr>
            <tr>
                <td>Tuesdey</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res"></td>
                <td>MAX: 4°C</td>
                <td>MIN: 4°C</td>  
                <td>45 AQI</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res"></td>
                <td>MAX: 4°C</td>
                <td>MIN: 4°C</td>  
                <td>45 AQI</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res"></td>
                <td>MAX: 4°C</td>
                <td>MIN: 4°C</td>  
                <td>45 AQI</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res"></td>
                <td>MAX: 4°C</td>
                <td>MIN: 4°C</td>  
                <td>45 AQI</td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res"></td>
                <td>MAX: 4°C</td>
                <td>MIN: 4°C</td>  
                <td>45 AQI</td>
            </tr>
            <tr>
                <td>Sunday</td>
                <td><img src="img/cloud.png" alt="Oblacno" class="img-res"></td>
                <td>MAX: 4°C</td>
                <td>MIN: 4°C</td>  
                <td>45 AQI</td>
            </tr>
        </table>
    </div>
</div>

<?php require 'constants/footer.php'; ?>