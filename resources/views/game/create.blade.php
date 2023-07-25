<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('./assets/css/form.css') }}">
</head>
<body>
    {{-- #FORM --}}
    <div class="form">
        <div class="form-container">
            <div class="form-title">
                <h3>ADD NEW GAME</h3>
            </div>
            <form action="{{ route('game.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-input">
                    <label for="name">Game</label><br>
                    <input type="text" id="name" name="name" required autocomplete="off">
                </div>
                <div class="form-input">
                    <label for="inputFile">Game Image</label><br>
                    <input type="file" id="inputFile" name="image" required>
                </div>
                <div class="review-image">
                    <img src="" alt="" id="review">
                </div>
                <div class="form-submit">
                    <button type="reset" class="reset">Reset</button>
                    <button type="submit" class="save">Save</button>
                </div>
            </form>
        </div>
    </div>
    {{-- END FORM --}}
    <script src="../assets/js/form.js"></script>
</body>
</html>