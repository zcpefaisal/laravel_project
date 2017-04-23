{{ print_r($student) }}

<!-- {!! Form::model($student, [
    'method' => 'PATCH',
    'route' => []
]) !!} -->

<!-- 	{!! Form::label('Name') !!}
	{!! Form::text('name', null) !!}
	{{ $errors->first('name') }}

	{!! Form::label('Email') !!}
	{!! Form::email('email', null) !!}
 -->
<!-- 	{!! Form::label('Password') !!}
	{!! Form::password('password', '') !!}
	 -->
	<!-- {!! Form::label('Date Of Bitrh') !!}
	{!! Form::date('date_of_birth') !!} -->
<!-- 
	{!! Form::label('Language') !!}

	{!! Form::label('PHP') !!}
	{!! Form::checkbox('language[]', 'php') !!}
	{!! Form::label('Python') !!}
	{!! Form::checkbox('language[]', 'python') !!}
	{!! Form::label('Node JS') !!}
	{!! Form::checkbox('language[]', 'nodejs') !!}
	
	{!! Form::label('Male') !!}
	{!! Form::radio('gander', 'male') !!}
	{!! Form::label('Female') !!}
	{!! Form::radio('gander', 'female') !!}
	
	{!! Form::label('Select Class') !!}
	{!! Form::select('std_class', ['0'=>'SelectHere','1'=>'One', '2'=>'Two', '3'=>'Three']) !!}

	{!! Form::label('Note') !!}
	{!! Form::textarea('note', '') !!} -->
	
	{!! Form::submit('Save Now') !!}

{!! Form::close() !!}

