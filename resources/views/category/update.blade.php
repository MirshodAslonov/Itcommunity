@extends('layouts.app')
@section('content')
<div class="container" data-aos="fade-up">
  <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update category</p>
                  <form  method="post" action="{{ route('categoryUpdate')}}">
                    @csrf
                    <div class="mb-3">
                      <input  type="text" class="form-control"  name="title" placeholder="Category title" value="{{$category->title}}" required>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="status" role="switch" id="status" value="1" {{$category->status == 1 ? "checked" : "" }} >
                        <label class="form-check-label" for="status">Status</label>
                      </div>
                      <button class="btn btn-outline-success " type="submit">Save</button>
                    </div>
                    <input type="hidden" name="id" value="{{$category->id}}">
                  </form>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  <img src="assets/img/slide/login.png" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
  @endsection