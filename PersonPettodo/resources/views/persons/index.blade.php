@foreach($peoples as @person)
    <div>
        <h2>{{$person->id}}</h2>
        <p>Name: {{$person->name}}</p>
        Pets:
        @foreach($person->pets as $pet)
            <h3>{{$pet->name}}</h3>
        @endforeach

    </div>
    <hr>
@endforeach
