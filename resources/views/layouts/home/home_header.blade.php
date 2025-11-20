<header class="mt-4">
    <div class="row no-gutters align-items-center">
        <div class="col-md-7">
            <a href="{{ route('homepage') }}">
                <img src="{{ asset('images/fastcomplete.png') }}" class="img-header" alt="Logo Edatalink">
            </a>
        </div>
        <div class="col-auto">
            <a class="text-reactive font_130">Home</a>
        </div>
        <div class="col-auto">
            <a class="text-reactive font_130">Soluções</a>
        </div>
        <div class="col-auto dropdown">
            <a class="text-reactive font_130">Infraestrutura <i class="fa-solid fa-caret-down" style="color:rgb(108, 108, 108);"></i></a>
            <div class="dropdown-menu">
                <a class="font_110" href="#">Servidores Dedicados</a>
                <a class="font_110" href="#">Cloud Hosting</a>
                <a class="font_110" href="#">Segurança Digital</a>
            </div>
        </div>
        <div class="col-auto">
            <a class="text-reactive font_130">Empresa</a>
        </div>
        <div class="col-auto">
            <a class="text-reactive font_130">Suporte</a>
        </div>
        <div class="col-auto">
            <a class="text-reactive font_130">Atendimento</a>
        </div>
        <div class="col-auto">
            <a class="font_150" href="{{ route('dashboard') }}"><i class="fa-solid fa-circle-user" style="color: #e3e3e3;"></i></a>
        </div>
    </div>
</header>


<style>
    .menu {
        display: flex;
        gap: 20px;
    }

    .menu a {
        color: white;
        text-decoration: none;
        font-size: 18px;
        position: relative;
        padding: 10px;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #333;
        width: 220px;
        border-radius: 5px;
        padding: 10px 0;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .dropdown-menu a {
        display: block;
        padding: 12px 15px;
        color: white;
        font-size: 16px;
        white-space: nowrap;
        text-align: left;
    }

    .dropdown-menu a:hover {
        background-color: #444;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    header, .menu {
        overflow: visible !important;
    }

    .fa-caret-down {
        margin-left: 5px;
    }
</style>