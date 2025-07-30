
<h1>Projects List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($projects as $project )

        <tbody>
        <tr>
            <th scope="row">{{$project->id}}</th>
            <td>{{$project->name}}</td>
            <td>{{$project->created_at}}</td>
            <td>{{$project->updated_at}}</td>


        </tr>

        </tbody>
    @endforeach
</table>
