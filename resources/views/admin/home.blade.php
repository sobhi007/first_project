 <h3>Admins</h3>@foreach ($admins as $admin )
    {{$admin['name']}} <br><br>
@endforeach 

<hr>

<h3>Users</h3>@foreach ($users as $user )
{{$user['name']}} <br><br>
@endforeach 


<a href="{{url('admin/logout')}}">Logout</a>



Account : {{auth()->guard('admin_auth')->user()->name}}