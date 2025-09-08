<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia Laboral</title>
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

        .experience-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .experience-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .experience-card:hover {
            transform: translateY(-5px);
        }

        .experience-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .experience-card h3 {
            color: #ff8800;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .experience-card p {
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
            <a href="{{ url('/experiencia-laboral') }}">Experiencia Laboral</a>
        </nav>
    </header>

    <main>
        <h2>Experiencia Laboral</h2>

        <div class="experience-grid">
            <div class="experience-card">
                <img src="https://unab.edu.co/wp-content/uploads/2023/09/bus-unab.jpg" alt="App Bus UNAB">
                <h3>Aplicación móvil avanzada Bus UNAB</h3>
                <p>
                    Desarrollo de una aplicación móvil junto con compañeros de universidad,
                    que permitía a conductores registrar su ubicación y compartirla en tiempo real (cada 3 segundos).
                    Los estudiantes podían visualizar el recorrido de los buses, identificarlos como Bus 1 o 2
                    y consultar las paradas en el mapa.
                </p>
            </div>

            <div class="experience-card">
                <img src="https://www.clinicbarcelona.org/uploads/media/default/0001/97/1f481a6adf1a0e29cc92e6c9fe2403f9365c500d.jpeg"
                    alt="Presentaciones médicas">
                <h3>Apoyo en presentaciones para congresos médicos</h3>
                <p>
                    Colaboración en la creación y corrección de presentaciones en PowerPoint para mi papá,
                    médico especialista, utilizadas en congresos y conferencias del área de la salud.
                    El trabajo consistió en mejorar el diseño visual, la organización de los contenidos
                    y asegurar que la información se presentara de manera clara y profesional.
                </p>
            </div>

            <div class="experience-card">
                <img src="https://colegiodelapresentacion.edu.co/wp-content/uploads/2023/03/interclases-2023-94-840x430.jpg"
                    alt="Edición de videos interclases">
                <h3>Edición de videos y música</h3>
                <p>
                    Apoyo a mi mamá en la edición de videos y selección de música para las actividades
                    de interclases del colegio donde estudia.
                    La tarea incluyó edición de clips, ajustes de audio y sincronización musical
                    para crear presentaciones atractivas y dinámicas.
                </p>
            </div>
        </div>
    </main>

    <footer>
        <p>© 2025 Ralph Castellanos | Todos los derechos reservados</p>
    </footer>
</body>

</html>
