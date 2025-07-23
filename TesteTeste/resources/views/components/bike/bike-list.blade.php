
<h1>Bike List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Cliente Id</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Color</th>
        <th scope="col">Price</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">deleted_at</th>
    </tr>
    </thead>
    @foreach($bikes as $bike )
        <tbody>
        <tr>
            <th scope="row">{{$bike->cliente_id}}</th>
            <td>{{$bike->brand}}</td>
            <td>{{$bike->model}}</td>
            <td>{{$bike->color}}</td>
            <td>{{$bike->price}}</td>
            <td>{{$bike->created_at}}</td>
            <td>{{$bike->updated_at}}</td>
            <td>{{$bike->deleted_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
