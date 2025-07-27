@foreach($loans as $loan)

    <div>
        <h3> {{$loan->id}}</h3>
        <p>Position: {{$loan-> name}}</p>
    </div>
    <hr>
@endforeach
