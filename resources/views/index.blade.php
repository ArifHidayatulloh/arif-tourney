<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Tourney</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    {{-- #HEADER --}}
    <header>
        <div class="container">
            <section>
                <nav>
                    <div class="nav-logo">
                        <img src="https://via.placeholder.com/50x50" alt="Logo">
                        <div class="nav-title">
                            <h3>INFO TOURNEY</h3>
                        </div>
                    </div>
                    <div class="nav-menu">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><p id="tournament">TOURNAMENT</p></li>
                            <li><a href="#">TEAM PROFILE</a></li>
                            <li><a href="#">CONTACT</a></li>
                        </ul>
                    </div>
                </nav>
            </section>
        </div>
    </header>
    {{-- END HEADER --}}

    {{-- #BANNER --}}
    <div class="banner">
        <div class="banner-container">
            <section>
                <div class="banner-img">
                    <img src="./assets/img/main.png" alt="" class="">
                </div>
                <div class="banner-title">
                    <span>Let's Join the Tournament in</span>
                    <h3>Info Tourney</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </section>
        </div>
    </div>
    {{-- END BANNER --}}

    {{-- #GAMES --}}
    <div class="games">
        <div class="game-title">
            <h3>PICK YOUR GAME</h3>
            <div class="line"></div>
            <p>Pilih Game Yang Kamu Mainkan</p>
        </div>
        <div class="games-container">
            <section>
                @foreach ($game as $item)
                    <div class="game-list">
                        <a href="{{ route('index.show',$item->id) }}">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="">
                        </a>
                        <p>{{ $item->name }}</p>
                    </div>
                @endforeach
            </section>
        </div>
    </div>

    <script src="./assets/js/index.js"></script>
</body>

</html>
