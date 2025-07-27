@foreach($authors as $author)

    <div>
        <h3> {{$author->id}}</h3>
        <p>Position: {{$author-> name}}</p>
    </div>
    <hr>
@endforeach
