@if(count($errors) > 0)
<div class="alert alert-dismissible alert-danger">
  <ul>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
@foreach($errors->all() as $error)
  <li>
   {{ $error }}
  </li>
@endforeach
  </ul>
</div>
@endif
