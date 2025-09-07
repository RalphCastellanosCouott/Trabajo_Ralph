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

        section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 10%;
            gap: 40px;
        }

        section:nth-child(even) {
            flex-direction: row-reverse;
        }

        section img {
            width: 400px;
            height: 300px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
            object-fit: cover;
        }

        section .texto {
            flex: 1;
            font-size: 1.1rem;
            line-height: 1.6;
            color: #fff;
        }

        section h2 {
            font-size: 2rem;
            color: #ff8800;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
        }

        section p {
            color: #000000;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        footer {
            background: #ff8800;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 50px;
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
        </nav>
    </header>

    <main>
        <section>
            <div class="texto">
                <h2>Nacimiento</h2>
                <p>
                    Nací el <strong>8 de mayo del 2004</strong>, a las <strong>3:45 de la tarde</strong>,
                    en la ciudad de <strong>Bucaramanga</strong>, capital del departamento de
                    <strong>Santander, Colombia</strong>.
                </p>
            </div>
            <img src="/images/fotoBebe.jpg" alt="Foto de mi nacimiento">
        </section>

        <section>
            <div class="texto">
                <h2>Mi Familia</h2>
                <p>
                    Mi familia está conformada por mis padres, <strong>Rafael Castellanos Bueno</strong> y <strong>Heavenly Couott Piña</strong>,
                    además de mis hermanos: <strong>Andrés</strong>, el mayor, y <strong>Heavenly</strong>,
                    mi hermana menor, a quien cariñosamente llamamos <em>Chiqui</em>.
                </p>
            </div>
            <img src="/images/familia.jpg" alt="Foto con mi familia">
        </section>

        <section>
            <div class="texto">
                <h2>Mi Mascota</h2>
                <p>
                    Desde el <strong>26 de enero del 2020</strong>, nuestra familia cuenta con un
                    compañero muy especial: <strong>Kobi</strong>, un <strong>husky siberiano</strong>
                    nacido el <strong>16 de diciembre del 2019</strong>, que ha llenado nuestra casa
                    de alegría y energía.
                </p>
            </div>
            <img src="/images/kobi.jpg" alt="Mi mascota Kobi">
        </section>
    </main>

    <footer>
        <p>© 2025 Ralph Castellanos | Todos los derechos reservados</p>
    </footer>
</body>

</html>
