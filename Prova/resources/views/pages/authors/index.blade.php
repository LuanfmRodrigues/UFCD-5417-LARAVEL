@foreach($authors as $author)

    <div>
        <h3> {{$author->id}}</h3>
        <p>Name: {{$author->name}}</p>
        <p>Birth_Date: {{$author->birth_date}}</p>
    </div>
    <hr>
@endforeach
