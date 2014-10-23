@extends('layouts.base')

@section('body')
	@include('header')
	@include('menu')

	<section id="work">
		<h1>Work</h1>
		<p>Immigration and Customs Enforcement<br/><a href="http://www.ice.gov/detention-facilities" target="_blank">http://www.ice.gov</a></p>
		<p><small><a href="http://www.ice.gov/contact/field-offices" target="_blank">mapping</a>, site building, deployment, theming, custom development</small></p>
		
        <br/>

		<p>Food and Nutrition Services <br/> <a href="http://www.fns.usda.gov">http://www.fns.usda.gov</a></p>
		<p><small>migration, site building, deployment, theming, custom development, multilingual</small></p>

		<br/>
		
        <p>USDA What's Cooking<br/>
            <a href="http://whatscooking.fns.usda.gov">http://whatscooking.fns.usda.gov</a></p>
		<p><small>site building, deployment, theming, custom development, multilingual</small></p>



	</section>

 @include('footer')
@stop