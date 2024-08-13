<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Reservistas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin: 10px;
        }
        .card-header {
            font-weight: bold;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>Estado de la Plantilla</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="{{ url('/destacamento1') }}">Destacamento 1</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/destacamento2') }}">Destacamento 2</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/destacamento3') }}">Destacamento 3</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/destacamento4') }}">Destacamento 4</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/destacamento5') }}">Destacamento 5</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/planaMayor') }}">Plana Mayor</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/counters') }}">Contadores</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" id="search" class="form-control" placeholder="Buscar por C.Identidad o Nombre">
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ url('/reservistas/create') }}" class="btn btn-success">Añadir Registro</a>
                </div>
            </div>
            <div class="row">
                <!-- Tarjeta para Destacamento 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white">Destacamento 1</div>
                        <div class="card-body">
                            <h5 class="card-title">22</h5>
                            <p class="card-text">Más Información</p>
                            <a href="{{ url('/reservistas/1/edit') }}" class="btn btn-warning">Editar</a>
                            <form action="{{ url('/reservistas/1') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta para Destacamento 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white">Destacamento 2</div>
                        <div class="card-body">
                            <h5 class="card-title">18</h5>
                            <p class="card-text">Más Información</p>
                            <a href="{{ url('/reservistas/2/edit') }}" class="btn btn-warning">Editar</a>
                            <form action="{{ url('/reservistas/2') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta para Destacamento 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white">Destacamento 3</div>
                        <div class="card-body">
                            <h5 class="card-title">20</h5>
                            <p class="card-text">Más Información</p>
                            <a href="{{ url('/reservistas/3/edit') }}" class="btn btn-warning">Editar</a>
                            <form action="{{ url('/reservistas/3') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta para Destacamento 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white">Destacamento 4</div>
                        <div class="card-body">
                            <h5 class="card-title">25</h5>
                            <p class="card-text">Más Información</p>
                            <a href="{{ url('/reservistas/4/edit') }}" class="btn btn-warning">Editar</a>
                            <form action="{{ url('/reservistas/4') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta para Destacamento 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white">Destacamento 5</div>
                        <div class="card-body">
                            <h5 class="card-title">30</h5>
                            <p class="card-text">Más Información</p>
                            <a href="{{ url('/reservistas/5/edit') }}" class="btn btn-warning">Editar</a>
                            <form action="{{ url('/reservistas/5') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta para Plana Mayor -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white">Plana Mayor</div>
                        <div class="card-body">
                            <h5 class="card-title">15</h5>
                            <p class="card-text">Más Información</p>
                            <a href="{{ url('/reservistas/6/edit') }}" class="btn btn-warning">Editar</a>
                            <form action="{{ url('/reservistas/6') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            searchInput.addEventListener('input', function() {
                const query = searchInput.value.toLowerCase();
                // Lógica para buscar por C.Identidad o Nombre
            });
        });
    </script>
</body>
</html>
