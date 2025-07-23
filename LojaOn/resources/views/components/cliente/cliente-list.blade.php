
<h1>Cliente List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>
        <th scope="col">telefone</th>
        <th scope="col">Endereço</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($clientes as $cliente )
        <tbody>
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->name}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->senha}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>{{$cliente->endereço}}</td>
            <td>{{$cliente->created_at}}</td>
            <td>{{$cliente->updated_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
