@extends('layouts.app')
@section('content')
<div>
    <form wire:submit.prevent="submitForm">
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" wire:model="title">
        </div>

        <div class="form-group">
            <label for="body">Isi:</label>
            <input type="body" class="form-control" id="body" wire:model="body">
        </div>

        <div class="form-group">
            <label for="deadline">Deadline:</label>
            <input type="date" class="form-control" id="deadline" wire:model="deadline">
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection