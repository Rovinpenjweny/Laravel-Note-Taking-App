<x-layout>
 <div class="container">
        <header>
            <h1><i class="fas fa-sticky-note"></i> Your Notes</h1>
            <a href="{{route('notes.create')}}" class="btn">
                <i class="fas fa-plus"></i> Create Note
            </a>
        </header>
        
        @if(count($notes) > 0)
            <div class="notes-grid">
                @foreach ($notes as $note)
                    <div class="note-card">
                        <div class="note-header">
                            <div class="note-title">{{$note->title}}</div>
                            <div class="note-date">Created: {{ date('M d, Y', strtotime($note->created_at)) }}</div>
                        </div>
                        <div class="note-content">
                            <p class="note-excerpt">
                               {{$note->body}}
                            </p>
                        </div>
                        <a href="{{route('notes.show' , $note)}}" class="view-link">
                            View Note <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-clipboard-list"></i>
                <h2>No Notes Yet</h2>
                <p>You haven't created any notes yet. Start by creating your first note to organize your thoughts and ideas.</p>
                <a href="{{route('notes.create')}}" class="btn">
                    <i class="fas fa-plus"></i> Create Your First Note
                </a>
            </div>
        @endif
        
        @if (session('success'))
            <div class="notification">
                <i class="fas fa-check-circle"></i>
                <div>{{session('success')}}</div>
            </div>
        @endif
    </div>
</x-layout>