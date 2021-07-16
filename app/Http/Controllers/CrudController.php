<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CRUD;
class CrudController extends Controller
{
    //function to display the home webpage
    public function index(){
        return view('welcome');
    }
    //function to display the create user webpage
    public function createnew(){

        return view('create');
    }

   

   //function used to store a newly created user in the database 
    public function store(){
        //creating an object of crud model
        $user= new CRUD;
        //creating and array using the data we got from the post method
        $user->fname=request("fname");
        $user->lname=request("lname");
        $user->username=request("username");
        $user->email=request("email");
        $user->city=request("city");

        //saving the data to database
        $user->save();

        //redirecting to create webpage after sucessfully creating a new user
        return redirect('/create');
    }
    //function to display the delete webpage
    public function deletenew(){
        $users=CRUD::orderby("id")->get();
        return view('/delete',["users"=>$users]);
    }

    // function to delete an exsisting user
    public function destroy($id){
        $data=CRUD::findorfail($id);
        error_log($data);
        $data->delete();

        //redirecting to create webpage after sucessfully deleting a new user
        return redirect('/delete');
    }

     //function to display the update webpage
     public function updatenew(){
        //sorting the exsisting users by their id
        $users=CRUD::orderby("id")->get();
        return view('update',["users"=>$users]);

    }
    //function that is used to fetch the data of the id selected and display it in the edit webpage
    public function showEdit($id){
        $data=CRUD::findorfail($id);
        return view('edit',["data"=>$data]);

    }
    public function update(request $req){
        $data=CRUD::find($req->id);
        $data->id=$req->id;
        $data->fname=$req->fname;
        $data->lname=$req->lname;
        $data->username=$req->username;
        $data->email=$req->email;
        $data->city=$req->city;
        $data->save();
        return redirect("update");

    }
}
