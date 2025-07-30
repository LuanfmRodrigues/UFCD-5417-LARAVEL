@foreach($publishers as $publisher)

    <div>
        <h3> {{$publisher->id}}</h3>
        <p>Name: {{$publisher->name}}</p>
        <p>City: {{$publisher->city}}</p>
    </div>
    <hr>
@endforeach
