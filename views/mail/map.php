<?php
use app\models\Cities;
use yii\helpers\Html;

$this->title="Розрахунок часу доставки";
?>
<title><?= Html::encode($this->title);?></title>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2YTieG18dsQGA1ogHPHm_mc5medyi9WI&callback=initMap"
        async defer >
</script>
<style>
    #map{
        width:100%;
        height: 400px;
    }
</style>
</style>
<div class="box-shadow" style="padding:10px; text-align:left; margin-top:30px;">
<div id="data1" ></div>
<h2>Час відправки посилок в 21:00 кожного дня.</h2>
<div id="travel_data">
</div>
<div id="travel_date" ></div>
</div>
<div class="box-shadow" style="margin-top:30px; padding:20px;">
<div id="map">
</div>
</div>
<?php
echo "<script>
    function initMap()
    {   
        var directionsDisplay = new google.maps.DirectionsRenderer();
        var directionsService = new google.maps.DirectionsService();
        let element = document.getElementById('map');
        let options = {
            zoom: 7,
            center: {lat: 49.422, lng: 26.997}
        };
        var infoWindow;
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
         var request = {
         origin: {lat: ".$city1->lat. ", lng: ".$city1->lng."},
         destination: {lat: ".$city2->lat. ", lng: ".$city2->lng."},
            travelMode: 'DRIVING',
        
         };
         directionsService.route(request, function(response,status) {
         console.log(response);
         console.log(status);
            
         if(status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setMap(myMap);
         directionsDisplay.setDirections(response);
         var point = response.routes[ 0 ].legs[ 0 ];
         $('#travel_data' ).html( '<h2>Час доставки: ' + point.duration.text + ' (' + point.distance.text + ')</h2>' );
         var ds = new Date();
         var dur_date = ds.getDate();
         var dur_month = ds.getMonth() + 1;
         if(dur_month<10){dur_month='0'+dur_month;}
         var dur_year = ds.getFullYear();
         var time = Number(point.duration.text.substr(0,2));
         if(time < 10){
         dur_date = String(Number(dur_date)+1);
         }else 
             {
                  dur_date = String(Number(dur_date)+2);
             }
           $('#travel_date').html('<h2>Забрати посилку зможете: '+dur_date + '.' + dur_month + '.' + dur_year + '</h2>' );
    }
         });
         var d = new Date();
         var curr_date = d.getDate();
         var curr_month = d.getMonth() + 1;
         if(curr_month<10){curr_month='0'+curr_month;}
         var curr_year = d.getFullYear();
         $( '#data1' ).html( '<h2>Дата віправки:'+curr_date + '.' + curr_month + '.' + curr_year + '</h2>' );
         }
</script>";
?>