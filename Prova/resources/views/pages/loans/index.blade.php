@foreach($loans as $loan)

    <div>
        <h3> {{$loan->id}}</h3>
        <p>Borrower_name: {{$loan->borrower_name}}</p>
        <p>Loan_date: {{$loan->loan_date}}</p>
        <p>Return_date: {{$loan->return_date}}</p>
        <p>Book_id: {{$loan->book_id}}</p>
        {{--@foreach($loans->books as $book)
            <p>Name Book: {{$book->title}}</p>-
        <p>Name Book: {{$loan->book->title}}</p>
        @endforeach--}}
    </div>
    <hr>
@endforeach
