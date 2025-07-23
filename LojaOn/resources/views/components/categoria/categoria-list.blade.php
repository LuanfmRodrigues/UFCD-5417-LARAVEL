
<h1>Categoria List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">descrição</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($categorias as $categoria )
        <tbody>
        <tr>
            <th scope="row">{{$categoria->id}}</th>
            <td>{{$categoria->name}}</td>
            <td>{{$categoria->descrição}}</td>
            <td>{{$categoria->created_at}}</td>
            <td>{{$categoria->updated_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
