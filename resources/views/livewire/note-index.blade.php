<div>   
    @if ($notes->isEmpty())
        <div>Belum ada Notes</div>
        <br>
        
    @else    
        <table class='table'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>deadline</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=0; ?>
                @foreach ($notes as $note)
                <?php $no++; ?>
                
                <tr>
                    <th>{{ $no }}</th>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->body }}</td>
                    <td>{{ \Carbon\Carbon::parse($note->deadline)->format('M-d-Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    @endif
</div>
<livewire:note-create>