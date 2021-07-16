
@extends('layout')

@section("content")
<img src="img/logo.png" class="img-fluid" alt="...">
<div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Create user</h5>
                        
                        <a href="create" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Update user</h5>
                        
                        <a href="update" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Delete user</h5>
                        
                        <a href="delete" class="btn btn-primary">Go</a>
                    </div>
                </div>
</div>
@endsection