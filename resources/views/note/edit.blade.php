<h1>{{$note->title}}</h1>


<form action="{{route('notes.update' , $note)}}" method="POST">
    @csrf
    @method('PATCH')
    <div>
        <input type="text" name="title" value="{{$note->title}}" >      
    </div>
    <div>
        <textarea name="body"  id="" cols="30" rows="10">{{$note->body}}</textarea>
    </div>
    <button>Update</button>
    <a href="{{route('notes.show' , $note)}}">Cancel</a>
</form>