<?php
session_start();
include '../core/connection.php' // memanggil file connection
?>

<h5 class="mt-4">Recent Data</h5>
<div class="table">
    <div class="card">
        <div class="card-body">
            <table id="dtBasicExample" class="table table-striped table-borderless table-sm" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Status Lampu</th>
                        <th scope="col">Tegangan</th>
                        <th scope="col">Nilai Arus</th>
                        <th scope="col">Nilai LDR</th>
                        <th scope="col">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1; // untuk pengurutan nomor
                    $datas = mysqli_query($connect, "SELECT * FROM tbl_sensor ORDER BY id"); // script untuk menampilkan data
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($datas)) : // melakukan perulangan ?>
                    <tr>
                        <td class="fw-bold">
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $row['val_lamp']; ?>
                        </td>
                        <td>
                            <?php echo $row['val_volt']; ?>
                        </td>
                        <td>
                            <?php echo $row['val_amp']; ?>
                        </td>
                        <td>
                            <?php echo $row['val_ldr']; ?>
                        </td>
                        <td>
                            <?php echo $row['val_time']; ?>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
        </div>
    </div>
</div>
<!--
<script>
// Basic example
$(document).ready(function() {
    $('#dtBasicExample').DataTable({
        "paging": true,
        "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
    });
    $('.dataTables_length').addClass('bs-select');
});
</script> -->