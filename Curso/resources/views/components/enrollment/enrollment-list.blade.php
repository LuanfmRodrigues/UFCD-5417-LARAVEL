
<h1>Enrollments List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Estudante</th>

        <th scope="col">Curso</th>

        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($enrollments as $enrollment )

        <tbody>
        <tr>
            <th scope="row">{{$enrollment->id}}</th>
            <td>{{$enrollment->student_id}}</td>

            <td>{{$enrollment->course_id}}</td>

            <td>{{$enrollment->created_at}}</td>
            <td>{{$enrollment->updated_at}}</td>


        </tr>

        </tbody>
    @endforeach
</table>
