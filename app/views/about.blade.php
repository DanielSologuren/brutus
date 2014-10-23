@extends('layouts.base')

@section('body')
	@include('header')

    <section id="about">
      <h1>ABOUT</h1>

      <h3>Professional</h3>
      <p>Drupal. Custom development and a little of front end</p>
      <p>I'm crazy for all things opensource and dabble in the ocasional mapping as a solution</p>
      <h3>Personal</h3>
      <p>I'm an avid swimmer who recently caught the triathlon bug.</p>
      <p>Doing an Ironman is next on my list.</p>
    </section>

    @include('footer')
@stop