<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu Sustentável - Plataforma Educacional Verde</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <nav>
            <div class="logo">Edu Sustentável</div>
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#cursos">Cursos</a></li>
                <li><a href="#sobre">Contato</a></li>
                <li><a href="{{ route('dashboard') }}">Painel do Aluno</a></li>
            </ul>
            <button class="menu-toggle">☰</button>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>Aprenda a Salvar o Planeta.</h1>
                <p>Cursos online e interativos sobre sustentabilidade, energias renováveis e ecologia.</p>
                <a href="{{ route('dashboard') }}" class="cta-button">Comece a Aprender Hoje</a>
            </div>
            </section>

        <section id="features" class="features">
            <h2>Por Que Escolher a Edu Sustentável?</h2>
            <div class="feature-grid">
                <div class="feature-item">
                    <h3>Conteúdo de Qualidade</h3>
                    <p>Materiais criados por especialistas em ciências ambientais.</p>
                </div>
                <div class="feature-item">
                    <h3>Acesso Flexível</h3>
                    <p>Estude no seu próprio ritmo, de qualquer lugar e dispositivo.</p>
                </div>
                <div class="feature-item">
                    <h3>Comunidade Verde</h3>
                    <p>Conecte-se com outros apaixonados por sustentabilidade.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Edu Sustentável. Educação para um futuro sustentável.</p>
    </footer>

    <script src="script.js"></script>

    <script>
        // Funcao da responsividade com menu
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const navList = document.querySelector('nav ul');

            function toggleMenu() {
                navList.classList.toggle('active');
            }

            menuToggle.addEventListener('click', toggleMenu);

            navList.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    if (navList.classList.contains('active')) {
                        toggleMenu();
                    }
                });
            });
        });
        // FIM
    </script>
</body>
</html>