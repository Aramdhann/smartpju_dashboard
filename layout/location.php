<h5 class="mt-4 fw-bold" style="font-size: 30px;">Location</h5>
<?php
$connect = mysqli_connect("localhost", "smar_smartpju", "pensJOSS123", "smar_smartpju");
// $connect = mysqli_connect("localhost", "root", "", "smart_pju");

$result = mysqli_query($connect, "SELECT * FROM tbl_sensor");
if( !$result) {
    echo mysqli_error($connect);
}

$data_pju = mysqli_fetch_assoc($result);
?>

<!-- map -->
<div class="text">
    <div class="row">
        <div class="col-12">
            <iframe
                src='https://www.google.com/maps?q=<?php echo $data_pju["latitude"]; ?>,<?php echo $data_pju["longitude"]; ?>&hl=es;z=14&output=embed'
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"> </iframe>
        </div>
    </div>
</div>
