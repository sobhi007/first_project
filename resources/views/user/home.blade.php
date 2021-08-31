<h1>All users</h1>

@foreach ($users as $user)
    
  -- {{$user->name}} <br>

@endforeach

<a href="{{url('user/logout')}}">Logout</a>



Account : {{auth()->user()->name}}