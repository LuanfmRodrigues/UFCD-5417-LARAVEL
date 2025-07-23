
<h1>Bicycles List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Bicycles Id</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Color</th>
        <th scope="col">Price</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">deleted_at</th>
    </tr>
    </thead>
    @foreach($bicycles as $bicycle )
        <tbody>
        <tr>
            <th scope="row">{{$bicycle->user_id}}</th>
            <td>{{$bicycle->brand}}</td>
            <td>{{$bicycle->model}}</td>
            <td>{{$bicycle->color}}</td>
            <td>{{$bicycle->price}}</td>
            <td>{{$bicycle->created_at}}</td>
            <td>{{$bicycle->updated_at}}</td>
            <td>{{$bicycle->deleted_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
