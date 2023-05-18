@extends('layouts.app')
@section('content')
<br>
<div class="container" >
<h1 class="text-center">___Categories___</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
        <a href="{{route('welcome')}}"><button type="button" class="btn btn-warning">home</button></a>
        <a href="{{route('categoryCreate')}}"><button type="button" class="btn btn-success">create</button></a>
    </div>
<br>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th class="col-md-1" >T/R</th>
                <th>Title</th>
                <th class="col-md-1" >Status</th>
                <th class="col-md-1">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ (( $categories->currentpage()-1)*$categories->perpage()+($loop->index+1)) }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->status}}</td>
                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route('categoryUpdateP',['id'=>$category->id])}}"><button type="button" class="btn btn-primary" ><i class="bi bi-pencil-square"></i></button></a>
                        <a href="{{route('categoryDelete',['id'=>$category->id])}}"><button type="button" class="btn btn-danger" ><i class="bi bi-trash-fill"></i></button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $categories ->links()}}
@endsection