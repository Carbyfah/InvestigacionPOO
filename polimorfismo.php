<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
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
            <h1>Polimorfismo en PHP</h1>
    </div>
    <div class="container mt-5">

        <p><strong>Polimorfismo</strong> es como tener diferentes tipos de puertas en una casa. Todas se pueden abrir, pero cada una lo hace de forma distinta.</p>

        <p>Imaginá que tenés una <strong>Puerta</strong> base, y luego una <strong>PuertaDeMadera</strong>, una <strong>PuertaDeVidrio</strong> y una <strong>PuertaAutomatica</strong>, todas con su propia forma de abrirse, aunque el método se llame igual: <code>abrir()</code>.</p>

        <div class="card mt-4">
            <div class="card-header bg-primary text-white">
                Código en PHP (ejemplo de polimorfismo)
            </div>
            <div class="card-body bg-light">
                <pre><code> 
                ?php

                class Puerta {
                    public function abrir() {
                        return "Abriendo una puerta genérica.";
                    }
                }

                class PuertaDeMadera extends Puerta {
                    public function abrir() {
                        return "Girando la manija de la puerta de madera.";
                    }
                }

                class PuertaDeVidrio extends Puerta {
                    public function abrir() {
                        return "Deslizando la puerta de vidrio.";
                    }
                }

                class PuertaAutomatica extends Puerta {
                    public function abrir() {
                        return "Activando el sensor de la puerta automática.";
                    }
                }

                ?>
                </code></pre>
            </div>
        </div>

        <p class="mt-4">Este ejemplo muestra cómo distintas clases hijas pueden tener el mismo método <code>abrir()</code>, pero cada una lo implementa a su manera. ¡Eso es polimorfismo!</p>
    </div>

    <div class="container mt-5">
        <div class="container-fluid p-3 bg-primary text-white text-center">
            <h2>Interacción con Puertas</h2>
            <p>Probá abrir distintos tipos de puertas</p>
        </div>

        <form method="POST" class="text-center mt-4">
            <button type="submit" name="madera" class="btn btn-success m-2">Abrir Puerta de Madera</button>
            <button type="submit" name="vidrio" class="btn btn-info m-2">Abrir Puerta de Vidrio</button>
            <button type="submit" name="automatica" class="btn btn-warning m-2">Abrir Puerta Automática</button>
        </form>

        <?php
        class Puerta {
            public function abrir() {
                return "Abriendo una puerta genérica.";
            }
        }

        class PuertaDeMadera extends Puerta {
            public function abrir() {
                return "Girando la manija de la puerta de madera.";
            }
        }

        class PuertaDeVidrio extends Puerta {
            public function abrir() {
                return "Deslizando la puerta de vidrio.";
            }
        }

        class PuertaAutomatica extends Puerta {
            public function abrir() {
                return "Activando el sensor de la puerta automática.";
            }
        }

        echo '<div class="mt-4 text-center">';
        if (isset($_POST['madera'])) {
            $puerta = new PuertaDeMadera();
            echo '<div class="alert alert-success">' . $puerta->abrir() . '</div>';
        }

        if (isset($_POST['vidrio'])) {
            $puerta = new PuertaDeVidrio();
            echo '<div class="alert alert-info">' . $puerta->abrir() . '</div>';
        }

        if (isset($_POST['automatica'])) {
            $puerta = new PuertaAutomatica();
            echo '<div class="alert alert-warning">' . $puerta->abrir() . '</div>';
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
