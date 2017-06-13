@extends('layouts.data.sidebar')

@section('header-info')
	<h2>
		{{ $quest->getName() }}
	</h2>
	<p>
		{{ $quest->getDescription() }}
	</p>
@endsection

@section('header-meta')
	<div class="map">
		<a href="/images/Coerthas_Western_Highlands_Map.jpg">
			<img src="/images/Coerthas_Western_Highlands_Map.jpg" width="100%">
		</a>
	</div>
@endsection

@section('content')
	test
@endsection