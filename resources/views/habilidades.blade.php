<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habilidades</title>
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
            padding: 40px 10%;
        }

        h2 {
            text-align: center;
            font-size: 2rem;
            color: #ff8800;
            margin-bottom: 30px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .skill-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .skill-card:hover {
            transform: translateY(-5px);
        }

        .skill-card img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .skill-card img.img-large {
            width: 200px;
            height: auto;
        }

        .skill-card h3 {
            color: #ff8800;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .skill-card p {
            color: #333;
            font-size: 1rem;
            line-height: 1.5;
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
            <a href="{{ url('/habilidades') }}">Habilidades</a>
        </nav>
    </header>

    <main>
        <h2>Habilidades</h2>

        <div class="skills-grid">
            <div class="skill-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python">
                <h3>Python</h3>
                <p>
                    Lenguaje de programación que manejo con facilidad, aplicado en proyectos académicos y personales.
                    Me gusta por su versatilidad en desarrollo web, análisis de datos y automatización.
                </p>
            </div>

            <div class="skill-card">
                <img src="https://aprendeingles.grupovaughan.com/hubfs/7454886.webp" alt="Inglés" class="img-large">
                <h3>Inglés Avanzado</h3>
                <p>
                    Gracias a mis estudios de inglés en la UIS, logré alcanzar un nivel alto en este idioma.
                    Esta habilidad me permite comunicarme fluidamente y acceder a material académico y profesional en
                    inglés.
                </p>
            </div>

            <div class="skill-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/74/Kotlin_Icon.png" alt="Kotlin">
                <h3>Kotlin</h3>
                <p>
                    Lenguaje de programación en el que desarrollé, junto con mis compañeros, la aplicación móvil
                    avanzada del Bus UNAB.
                    Es uno de los lenguajes en los que más me he defendido y que me permitió trabajar con Android
                    Studio.
                </p>
            </div>
        </div>
    </main>

    <footer>
        <p>© 2025 Ralph Castellanos | Todos los derechos reservados</p>
    </footer>
</body>

</html>
