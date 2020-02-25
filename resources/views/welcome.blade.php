@extends('layouts.app2')

@section('content')
<!-- Banner -->
<section id="banner">
				<h2>Welcome</h2>
				<p>This is a wonderful blog site <br /> Feel free to write anything you want</p>
				<ul class="actions">
					<li><a href="{{route('articles.index')}}" class="button special big">Get Started</a></li>
				</ul>
			</section>

@endsection
