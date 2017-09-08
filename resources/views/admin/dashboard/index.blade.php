@extends('admin.layouts.template')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">หน้าหลัก</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<a class="btn btn-large btn-block btn-lg btn-primary" href="{{ url('primary') }}" role="button">ระดับชั้นประถมศึกษา</a>
		</div>

		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<a class="btn btn-large btn-block btn-lg btn-primary" href="{{ url('secondary') }}" role="button">ระดับชั้นมัธยมศึกษา</a>
		</div>
	</div>

	
	
@stop