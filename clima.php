<?php
    #Ubicacion
    $city = json_decode(file_get_contents("https://www.metaweather.com/api/location/search/?lattlong=19.49,-99.12"), true);
    #Locarion day
    $data = json_decode(file_get_contents("https://www.metaweather.com/api/location/2397816/2020/7/16/"), true);
    $state = ($data[3]["weather_state_abbr"]);
?>

<?php include("includes/header.php")?>

    <div class="container p-4">    
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body text-center">
                    <h1><?php echo $city[0]["title"]."</br></br>"; ?></h1>
                    <img src="https://www.metaweather.com/static/img/weather/<?php echo $state ?>.svg" alt="clima">
                    <h4>Min: <?php echo $data[0]["min_temp"]."<span>°C</span><br></br>"; ?></h4>
                    <h4>Max: <?php echo $data[0]["max_temp"]."<span>°C</span><br></br>";?></h4>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php")?>