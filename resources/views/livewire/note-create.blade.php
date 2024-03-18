<div>
    {{-- Stop trying to control. --}}
    <form wire:submit.prevent="create">
        <label for="title">Judul</label>
        <input wire:model="title" type="string" name="title" id="title" value="{{ $title }}">
        <label for="body">Isi</label>
        <input wire:model="body" type="text" name="body" id="body" value="{{ $body }}">
        <label for="deadline">Deadline</label>
        <input wire:model="deadline" type="date" name="deadline" id="deadline" value="{{ $deadline }}">
        <div class="pt-4">
            <button type="submit" primary right-icon="calendar" spinner>Simpan</button>
        </div>
    </form>
    
        
    
</div>
