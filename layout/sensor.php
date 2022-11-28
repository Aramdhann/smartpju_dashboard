<?php
session_start();
require '../core/connection.php' // memanggil file connection
?>

<h5 class="fw-bold" style="font-size: 30px;">Sensor</h5>
<div class="row">
    <div class="col-lg-4 col-md-6 col-12">
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
                        <span id="lamp"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
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
                    <div class="float-end nilai-card"><span id="volt"></span> <span>V</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-md-4 mt-4">
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
                    <div class="float-end nilai-card"><span id="arus"></span> <span>A</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-lg-4 mt-md-4 mt-4">
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
                    <div class="float-end nilai-card">
                        <span id="ldr"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-lg-4 mt-md-4 mt-4">
        <div class="card">
            <div class="card-body lampu">
                <div class="card-title">
                    Nilai Daya
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div
                        class="card-icon rounded-circle border-0 d-flex align-items-center justify-content-center float-start">
                        <i class='bx bx-chevrons-up'></i>
                    </div>
                    <div class="float-end nilai-card">
                        <span id="daya"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-lg-4 mt-md-4 mt-4">
        <div class="card">
            <div class="card-body tegangan">
                <div class="card-title">
                    Nilai Suhu
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div
                        class="card-icon rounded-circle border-0 d-flex align-items-center justify-content-center float-start">
                        <i class='bx bxs-hot'></i>
                    </div>
                    <div class="float-end nilai-card">
                        <span id="temp"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
