
<h1>Cruds List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($cruds as $crud )
    <tbody>
    <tr>
        <th scope="row">{{$crud->id}}</th>
        <td>{{$crud->name}}</td>
        <td>{{$crud->address}}</td>
        <td>@if($crud->retired)
                <i class="bi bi-0-circle-fill"></i>
                @else
                <i class="bi bi-1-circle-fill"></i>
            @endif



        </td>

        <td> <button type="button" class="btn btn-success">Show</button>
            <button type="button" class="btn btn-primary">edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </td>
    </tr>

    </tbody>
    @endforeach
</table>
