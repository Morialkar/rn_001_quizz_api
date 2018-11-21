{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('chapter_id', 'Chapter_id:') !!}
			{!! Form::text('chapter_id') !!}
		</li>
		<li>
			{!! Form::label('background', 'Background:') !!}
			{!! Form::text('background') !!}
		</li>
		<li>
			{!! Form::label('dialogs', 'Dialogs:') !!}
			{!! Form::text('dialogs') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}