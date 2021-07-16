@extends('layout')
@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">City</th>
      <th scope="col"></th>
    </tr>
  </thead>
  @foreach($users as $user)
  <tbody>
    
        <tr>
        <th scope="row">{{$user["id"]}}</th>
        <td>{{$user["fname"]}}</td>
        <td>{{$user["lname"]}}</td>
        <td>{{$user["username"]}}</td>
        <td>{{$user["email"]}}</td>
        <td>{{$user["city"]}}</td>
        <td>
            <form action="edit/{{$user["id"]}}" method="post">
            @csrf
                <button type="update" class="btn btn-primary">Update</button>
            </form>
            </td>
        </tr>
    
  </tbody>
  @endforeach
</table>
   
@endsection