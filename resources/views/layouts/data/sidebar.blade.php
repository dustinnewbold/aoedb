@include('layouts.header')

<div class="container">
	<div class="header">
		<div class="info">
			@yield('header-info')
		</div>
		<div class="sidebar">
			@yield('header-meta')
		</div>
	</div>


	@yield('content')
	
</div>

@include('layouts.data.comments')

@include('layouts.footer')