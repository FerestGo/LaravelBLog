<div class="post-preview">
	<a href="{{  route('blog.show', ['slug' => $model->slug]) }}"><h2 class="post-title">{{ $model->title }}</h2>
	</a>
	{!! nl2br($model->excerpt) !!}
</div>
<hr>