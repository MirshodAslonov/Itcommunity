@extends('layouts.app')
@section('content')
<form  method="post" action="{{ route('postCreate')}}">
  @csrf
<div class="mb-3"></div>
<div class="container" data-aos="fade-up">
  <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 30px;">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{$category->title}}</p> 
            <div class="container" data-aos="fade-up">
                <div class="row justify-content" data-aos="fade-up" data-aos-delay="150">
                    <div class="row d-flex justify-content align-items h-100">
                      @foreach($category->posts as $post)
                          @if(Auth::user()->id != $post->user_id)
                              <div class="d-grid gap-2 d-md-flex justify-content "> 
                                  <div class=" col-xl-2">
                                      <div class="card text-black" style="border-radius: 40px;">
                                                @foreach($users as $user) 
                                                @if($user->id == $post->user_id)
                                                <?php $color = [1,2,3,4,5];
                                                shuffle($color);
                                                ?>  
                                                @switch($color[1])
                                                  @case(1)
                                                  <p class="text h5  mb-1 mx-1 mx-md-2 mt-1" style="color: rgb(104, 2, 72)">
                                                    {{$user->name}}
                                                  </p>
                                                    @break
                                                  @case(2)
                                                  <p class="text h5  mb-2 mx-1 mx-md-2 mt-2" style="color: rgb(207, 107, 0)">
                                                    {{$user->name}}
                                                  </p>
                                                    @break
                                                  @case(3)
                                                  <p class="text h5  mb-2 mx-1 mx-md-2 mt-2" style="color: rgb(98, 167, 0)">
                                                    {{$user->name}}
                                                  </p>
                                                    @break
                                                  @case(4)
                                                  <p class="text h5  mb-2 mx-1 mx-md-2 mt-2" style="color: rgba(2, 71, 162, 0.73)">
                                                    {{$user->name}}
                                                  </p>
                                                    @break
                                                  @case(5)
                                                  <p class="text h5  mb-2 mx-1 mx-md-2 mt-2" style="color: rgb(205, 192, 1)">
                                                    {{$user->name}}
                                                  </p>
                                                    @break  
                                                @endswitch
                                                @endif
                                                @endforeach
                                      </div>
                                  </div>
                                  <div class=" col-xl-8">
                                      <div class="card text-black" style="border-radius: 40px;">
                                      <p class="text h5  mb-2 mx-1 mx-md-2 mt-2">
                                        {{$post->text}}
                                      </p>
                                      </div>
                                  </div>
                                  <div class=" col-xl-2">
                                      <div class="card text-black" style="border-radius: 40px;">
                                      <p class="text h5  mb-2 mx-1 mx-md-2 mt-2">
                                          <a href=""></a><i class="bi bi-hand-thumbs-up mx-md-2 ">15</i>
                                          <a href=""></a><i class="bi bi-hand-thumbs-down mx-md-2">3</i>
                                          <a href=""><i class="bi bi-chat-dots" style="color: rgba(3, 82, 180, 0.887)"></i></a>
                                      </p>
                                      </div>
                                  </div>
                              </div> 
                              <div class="mb-3"></div> 
                          @else 
                          <div class="d-grid gap-2 d-md-flex justify-content "> 
                            <div class=" col-xl-2">
                              <div class="card text-black" style="border-radius: 40px;">
                                <p class="text h5  mb-2 mx-1 mx-md-2 mt-2">
                                  <a href=""></a><i class="bi bi-hand-thumbs-up mx-md-2 ">15</i>
                                  <a href=""></a><i class="bi bi-hand-thumbs-down mx-md-2">3</i>
                                  <a href=""><i class="bi bi-chat-dots" style="color: rgba(3, 82, 180, 0.887)"></i></a>
                                </p>
                              </div>
                            </div>
                            <div class=" col-xl-8">
                                <div class="card text-black" style="border-radius: 40px;">
                                <p class="text h5  mb-2 mx-1 mx-md-2 mt-2" style="color: rgb(3, 124, 176)">
                                  {{$post->text}}
                                </p>
                                </div>
                            </div>
                        </div> 
                        <div class="mb-3"></div> 
                      @endif
                      @endforeach           
                  </div>
              </div>
            <div class=" mb-3 mx-1 mx-md-3 mt-3 col-lg-1 col-xl-8">
            <div class=" gap-2 d-md-flex  "> 
                <textarea class="form-control" name="text" rows="1" placeholder="Message" required></textarea>
                <button type="button" class="btn btn-outline-secondary "><i class="bi bi-file-earmark-richtext-fill"></i></button>
                    <button class="btn btn" type="submit"><i class="bi bi-send-fill" style="color: rgb(87, 7, 163)"></i></button>
            </div>               
            </div>               
          </div>
        </div>
      </div>
    </div>
    </div>
    <input type="hidden" name='category_id' value={{$category->id}}>
  </form>
  @endsection     