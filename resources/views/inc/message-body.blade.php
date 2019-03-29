@if(count($errors) > 0)
<div class="row">
  <div class="col-md-6 col-offset-4 errors">
      <ul>
           @foreach($errors->all() as $error)
          <li>{{$error}}</li>
      </ul>
  </div>
</div>
@endforeach
@endif
@if(Session::has('message'))
<div class="row">
        <div class="col-md-6 col-offset-4 success">
         {{Session::get('message')}}
        </div>
      </div>

@endif