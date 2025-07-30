
<h1>Details Products</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name_id</th>
        <th scope="col">Details</th>
        <th scope="col">Category_id</th>
        <th scope="col">Project_id</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($products as $product )

        <tbody>
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->details}}</td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->project_id}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>

            <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">More Details</a></td>
        </tr>

        </tbody>
    @endforeach
</table>
