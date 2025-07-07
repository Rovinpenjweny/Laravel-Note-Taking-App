<h1>Create Your New Note</h1>

<form action="{{route('notes.store')}}" method="POST">
    @csrf
    <div>
        <input type="text" name="title">      
    </div>
    <div>
        <textarea name="body"  id="" cols="30" rows="10"></textarea>
    </div>
    <button>Save</button>
    <a href="{{route('notes.index')}}">Cancel</a>
</form>