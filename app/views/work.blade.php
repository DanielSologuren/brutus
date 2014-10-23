@extends('layouts.base')

@section('body')
	@include('header')
	@include('menu')

	<section id="work">
		<h1>Work</h1>
		<img src="/images/ice.jpg">
		<p>ice.gov</p>
		<ul>
			<li>Developed a sitewide mapping solution for ICE field offices and Detention Facility locator.
			</li>
		</ul>
		<img src="/images/usda.jpg">
		<p>fns.usda.gov</p>
		<ul>
			<li></li>
		</ul>
		<img src="/images/whatscooking.png">
		<p>whatscooking.fns.usda.gov</p>
		<img src="/images/ftc.jpg">
		<p>ftc.gov</p>
		<ul><li>Built prelimiary site architecture in content inventory for over 10k items in site redesign.<li></ul>
	</section>

 @include('footer')
@stop