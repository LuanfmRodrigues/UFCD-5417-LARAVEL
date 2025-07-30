@foreach($books as $book)

    <div>
        <h3> {{$book->id}}</h3>
        <p>Title: {{$book->title}}</p>
        <p>Pages: {{$book->pages}}</p>
        <p>Publish_date: {{$book->publish_date}}</p>
        <p>Author_id: {{$book->author_id}}</p>
        <p>Publisher_id: {{$book->publisher_id}}</p>
    </div>
    <hr>
@endforeach
