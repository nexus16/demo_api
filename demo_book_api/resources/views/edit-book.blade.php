<form action="{{route('books.update', $book->id)}}" method="POST">
{{ method_field('PUT') }}
	<div>
		<input type="text" name="title"  value="{{$book->title}}"/>
	
		<input type="text" name="author" value="{{$book->author}}"  />
	</div>

	

	<div>
		<button type="submit">ok</button> 
	</div>
</form>
