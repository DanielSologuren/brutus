@extends('layouts.base')

@section('body')
	@include('header')

    <section id="about">
      <h1>ABOUT</h1>

      <h3>Professional</h3>
      <p>Most of my work is in Drupal, but primary focus is on PHP.</p>
      <ul>
      	<li>PHP -> Symfony, Laravel, Drupal CMS</li>
      	<li>Font end ->Compass/Sass</li>
      	<li>Stack -> Linux, Apache, Nginx, Mysql<li>
      	<li>Things I dabble in -> Angularjs, Leaflet, Nodejs</li>
      </ul>
      <p>I'm crazy for all things opensource and dabble in the ocasional mapping as a solution</p>
      <p>Currently not as active as I should be in Drupal community, but more things should come along with D8 in beta and Symfony.</p>

      <br/>
      <h3>Personal</h3>
      <p>DC born. Maryland raised. Virginia living.</p>
      <p>I'm an avid swimmer who recently caught the triathlon bug.</p>
      <p>Doing an Ironman is next on my list!</p>

    </section>

    @include('footer')
@stop