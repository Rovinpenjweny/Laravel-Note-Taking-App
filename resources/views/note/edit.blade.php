   <x-layout>
   <div class="form-container">
        <div class="form-header">
            <h1>Edit Your Note</h1>
            <p>Revise and enhance your thoughts and ideas</p>
        </div>
        
        <div class="form-body">
            <form action="{{route('notes.update' , $note)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="title">
                        <i class="fas fa-heading"></i>
                        Note Title
                    </label>
                    <input type="text" name="title" id="title" class="form-input" value="{{$note->title}}">
                </div>
                
                <div class="form-group">
                    <label for="body">
                        <i class="fas fa-sticky-note"></i>
                        Note Content
                    </label>
                    <textarea name="body" id="body" class="form-input" cols="30" rows="10">{{$note->body}}</textarea>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-sync-alt"></i> Update Note
                    </button>
                    <a href="{{route('notes.show' , $note)}}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
        
        <div class="decoration decoration-1">
            <i class="fas fa-edit"></i>
        </div>
        <div class="decoration decoration-2">
            <i class="fas fa-lightbulb"></i>
        </div>
    </div>

    <script>
        // Add animation to form elements when page loads
        document.addEventListener('DOMContentLoaded', function() {
            const formGroups = document.querySelectorAll('.form-group');
            
            formGroups.forEach((group, index) => {
                setTimeout(() => {
                    group.style.opacity = '0';
                    group.style.transform = 'translateY(20px)';
                    group.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    
                    setTimeout(() => {
                        group.style.opacity = '1';
                        group.style.transform = 'translateY(0)';
                    }, 100);
                }, index * 150);
            });
            
            // Focus on title input when page loads
            document.getElementById('title').focus();
        });
    </script>


</x-layout>