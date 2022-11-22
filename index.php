<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./assets/img/icon-pens.png">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="text-title fw-bold">Monitoring Smart PJU</div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">Smart
                        PJU</span> </a>
                <div class="nav_list">
                    <a href="#sensor" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
                            class="nav_name">Sensor</span> </a>
                    <a href="#location" class="nav_link"> <i class='bx bx-current-location nav_icon'></i> <span
                            class="nav_name">Location</span> </a>
                    <a href="#table" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                            class="nav_name">Recent
                            Data</span> </a>
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


    <!--reload otomatis-->
    <script>
    $(document).ready(function() {
        loadSensor();
        loadLocation();
        loadTable();
        loadPagination();

        setInterval(function() {
            $("#lamp").load("./core/val_lamp.php");
            $("#volt").load("./core/val_volt.php");
            $("#arus").load("./core/val_amp.php");
            $("#ldr").load("./core/val_ldr.php");
        }, 1000);
    });

    function loadSensor() {
        $("#sensor").load("./layout/sensor.php");
        // setTimeout(loadSensor, 100);
    }

    function loadLocation() {
        $("#location").load("./layout/location.php");
    }

    function loadTable() {
        $("#table").load("./layout/table.php");
        setTimeout(loadTable, 15000);
    }

    function loadPagination() {
        $("#pagination").load("./layout/pagination.php");
    }
    </script>
</body>

</html>
