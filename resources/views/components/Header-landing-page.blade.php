<header class=" fixed top-0 left-0 w-min h-[63.75px] justify-start p-[15px] gap-[47px] flex text-text">
    @include('components.Brand')
    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="w-20 text-[22px]  focus:outline focus:outline-2 focus:rounded-sm ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="w-20 text-[22px]  focus:outline focus:outline-2 focus:rounded-sm ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w-max text-[22px] ml-4  focus:outline focus:outline-2 focus:rounded-sm ">Get Started</a>
                        @endif
                    @endauth
    @endif
</header>
