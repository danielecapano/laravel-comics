<header class="header">
    <nav class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
                </div>
            </div>
            <div class="col">
                <ul class="menu d-flex gap-3 mb-0">
                    <li class="menu-item"><a href="#">Characters</a></li>
                    <li class="menu-item">
                        <a href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li class="menu-item"><a href="#">Movies</a></li>
                    <li class="menu-item"><a href="#">TV</a></li>
                    <li class="menu-item"><a href="#">Games</a></li>
                    <li class="menu-item"><a href="#">Collectibles</a></li>
                    <li class="menu-item"><a href="#">Video</a></li>
                    <li class="menu-item"><a href="#">Fans</a></li>
                    <li class="menu-item"><a href="#">News</a></li>
                    <li class="menu-item"><a href="#">Shop</a></li>
                </ul>
            </div>
            <div class="col">
                <input type="text" name="" id="" placeholder="search">
            </div>
        </div>
    </nav>
</header>