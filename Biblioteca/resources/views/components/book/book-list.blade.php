
<h1>Books List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">year_published</th>
        <th scope="col">Author_id</th>
        <th scope="col">Publisher_id</th>

    </tr>
    </thead>
    @foreach($books as $book )
        <tbody>


        <tr>
            <th scope="row">{{$book->id}}</th>
            <td>{{$book->title}}</td>
            <td>{{$book->year_published}}</td>
            <td>{{$book->author_id}}</td>
            <td>{{$book->publisher_id}}</td>
            {{--<td>
                @foreach($brand->cars as $car )
                    {{$car->registration}}
                    ({{$car->year_of_manufacture}});
                @endforeach
            </td>--}}

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
