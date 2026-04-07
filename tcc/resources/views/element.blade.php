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
        <!DOCTYPE html>
<html lang="pt-br">
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

            <a href="index.html" class="nav-item nav-link">
                <i class="fa fa-th-large me-2"></i>Frequência
            </a>

            <a href="element.html" class="nav-item nav-link  active">
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

            <a href="notificacoes.html" class="nav-item nav-link">
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

    <div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h3 class="mb-0" style="font-weight: bold; color: #000;">Turmas</h3>
        <p class="text-secondary">Gerencie todas as suas turmas da escola</p>
    </div>
    <button class="btn btn-danger" style="background-color: #ff0000; border: none; padding: 10px 20px;">
        + Nova Turma
    </button>
</div>
<div class="bg-white rounded p-3 mb-4 shadow-sm" style="border: 1px solid #eee;">
    <div class="input-group">
        <span class="input-group-text bg-transparent border-end-0"><i class="fa fa-search text-secondary"></i></span>
        <input type="text" class="form-control border-start-0 bg-light" placeholder="Buscar por turma, professor ou disciplina...">
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-4">
        <div class="bg-white rounded d-flex align-items-center justify-content-between p-4 shadow-sm" style="border: 1px solid #eee;">
            <div class="ms-3">
                <p class="mb-2 text-secondary" style="color: #000;">Total de Turmas</p>
                <h2 class="mb-0 fw-bold" style="color: #000;">6</h2>
            </div>
            <div class="rounded p-3" style="background-color: #e7f0ff;">
                <i class="fa fa-users fa-2x text-primary"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="bg-white rounded d-flex align-items-center justify-content-between p-4 shadow-sm" style="border: 1px solid #eee;">
            <div class="ms-3">
                <p class="mb-2 text-secondary" style="color: #000;">Total de Alunos</p>
                <h2 class="mb-0 fw-bold" style="color: #000;">187</h2>
            </div>
            <div class="rounded p-3" style="background-color: #e6f9ed;">
                <i class="fa fa-user-graduate fa-2x text-success"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="bg-white rounded d-flex align-items-center justify-content-between p-4 shadow-sm" style="border: 1px solid #eee;">
            <div class="ms-3">
                <p class="mb-2 text-secondary" style="color: #000;">Média de Presença</p>
                <h2 class="mb-0 fw-bold" style="color: #000;">90.9%</h2>
            </div>
            <div class="rounded p-3" style="background-color: #fce4e4;">
                <i class="fa fa-chart-line fa-2x text-danger"></i>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    
    <div class="col-12 col-md-6 col-xl-4">
        <div class="bg-white rounded p-4 shadow-sm h-100" style="border: 1px solid #eee;">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <h5 class="fw-bold mb-0" style="color: #000;">8º Ano A</h5>
                    <small class="text-secondary" style="color: #000;" >Matemática</small>
                </div>
                <span class="badge bg-light text-primary border px-2 py-1" style="color: #000;">Sala 021</span>
            </div>
            <div class="mb-3 small">
                <div class="mb-2"><i class="fa fa-user-tie me-2 text-secondary"></i>Prof. Maria Silva</div>
                <div><i class="fa fa-calendar-alt me-2 text-secondary"></i>Segunda a Sexta 07:00 - 12:20</div>
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between small mb-1">
                    <span class="text-secondary" style="color: #000;">32 Alunos</span>
                    <span class="text-success fw-bold" style="color: #000;">93.8%</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-danger" style="width: 93.8%"></div>
                </div>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-dark btn-sm flex-grow-1" style="color: #000;">Ver Detalhes</button>
                <button class="btn btn-danger btn-sm flex-grow-1" style="color: #000;">Frequência</button>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xl-4">
        <div class="bg-white rounded p-4 shadow-sm h-100" style="border: 1px solid #eee;">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <h5 class="fw-bold mb-0" style="color: #000;">9º Ano B</h5>
                    <small class="text-secondary" style="color: #000;">Português</small>
                </div>
                <span class="badge bg-light text-primary border px-2 py-1" style="color: #000;">Sala 104</span>
            </div>
            <div class="mb-3 small">
                <div class="mb-2"><i class="fa fa-user-tie me-2 text-secondary"style="color: #000;"></i>Prof. Ricardo Oliveira</div>
                <div><i class="fa fa-calendar-alt me-2 text-secondary" style="color: #000;"></i>Terça e Quinta 13:00 - 17:30</div>
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between small mb-1">
                    <span class="text-secondary" style="color: #000;">28 Alunos</span>
                    <span class="text-success fw-bold" style="color: #000;">88.5%</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-danger" style="width: 88.5%"></div>
                </div>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-dark btn-sm flex-grow-1" style="color: #000;">Ver Detalhes</button>
                <button class="btn btn-danger btn-sm flex-grow-1" style="color: #000;">Frequência</button>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xl-4">
        <div class="bg-white rounded p-4 shadow-sm h-100" style="border: 1px solid #eee;">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <h5 class="fw-bold mb-0" style="color: #000;">1º Ano Médio</h5>
                    <small class="text-secondary" >Física</small>
                </div>
                <span class="badge bg-light text-primary border px-2 py-1" style="color: #000;">Lab 02</span>
            </div>
            <div class="mb-3 small">
                <div class="mb-2"><i class="fa fa-user-tie me-2 text-secondary"></i>Prof. Carlos Mendes</div>
                <div><i class="fa fa-calendar-alt me-2 text-secondary"></i>Quarta e Sexta 08:00 - 11:30</div>
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between small mb-1">
                    <span class="text-secondary" style="color: #000;">35 Alunos</span>
                    <span class="text-success fw-bold" style="color: #000;">91.0%</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-danger" style="width: 91%"></div>
                </div>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-dark btn-sm flex-grow-1" style="color: #000;">Ver Detalhes</button>
                <button class="btn btn-danger btn-sm flex-grow-1" style="color: #000;">Frequência</button>
            </div>
        </div>
    </div>

</div>


  
          
          
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