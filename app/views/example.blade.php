@extends('layouts.base')

@section('body')
	@include('header')

    <section id="home">
      <h1>Hello!</h1>
      <p>I'm a drupal dev based out in the DC area. I dove into development in 2009 and started working on Drupal in 2010.</p>
      <p>Since then, I've worked on many Federal .gov projects from scope to deployment.</p>
    </section>

    <section id="about">
      <h1>About</h1>
    </section>

    <section id="projects">
      <h1>Projects</h1>
    </section>

    <section id="blog">
      <h1>Blog</h1>
    </section>

    @include('footer')
@stop