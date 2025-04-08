<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamiento</title>
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
            <h1>Encapsulamiento en PHP</h1>
        </div>

        <p><strong>Encapsulamiento</strong> significa proteger los datos dentro de un objeto y controlarlos con métodos específicos.</p>

        <p>En construcción, sería como tener una bodega cerrada con llave. No cualquiera puede entrar. Solo se puede abrir usando un método llamado <code>abrirBodega($clave)</code>.</p>

        <div class="card mt-4">
            <div class="card-header bg-primary text-white">
                Código en PHP (ejemplo de encapsulamiento)
            </div>
            <div class="card-body bg-light">
<pre><code>&lt;?php
class Bodega {
    private $clave = "1234";

    public function abrirBodega($intento) {
        if ($intento === $this->clave) {
            return "Bodega abierta.";
        } else {
            return "Acceso denegado. Clave incorrecta.";
        }
    }
}
?&gt;
</code></pre>
            </div>
        </div>

        <p class="mt-4">El atributo <code>$clave</code> está protegido con <code>private</code>. Solo el método <code>abrirBodega()</code> puede verificar la clave. Así funciona el encapsulamiento.</p>
    </div>

    <div class="container mt-5">
        <div class="container-fluid p-3 bg-primary text-white text-center">
            <h2>Simulación de Bodega</h2>
            <p>Ingresá una clave para intentar abrir la bodega</p>
        </div>

        <form method="post" class="text-center mt-4">
            <input type="password" name="clave" placeholder="Ingrese la clave" class="form-control w-25 mx-auto mb-3" required>
            <button type="submit" class="btn btn-success">Abrir Bodega</button>
        </form>

        <?php
        class Bodega {
            private $clave = "2301";

            public function abrirBodega($intento) {
                if ($intento === $this->clave) {
                    return "Bodega abierta.";
                } else {
                    return "Acceso denegado. Clave incorrecta.";
                }
            }
        }

        echo '<div class="mt-4 text-center">';
        if (isset($_POST['clave'])) {
            $bodega = new Bodega();
            $respuesta = $bodega->abrirBodega($_POST['clave']);
            echo '<div class="alert alert-' . ($respuesta === "Bodega abierta." ? 'success' : 'danger') . '">' . $respuesta . '</div>';
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
