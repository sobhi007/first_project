<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<br>
<div style="width: 500px;margin-left: auto;margin-right: auto;">
    <h1 style="text-align: center">sign in</h1><br>
<div style="text-align: center"> 
 <span style="color: green"> {{session()->get('success')}} </span>
 <span style="color: red"> {{session()->get('error')}} </span>

</div>

    <form style="position: relative;" method="post" action="{{url('user/check')}}">
        @csrf      
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" value='{{old('email')}}' name="email" class="form-control" id="inputEmail3">
            @error('email')
            <span style="color:red">{{$message}}</span>
        @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password"  name="password" value='{{old('password')}}' class="form-control" id="inputPassword3">
            @error('password')
            <span style="color:red">{{$message}}</span>
        @enderror

        <div>
          @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
          </a>
      @endif
        </div>
        <div >
          <span style="color: red"> {{session()->get('error_login')}} </span>
          </div>
          </div>
        </div>
        <div>
            <input type="checkbox" name="remember" id="rem">
            <label for="rem">Remember me</label>

        </div>
        
        <button type="submit" style="position: absolute;right: 0px;" class="btn btn-primary">Sign in</button>
      </form>
</div>
<br>


<br>
<div style="text-align: center">

  you don't have an account yet ? <a style="text-decoration: none" href="{{url('user/signup')}}">Sign up </a>
</div>