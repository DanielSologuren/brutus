@extends('layouts.base')

@section('body')
	@include('header')

    <section id="about">
      <h1>ABOUT</h1>

      <h3>Professional</h3>
      <p>Most of my work is in Drupal (last 5 years), but primary focus is on PHP.</p>
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
  <br/ style="border-bottom:outset #FFF;">
      <h3>Personal</h3>
      <p>DC born. Maryland raised. DC living (full circle!).</p>
      


    </section>

    @include('footer')
@stop
