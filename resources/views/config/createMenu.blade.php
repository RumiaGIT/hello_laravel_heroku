@extends('layouts.adminlte')
@section('title', 'Menu Configuration')
@section('content')
{{ Form::model($menu, ['method'=>'POST', 'url'=>'/menu']) }}
<div class="box box-success box-solid">
	<div class="box-header with-border">
		<h3 class="box-title">Create Menu</h3>
	</div>
	<div class="box-body">
		@include('common.status')
		@include('config.menu_form')
    </div>
</div>
<div class="box box-success box-solid">
	<div class="box-body">
		<div class="form-actions">
            {{ Form::submit('Save', ['class'=>'btn btn-primary btn-flat pull-right']) }}
        </div>
    </div>
</div>
{{ Form::close() }}
@endsection