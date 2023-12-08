@extends('admin.layouts.master')
@section('content')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


            <form action="{{url('categories/' .$categories->id ) }}"  method="POST">
                @csrf
            @method('PUT')
            
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">New_Name</span>
                <input type="text" value={{$categories->name}} name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            
    
          </div>
    


  <div class='mb-3 mt-3'>
      <button class="btn btn-warning">Update</button>
      <button class="btn btn-secondry">Cancel</button>

  </div>

        </form>

        
        
        
        
        </div>    
    </div>    
</div>    