
<h1>Cliente List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Country Id</th>
        <th scope="col">first Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">birth_date</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Deleted_at</th>
    </tr>
    </thead>
    @foreach($clientes as $cliente )
        <tbody>
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->country_id}}</td>
            <td>{{$cliente->fisrt_name}}</td>
            <td>{{$cliente->last_name}}</td>
            <td>{{$cliente->birth_date}}</td>
            <td>{{$cliente->created_at}}</td>
            <td>{{$cliente->updated_at}}</td>
            <td>{{$cliente->deleted_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
