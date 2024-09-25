<!DOCTYPE html>
<html>
<head>
    <title>Page non trouvée</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .container {
            text-align: center;
        }
        .error-code {
            font-size: 10rem;
            font-weight: 700;
        }
        .error-message {
            font-size: 1.5rem;
        }
        .btn-home {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="error-code text-primary">404</div>
                <div class="error-message">Oups! La page que vous recherchez n'existe pas.</div>
                <a href="{{ url('/') }}" class="btn btn-primary btn-home">Retour à la page d'accueil</a>
            </div>
        </div>
    </div>
</body>
</html>
