<?php
session_start();

if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style1.css">

</head>
<body>
    
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Header -->
            <div class="header">
                <h2>SIMP</h2>
            </div>
            <!-- Gambar / Icon -->
            <div class="icon">
                <img src="image/data.svg" alt="dashboard_profile" id="dashboard_profile" >
            </div>

            <!-- Item List -->
            <!-- Dashboard -->
                <a href="index.php">
                    <div class="dashboard">
                        <i class="fa-solid fa-gauge fa-2x"></i>
                        <span class="item">Dashboard</span>
                    </div>
                </a>
                <a href="#">
                    <div class="approval">
                        <i class="fa-solid fa-share-from-square fa-2x"></i>
                        <span class="item">Approval</span>
                    </div>
                </a>
                <a href="#">
                    <div class="map">
                        <i class="fa-solid fa-map-location-dot fa-2x"></i>
                        <span class="item">Map</span>
                    </div>
                </a>
                <a href="#">
                    <div class="data">
                        <i class="fa-solid fa-database fa-2x"></i>
                        <span class="item">Data</span>
                    </div>
                </a>
                <a href="#">
                    <div class="account">
                        <i class="fa-solid fa-user-gear fa-2x"></i>
                        <span class="item">Account</span>
                    </div>
                </a>

            
            <!-- Sidebar Footer -->
            <div class="footer">
                <a href="logout.php">Log Out</a>
            </div>
        </div>

        <!-- Main Area /Content -->
        <div class="content">
            <div class="row1">
                <div class="total">
                    <span class="t1">
                        <p>Total Titik PJU : </p>
                        <h1>15618</h1>
                    </span>
                    
                    <span class="t2">
                        <p>Total Watt : </p>
                        <h1>2361931</h1>
                    </span>
                    <span class="t3">
                            <p>Total VA : </p>
                            <h1>5525750</h1>
                    </span>
                </div>
                <div class="chart">
                    <div class="chart1">
                        <h3>Total Titik</h3>
                        <canvas id="chart1" width="300" height="300"></canvas>
                    </div>
                    <div class="chart2">
                        <h3>Total Watt</h3>
                        <canvas id="chart2" width="300" height="300"></canvas>
                    </div>
                    <div class="chart3">
                        <h3>Total VA</h3>
                        <canvas id="chart3" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="row2">
                <div class="chart4">
                    <h3>Jumlah PJU / Kondisi</h3>
                    <canvas id="chart4" width="300" height="200"></canvas>
                </div>
                <div class="chart5">
                    <h3>Jumlah Request</h3>
                    <canvas id="chart5" width="300" height="200"></canvas>
                </div>
            </div>
            <div class="row3">
                <table>

                    <tr>
                        <th>No</th>
                        <th>Kabupaten/Kota</th>
                        <th>ULP</th>
                        <th>Meterisasi</th>
                        <th>Swadaya</th>
                        <th>Tersebar</th>
                        <th>Total Titik</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Banda Aceh</td>
                        <td>Lambaro</td>
                        <td>0</td>
                        <td>29</td>
                        <td>68</td>
                        <td>97</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Banda Aceh</td>
                        <td>Merduati</td>
                        <td>1705</td>
                        <td>1528</td>
                        <td>5670</td>
                        <td>8903</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Banda Aceh</td>
                        <td>Syiah Kuala</td>
                        <td>2331</td>
                        <td>1107</td>
                        <td>3180</td>
                        <td>6618</td>
                    </tr>
                    <tr>
                        <th>TOTAL</th>
                        <th>-</th>
                        <th>-</th>
                        <th>2331</th>
                        <th>1107</th>
                        <th>3180</th>
                        <th>6618</th>
                    </tr>

                  </table>                  
            </div>
        </div>
    </div>

    <!-- CHART -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="chart.js"></script>

</body>
</html>
