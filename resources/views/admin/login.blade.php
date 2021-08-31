<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<br>
<div style="width: 500px;margin-left: auto;margin-right: auto;">
    <h1 style="text-align: center">sign in</h1><br>
<div style="text-align: center"> 
 <span style="color: green"> {{session()->get('success')}} </span>
 <span style="color: red"> {{session()->get('error_login')}} </span>

</div>

    <form style="position: relative;" method="post" action="{{url('admin/check')}}">
        @csrf      
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" value='{{old('mobile')}}' name="mobile" class="form-control" id="inputEmail3">
            @error('mobile')
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
        <div >
          <span style="color: red"> {{session()->get('error')}} </span>
          </div>
          </div>
        </div>
        <div>
            <input type="checkbox" name="rem" id="rem">
            <label for="rem">Remember me</label>

        </div>
        <button type="submit" style="position: absolute;right: 0px;" class="btn btn-primary">Sign in</button>
      </form>
</div>
<br>

