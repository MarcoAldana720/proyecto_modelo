<nav class="menu">
    <section class="menu__container">
        <img src="{{ asset('img/logo-blanco.svg') }}" alt="Logo" width=180px>

        <ul class="menu__links">
            <li class="menu__item">
                <a href="#" class="menu__link">inicio</a>
            </li>

            <li class="menu__item menu__item--show">
                <a href="#" class="menu__link">documentos curriculares <img src="{{ asset('img/arrow.svg') }}" class="menu__arrow"></a>

                <ul class="menu__nesting">
                    <li class="menu__inside"><a href="{{ route('id') }}" class="menu__link menu__link--inside">identificacion del profesor</a></li>
                    <li class="menu__inside"><a href="{{ route('studies') }}" class="menu__link menu__link--inside">estudios realizados</a></li>
                    <li class="menu__inside"><a href="{{ route('data') }}" class="menu__link menu__link--inside">datos laborales</a></li>
                    <li class="menu__inside"><a href="{{ route('line') }}" class="menu__link menu__link--inside">linea de generacion o aplicacion innovadora del conocimiento</a></li>
                    <li class="menu__inside"><a href="{{ route('production') }}" class="menu__link menu__link--inside">produccion académica</a></li>
                    <li class="menu__inside"><a href="{{ route('projects') }}" class="menu__link menu__link--inside">proyectos de investigación</a></li>
                    <li class="menu__inside"><a href="#" class="menu__link menu__link--inside">ver curriculum</a></li>
                    <li class="menu__inside"><a href="#" class="menu__link menu__link--inside">exportar curriculum</a></li>
                </ul>
            </li>

            <li class="menu__item">
                <a href="#" class="menu__link">cerrar sesion</a>
            </li>
        </ul>

        <div class="menu__hamburguer">
            <img src="{{ asset('img/burger-menu.svg') }}" class="menu__img">
        </div>
    </section>
</nav>