@extends('layouts.base')

@section('body')
	@include('header')
	@include('menu')

	<section id="work">
		<h1>Work</h1>
		<p>I work <a href="http://trellon.com">@Trellon</a></p>
		<p>doing cool things in the Drupal.</p>
		<p>I've also had the opportunity to work on some amazing projects in the ".gov" world.</p>
		<p>Some cool things my team and I covered when building:</p>
		<p><small><a href="http://www.ice.gov/contact/field-offices" target="_blank">mapping</a>, site building, migration (tough cookie), theming, custom development, training</small></p>
	</section>

 @include('footer')
@stop