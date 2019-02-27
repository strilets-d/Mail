<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbEqJ7e--dGVRyd4qzs6Mz7_ZM2hO2lsM&callback=initMap"
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
<script>
    function initMap()
    {
        let element = document.getElementById('map');
        let options = {
            zoom: 7,
            center: {lat: 49.422, lng: 26.997}
        };
        let myMap = new google.maps.Map(element, options);
    }
</script>
