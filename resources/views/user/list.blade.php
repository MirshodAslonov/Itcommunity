@extends('layouts.app')
@section('content')
<br>
<div class="container" >
<h1 class="text-center">___Users___</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
        <a href="{{route('welcome')}}"><button type="button" class="btn btn-warning">home</button></a>
        <a href="{{route('userCreate')}}"><button type="button" class="btn btn-success">create</button></a>
    </div>
<br>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>T/R</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th class="col-md-1">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ (( $users->currentpage()-1)*$users->perpage()+($loop->index+1)) }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->phone}}</td>
                <td>{{ $user->role_id}}</td>
                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route('userUpdateP',['id'=>$user->id])}}"><button type="button" class="btn btn-primary" ><i class="bi bi-pencil-square"></i></button></a>
                        <a href="{{route('userDelete',['id'=>$user->id])}}"><button type="button" class="btn btn-danger" ><i class="bi bi-trash-fill"></i></button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $users ->links()}}
@endsection