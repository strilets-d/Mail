<?php
use app\models\Cities;
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2YTieG18dsQGA1ogHPHm_mc5medyi9WI&callback=initMap"
        async defer >
</script>
<style>
    #map{
        width:100%;
        height: 400px;
    }
</style>
<div id="map">
</div>
<?php
echo "<script>
    function initMap()
    {
        let element = document.getElementById('map');
        let options = {
            zoom: 7,
            center: {lat: 49.422, lng: 26.997}
        };

        let myMap = new google.maps.Map(element, options);
        let marker1 = new google.maps.Marker({
           position: {lat: ".$city1->lat. ", lng: ".$city1->lng."},
           map: myMap
        });
        let marker2 = new google.maps.Marker({
           position: {lat: ".$city2->lat. ", lng: ".$city2->lng."},
           map: myMap
        });
        var infoWindow1 = new google.maps.InfoWindow({
        content: 'Місто відправник'
        });
         var infoWindow2 = new google.maps.InfoWindow({
        content: 'Місто отримувач'
        });
         
         marker1.addListener('click', function(){
             infoWindow1.open(myMap, marker1);
         });
         marker2.addListener('click', function(){
             infoWindow2.open(myMap, marker2);
         });
    }
</script>";
?>
