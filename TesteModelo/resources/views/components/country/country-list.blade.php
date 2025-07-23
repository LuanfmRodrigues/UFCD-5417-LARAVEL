
<h1>Countries List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>

    </tr>
    </thead>
    @foreach($countries as $country )
        <tbody>
        <tr>
            <th scope="row">{{$country->id}}</th>
            <td>{{$country->nome}}</td>


            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
