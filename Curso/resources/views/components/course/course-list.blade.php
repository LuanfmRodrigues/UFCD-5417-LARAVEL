
<h1>Courses List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">instructor_id</th>
        <th scope="col">Color</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($courses as $course )

        <tbody>
        <tr>
            <th scope="row">{{$course->id}}</th>
            <td>{{$course->title}}</td>
            <td>{{$course->description}}</td>
            <td>{{$course->instructor_id}}</td>
            <td>{{$course->created_at}}</td>
            <td>{{$course->updated_at}}</td>


        </tr>

        </tbody>
    @endforeach
</table>
