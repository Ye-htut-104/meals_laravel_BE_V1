@extends('admin.layouts.master')
@section('content')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid"> 

<table class="table table-nowrap">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Category_ID</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>  

        </tr>
    </thead>
    <a href="{{ url('products/create') }}"><button
        class="btn btn-warning">Create Name </button></a>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                \
                <td>{{ $product->category->name }}</td>
                {{-- <td> {{ $product->category?
                    $product->category->name:"NOOOO"}}</td> --}}
                <td>{{ $product->description }}</td>
                <td>{{ $product->image }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>

                <th>
                    
                    {{-- <a href="{{ url('categories/' . $category->id . '/edit') }}"><button
                            class="btn btn-warning">edit</button></a>
                    <a href="{{ url('brand/' . $category->id) }}"><button
                            class="btn btn-secondary">show</button></a>

                    <form action="{{ url('categories/' . $category->id  ) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="sumbit"
                            class="btn btn-danger">Delete</button>


                    </form> --}}

                </th>
            </tr>
        @endforeach

    </tbody>
    


</table>

</div>
</div>
</div>




@endsection


