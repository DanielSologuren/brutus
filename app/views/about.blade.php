@extends('layouts.base')

@section('body')
	@include('header')

    <section id="about">
      <h1>ABOUT</h1>

      <h3>Professional</h3>
      <p>Most of my work is in Drupal, but primary focus is on PHP.</p>
      <br/>
      <ul>
      	<li>Symfony, Laravel, Drupal CMS</li>
      	<li>Compass/Sass</li>
      	<li>Linux, Apache, Nginx, Mysql</li>
      	<li>Things I dabble in: Angularjs, Leaflet</li>
      	<li>Things I <strong>want</strong> to dabble in: Packery, Nodejs, Hoodie</li>
      </ul>
      <br/>
      <p>I'm crazy for all things opensource.</p>
      <p>Currently not as active as I should be in Drupal community, but more things should come along with D8 in beta and Symfony.</p>
  <br/ style="border-bottom:outset #FFF;">
      <h3>Personal</h3>
      <p>DC born. Maryland raised. Virginia living.</p>
      <p>My kindle is attached to my face for months on end.</p>
      <p>I'm an avid swimmer who recently caught the triathlon bug.</p>
      <p>Doing an Ironman is next on my list!</p>


    </section>

    @include('footer')
@stop