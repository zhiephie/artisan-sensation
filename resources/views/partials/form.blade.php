<div class="form-group">
	{!! Form::label('title', 'Title : ') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Body : ') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('published_at', 'Publish On : ') !!}
	{!! Form::input('date', 'published_at', $posts->published_at, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>