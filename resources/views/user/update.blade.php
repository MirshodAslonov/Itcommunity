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
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update user</p>
                  <form  method="post" action="{{ route('userUpdate')}}">
                    @csrf
                    <div class="mb-3">
                      <input  type="text" class="form-control"  name="name" placeholder="Full name" value="{{$user->name}}" required>
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control"   name="email" placeholder="Your email" value="{{$user->email}}" required>
                    </div>
                    @error('email')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror 
                    <div class="mb-3">
                      <input type="text" class="form-control"   name="phone" placeholder="Phone number" value="{{$user->phone}}" required>
                    </div>
                    @error('phone')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror 
                    <div class="mb-3">
                      <input type="text" class="form-control"   name="password" placeholder="Password"  required>
                    </div>
                    @error('password')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror 
                    <div class="d-grid gap-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="role_id"  value="1" id="SuperAdmin" {{ $user->role_id == 1 ? "checked" : ''}} required>
                        <label class="form-check-label" for="SuperAdmin">
                          Super Admin
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="role_id"  value="2" id="Moderator" {{ $user->role_id == 2 ? "checked" : ''}} required>
                        <label class="form-check-label" for="Moderator">
                          Moderator
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="role_id"  value="3" id="User" {{ $user->role_id ==3 ? "checked" : ''}} required>
                        <label class="form-check-label" for="User">
                          User
                        </label>
                      </div>
                      <button class="btn btn-outline-success " type="submit">Save</button>
                    </div>
                    <input type="hidden" name="id" value="{{$user->id}}">
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