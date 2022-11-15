<?php
session_start();
include '../core/connection.php' // memanggil file connection
?>

<h5 class="mt-4 fw-bold" style="font-size: 30px;">Recent Data</h5>
<!-- <div class="table">
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
</div> -->

<div class="mt-2" style="margin-bottom: 100px;">
    <button id="downloadexcel" class="btn mb-4" style="background-color: #bae8e8;">
        <box-icon name='download'></box-icon>
    </button>
    <table id="example" class="display table table-sm" cellspacing="0" width="100%">
        <thead style="max-width: 5px;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Status Lampu</th>
                <th scope="col">Tegangan</th>
                <th scope="col">Nilai Arus</th>
                <th scope="col">Nilai LDR</th>
                <th scope="col">Waktu</th>
            </tr>
        </thead>
        <tbody id="refresh">
            <?php
            $no = 1; // untuk pengurutan nomor
            $datas = mysqli_query($connect, "SELECT * FROM tbl_sensor ORDER BY id"); // script untuk menampilkan data
            ?>
            <?php while ($row = mysqli_fetch_assoc($datas)) : // melakukan perulangan ?>
            <tr>
                <td class="fw-bold w-auto">
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
        <tfoot>
            <tr>
                <th>No</th>
                <th>Status Lampu</th>
                <th>Tegangan</th>
                <th>Nilai Arus</th>
                <th>Nilai LDR</th>
                <th>Waktu</th>
            </tr>
        </tfoot>
    </table>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        pagingType: 'full_numbers',
        lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, 'All'],
        ],
    });
});

document.getElementById('downloadexcel').addEventListener('click', function() {
    var table2excel = new Table2Excel();
    table2excel.export(document.querySelectorAll("#example"));
})
</script>