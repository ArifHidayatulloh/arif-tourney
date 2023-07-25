<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="./assets/css/admin.css">
</head>

<body>
    {{-- #HEADER --}}
    <header>
        <div class="container">
            <nav>
                <h3>INFO TOURNEY</h3>
            </nav>
        </div>
    </header>
    {{-- END HEADER --}}

    {{-- #MENU --}}
    <div class="menu">
        <section>
            <div class="card">
                <div class="card-header">
                    <h4>Games</h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('game.index') }}">Manage</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Tournament</h4>
                </div>
                <div class="card-body">
                    <a href="./tournament">Manage</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Games</h4>
                </div>
                <div class="card-body">
                    <a href="./game">Manage</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Games</h4>
                </div>
                <div class="card-body">
                    <a href="./game">Manage</a>
                </div>
            </div>
        </section>
    </div>
    {{-- END MENU --}}

</body>

</html>
