<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstracción</title>
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
        <h1>Abstracción en PHP</h1>
    </div>
    <div class="container mt-5">

        <p><strong>Abstracción</strong> en programación es como usar una mezcladora de cemento sin saber cómo funciona por dentro. Solo usamos los controles importantes.</p>

        <p>La abstracción nos permite enfocarnos en lo que importa (como <code>encender()</code> o <code>mezclar()</code>) y ocultar los detalles internos de cómo se logra.</p>

        <div class="card mt-4">
            <div class="card-header bg-primary text-white">
                Código en PHP (ejemplo de abstracción)
            </div>
            <div class="card-body bg-light">
            <pre><code>
                ?php

                    abstract class Mezcladora {
                        abstract public function encender();
                        abstract public function mezclar();
                        abstract public function apagar();
                    }

                    class MezcladoraConcreta extends Mezcladora {
                        public function encender() {
                            return "Mezcladora encendida.";
                        }

                        public function mezclar() {
                            return "Mezclando materiales...";
                        }

                        public function apagar() {
                            return "Mezcladora apagada.";
                        }
                    }

                ?>
            </code></pre>
            </div>
        </div>

        <p class="mt-4">Esta clase abstracta define los botones esenciales. La clase concreta implementa cómo funciona cada uno, pero ese detalle queda oculto para quien la usa.</p>
    </div>

    <div class="container mt-5">
        <div class="container-fluid p-3 bg-primary text-white text-center">
            <h2>Simulación de Mezcladora</h2>
            <p>Interactuá con una mezcladora (abstraída)</p>
        </div>

        <form method="POST" class="text-center mt-4">
            <button type="submit" name="encender" class="btn btn-success m-2">Encender</button>
            <button type="submit" name="mezclar" class="btn btn-primary m-2">Mezclar</button>
            <button type="submit" name="apagar" class="btn btn-danger m-2">Apagar</button>
        </form>

        <?php
        abstract class Mezcladora {
            abstract public function encender();
            abstract public function mezclar();
            abstract public function apagar();
        }

        class MezcladoraConcreta extends Mezcladora {
            public function encender() {
                return "Mezcladora encendida.";
            }

            public function mezclar() {
                return "Mezclando materiales...";
            }

            public function apagar() {
                return "Mezcladora apagada.";
            }
        }

        echo '<div class="mt-4 text-center">';
        $mezcladora = new MezcladoraConcreta();

        if (isset($_POST['encender'])) {
            echo '<div class="alert alert-success">' . $mezcladora->encender() . '</div>';
        }

        if (isset($_POST['mezclar'])) {
            echo '<div class="alert alert-primary">' . $mezcladora->mezclar() . '</div>';
        }

        if (isset($_POST['apagar'])) {
            echo '<div class="alert alert-danger">' . $mezcladora->apagar() . '</div>';
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
