@foreach ($users as $user)
    <h1>{{$user["name"]}}</h1>
    <p>{{$user["age"]}}</p>
    <hr>
    @if ($user["name"] == "John")
        <p>John has arrived</p>
    @endif
@endforeach
