@extends('mobile.master')

@section('content')
<div class="padding_bottom">
    <section class="bg-danger p-3">
       <div class="d-flex align-items-center gurdeep-osahan-inner-header mb-3">
          <div class="left mr-auto">
             <a href="home1.html" class="back_button"><i class="btn_detail mdi mdi-chevron-left bg-dark text-white"></i></a>
          </div>
          <div class="center mx-auto"></div>
          <div class="right ml-auto d-flex align-items-center">
             <a class="toggle btn_detail bg-white shadow-sm text-dark" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                   <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
             </a>
          </div>
       </div>
       <div class="search_item input-group p-1 bg-white rounded-3 shadow-sm">
          <span class="input-group-text bg-white mdi mdi-magnify border-0" id="basic-addon1"></span>
          <input type="text" class="form-control border-0 bg-white" placeholder="Search" aria-label="search" aria-describedby="basic-addon1">
       </div>
    </section>
    <section class="featured py-3 pl-3 bg-white body_rounded mt-n5">
        <div class="title mb-3">
           <h6 class="mb-0 fw-bold">Featured</h6>
        </div>
        <div class="featured_slider">
             @foreach ($Category as $category)
             <a href="{{url('/')}}/menus/{{$category->id}}">
                 <div class="featured_item mr-2">
                     <span class="position-absolute pb-2 pl-3">
                     <p class="text-white mb-1">{{$category->cat}}</p>
                     {{-- <span class="text-muted">kes {{$menu->price}}</span> --}}
                     </span>
                     <img  src="{{url('/')}}/uploads/categories/{{$category->image}}" class="img-fluid box_rounded" style="height:130px; width:100%; object-fit:cover">
                 </div>
             </a>
             @endforeach
        </div>
     </section>
 </div>
@include('mobile.horizontal-nav')
@include('mobile.main-nav')
@endsection
