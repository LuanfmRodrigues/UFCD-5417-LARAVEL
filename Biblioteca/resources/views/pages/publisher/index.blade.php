@foreach($publishers as $publisher)

    <div>
        <h3> {{$publisher->id}}</h3>
        <p>Position: {{$publisher->name}}</p>
    </div>
    <hr>
@endforeach
