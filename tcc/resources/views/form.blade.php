
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
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
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

            <a href="form.html" class="nav-item nav-link active">
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