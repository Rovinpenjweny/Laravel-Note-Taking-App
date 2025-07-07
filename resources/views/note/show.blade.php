<x-layout>

    <div>
        <h1>Date: {{$note->created_at}}</h1>
        <h1>{{$note->title}}</h1>
    </div>

     @if (session('success'))
        <div>
            {{session('success')}}
        </div>        
    @endif
    <div>
        <p>
            {{$note->body}}
        </p>
    </div>

    <div>
        <a href="{{route('notes.edit' , $note)}}">edit</a>

        <form action="{{route('notes.destroy' , $note)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </div>
</x-layout>