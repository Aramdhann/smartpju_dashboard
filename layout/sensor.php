<?php
session_start();
include '../core/connection.php' // memanggil file connection
?>

<h5 class="fw-bold" style="font-size: 30px;">Sensor</h5>
<div class="row">
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
            <div class="card-body lampu">
                <div class="card-title">
                    Status Lampu
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div
                        class="card-icon rounded-circle border-0 d-flex align-items-center justify-content-center float-start">
                        <i class="fa-regular fa-lightbulb"></i>
                    </div>
                    <div class="float-end nilai-card">
                        <?php $status_lampu = mysqli_query($connect, "SELECT val_lamp FROM tbl_sensor ORDER BY id DESC LIMIT 1");$data = mysqli_fetch_array($status_lampu);
                        echo $data['val_lamp']; ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
        <div class="card">
            <div class="card-body tegangan">
                <div class="card-title">
                    Nilai Tegangan
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div
                        class="card-icon rounded-circle border-0 d-flex align-items-center justify-content-center float-start">
                        <i class="fa-solid fa-bolt-lightning"></i>
                    </div>
                    <div class="float-end nilai-card"><?php $nilai_tegangan = mysqli_query($connect, "SELECT val_volt FROM tbl_sensor ORDER BY id DESC LIMIT 1");
                    $data = mysqli_fetch_array($nilai_tegangan);
                    echo $data['val_volt'];?> <span>V</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-4 mt-4">
        <div class="card">
            <div class="card-body arus">
                <div class="card-title">
                    Nilai Arus
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div
                        class="card-icon rounded-circle border-0 d-flex align-items-center justify-content-center float-start">
                        <i class="bx bx-water"></i>
                    </div>
                    <div class="float-end nilai-card"><?php $nilai_arus = mysqli_query($connect, "SELECT val_amp FROM tbl_sensor ORDER BY id DESC LIMIT 1");
                    $data = mysqli_fetch_array($nilai_arus);
                    echo $data['val_amp'];?> <span>A</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-4 mt-4">
        <div class="card">
            <div class="card-body ldr">
                <div class="card-title">
                    Nilai LDR
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div
                        class="card-icon rounded-circle border-0 d-flex align-items-center justify-content-center float-start">
                        <i class="fa-solid fa-sun"></i>
                    </div>
                    <div class="float-end nilai-card"><?php $nilai_LDR = mysqli_query($connect, "SELECT val_LDR FROM tbl_sensor ORDER BY id DESC LIMIT 1");
                    $data = mysqli_fetch_array($nilai_LDR);
                    echo $data['val_LDR'];?></div>
                </div>
            </div>
        </div>
    </div>
</div>