@foreach($books as $book)

    <div>
        <h3> {{$book->id}}</h3>
        <p> {{$book-> title}}</p>
        <p> {{$book-> author_id}}</p>
        <p> {{$book-> publication_date}}</p>
        <p> {{$book-> publisher_id}}</p>
        <p> {{$book-> publisher->name}}</p>


    </div>
    <hr>
@endforeach
