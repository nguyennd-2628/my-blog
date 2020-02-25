@extends ('layouts.app4')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
    <a style="margin-top:40px; margin-bottom:40px; background-color:#24a0ed;" href="{{route('articles.create')}}" class="button is-link">Create New Articles</a>
    <br>
        @forelse ($articles as $article)
        <div class="content">
            <div class="title">
                <h2 style="margin-bottom:5px"><a href="{{ $article->path()}}">{{$article->title}}</a></h2>
            </div>
            
        <p style="font-size:20px; margin-bottom:10px">{{ $article->excerpt }}</p>
        <i>Uploaded by <strong>{{App\User::find($article->user_id)->name}}</strong></i>
        </div>
        <br>
        @empty
        <p>No relevant articles yet</p>
        @endforelse

	</div>
</div>

@endsection
