<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location: login');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    <title>

        MemoGen

    </title>



    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->



    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />


</head>


<body class="g-sidenav-show  bg-gray-100">


<?php include("menu/aside-menu.php")?>

    <main class="main-content border-radius-lg ">
        <!-- Navbar -->

        <?php include('menu/navbar-top.php');?>

        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="row">
                <div class="position-relative z-index-2">
                    <div class="card card-plain mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <h2 class="font-weight-bolder mb-0">Estatísticas</h2>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4" id="charts-container">
                        
                        <div class="col-lg-6 mt-4 mb-4">
                          <div class="card z-index-2  ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <h6 class="mb-0 "> Modulos mais utilizados </h6>
                              <p class="text-sm "> Usar gráfico de barra </p>   
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 mt-4 mb-3">
                          <div class="card z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <h6 class="mb-0 ">Inversores mais utilizados</h6>
                              <p class="text-sm ">Usar gráficos de barra</p>
                            </div>
                          </div>
                        </div>
                      </div>

                    <div class="row mt-4">
                        <div class="col-13">
                            <div class="card mb-4 ">
                                <div class="d-flex">
                                    <div
                                        class="icon icon-shape icon-lg bg-gradient-dark shadow text-center border-radius-xl mt-n3 ms-4">
                                        <i class="material-icons opacity-10" aria-hidden="true">language</i>
                                    </div>
                                    <h6 class="mt-3 mb-2 ms-3 ">Vendas por estado</h6>
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="">
                                            <div class="table-responsive">
                                                <table class="table align-items-center ">
                                                    <tbody>
                                                        <tr>
                                                            <td class="w-30">
                                                                <div class="d-flex px-2 py-1 align-items-center">
                                                                    <div>
                                                                        <img src="./assets/img/icons/flags/US.png"
                                                                            alt="Country flag">
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p class="text-xs font-weight-bold mb-0 ">
                                                                            Country:</p>
                                                                        <h6 class="text-sm font-weight-normal mb-0 ">
                                                                            United States</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                                                    <h6 class="text-sm font-weight-normal mb-0 ">2500
                                                                    </h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                                                    <h6 class="text-sm font-weight-normal mb-0 ">
                                                                        $230,900</h6>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle text-sm">
                                                                <div class="col text-center">
                                                                    <p class="text-xs font-weight-bold mb-0 ">Bounce:
                                                                    </p>
                                                                    <h6 class="text-sm font-weight-normal mb-0 ">29.9%
                                                                    </h6>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="w-30">
                                                                <div class="d-flex px-2 py-1 align-items-center">
                                                                    <div>
                                                                        <img src="./assets/img/icons/flags/BR.png"
                                                                            alt="Country flag">
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p class="text-xs font-weight-bold mb-0 ">
                                                                            Country:</p>
                                                                        <h6 class="text-sm font-weight-normal mb-0 ">
                                                                            Brasil</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                                                    <h6 class="text-sm font-weight-normal mb-0 ">562
                                                                    </h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                                                    <h6 class="text-sm font-weight-normal mb-0 ">
                                                                        $143,960</h6>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle text-sm">
                                                                <div class="col text-center">
                                                                    <p class="text-xs font-weight-bold mb-0 ">Bounce:
                                                                    </p>
                                                                    <h6 class="text-sm font-weight-normal mb-0 ">32.14%
                                                                    </h6>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-5">
                                            <div id="map" class="mt-0 mt-lg-n4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php include("menu/footer-default.php")?>
        </div>


    </main>



    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->

                <!-- Sidenav Type -->

                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>

                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                        onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>

                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>


                <!-- Navbar Fixed -->

                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>



                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">


               

               
            </div>
        </div>
    </div>


    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>


    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>