<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/data.css">
    <title>Games</title>
</head>

<body>
    {{-- #HEADER --}}
    <header>
        <div class="container">
            <h3>GAMES</h3>
        </div>
    </header>
    {{-- END HEADER --}}

    {{-- #GAME LIST --}}
    <div class="list">
        <section>
            <div class="link">
                <a href="{{ url('game/create') }}">Add Game</a>
            </div>
            <div class="table">
                <table border="1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Games</th>
                            <th>Logo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($game as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                </td>
                                <td class="action">
                                    <div class="aksi">
                                        <div class="edit">
                                            <a href="{{ route('game.edit', $item->id) }}">edit</a>
                                        </div>
                                        <div class="delete">
                                            <form action="{{ route('game.destroy', $item->id) }}" class="delete" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="confirm('Sure delet this data?')">delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    {{-- END GAME LIST --}}
</body>

</html>
