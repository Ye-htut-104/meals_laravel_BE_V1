@extends('admin.layouts.master')
@section('content')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            
            <form action= "{{ url("products/" . $products->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                <input type="text" name="name" value="{{ $products->name }}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
           
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Category_id</label>
                <select name="category_id" id="" class="form-control">
                  @forelse($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
            
                  @empty
            
                  @endforelse
                </select>
              </div>

            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                <input type="text" name="description" value="{{ $products->description}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            {{-- <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                <input type="text" name="image" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div> --}}

            {{-- <div class="panel-body"> --}}
       
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                {{-- </div> --}}
                <img src="images/{{ Session::get('image') }}">
                @endif
              
         
      
                <div class="mb-3">
                    <label class="form-label" for="inputImage">Image:</label>
                    <input value="{{$products->image}}"
                        type="file" 
                        name="image" 
                        id="inputImage"
                        class="form-control @error('image') is-invalid @enderror">

                        
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
       
                {{-- <div class="mb-3">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            --}}
            




            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                <input type="text" name="price" value="{{ $products->price }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>


            <button type="submit" class="btn btn-primary">Comfirm</button>
            <button type="reset"  class="btn btn-secondary">cancel</button>

            </form>

        </div>    
    </div>    
</div>    