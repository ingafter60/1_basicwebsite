@extends('layout/main')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem obcaecati officiis eum mollitia expedita quia praesentium vel, impedit ducimus incidunt minus cupiditate placeat neque quis animi perspiciatis maiores nam illum.</p>

@endsection	

@section('sidebar')

	@parent
		<p>This is appended to the sidebar</p>

@endsection	