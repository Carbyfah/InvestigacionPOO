<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cohesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            padding-bottom: 80px;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-2 bg-primary text-white text-center">
        <h1>Cohesión en PHP</h1>
    </div>
    
    <div class="container mt-5">

        <p><strong>Cohesión</strong> en programación significa que una clase debe tener un único propósito claro.</p>

        <p>Imaginá una clase llamada <strong>MezcladorDeCemento</strong> que solo se encarga de mezclar los ingredientes del cemento.  
        Esa clase es cohesiva, porque hace una sola cosa bien.</p>

        <p>En cambio, si metemos en esa clase métodos para cocinar, pintar y barrer, ya no tiene cohesión.</p>

        <div class="card mt-4">
            <div class="card-header bg-primary text-white">
                Código en PHP (buena cohesión)
            </div>
            <div class="card-body bg-light">
                <pre><code>
                ?php
                    
                    class MezcladorDeCemento {
                        public function agregarArena() {
                            return "Agregando arena...";
                        }

                        public function agregarCemento() {
                            return "Agregando cemento...";
                        }

                        public function mezclar() {
                            return "Mezclando los materiales...";
                        }
                    }

                ?>
                </code></pre>
            </div>
        </div>

        <p class="mt-4">Esta clase tiene buena cohesión porque todas sus funciones están relacionadas con mezclar cemento</p>
    </div>

    <div class="container mt-5">
        <div class="container-fluid p-3 bg-primary text-white text-center">
            <h2>Simulación de Mezcla</h2>
            <p>Interactuá con un mezclador de cemento cohesivo</p>
        </div>

        <form method="POST" class="text-center mt-4">
            <button type="submit" name="arena" class="btn btn-secondary m-2">Agregar Arena</button>
            <button type="submit" name="cemento" class="btn btn-dark m-2">Agregar Cemento</button>
            <button type="submit" name="mezclar" class="btn btn-success m-2">Mezclar</button>
        </form>

        <?php
        class MezcladorDeCemento {
            public function agregarArena() {
                return "Agregando arena al mezclador.";
            }

            public function agregarCemento() {
                return "Agregando cemento al mezclador.";
            }

            public function mezclar() {
                return "Mezclando cemento y arena para crear mezcla.";
            }
        }

        echo '<div class="mt-4 text-center">';
        $mezclador = new MezcladorDeCemento();

        if (isset($_POST['arena'])) {
            echo '<div class="alert alert-secondary">' . $mezclador->agregarArena() . '</div>';
        }

        if (isset($_POST['cemento'])) {
            echo '<div class="alert alert-dark text-white">' . $mezclador->agregarCemento() . '</div>';
        }

        if (isset($_POST['mezclar'])) {
            echo '<div class="alert alert-success">' . $mezclador->mezclar() . '</div>';
        }

        echo '</div>';
        ?>
    </div>

    <div class="text-center mt-5">
        <a href="index.php" class="btn btn-secondary">Volver al inicio</a>
    </div>

    <footer class="bg-warning text-dark text-center p-3 fixed-bottom">
        <p class="mb-0">Tte de Cmns Denis Geobany Carbajal Mejía</p>
    </footer>

</body>

</html>
