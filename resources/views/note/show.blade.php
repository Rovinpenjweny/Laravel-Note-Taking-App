<x-layout>

   <div class="note-detail-container">
        <div class="ntd-decoration">
            <i class="fas fa-pen-fancy ntd-decoration-1"></i>
            <i class="fas fa-feather-alt ntd-decoration-2"></i>
        </div>
        
        <div class="ntd-container">
            <!-- Header -->
            <header class="ntd-header">
                <div class="ntd-date">
                    <i class="far fa-calendar"></i>
                    Created: {{ date('F j, Y', strtotime($note->created_at)) }}
                </div>
                <h1 class="ntd-title">{{$note->title}}</h1>
            </header>
            
            <!-- Success message -->
            @if (session('success'))
                <div class="ntd-notification">
                    <i class="fas fa-check-circle"></i>
                    <div>{{session('success')}}</div>
                </div>
            @endif
            
            <!-- Content -->
            <div class="ntd-content">
                <p>{{$note->body}}</p>
            </div>
            
            <!-- Actions -->
            <div class="ntd-actions">
                <a href="{{route('notes.edit' , $note)}}" class="ntd-btn ntd-btn-primary">
                    <i class="fas fa-edit"></i> Edit Note
                </a>
                
                <form action="{{route('notes.destroy' , $note)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ntd-btn ntd-btn-danger">
                        <i class="fas fa-trash-alt"></i> Delete Note
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>