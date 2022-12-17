<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./assets/img/icon-pens.png">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />

</head>

<body id="body-pd" class="body-pd">
    <header class="header body-pd" id="header">
        <div class="header_toggle"> <i class='bx bx-menu bx-x' id="header-toggle"></i> </div>
        <div class="text-title fw-bold">Monitoring Smart PJU <span class="ms-3 fw-light">[Device 2]</span></div>
        <a href="./login2.php" class="btn btn-light" style="border: 1px solid black;">Admin 2 Login</a>
    </header>
    <div class="l-navbar show" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">Smart
                        PJU</span> </a>
                <div class="nav_list">
                    <a href="index.php" class="nav_link"> <i class='bx bx-devices bx-sm'></i> <span
                            class="nav_name">Device 1</span> </a>
                    <a href="#" class="nav_link active"> <i class='bx bx-devices bx-sm'></i></i> <span
                            class="nav_name">Device 2</span> </a>
                </div>
            </div>
        </nav>
    </div>
    <!--container main start-->
    <div class="dashboard">
        <div id="sensor" class="mb-5">

        </div>
        <div id="location" class="mb-5">

        </div>
        <div id="table">

        </div>
        <div id="pagination">

        </div>
    </div>
    <!--container main end-->


    <!-- footer -->
    <div class="footer">
        <!-- Copyright -->
        <div class="text-center py-1" style="background-color: white; font-size: 13px">
            Copyright @
            <a href="https://www.pens.ac.id/">PENS 2022</a>
        </div>
        <!-- Copyright -->
    </div>
    <!-- end footer -->


    <!-- script JS -->
    <script type="text/javascript" src="./assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="./assets/js/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/02477e3f4f.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/table2excel.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>


    <!--reload otomatis-->
    <script>
    $(document).ready(function() {
        loadSensor();
        loadLocation();
        loadTable();
        loadPagination();

        setInterval(function() {
            $("#lamp").load("./core2/val_lamp.php");
            $("#volt").load("./core2/val_volt.php");
            $("#arus").load("./core2/val_amp.php");
            $("#ldr").load("./core2/val_ldr.php");
            $("#daya").load("./core2/val_daya.php");
            $("#temp").load("./core2/val_temp.php");
        }, 1000);
    });

    function loadSensor() {
        $("#sensor").load("./layout2/sensor.php");
        // setTimeout(loadSensor, 100);
    }

    function loadLocation() {
        $("#location").load("./layout2/location.php");
    }

    function loadTable() {
        $("#table").load("./layout2/table.php");
        setTimeout(loadTable, 15000);
    }

    function loadPagination() {
        $("#pagination").load("./layout2/pagination.php");
    }
    </script>
</body>

</html>
