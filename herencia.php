<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            padding-bottom: 80px;
        }
    </style>

</head>

<body>
    <div class="container mt-5">
        <div class="container-fluid p-2 bg-primary text-white text-center">
            <h1>Herencia en PHP</h1>
        </div>

        <p><strong>Herencia</strong> en programación se parece a cuando construimos varias casas a partir de un mismo plano base.</p>

        <p>Imaginá que tenemos una clase general llamada <strong>Casa</strong>, que define lo básico que todas las casas tienen: paredes, techo, y puertas.</p>

        <p>Después, creamos una clase llamada <strong>CasaDeDosPisos</strong>, que hereda todas las características de la clase <code>Casa</code>, pero además le agregamos un segundo piso y un balcón.</p>

        <div class="card mt-4">
            <div class="card-header bg-primary text-white">
                Código en PHP (ejemplo de herencia)
            </div>
            <div class="card-body bg-light">
                <pre><code>&lt;?php
                class Casa {
                    public function construir() {
                        echo "Construyendo paredes, techo y puertas.";
                    }
                }

                class CasaDeDosPisos extends Casa {
                    public function construir() {
                        echo "Construyendo paredes, techo, puertas, segundo piso y balcón.";
                    }
                }

                $miCasa = new Casa();
                $miCasa-&gt;construir(); // Construyendo paredes, techo y puertas.

                echo "&lt;br&gt;";

                $miCasaModerna = new CasaDeDosPisos();
                $miCasaModerna-&gt;construir(); // Construyendo paredes, techo, puertas, segundo piso y balcón.
                ?&gt;
                </code></pre>
            </div>
        </div>

        <p class="mt-4">En este ejemplo, <code>Casa</code> es como un plano de construcción básico. La clase <code>CasaDeDosPisos</code> hereda ese plano, pero lo amplía para agregarle más elementos. Así funciona la herencia en PHP.</p>
    </div>



    <div class="container mt-5">
        <div class="container-fluid p-3 bg-primary text-white text-center">
            <h1>Herencia en PHP</h1>
            <p>Construcción interactiva de casas</p>
        </div>

        <form method="post" class="text-center mt-4">
            <button type="submit" name="casa" class="btn btn-success m-2">Construir Casa</button>
            <button type="submit" name="casa_dos_pisos" class="btn btn-warning m-2">Construir Casa de Dos Pisos</button>
        </form>

        <?php

        class Casa
        {
            public function construir()
            {
                return "Construyendo paredes, techo y puertas.";
            }
        }

        class CasaDeDosPisos extends Casa
        {
            public function construir()
            {
                return "Construyendo paredes, techo, puertas, segundo piso y balcón.";
            }
        }

        echo '<div class="mt-4 text-center">';
        if (isset($_POST['casa'])) {
            $miCasa = new Casa();
            echo '<div class="alert alert-success">' . $miCasa->construir() . '</div>';
        }

        if (isset($_POST['casa_dos_pisos'])) {
            $miCasaModerna = new CasaDeDosPisos();
            echo '<div class="alert alert-warning">' . $miCasaModerna->construir() . '</div>';
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