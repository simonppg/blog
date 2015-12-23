@extends('front.template.main')

@section('title')
    inicio de mi pagina
@endsection

@section('content')
	<div class="jumbotron">
		<h1>Blog</h1>
		<p>The best blog ever!</p>
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="row">
				@foreach($articles as $article)
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="" class="thumbnail">
									@foreach($article->images as $image)
										<img class="img-responsive img-article" src="{{ asset('images/articles/' . $image->name) }}">
									@endforeach
								</a>
								<h3>{{ $article->title }}</h3>
							</div>
							<div class="panel-footer">
								<a href="">{{ $article->category->name }}</a>
								<div class="pull-right">Hace 4 minutos</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>

		</div>
		{!! $articles->render() !!}
	</div>

@endsection