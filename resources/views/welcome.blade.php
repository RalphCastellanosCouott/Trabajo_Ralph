<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
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
            cursor: pointer;
        }

        header nav a {
            margin-left: 20px;
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        header nav a:hover {
            color: #003366;
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

        main img {
            margin-top: 20px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            object-fit: cover;
            object-position: center;
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
        <a href="{{ url('/') }}">
            <img src="/images/logo.png" alt="Mi Logo">
        </a>
        <nav>
            <a href="{{ url('/biografia') }}">Sobre mí</a>
            <a href="{{ url('/experiencia-laboral') }}">Experiencia Laboral</a>
        </nav>
    </header>

    <main>
        <h1>Ralph Castellanos Couott</h1>
        <img src="/images/foto1.jpg" alt="Mi Foto">
    </main>

    <footer>
        <p>© 2025 Ralph Castellanos | Todos los derechos reservados</p>
    </footer>
</body>

</html>
