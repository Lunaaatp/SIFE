<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIFE - Gestão Escolar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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

            <a href="index.html" class="nav-item nav-link active">
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

            <a href="chart.html" class="nav-item nav-link">
                <i class="fa fa-bell me-2"></i>Notificações
            </a>

            <a href="relatorios.html" class="nav-item nav-link">
                <i class="fa fa-file-alt me-2"></i>Relatórios
            </a>

        </div>

        <!-- Bolinha inferior -->
        <div class="p-3">
            <div style="width: 50px; height: 50px; background: #ddd; border-radius: 50%;"></div>
        </div>

    </nav>
</div>
<!-- Sidebar End -->

</body>
</html>
       <!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand navbar-light bg-white sticky-top px-4 py-2" style="border-bottom: 1px solid #e0e0e0;">
        
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-school"></i></h2>
        </a>

        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>

        <!-- Pesquisa -->
        <form class="d-none d-md-flex ms-4" style="color: black;">
            <input class="form-control" type="search" placeholder="Buscar aluno...">
        </form>

        <div class="navbar-nav align-items-center ms-auto">

            <!-- Mensagens -->
            <div class="nav-item dropdown" style="color: black;">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-envelope me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Mensagens</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-white border-0 shadow m-0">
                    
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0" style="color: black;" >Responsável enviou mensagem</h6>
                                <small>15 minutos atrás</small>
                            </div>
                        </div>
                    </a>

                    <hr class="dropdown-divider">

                    <a href="#" class="dropdown-item text-center">Ver todas</a>
                </div>
            </div>

            <!-- Notificações -->
            <div class="nav-item dropdown" >
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-bell me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Notificações</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-white border-0 shadow m-0">
                    
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0" style="color: black;">Aluno faltou hoje</h6>
                        <small>Agora</small>
                    </a>

                    <hr class="dropdown-divider">

                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0" style="color: black;" >Nova turma criada</h6>
                        <small>10 minutos atrás</small>
                    </a>

                    <hr class="dropdown-divider">

                    <a href="#" class="dropdown-item text-center">Ver todas</a>
                </div>
            </div>

            <!-- Usuário -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="{{asset('assets/img/user.jpg')}}" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">Administrador</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-white border-0 shadow m-0">
                    <a href="#" class="dropdown-item">Perfil</a>
                    <a href="#" class="dropdown-item">Configurações</a>
                    <a href="#" class="dropdown-item">Sair</a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Navbar End -->


           <!-- Frequência Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <!-- Presentes -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-white rounded d-flex align-items-center justify-content-between p-4 shadow-sm">
                <i class="fa fa-user-check fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">Presentes Hoje</p>
                    <h4 class="mb-0" style="color: black;" >120</h4>
                </div>
            </div>
        </div>

        <!-- Faltas -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-white rounded d-flex align-items-center justify-content-between p-4 shadow-sm">
                <i class="fa fa-user-times fa-3x text-danger"></i>
                <div class="ms-3">
                    <p class="mb-2" >Faltas Hoje</p>
                    <h4 class="mb-0" style="color: black;" >15</h4>
                </div>
            </div>
        </div>

        <!-- Atrasos -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-white rounded d-flex align-items-center justify-content-between p-4 shadow-sm">
                <i class="fa fa-clock fa-3x text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2">Atrasos</p>
                    <h4 class="mb-0" style="color: black;" >8</h4>
                </div>
            </div>
        </div>

        <!-- Frequência Geral -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-white rounded d-flex align-items-center justify-content-between p-4 shadow-sm">
                <i class="fa fa-percentage fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Frequência Geral</p>
                    <h4 class="mb-0" style="color: black;">92%</h4>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Frequência End -->

<div class="container-fluid pt-4 px-4">
    <div class="bg-white rounded p-4 shadow-sm" style="border: 1px solid #dee2e6;">
        <h5 class="mb-4" style="color: #000; font-weight: 600;">Selecione a Turma e Data</h5>
        
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label" style="color: #000; font-weight: 500;">Turma</label>
                <select class="form-select" style="background-color: #e9ecef; border: 1px solid #ced4da; height: 45px; color: #6c757d;">
                    <option selected>Selecione a Turma</option>
                    <option value="1">9º ano A</option>
                    <option value="2">9º ano B</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label" style="color: #000; font-weight: 500;">Data</label>
                <div class="input-group">
                    <span class="input-group-text bg-white"><i class="fa fa-calendar-alt"></i></span>
                    <input type="date" class="form-control" value="2026-02-10" style="height: 45px; border-left: none;">
                </div>
            </div>
        </div>

        <hr class="my-4" style="color: #dee2e6;">

        <div class="d-flex justify-content-between align-items-center">
            <div style="font-size: 1.1rem;">
                <span style="color: #6c757d;">Turma selecionada:</span> 
                <strong style="color: #000;">9º ano A</strong>
            </div>
            <button class="btn btn-outline-dark" style="border-radius: 8px; font-weight: 500; padding: 8px 20px;">
                <i class="fa fa-check me-2"></i>Marcar todos como presente
            </button>
        </div>
    </div>
</div>


           <!-- Frequência Recente Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-white text-center rounded p-4 shadow-sm">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0" style="color: black;" >Registros Recentes de Presença</h6>
            <a href="#" style="color: black;">Ver todos</a>
        </div>

        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Data</th>
                        <th scope="col">Aluno</th>
                        <th scope="col">Turma</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>24 Mar 2026</td>
                        <td>Ana Silva</td>
                        <td>3º Ano A</td>
                        <td>07:15</td>
                        <td><span class="badge bg-success">Presente</span></td>
                        <td><a class="btn btn-sm btn-primary" href="#">Detalhes</a></td>
                    </tr>

                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>24 Mar 2026</td>
                        <td>Lucas Souza</td>
                        <td>2º Ano B</td>
                        <td>-</td>
                        <td><span class="badge bg-danger">Falta</span></td>
                        <td><a class="btn btn-sm btn-primary" href="#">Detalhes</a></td>
                    </tr>

                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>24 Mar 2026</td>
                        <td>Mariana Costa</td>
                        <td>1º Ano C</td>
                        <td>07:25</td>
                        <td><span class="badge bg-warning text-dark">Atraso</span></td>
                        <td><a class="btn btn-sm btn-primary" href="#">Detalhes</a></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Frequência Recente End -->


           <!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <!-- Avisos / Mensagens -->
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-white rounded p-4 shadow-sm">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h6 class="mb-0" style="color: #000;">Avisos</h6>
                    <a href="#">Ver todos</a>
                </div>

                <div class="d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" style="width: 40px; height: 40px;">
                    <div class="w-100 ms-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0" style="color: #000;">Coordenação</h6>
                            <small>Agora</small>
                        </div>
                        <span>Reunião pedagógica hoje às 14h.</span>
                    </div>
                </div>

                <div class="d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" style="width: 40px; height: 40px;">
                    <div class="w-100 ms-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0" style="color: #000;">Responsável</h6>
                            <small>10 min atrás</small>
                        </div>
                        <span style="color: #000;" >Mensagem sobre ausência do aluno.</span>
                    </div>
                </div>

                <div class="d-flex align-items-center pt-3">
                    <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" style="width: 40px; height: 40px;">
                    <div class="w-100 ms-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0" style="color: #000;">Secretaria</h6>
                            <small>30 min atrás</small>
                        </div>
                        <span style="color: #000;">Nova turma cadastrada no sistema.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Calendário -->
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-white rounded p-4 shadow-sm">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0" style="color: #000;">Calendário Escolar</h6>
                    <a href="#">Ver tudo</a>
                </div>
                <div id="calender"></div>
            </div>
        </div>

        <!-- Tarefas -->
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-white rounded p-4 shadow-sm">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0" style="color: #000;">Tarefas do Dia</h6>
                    <a href="#">Ver tudo</a>
                </div>

                <div class="d-flex mb-2">
                    <input class="form-control" type="text" placeholder="Adicionar tarefa...">
                    <button type="button" class="btn btn-primary ms-2" style="color: #000;" >+</button>
                </div>

                <div class="d-flex align-items-center border-bottom py-2">
                    <input class="form-check-input m-0" type="checkbox">
                    <div class="w-100 ms-3">
                        <div class="d-flex justify-content-between">
                            <span style="color: #000;" >Registrar presença da turma</span>
                            <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center border-bottom py-2">
                    <input class="form-check-input m-0" type="checkbox" checked>
                    <div class="w-100 ms-3">
                        <div class="d-flex justify-content-between">
                            <span><del style="color: #000;">Atualizar lista de alunos</del></span>
                            <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center pt-2">
                    <input class="form-check-input m-0" type="checkbox">
                    <div class="w-100 ms-3">
                        <div class="d-flex justify-content-between">
                            <span style="color: #000;">Gerar relatório de frequência</span>
                            <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- Widgets End -->


     <!-- Footer Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-white rounded-top p-4 shadow-sm" style="border-top: 1px solid #e0e0e0;">
        <div class="row">
            
            <div class="col-12 col-sm-6 text-center text-sm-start">
                &copy; <a href="#">SIFE</a> - Sistema Inteligente de Frequência Escolar
            </div>

            <div class="col-12 col-sm-6 text-center text-sm-end">
                Desenvolvido para gestão escolar 📊
                <br>
                © 2026 Todos os direitos reservados
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
    <i class="bi bi-arrow-up"></i>
</a>
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