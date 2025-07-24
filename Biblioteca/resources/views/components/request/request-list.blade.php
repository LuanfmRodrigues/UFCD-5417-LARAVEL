
<h1>Requests List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Book_id</th>
        <th scope="col">Customers_id</th>
        <th scope="col">acquisition_date</th>
        <th scope="col">return_date</th>

    </tr>
    </thead>
    @foreach($requests as $request )
        <tbody>


        <tr>
            <th scope="row">{{$request->id}}</th>
            <td>{{$request->book_id}}</td>
            <td>{{$request->customer_id}}</td>
            <td>{{$request->acquisition_date}}</td>
            <td>{{$request->return_date}}</td>
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
