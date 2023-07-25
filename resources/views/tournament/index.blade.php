<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./assets/css/data.css') }}">
    <title>TOURNAMENT</title>
</head>
<body>
    {{-- #HEADER --}}
    <header>
        <div class="container">
            <h3>TOURNAMENT</h3>
        </div>
    </header>
    {{-- END HEADER --}}

    {{-- #GAME LIST --}}
    <div class="list">
        <section>
            <div class="link">
                <a href="{{ url('tournament/create') }}">Add Tournament</a>
            </div>
            <div class="table">
                <table border="1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Games</th>
                            <th>Tournament</th>
                            <th>Description</th>
                            <th>Detail</th>
                            <th>Reward</th>
                            <th>Registration</th>
                            <th>Contact</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="tournament-data">
                        @foreach ($tournament as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->game->name }}</td>
                                <td>{{ $item->tournament_name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->tournament_detail }}</td>
                                <td>{{ $item->reward }}</td>
                                <td>{{ $item->regstration_detail }}</td>
                                <td>{{ $item->contact_person }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                </td>
                                <td class="action">
                                    <div class="aksi">
                                        <div class="edit">
                                            <a href="{{ route('tournament.edit', $item->id) }}">edit</a>
                                        </div>
                                        <div class="delete">
                                            <form action="{{ route('tournament.destroy', $item->id) }}" class="delete" method="post">
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