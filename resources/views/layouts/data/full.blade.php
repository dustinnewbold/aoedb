@include('layouts.header')

<div class="container">
	<div class="header">
		<div class="info-full">
			@yield('header-info')
		</div>
	</div>


	@yield('content')
</div>

@include('layouts.data.comments')

@include('layouts.footer')