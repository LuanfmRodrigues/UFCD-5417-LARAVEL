
<h1>Instructors List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($instructors as $instructor )

        <tbody>
        <tr>
            <th scope="row">{{$instructor->id}}</th>
            <td>{{$instructor->name}}</td>
            <td>{{$instructor->email}}</td>
            <td>{{$instructor->created_at}}</td>
            <td>{{$instructor->updated_at}}</td>


        </tr>

        </tbody>
    @endforeach
</table>
