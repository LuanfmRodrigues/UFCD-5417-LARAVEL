
<h1>Authors List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">nationality</th>
        <th scope="col">birthdate</th>

    </tr>
    </thead>
    @foreach($authors as $author )
        <tbody>


        <tr>
            <th scope="row">{{$author->id}}</th>
            <td>{{$author->name}}</td>
            <td>{{$author->nationality}}</td>
            <td>{{$author->birthdate}}</td>
            {{--<td>
                @foreach($brand->cars as $car )
                    {{$car->registration}}
                    ({{$car->year_of_manufacture}});
                @endforeach
            </td>--}}

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
