

@extends('blog.index')
@section('content')

<br>
@include('blog.file' , ['key'=>'value'])
<br>
<div style="display: grid;justify-content: center;">
    <div class="main">
        <h1>{{auth()->user()->name }}</h1>
        <h6>Total blogs : {{$count}}  @if ($count === 1 || $count === 0  )  {{'blog'}} @else{{'blogs'}} @endif </h6>
        <form action="{{url('/blog/store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="" value="{{old('title')}}">
                @error('title')
                <span style="color: red"> {{$message}} </span>
            @enderror
            </div>
           
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" 
                value="{{old('description')}}" rows="3"></textarea>
                @error('description')
                <span style="color: red"> {{$message}} </span>
            @enderror
            </div>
          
            <div style="position: relative;">  
              <button style="position: absolute;right: 0px;" type="submit" class="btn btn-primary">Yalla post !!</button>
            </div>
        </form>
        <span style="color: red"> {{session()->get('success')}} </span>
        <br>
        <hr>
        <br>
        <h3>BLOGS</h3><br>
        <hr>
        @foreach ($data as $val)
        {{$val->user()->first()->name}} <br><br>
          <b>  {{$val->title}} </b><br>
            {{$val['description']}} <br>
         <br>    <div style="position: relative;">  
          <span style="color: gray;position: absolute;right: 0px;">  {{ date("jS F, Y",strtotime($val['created_at']))}} </span><br>
        </div> 
      
@if ($val['user_id']=== auth()->user()->id)
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$val['id']}}">DELETE</button>
      
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$val['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        would you like to delete " <b> {{$val['title']}} </b> " blog ?
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cansel</button>
          <form action="{{url('blog/'.$val['id'])}}" method="get">

            @csrf
            <input type="hidden" method="delete" name="_method">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>

@endif
       







        
        
        
        <hr>
        @endforeach
    </div>
</div>





<br>    <div style="position: relative;">  
    <span style="text-align: center;text-decoration:none"> 
        {{ $data->render()}} </span><br>
  </div> <hr>

  @endsection