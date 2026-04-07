<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SIFE - Dashboard</title>

    <!-- Bootstrap + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

<!-- SIDEBAR (SEU CÓDIGO) -->
<div class="sidebar pe-4 pb-3 bg-white">
    <nav class="navbar navbar-light flex-column">

        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <img src="{{asset('assets/img/SIFE.png')}}" class="img1" alt="">
        </a>

        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" style="width: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Administrador</h6>
                <span style="font-size: 12px;">Sistema Escolar</span>
            </div>
        </div>

        <div class="navbar-nav w-100 px-3">
            <a href="index.html" class="nav-item nav-link">
                <i class="fa fa-th-large me-2"></i>Frequência
            </a>

            <a href="element.html" class="nav-item nav-link">
                <i class="fa fa-school me-2"></i>Turmas
            </a>

            <a href="form.html" class="nav-item nav-link">
                <i class="fa fa-users me-2"></i>Alunos
            </a>

            <a href="widget.html" class="nav-item nav-link active">
                <i class="fa fa-clipboard-check me-2"></i>Dashboard
            </a>

            <a href="#" class="nav-item nav-link">
                <i class="fa fa-calendar-alt me-2"></i>Eventos
            </a>

            <a href="#" class="nav-item nav-link">
                <i class="fa fa-bell me-2"></i>Notificações
            </a>

            <a href="#" class="nav-item nav-link">
                <i class="fa fa-file-alt me-2"></i>Relatórios
            </a>
        </div>

        <div class="p-3">
            <div style="width: 50px; height: 50px; background: #ddd; border-radius: 50%;"></div>
        </div>

    </nav>
</div>

<!-- CONTEÚDO -->
<div class="content">

    <h2 class="fw-bold">Dashboard</h2>
    <p class="text-muted mb-4">
        <i class="fa fa-calendar-alt me-2"></i>
        Terça-feira, 10 de Fevereiro de 2026
    </p>

    <!-- CARDS -->
    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="card-box">
                <div class="d-flex justify-content-between mb-3">
                    <div class="icon bg-primary text-white"><i class="fa fa-users"></i></div>
                    <span class="text-success">+12%</span>
                </div>
                <small>Total de Alunos</small>
                <h3>1.248</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box">
                <div class="d-flex justify-content-between mb-3">
                    <div class="icon bg-success text-white"><i class="fa fa-check"></i></div>
                    <span class="text-success">+2.5%</span>
                </div>
                <small>Presença Média</small>
                <h3>89.3%</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box">
                <div class="d-flex justify-content-between mb-3">
                    <div class="icon bg-warning text-white"><i class="fa fa-exclamation-triangle"></i></div>
                    <span class="text-danger">-8%</span>
                </div>
                <small>Ausências Hoje</small>
                <h3>134</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box">
                <div class="d-flex justify-content-between mb-3">
                    <div class="icon bg-danger text-white"><i class="fa fa-chart-line"></i></div>
                    <span class="text-success">+1.2%</span>
                </div>
                <small>Taxa de Presença</small>
                <h3>92.1%</h3>
            </div>
        </div>

    </div>

    <!-- GRÁFICOS -->
    <div class="row g-4">

        <div class="col-md-6">
            <div class="card-box">
                <h5>Frequência Semanal</h5>
                <canvas id="barChart"></canvas>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-box">
                <h5>Tendência Mensal</h5>
                <canvas id="lineChart"></canvas>
            </div>
        </div>

    </div>

</div>

<script>
// BARRAS
new Chart(document.getElementById("barChart"), {
    type: 'bar',
    data: {
        labels: ["Seg", "Ter", "Qua", "Qui", "Sex"],
        datasets: [
            { label: "Presentes", data: [1150,1130,1170,1140,1160], backgroundColor: "#dc3545" },
            { label: "Ausentes", data: [120,150,110,140,130], backgroundColor: "#ffc107" }
        ]
    }
});

// LINHA
new Chart(document.getElementById("lineChart"), {
    type: 'line',
    data: {
        labels: ["Jan","Fev","Mar","Abr","Mai","Jun"],
        datasets: [{
            label: "Taxa de Presença (%)",
            data: [88.5,87.2,89.0,90.5,88.8,89.4],
            borderColor: "#dc3545",
            tension: 0.4
        }]
    }
});
</script>

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

</body>
</html>