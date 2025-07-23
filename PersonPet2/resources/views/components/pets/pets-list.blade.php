
<h1>Pets List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Person_Id</th>
        <th scope="col">color</th>
        <th scope="col">birth_date</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($pets as $pet )
        <tbody>
        <tr>
            <th scope="row">{{$pet->id}}</th>
            <td>{{$pet->name}}</td>
            <th>{{$pet->person_id}}</th>
            <td>{{$pet->color}}</td>
            <td>{{$pet->birth_date}}</td>
            <td>{{$pet->created_at}}</td>
            <td>{{$pet->updated_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
