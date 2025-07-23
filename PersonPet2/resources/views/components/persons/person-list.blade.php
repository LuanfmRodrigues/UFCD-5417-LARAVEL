
<h1>People List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">birth_date</th>
        <th scope="col">Email</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($people as $person )
        <tbody>
        <tr>
            <th scope="row">{{$person->id}}</th>
            <td>{{$person->name}}</td>
            <td>{{$person->birth_date}}</td>
            <td>{{$person->email}}</td>
            <td>{{$person->created_at}}</td>
            <td>{{$person->updated_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
