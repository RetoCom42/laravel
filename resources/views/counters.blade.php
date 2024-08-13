<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contadores de Reservistas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Contadores de Reservistas</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Destacamento 1</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $counters['destacamento1'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Destacamento 2</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $counters['destacamento2'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Destacamento 3</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $counters['destacamento3'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Destacamento 4</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $counters['destacamento4'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Destacamento 5</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $counters['destacamento5'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Plana Mayor</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $counters['planaMayor'] }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
