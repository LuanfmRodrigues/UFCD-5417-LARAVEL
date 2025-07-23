
<h1>Clientes List</h1>
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
    @foreach($users as $user )
        <tbody>
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->country_id}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->birth_date}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>{{$user->deleted_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
