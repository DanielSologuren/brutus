@extends('layouts.base')

@section('body')
	@include('header')
	@include('menu')

	<section id="work">
		<h1>Work</h1>
		<p>I'm currently with Blackstone Technology group doing great things in the Drupal + .gov world.</p>
		<ul>
			<li>USDA Food and Nutrition Services</li>
			<li>DHS Immigration and Customs Enformcement</li>
			<li>FTC</li>
		</ul>
		<p>Some cool things my team and I covered when building:</p>
		<p><small><a href="http://www.ice.gov/contact/field-offices" target="_blank">mapping</a>, site building, deployment, theming, custom development, training</small></p>
	</section>

 @include('footer')
@stop