@extends ('layouts.app4')

@section('content')
<section id="main" class="wrapper">
	<div class="container">

		<header class="major special">
			<h2>{{ $article->title }}</h2>
			<p>{{ $article->excerpt }}</p>
		</header>

		<a class="image fit"><img src="{{ url('/images/pic01.jpg') }}" alt="" /></a>
		<p>{{ $article->body }}</p>
		<div>
			Tag:
			<p>
				@foreach ($article->tags as $tag)
					<a class="button is-link" href="{{ route('articles.index',['tag'=>$tag->name]) }}">{{ $tag->name }}</a>
				@endforeach
			</p>
		</div>

		<p><a href="{{route('articles.edit',$article->id)}}" class="button is-link">Edit</a></p>

		<form method="delete" action="">
			<button type="submit" class="button is-link">Delete</button>
		</form>
	</div>
</section>

<!-- <div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$article->title}}</h2>
				<span class="byline">{{$article->excerpt}}</span> </div>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			{{$article->body}}
			<p>
			@foreach ($article->tags as $tag)
				<a href="{{ route('articles.edit',$tag->name) }}">{{ $tag->name }}</a>
			@endforeach
			</p>
		</div>

	</div>
	<a href="{{route('articles.edit',$article->id)}}" class="button is-link">Edit</a>
	
	<form method="delete" action="">
    <button type="submit" class="button is-link">Delete</button>
	</form>
</div> -->

@endsection
