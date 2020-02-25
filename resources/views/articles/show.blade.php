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
		@auth
			@if (Auth::user()->id === $article->user_id)
			<p><a href="{{route('articles.edit',$article->id)}}" class="button is-link" style="background-color:#24a0ed;">Edit</a></p>

			<form method="POST" action="/articles/{{$article->id}}">
				@csrf
				@method('DELETE')
				<button type="submit" class="button is-link" style="background-color:red;">Delete</button>
			</form>
			@endif
		@endauth
	</div>
</section>

@endsection
