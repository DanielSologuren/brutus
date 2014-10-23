@extends('layouts.base')

@section('body')
	@include('header')

    <section id="home">
      <h1>Hello!</h1>
      <p>I'm a dev based out in the DC area.</p>
      <p>I dove into development in 2009 and started working on Drupal in 2010.</p>
      <p>Since then, I've worked on many Federal .gov projects from scope to deployment.</p>
    </section>

    @include('footer')
@stop