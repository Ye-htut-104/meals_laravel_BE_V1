@extends('admin.layouts.master')
@section('content')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            
            <form action= "{{ url("products")}}" method="POST">
                @csrf
                @method('POST')
            
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
           
            {{-- <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Category_id</label>
                <select name="category_id" id="" class="form-control">
                  @forelse($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
            
                  @empty
            
                  @endforelse
                </select>
              </div> --}}

            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                <input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                <input type="text" name="image" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                <input type="text" name="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>


            <button type="submit" class="btn btn-primary">Comfirm</button>
            <button type="reset"  class="btn btn-secondary">cancel</button>

            </form>

        </div>    
    </div>    
</div>    