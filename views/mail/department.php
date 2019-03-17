<?php

use app\models\Cities;
use app\models\Departments;
use yii\helpers\Html;

$this->title = "Відділення";
?>
<title><?= Html::encode($this->title); ?></title>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2YTieG18dsQGA1ogHPHm_mc5medyi9WI&callback=initMap"
        async defer>
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<style>
    #map {
        width: 100%;
        height: 400px;
    }
</style>

<div class="box-shadow" style="padding:10px; text-align:left; margin-top:30px;">
    <div style="text-align:center; width: 100%;">
        <h2 style="margin:auto;" class="main_h">Відділення</h2>
        <div style="margin-top: 10px;">
            <div style="border-bottom: 2px solid #e37682; width: 50px; margin:auto;"></div>
        </div>
    </div>
    <h2>Оберіть відділення, щоб подивитись на нього на карті:</h2>
    <select style="width: 200px; margin:20px;" id="choose">
        <?php foreach ($departments as $d => $item): ?>
            <option value="<?= $d ?>"><?= $item->num_department ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="box-shadow" style="margin-top:30px; padding:20px;">
    <div id="map">
    </div>
</div>
<script>
    var myMap, markers;
    function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer();
        var directionsService = new google.maps.DirectionsService();
        let element = document.getElementById('map');
        markers = [];
        let options = {
            zoom: 7,
            center: {lat: 49.422, lng: 26.997}
        };
        var infoWindow;
        myMap = new google.maps.Map(element, options);
        <?php $i = 0;
        foreach($departments as $key => $dep):
        ?>
        let marker<?=$i?> = new google.maps.Marker({
            position: {lat: <?= $dep->lat ?> , lng: <?= $dep->lng?>},
            map: myMap
        });
        var infoWindow<?=$i?> = new google.maps.InfoWindow({
            content: "Відділення №<?= $dep->num_department?>"
        });
        marker<?=$i?>.addListener('click', function () {
            infoWindow<?=$i?>.open(myMap, marker<?=$i?>);
        });
        markers[<?=$key?>] = marker<?=$i?>;
        <?php
        $i++;
        endforeach;?>
        $('#travel_date').html('');
    }
    jQuery("#choose").on('change',function(){
        var id = $(this).find(":selected").val();
        myMap.setCenter(markers[id].getPosition());
        myMap.setZoom(18);
    });
</script>