@extends('admin.layouts.master')
@section('content')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            
            <form action= "{{ url("categories")}}" method="POST">
                @csrf
                @method('POST')
            
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>


            <button type="submit" class="btn btn-primary">Comfirm</button>
            <button type="reset"  class="btn btn-secondary">cancel</button>

            </form>

        </div>    
    </div>    
</div>    