@extends('layout')

@section("content")


<form class="row g-3" action="/create" method="POST">
@csrf
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name *</label>
    <input type="text" class="form-control" id="validationDefault01" name="fname"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name *</label>
    <input type="text" class="form-control" id="validationDefault02" name="lname"  required>
  </div>
  <div class="col-md-6">
    <label for="validationDefaultUsername" class="form-label">Username *</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" name="username" required>
    </div>
  </div>
  <div class="col-md-8">
    <label for="exampleInputEmail1" class="form-label">Email address *</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="col-md-8">
    <label for="validationDefault03" class="form-label">City *</label>
    <input type="text" class="form-control" id="validationDefault03" name="city" required>
  </div>

  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" >Submit form</button>
  </div>
</form>

<div class="form-text">All the option marked with * must be filled</div>


@endsection