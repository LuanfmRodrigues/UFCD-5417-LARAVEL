@foreach($customers as $customer)

    <div>
        <h3> {{$customer->id}}</h3>
        <p>Position: {{$customer-> name}}</p>
    </div>
    <hr>
@endforeach
