@extends('mainLayout')
@section('content')


<form action="/create-studio-film" method="POST" class="my-5">
    @csrf
    <div class="form-group">
        <label for="film_id">Pilih</label>
        <select id="film_studio_id" name="film_studio_id" class="form-control">
            <option value="" disabled selected style="color: #999;"></option>
            @foreach ($filmStudios as $filmStudio)
                <option value="{{ $filmStudio->id }}">{{ $filmStudio->film->judul }} - {{ $filmStudio->studio->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="studio_id">Pilih</label>
        <select id="film_showtime_id" name="film_showtime_id" class="form-control">
            <option value="" disabled selected style="color: #999;"></option>
            @foreach ($filmShowtimes as $filmShowtime)
                <option value="{{ $filmShowtime->id }}">{{ $filmShowtime->film->judul }} - {{ $filmShowtime->showtime->day }} - {{ $filmShowtime->showtime->time }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Submit</button>
</form>
<script>
    const styles = `
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select option[disabled] {
            color: #999;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    `;

    const styleElement = document.createElement('style');
    styleElement.innerHTML = styles;

    document.head.appendChild(styleElement);
</script>

@endsection