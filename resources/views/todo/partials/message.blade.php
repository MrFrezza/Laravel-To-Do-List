	@if(session()->has('message'))
		<h2 class="alert alert-success">{{session()->get('message')}}</h2>
	@endif