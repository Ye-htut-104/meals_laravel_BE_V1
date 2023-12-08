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
            <th scope="col">Created_at</th>
            <th scope="col">Update_at</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <a href="{{ url('categories/create') }}"><button
        class="btn btn-warning">Create Name </button></a>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>

                <th>
                    
                    <a href="{{ url('categories/' . $category->id . '/edit') }}"><button
                            class="btn btn-warning">edit</button></a>
                    {{-- <a href="{{ url('brand/' . $category->id) }}"><button
                            class="btn btn-secondary">show</button></a> --}}

                    <form action="{{ url('categories/' . $category->id  ) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="sumbit"
                            class="btn btn-danger">Delete</button>


                    </form>

                </th>
            </tr>
        @endforeach

    </tbody>
    


</table>

</div>
</div>
</div>




@endsection