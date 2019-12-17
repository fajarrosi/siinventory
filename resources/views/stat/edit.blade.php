@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Edit status</h1>
@stop

@section('content')
<div class="box">
	<div class="box-header">
		<h3 class="box-title">Edit status</h3>
	</div>
	<!-- box-header -->
	

  <form action="{{ route('stat.update',$stat->id) }}" method="post">
   @csrf
   @method('PUT')

   <div class="box-body">
    <div class="form-group">
      <label for="name">nama status</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="masukkan nama" value="{{$stat->name}}">
    </div>
    @if($errors->has('name'))
    <div class="text-danger">
      {{ $errors->first('name')}}
    </div>
    @endif


  </div>
  <!-- /.box-body -->

  <div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  <!-- box-footer -->

</form>


</div>
<!-- box -->

@stop

@section('css')

@stop

@section('js')

@stop