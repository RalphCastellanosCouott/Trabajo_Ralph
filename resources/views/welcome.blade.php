<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <style>
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
            text-align: center;
            padding-top: 120px;
            padding-bottom: 40px;
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
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .interests {
            text-align: center;
            margin-top: 50px;
        }

        .interests h2 {
            color: white;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .interest-cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .interest-card {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            width: 150px;
            transition: 0.3s;
        }

        .interest-card img {
            width: 100%;
            border-radius: 10px;
        }

        .interest-card h2 {
            color: white;
            margin-top: 10px;
            font-size: 1rem;
        }

        .interest-card:hover {
            transform: scale(1.05);
            cursor: pointer;
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
        <h1>Ralph Castellanos Couott</h1>
        <img src="/images/foto1.jpg" alt="Mi Foto">

        <section class="interests">
            <h2>Cosas que me gustan</h2>
            <div class="interest-cards">
                <div class="interest-card">
                    <h2>Videojuegos</h2>
                    <img src="https://fotografias-neox.atresmedia.com/clipping/cmsimages01/2019/05/10/507D2DEF-E8A8-4829-982C-F474A7016DFB/98.jpg?crop=1777,1000,x116,y0&width=1900&height=1069&optimize=high&format=webply" alt="Videojuegos">                    
                </div>
                <div class="interest-card">
                    <h2>Libros</h2>
                    <img src="https://www.beyondthebookends.com/wp-content/uploads/2023/02/Sarah-j-maas-Header.jpg" alt="Libros">                    
                </div>
                <div class="interest-card">
                    <h2>Música</h2>
                    <img src="https://static01.nyt.com/images/2023/08/03/multimedia/00taylor-1-tcmv-esp/00taylor-1-tcmv-superJumbo.jpg" alt="Música">                    
                </div>
                <div class="interest-card">
                    <h2>Fórmula 1</h2>
                    <img src="https://imagenes.elpais.com/resizer/v2/ZWA64GNWGYVZCM5R66ZJLYAJVU.jpg?auth=357ce3dcc0bef353917f6af9e92d8263566f168d4c6c97add92df9484ab3298d&width=1960&height=1103&smart=true" alt="Fórmula 1">                    
                </div>                                
            </div>
        </section>
    </main>

    <footer>
        <p>© 2025 Ralph Castellanos | Todos los derechos reservados</p>
    </footer>
</body>

</html>
