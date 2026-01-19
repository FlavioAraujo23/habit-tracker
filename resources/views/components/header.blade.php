<header class="bg-white  border-b-2 flex justify-between p-4 items-center">
    <div>
        logo
    </div>
    <div>
        git

        @auth
            <form class="inline" action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-white p-2 border-2" href="/logout">Sair</button>
            @endauth

        </form>

        @guest
            <a class="bg-white p-2 border-2" href="{{ route('site.login') }}">Login</a>
        @endguest
    </div>
</header>
