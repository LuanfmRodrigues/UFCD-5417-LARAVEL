
<h1>Publishers List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">address</th>
        <th scope="col">document</th>
        <th scope="col">Phone</th>

    </tr>
    </thead>
    @foreach($publishers as $publisher )
        <tbody>


        <tr>
            <th scope="row">{{$publisher->id}}</th>
            <td>{{$publisher->name}}</td>
            <td>{{$publisher->address}}</td>
            <td>{{$publisher->document}}</td>
            <td>{{$publisher->phone}}</td>
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
