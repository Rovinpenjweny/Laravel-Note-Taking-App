<x-layout>
    <div>
            <h1>Your Notes</h1>
            <a href="{{route('notes.create')}}">Create Note</a>
    </div>
<ul>
        @foreach ($notes as $note)
        <div class="row-container" style="display: flex">
            <div class="child-row-container">
                <li>
                    <a href="{{route('notes.show' , $note)}}">{{$note->title}}</a>
                </li>
            </div>
            {{-- <div style="margin-left: 50px" class="child-row-container">
                <a href="{{route('notes.show' , $note)}}">View</a>
            </div> --}}
        </div>
        @endforeach
    </ul>


    @if (session('success'))
        <div>
            {{session('success')}}
        </div>        
    @endif
</x-layout>