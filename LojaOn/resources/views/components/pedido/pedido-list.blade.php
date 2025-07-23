
<h1>Pedido List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Id Cliente</th>
        <th scope="col">Status</th>
        <th scope="col">Valor Total</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($pedidos as $pedido )
        <tbody>
        <tr>
            <th scope="row">{{$pedido->id}}</th>
            <td>{{$pedido->cliente_id}}</td>
            <td>{{$pedido->status}}</td>
            <td>{{$pedido->valor_total}}</td>
            <td>{{$pedido->created_at}}</td>
            <td>{{$pedido->updated_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
