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

        .section-separator {
            border: none;
            border-top: 2px solid rgba(255, 255, 255, 0.3);
            margin: 60px 0;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        .bio-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 60px 0;
            gap: 40px;
        }

        main .bio-section:nth-of-type(even) {
            flex-direction: row-reverse;
        }

        .bio-section:last-of-type .bio-text {
            color: #000;
        }

        .bio-text h2 {
            font-size: 2rem;
            color: #ff8800;
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
        }

        .bio-image img {
            width: 400px;
            height: 500px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
        }

        .bio-gallery {
            margin: 80px auto;
            text-align: center;
            max-width: 1000px;
            display: block;
        }

        .bio-gallery h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #ff8800;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .gallery-item img[alt="Con mis hermanos"] {
            object-position: center 15%;
        }

        .gallery-item img[alt="En USA adolescente"] {
            object-position: center 60%;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
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
            <a href="{{ url('/experiencia-laboral') }}">Experiencia Laboral</a>
            <a href="{{ url('/habilidades') }}">Habilidades</a>
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
                    Mi familia está conformada por mis padres, <strong>Rafael Castellanos Bueno</strong> y
                    <strong>Heavenly Couott Piña</strong>,
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

        <hr class="section-separator">

        <section class="bio-section">
            <div class="bio-text">
                <h2>Mi niñez</h2>
                <p>
                    Tuve una infancia increíble y llena de momentos felices, sobre todo jugando y divirtiéndome con mis
                    hermanos.
                    Durante esos años, mis padres descubrieron que era sordo, ya que siempre veía televisión con el
                    volumen muy
                    alto y demasiado cerca de la pantalla. Tras realizarme exámenes médicos, confirmaron que no
                    escuchaba bien y
                    además padecía de asma, por lo que necesitaba usar inhalador.
                </p>
                <p>
                    Gracias a una cirugía que resultó un éxito, logré escuchar perfectamente con el oído derecho y ya no
                    requiero de inhalador para respirar. Sin embargo, el oído izquierdo quedó con pérdida total de la
                    audición.
                    Durante mi recuperación falté mucho al colegio, lo que llevó a mi mamá a decidir que repitiera ese
                    grado
                    escolar.
                </p>
                <p>
                    Uno de los recuerdos más especiales de mi niñez fue un viaje familiar a Estados Unidos. Allí cumplí
                    un gran sueño: conocer a mi personaje favorito de entonces, <strong>Thomas el Tren</strong>. Lo
                    había visto
                    en comerciales y pedí con insistencia a mis papás que me llevaran. Finalmente, lo hicieron y tuve la
                    oportunidad de verlo
                    en persona y hasta montarme en él.
                </p>
                <p>
                    En ese mismo viaje nació mi pasión por los videojuegos. Mi mamá, junto con mi madrina que vive en
                    Estados Unidos, me regalaron una <strong>Nintendo Wii</strong> con <em>Wii Sports</em> y <em>Super
                        Mario Galaxy</em>.
                    Este último me atrapó por completo con su jugabilidad divertida, mundos coloridos y una banda sonora
                    maravillosa. Desde ese momento comenzó mi amor por los videojuegos, especialmente los de Nintendo.
                </p>
            </div>
            <div class="bio-image">
                <img src="/images/fotoNino.jpg" alt="Foto de mi niñez">
            </div>
        </section>

        <hr class="section-separator">

        <section class="bio-section">
            <div class="bio-text">
                <h2>Mi adolescencia</h2>
                <p>
                    Durante mi adolescencia, mi mamá siempre quiso que mis hermanos y yo estuviéramos involucrados en
                    algún deporte.
                    Para mí no fue sencillo encontrar uno que realmente me apasionara: pasé por taekwondo, natación y
                    fútbol, sin sentirme
                    del todo cómodo en ninguno de ellos. Finalmente, en el año 2017 descubrí el baloncesto, un deporte
                    en el que logré
                    destacar y sentirme pleno. Fui parte del grupo deportivo de mi colegio, representándolo en los
                    campeonatos nacionales,
                    donde conseguimos un memorable segundo lugar. Aunque no alcanzamos el primer puesto, la experiencia
                    de competir y quedar
                    como subcampeones fue increíble e inolvidable.
                </p>
                <p>
                    Con el paso de los años también empecé a darme cuenta de la facilidad y el talento que tenía con la
                    tecnología. Siempre
                    había estado familiarizado con los computadores, las aplicaciones móviles y el funcionamiento de las
                    páginas web, lo que
                    me permitió descubrir cuál era mi verdadera vocación: ser ingeniero de sistemas. Sin embargo, antes
                    de llegar a esa decisión,
                    me matriculé en la carrera de Artes Audiovisuales, motivado por un pequeño curso que realicé en
                    Estados Unidos y que me hizo
                    pensar que ese sería mi camino profesional. Con el tiempo descubrí que no era lo mío y, aunque
                    completé dos semestres, decidí
                    retirarme. Ese fue un momento crucial en mi vida y agradezco profundamente a mi familia por el apoyo
                    incondicional que me dieron.
                    Al final, me cambié a Ingeniería de Sistemas, y ha sido la mejor decisión que pude tomar: me siento
                    feliz, cómodo y convencido
                    de que encontré el lugar al que pertenezco.
                </p>
                <p>
                    Hacia el final de mi adolescencia también descubrí un nuevo hobbie: la lectura. Durante mis años de
                    colegio no disfrutaba leer,
                    pues la mayoría de los libros que me asignaban no lograban interesarme. Todo cambió cuando alguien
                    me habló del libro
                    <em>Boulevard</em> de Flor M. Salvador. Decidí darle una oportunidad y fue el inicio de una pasión
                    que no ha hecho más que crecer.
                    Desde entonces, mi colección de libros se ha ampliado con historias que me han marcado, como la saga
                    <em>ACOTAR</em> de Sarah J. Maas,
                    la icónica franquicia de <em>Harry Potter</em> y <em>El mapa de los anhelos</em> de Alice Kellen, un
                    libro especialmente importante
                    para mí, ya que me ayudó a tomar la decisión de cambiar de carrera. Hoy en día disfruto mucho leer
                    novelas de romance y fantasía,
                    dos géneros que me atrapan por sus historias de amor y sus mundos llenos de magia.
                </p>
            </div>
            <div class="bio-image">
                <img src="images/fotoJoven.jpg" alt="Foto de mi adolescencia">
            </div>
        </section>

        <hr class="section-separator">

        <section class="bio-section">
            <div class="bio-text">
                <h2>Lo que hago actualmente</h2>
                <p>
                    Estoy cursando el quinto semestre de Ingeniería de Sistemas. A lo largo de la
                    carrera he aprendido distintos lenguajes de programación como <strong>Python</strong>,
                    <strong>Java</strong> y <strong>Kotlin</strong>.
                    La programación es, sin duda, la parte que más disfruto, y me ha sorprendido lo mucho que me ha
                    gustado el mundo de las bases de datos, donde me he sentido especialmente cómodo.
                </p>
                <p>
                    También tuve la oportunidad de crear un pequeño videojuego en Unity para una materia, una
                    experiencia que me permitió acercarme a uno de mis grandes intereses: los videojuegos.
                </p>
                <p>
                    Además, soy <strong>creador de contenido</strong> en YouTube y TikTok. En YouTube
                    hablo principalmente sobre videojuegos de Nintendo, mientras que en TikTok soy más
                    variado: comento sobre videojuegos, libros, películas, series, música y todo lo que me apasiona.
                    Soy más constante en TikTok que en YouTube. También participo activamente en
                    X (antes Twitter), donde he construido una comunidad grande en torno a mi amor por los videojuegos,
                    y he conocido a personas con los mismos intereses.
                </p>
            </div>
            <div class="bio-image">
                <img src="/images/fotoActual.jpg" alt="Foto actual">
            </div>
        </section>

        <hr class="section-separator">

        <section class="bio-section">
            <div class="bio-text">
                <h2>Mis aspiraciones y metas</h2>

                <h3>Metas profesionales</h3>
                <ul>
                    <li>Graduarme de Ingeniería de Sistemas con honores y especializarme en
                        creación de aplicaciones móviles, el área que más me apasiona.</li>
                    <li>Diseñar y desarrollar aplicaciones móviles que resuelvan problemas reales, ya
                        sea propios o por encargo de clientes y familiares.</li>
                    <li>Crear mi propio videojuego, un sueño que me ha acompañado toda mi vida y que me
                        gustaría compartir con el mundo.</li>
                </ul>

                <h3>Metas personales</h3>
                <ul>
                    <li>Aprender un tercer idioma, en especial japonés, inspirado por
                        mi gusto por series como <em>Dragon Ball Super</em> y <em>Pokémon</em> en su idioma original, y
                        con la meta de visitar <em>Super Nintendo World</em> en Japón.</li>
                    <li>Practicar un nuevo deporte, siendo la escalada mi principal opción tras mi experiencia con el
                        baloncesto.</li>
                    <li>Aprender a cantar y producir un álbum musical. La música de <em>Taylor
                            Swift</em> ha sido una gran inspiración para mí y me motiva a explorar el mundo de la
                        música.</li>
                </ul>
            </div>

            <div class="bio-image">
                <img src="/images/fotoMetas.jpg" alt="Foto representativa de aspiraciones">
            </div>
        </section>

        <hr class="section-separator">

        <section class="bio-gallery">
            <h2>Galería de recuerdos</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="/images/thomas.jpg" alt="Viaje a Estados Unidos">
                </div>
                <div class="gallery-item">
                    <img src="/images/viajeUsa.jpg" alt="Otro momento del viaje">
                </div>
                <div class="gallery-item">
                    <img src="/images/familia2.jpg" alt="Jugando con mi familia">
                </div>
                <div class="gallery-item">
                    <img src="/images/hermanos.jpg" alt="Con mis hermanos">
                </div>
                <div class="gallery-item">
                    <img src="/images/familia3.jpg" alt="Con mi familia niñez">
                </div>
                <div class="gallery-item">
                    <img src="/images/baloncesto.jpg" alt="Equipo de baloncesto">
                </div>
                <div class="gallery-item">
                    <img src="/images/familia4.jpg" alt="Con mi familia adolescente">
                </div>
                <div class="gallery-item">
                    <img src="/images/foto2.jpg" alt="En USA adolescente">
                </div>
                <div class="gallery-item">
                    <img src="/images/foto3.jpg" alt="En Medellín">
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2025 Ralph Castellanos | Todos los derechos reservados</p>
    </footer>
</body>

</html>
