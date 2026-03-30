<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTES</title>
    <link rel="stylesheet" href="{{'assets/bootstrap/bootstrap.min.css'}}">
    <link rel="stylesheet" href="{{ 'assets/fontawesome/css/all.min.css' }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{'assets/images/favicon.png' }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-white">

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<footer class="footer mt-5">
    <div class="container">
        <div class="row">

            <!-- Empresa -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">GP Motos</h5>
                <p class="footer-text">
                    Tornando seu sonho realidade 🏍️ <br>
                    As melhores motos com qualidade e procedência.
                </p>
            </div>

            <!-- Links -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">Links rápidos</h5>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Catálogo</a></li>
                    <li><a href="#">Quem somos</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>

            <!-- Contato -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">Contato</h5>
                <p class="footer-text">
                    📞 (31) 99653-6242 <br>
                    📍 Igrejinha - RS
                </p>

                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        © 2026 GP Motos - Todos os direitos reservados
    </div>
</footer>
</body>
<style>
    .footer{
        background: #0f0f0f;
        color: #ccc;
        padding: 60px 0 0 0;
    }

    .footer-title{
        color: #fff;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .footer-text{
        font-size: 14px;
        line-height: 1.6;
    }

    .footer-links{
        list-style: none;
        padding: 0;
    }

    .footer-links li{
        margin-bottom: 10px;
    }

    .footer-links a{
        color: #ccc;
        text-decoration: none;
        transition: 0.3s;
    }

    .footer-links a:hover{
        color: #f39c12;
    }

    .social-icons a{
        color: #fff;
        margin-right: 15px;
        font-size: 18px;
        transition: 0.3s;
    }

    .social-icons a:hover{
        color: #f39c12;
    }

    .footer-bottom{
        border-top: 1px solid #222;
        text-align: center;
        padding: 15px;
        margin-top: 30px;
        font-size: 13px;
    }
</style>
</html>
