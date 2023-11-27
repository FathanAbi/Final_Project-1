@extends('mainLayout')
@section('content')

<style>
    .my-5 {
        margin: 5%;
    }

    .status {
        font-size: 1.5em;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .data-list {
        list-style-type: none;
        padding: 0;
    }

    .data-item {
        border: 1px solid #ccc;
        margin-bottom: 10px;
        padding: 10px;
    }
</style>

<div class="my-5">
    <div class="status">
        Status: {{ $status }}
    </div>
    
    @if($status == 'success')
        <h3>Data:</h3>
        <ul class="data-list">
            @foreach($data as $filmStudio)
                <li class="data-item">
                    <p>ID: {{ $filmStudio->id }}</p>
                    <p>Studio ID: {{ $filmStudio->studio_id }}</p>
                    <p>Film ID: {{ $filmStudio->film_id }}</p>
                    <p>Created At: {{ $filmStudio->created_at }}</p>
                    <p>Updated At: {{ $filmStudio->updated_at }}</p>
                </li>
            @endforeach
        </ul>
    @elseif($status == 'fail')
        <div>
            <p>Message: {{ $data['message'] }}</p>
            <p>Data:</p>
            <pre>{{ json_encode($data['data'], JSON_PRETTY_PRINT) }}</pre>
        </div>
    @endif
</div>

@endsection
