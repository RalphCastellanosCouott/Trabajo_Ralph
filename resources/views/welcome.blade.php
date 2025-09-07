<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Biografía</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #00c6ff, #00ff87);
            color: #333;
        }

        header {
            background: #ff8800;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img {
            height: 50px;
        }

        header h2 {
            margin: 0;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        main {
            text-align: center;
            padding-top: 120px;
            padding-bottom: 80px;
        }

        main h1 {
            font-size: 3rem;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        /* Aquí ajustamos la foto como div */
        .foto {
            margin: 20px auto 0;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            background-image: url("/images/foto1.jpg");
            background-size: cover;
            /* llena el círculo */
            background-position: center;
            /* puedes cambiar: top, bottom, 50% 30%, etc */
        }

        footer {
            background: #ff8800;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="/images/logo.png" alt="Mi Logo">
        </div>
        <div class="nombre">
            <h2>Ralph Castellanos</h2>
        </div>
    </header>

    <main>
        <h1>Ralph Castellanos Couott</h1>
        <!-- cambiamos el <img> por un div -->
        <div class="foto"></div>
    </main>

    <footer>
        <p>© 2025 Ralph Castellanos | Todos los derechos reservados</p>
    </footer>
</body>

</html>