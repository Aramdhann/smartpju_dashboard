<h5 class="mt-4 fw-bold" style="font-size: 30px;">Location</h5>
<?php
require '../core/conn.php';
$result = mysqli_query($connect, "SELECT * FROM tbl_sensor");
if( !$result) {
    echo mysqli_error($connect);
}

$data_pju = mysqli_fetch_assoc($result);
?>

<script>
    // Creating map options
    var mapOptions = {
    center: [<?php echo $data_pju["latitude"]; ?>, <?php echo $data_pju["longitude"]; ?>],
    zoom: 18
    }

    // Creating a map object
    var map = new L.map('map', mapOptions);

    // Creating a Layer object
    var layer = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

    // Adding layer to the map
    map.addLayer(layer);

    let marker = new L.Marker([<?php echo $data_pju["latitude"]; ?>, <?php echo $data_pju["longitude"]; ?>]);
    marker.addTo(map);
    marker.bindPopup("content").openPopup();

    let popup = L.popup().setLatLng([<?php echo $data_pju["latitude"]; ?>, <?php echo $data_pju["longitude"]; ?>] ).setContent("<p>SMART PJU</br> Kelompok 5</p>").openOn(map);
</script>

<!-- map -->
<div class="text">
    <div class="row">
        <div class="col-12">
            <div id="map" style="width: 100%; height: 450px;"></div>
        </div>
    </div>
</div>
