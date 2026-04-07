<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
<head>
    <meta charset="UTF-8">
    <title>SIFE - Sistema Inteligente de Frequência Escolar</title>

    <!-- Bootstrap + FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>

<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3" style="background: #ffffff;">
    <nav class="navbar navbar-light">

        <!-- Logo -->
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <img src="{{asset('assets/img/SIFE.png')}}" class="img1" alt="">
        </a>

        <!-- Usuário -->
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0" style="color: black;">Administrador</h6>
                <span style="font-size: 12px;">Sistema Escolar</span>
            </div>
        </div>

        <!-- Menu -->
        <div class="navbar-nav w-100 px-3">

            <a href="index.html" class="nav-item nav-link ">
                <i class="fa fa-th-large me-2"></i>Frequência
            </a>

            <a href="element.html" class="nav-item nav-link">
                <i class="fa fa-school me-2"></i>Turmas
            </a>

            <a href="form.html" class="nav-item nav-link">
                <i class="fa fa-users me-2"></i>Alunos
            </a>

            <a href="widget.html" class="nav-item nav-link">
                <i class="fa fa-clipboard-check me-2"></i>Dashboard
            </a>

            <a href="eventos.html" class="nav-item nav-link">
                <i class="fa fa-calendar-alt me-2"></i>Eventos
            </a>

            <a href="chart.html" class="nav-item nav-link active">
                <i class="fa fa-bell me-2"></i>Relatórios
            </a>

            <a href="relatorios.html" class="nav-item nav-link">
                <i class="fa fa-file-alt me-2"></i>Portal do Aluno
            </a>

        </div>

        <!-- Bolinha inferior -->
        <div class="p-3">
            <div style="width: 50px; height: 50px; background: #ddd; border-radius: 50%;"></div>
        </div>

    </nav>
</div>
<!-- Sidebar End -->


       <div class="sife-dashboard">
    
    <div class="container-fluid pt-4 px-4">
        <div class="d-flex align-items-center justify-content-center mb-4">
            <select class="form-select sife-filter-select">
                <option>Todas as Turmas</option>
            </select>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="sife-card d-flex align-items-center justify-content-between p-4">
                    <div>
                        <p class="sife-card-label">Taxa Geral</p>
                        <h4 class="sife-card-value text-danger">89.3%</h4>
                        <small class="text-success">+2.1 vs mês anterior</small>
                    </div>
                    <div class="sife-icon-box bg-light-danger">
                        <i class="fa fa-chart-line text-danger fa-2x"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="sife-card d-flex align-items-center justify-content-between p-4">
                    <div>
                        <p class="sife-card-label">Total de Aulas</p>
                        <h4 class="sife-card-value text-primary">1.248</h4>
                        <small class="text-muted">No período</small>
                    </div>
                    <div class="sife-icon-box bg-light-primary">
                        <i class="fa fa-calendar-alt text-primary fa-2x"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="sife-card d-flex align-items-center justify-content-between p-4">
                    <div>
                        <p class="sife-card-label">Alunos em Risco</p>
                        <h4 class="sife-card-value text-warning">5</h4>
                        <small class="text-muted">Abaixo de 65%</small>
                    </div>
                    <div class="sife-icon-box bg-light-warning">
                        <i class="fa fa-exclamation-triangle text-warning fa-2x"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="sife-card d-flex align-items-center justify-content-between p-4">
                    <div>
                        <p class="sife-card-label">Melhor Turma</p>
                        <h4 class="sife-card-value text-success">3º Ano B</h4>
                        <small class="text-muted">95.5% presença</small>
                    </div>
                    <div class="sife-icon-box bg-light-success">
                        <i class="fa fa-users text-success fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-sm-12 col-xl-7">
                <div class="sife-card h-100 p-4">
                    <h6 class="mb-4 fw-bold">Evolução Mensal</h6>
                    <canvas id="bar-chart"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-5">
                <div class="sife-card h-100 p-4">
                    <h6 class="mb-4 fw-bold">Distribuição de Status</h6>
                    <canvas id="pie-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/lib/chart/chart.min.js')}}"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>