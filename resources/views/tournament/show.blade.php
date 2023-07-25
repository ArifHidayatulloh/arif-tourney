    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./assets/css/index.css') }}">
    <title>{{ $game->name }}</title>
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
                            <li><a href="/index">HOME</a></li>
                            <li>
                                <p id="tournament">TOURNAMENT</p>
                            </li>
                            <li><a href="#">TEAM PROFILE</a></li>
                            <li><a href="#">CONTACT</a></li>
                        </ul>
                    </div>
                </nav>
            </section>
        </div>
    </header>
    {{-- END HEADER --}}

    <div class="tournament-page-container">
        {{-- #GAMES --}}
        <div class="game-name">
            <section>
                <p>{{ $game->name }}</p>
                <div class="underline"></div>
            </section>
        </div>
        {{-- END GAMES --}}
        <div class="tournament">
            <div class="tournament-menu">

                <div class="tournament-list">
                    @if (count($tournament) > 0)
                        @foreach ($tournament as $item)
                            <div class="list-tournament">
                                <div class="tournament-name">
                                    <p>{{ $item->tournament_name }}</p>
                                </div>
                                <div class="tournament-img">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                </div>
                                <div class="tournament-desc">
                                    <div class="desc-container">
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                                <div class="tournament-detail">
                                    <a href="">Detail...</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="tournament-null">
                            <p>Tidak Ada Tournament</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>
