
<h1>Country List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Deleted_at</th>
    </tr>
    </thead>
    @foreach($countries as $country )
        <tbody>
        <tr>
            <th scope="row">{{$country->id}}</th>
            <td>{{$country->name}}</td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
            <td>{{$country->deleted_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
