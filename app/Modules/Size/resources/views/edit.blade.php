@extends('layout.dashboard')

@section('maincontent')
{{-- session --}}
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong></strong>size Updated Successfully.
</div>
@endif
{{-- session --}}

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit size Page</h3>
  </div>
  
  <div class="card-body">
    <div class="d-flex justify-content-end">
      <a href="{{ route('size.index') }}" class="btn btn-outline-primary"><i class="fa fa-exit" aria-hidden="true"></i>Cancel</a>
   </div>
      <form action="{{ url('admin/size/update',[$size->id]) }}" method="post" enctype="multipart/form-data">
      
      {!! csrf_field() !!}
        <lable id="error" style="display: none;"></lable>
        <label>size Name</label></br>
        <input type="text" value="{{ $size->name }}" name="name" id="size_input_name" class="form-control">
        <span style="size: red">@error('name'){{$message}}@enderror</span></br>


        <input type="submit" value="upadte" class="btn btn-outline-primary">
    </form>

  </div>
</div>
@endsection
