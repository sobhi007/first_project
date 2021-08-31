@include('blog.header')

<a  style="position: absolute;right: 15px;top: 10px;"href="{{url('logout')}}">Logout</a>

@yield('content')

@yield('show')

@include('blog.footer')
