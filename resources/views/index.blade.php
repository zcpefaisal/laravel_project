<table>
	<tr>
		<th>Name</th>
		<th>email</th>
		<th>Actions</th>
	</tr>
	@foreach($students as $student)
		<tr>
			<td>{{ $student->name }}</td>
			<td>{{ $student->email }}</td>
			<td><a href="{{ URL('edit/'.$student->student_id) }}">Edit</a></td>
		</tr>
	@endforeach

</table>