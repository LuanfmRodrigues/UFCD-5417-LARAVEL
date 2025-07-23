
<h1>Brands List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Cars</th>
    </tr>
    </thead>
    @foreach($brands as $brand )
        <tbody>


        <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->nome}}</td>
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
