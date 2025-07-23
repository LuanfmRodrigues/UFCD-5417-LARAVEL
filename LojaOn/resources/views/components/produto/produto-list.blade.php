
<h1>Produtos List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">slug</th>
        <th scope="col">imagem</th>
        <th scope="col">Id_Cliente</th>
        <th scope="col">id_Categoria</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($produtos as $produto )
        <tbody>
        <tr>
            <th scope="row">{{$produto->id}}</th>
            <td>{{$produto->name}}</td>
            <td>{{$produto->descricao}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->slug}}</td>
            <td>{{$produto->imagem}}</td>
            <td>{{$produto->cliente_id}}</td>
            <td>{{$produto->categoria_id}}</td>
            <td>{{$produto->created_at}}</td>
            <td>{{$produto->updated_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
