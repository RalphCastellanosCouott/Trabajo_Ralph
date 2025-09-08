<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Academia</title>
    <style>
        :root {
            --accent: #ff8800;
            --bg1: #00c6ff;
            --bg2: #00ff87;
            --card-bg: #ffffff;
            --text: #333333;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #00c6ff, #00ff87);
            color: var(--text);
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
            flex: 1;
            padding: 40px 10%;
            max-width: 1200px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            color: var(--accent);
            font-size: 2rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.15);
        }

        .academy-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .academy-card {
            display: grid;
            grid-template-columns: 360px 1fr;
            gap: 24px;
            align-items: center;
            background: var(--card-bg);
            border-radius: 14px;
            padding: 18px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
            position: relative;
            overflow: hidden;
        }

        .academy-card .thumb {
            width: 100%;
            height: 100%;
            display: block;
        }

        .academy-card .thumb img {
            width: 100%;
            height: 100%;
            max-height: 260px;
            object-fit: cover;
            border-radius: 10px;
            display: block;
        }

        .academy-card .content h3 {
            margin: 0 0 10px 0;
            color: var(--accent);
            font-size: 1.25rem;
        }

        .academy-card .badge {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 6px 10px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 0.85rem;
            margin-bottom: 12px;
            box-shadow: 0 4px 10px rgba(255, 136, 0, 0.15);
        }

        .academy-card .content p {
            margin: 0 0 10px 0;
            line-height: 1.6;
            color: #333;
        }

        .academy-card .meta {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 12px;
        }

        .academy-card .thumb,
        .academy-card .content {
            padding: 6px;
        }

        @media (max-width: 880px) {
            .academy-card {
                grid-template-columns: 1fr;
            }

            .academy-card .thumb img {
                max-height: 320px;
            }
        }

        footer {
            background: #ff8800;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>

<body>
    <header>
        <a href="{{ url('/') }}">
            <img src="/images/logo.png" alt="Mi Logo">
        </a>
        <nav>
            <a href="{{ url('/experiencia-laboral') }}">Experiencia Laboral</a>
            <a href="{{ url('/habilidades') }}">Habilidades</a>
            <a href="{{ url('/academia') }}">Estudios</a>
            <a href="{{ url('/biografia') }}">Sobre mí</a>
        </nav>
    </header>

    <main>
        <h2>Mi Trayectoria Académica</h2>

        <div class="academy-list">
            <article class="academy-card">
                <div class="thumb">
                    <img src="https://colegiodelapresentacion.edu.co/wp-content/uploads/2015/07/DSC_4298.jpg"
                        alt="Colegio de la Presentación Bucaramanga">
                </div>

                <div class="content">
                    <span class="badge">Colegio</span>
                    <div class="meta">
                        <strong>Colegio de la Presentación de Bucaramanga</strong>
                        <p>2da mitad 2011 - 2021</p>
                    </div>
                    <h3>Formación y recuerdos</h3>
                    <p>
                        Estudié en el Colegio de la Presentación de Bucaramanga desde la segunda mitad del 2011 hasta
                        2021, año en que me gradué.
                        Ahí me formé académica y personalmente, aprendiendo valores inculcados en casa. Conocí a la
                        mayoría de mis amigos, especialmente a
                        mi mejor amigo Juanes, y guardo recuerdos inolvidables como la noche del Prom, que marcó el
                        cierre de esa etapa.
                    </p>
                </div>
            </article>
            <article class="academy-card">
                <div class="thumb">
                    <img src="https://unab.edu.co/wp-content/uploads/2022/01/1.-Edificio-Armando-Puyana-Puyana.jpg"
                        alt="UNAB Bucaramanga">
                </div>

                <div class="content">
                    <span class="badge">Universidad</span>
                    <div class="meta">
                        <strong>Universidad Autónoma de Bucaramanga (UNAB)</strong>
                        <p>2022 - Actualidad</p>
                    </div>
                    <h3>Ingeniería de Sistemas</h3>
                    <p>
                        Actualmente curso quinto semestre de Ingeniería de Sistemas. Inicialmente estudié Artes
                        Audiovisuales (2022) pero tras
                        completar dos semestres decidí cambiarme. En Ingeniería encontré mi vocación: proyectos,
                        compañeros y un entorno donde me siento cómodo.
                    </p>
                </div>
            </article>                        
        </div>

    </main>

    <footer>
        <p>© 2025 Ralph Castellanos | Todos los derechos reservados</p>
    </footer>
</body>

</html>