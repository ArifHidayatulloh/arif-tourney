<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITED TOURNAMENT</title>
    <link rel="stylesheet" href="{{ asset('./assets/css/tournament.css') }}">
</head>

<body>
    {{-- #FORM --}}
    <div class="form">
        <div class="form-container">
            <div class="form-title">
                <h3>ADD NEW TOURNAMENT</h3>
            </div>
            <form action="{{ route('tournament.update',$tournament->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">

                    <div class="form-input-left">
                        <div class="form-input">
                            <label for="name">Game</label><br>
                            <select name="game_id" id="">
                                @forelse ($game as $item)
                                    @if ($tournament->game_id == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @empty
                                    <option selected>Null</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="form-input">
                            <label for="name">Tournament</label><br>
                            <input type="text" id="name" name="tournament_name" required autocomplete="off"
                                value="{{ $tournament->tournament_name }}">
                        </div>
                        <div class="form-input">
                            <label for="desc">Description</label>
                            <textarea name="description" id="desc" cols="30" rows="5">{{ $tournament->description }}</textarea>
                        </div>
                        <div class="form-input">
                            <label for="detail">Detail</label>
                            <textarea name="tournament_detail" id="detail" cols="30" rows="10">{{ $tournament->tournament_detail }}</textarea>
                        </div>
                        <div class="form-input">
                            <label for="reward">Reward</label>
                            <textarea name="reward" id="reward" cols="30" rows="10">{{ $tournament->reward }}</textarea>
                        </div>
                    </div>
                    <div class="form-input-right">
                        <div class="form-input">
                            <label for="regist">Registration Detail</label>
                            <textarea name="regstration_detail" id="regist" cols="30" rows="10">{{ $tournament->regstration_detail }}</textarea>
                        </div>
                        <div class="form-input">
                            <label for="contact">Contact Person</label>
                            <textarea name="contact_person" id="contact" cols="30" rows="5">{{ $tournament->contact_person }}</textarea>
                        </div>
                        <div class="form-input">
                            <label for="inputFile">Tournament Poster</label><br>
                            <input type="file" id="inputFile" name="image" required>
                        </div>
                        <div class="review-image" style="display: flex; justify-content:center;">
                            <img src="{{ asset('storage/' .$tournament->image) }}" alt="" id="review" style="width:150px; height:200px;">
                        </div>
                    </div>
                </div>
                <div class="form-submit">
                    <button type="reset" class="reset">Reset</button>
                    <button type="submit" class="save">Save</button>
                </div>
            </form>
        </div>
    </div>
    {{-- END FORM --}}
    <script src="{{ asset('../assets/js/form.js') }}"></script>
</body>

</html>
