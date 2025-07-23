
<h1>Cars List</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Brand_id</th>
        <th scope="col">Brand_Name</th>
        <th scope="col">Registration</th>
        <th scope="col">Year_of_manufacture</th>
        <th scope="col">Color</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($cars as $car )

        <tbody>
        <tr>
            <th scope="row">{{$car->id}}</th>
            <td>{{$car->brand_id}}</td>
            <td>{{$car->brand->nome}}</td>
            <td>{{$car->registration}}</td>
            <td>{{$car->year_of_manufacture}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->created_at}}</td>
            <td>{{$car->updated_at}}</td>

            <td> <button type="button" class="btn btn-success">Show</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
    @endforeach
</table>
