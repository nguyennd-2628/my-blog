@extends ('layouts.app')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
    <a href="{{route('articles.create')}}" class="button is-link">Create New Articles</a>
    <br>
        @forelse ($articles as $article)
        <div class="content">
            <div class="title">
                <h2><a href="{{ $article->path()}}">{{$article->title}}</a></h2>
            </div>
            
        <h3>{{ $article->excerpt }}</h3>
        <h4>Uploaded by {{App\User::find($article->user_id)->name}}
        </div>
        <br>
        @empty
        <p>No relevant articles yet</p>
        @endforelse

	</div>
</div>

@endsection
