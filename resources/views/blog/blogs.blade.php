
@extends('blog.index')

@section('show')
    
<form action="{{url('blog/delete')}}" method="POST">
@foreach ($data as $blog)
   
        <input type="hidden" name="_method" value="delete">
        @csrf
            {{ $blog['title'] }}
          <input type="checkbox" name="id[]"  value="{{$blog['id']}}">
   
<hr><br>

@endforeach
<button type="submit" style="background-color: red;color:white" name="delete" value="delete">delete</button>
<button type="submit" style="background-color: red;color:white" name="force_delete" value="force_delete">force delete</button>

</form>
<br>
<hr>
<br>

<form action="{{url('blog/delete')}}" method="POST">
    @foreach ($trashes as $trash)
       
            <input type="hidden" name="_method" value="delete">
            @csrf
                {{ $trash['title'] }}
              <input type="checkbox" name="id[]"  value="{{$trash['id']}}">
       
    <hr><br>
    
    @endforeach
    
    <button type="submit" style="background-color: green;color:white" name="restore" value="restore">Restore</button>
    
    <button type="submit" style="background-color: red;color:white" name="force_delete" value="force_delete">force delete</button>
    </form>
    
           

  {{ __('greeting.greeting')}}

  @endsection