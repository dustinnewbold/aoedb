@extends('layouts.master')

@section('css')
	<link rel="stylesheet" type="text/css" href="home.css">
@endsection

@section('js')
@endsection

@section('content')
	<h1 class="title">
		<?php echo(config('app.name')); ?>
	</h1>
@endsection