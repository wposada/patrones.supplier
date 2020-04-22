        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    MiFerreteria.co
                </div>

                <div class="links">
                    <a href="{{ url('/')}}">Inicio</a>
                    <a href="{{ route('quienes') }}">Quienes somos</a>
                    <a href="{{ url('/productos') }}">Productos</a>
                    <a href="{{ url('/servicios') }}">Servicios</a>
                    <a href="{{ route('quotes') }}">Cotizaciones</a>
                    <a href="{{ url('/proveedores') }}">Proveedores</a>
                </div>
            </div>
        </div>
