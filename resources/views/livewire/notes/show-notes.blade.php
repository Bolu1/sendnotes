<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'notes' => Auth::user()->notes()->orderBy('send_date', 'asc')->get(),
        ];
    }
}; ?>

<div>
    <ul>
        @foreach ($notes as $note)  
      <div class="flex flex-col p-4 space-y-2 bg-white rounded shadow-md">
        {{-- <div class="flex items-center justify-between">
          @can('update', $note)
            <a href="{{ route('notes.edit', $note) }}" wire:navigate class="text-xl font-bold text-blue-500 hover:underline">{{ $note->title }}</a>
          @else
            <p class="text-xl font-bold text-gray-500">{{ $note->title }}</p>
          @endcan
          <p class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y') }}</p>
        </div> --}}
        <p class="text-sm">{{ Str::limit($note->body, 50) }}</p>
        <div class="flex items-center justify-between">
          <p class="text-xs">Recipient: <span class="font-semibold">{{ $note->recipient }}</span></p>
          <div class="flex space-x-1">
            <a class="inline-flex items-center px-2 py-1 text-xs font-bold leading-tight rounded shadow-md hover:bg-blue-100 hover:text-blue-700">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 01-6 0 3 3 0 016 0zM2 4.5C2 3.379 2.379 2.5 3 2.5h18c.621 0 1.121.879 1.121 1.5C22 3.379 21.621 2.5 21 2.5h-18zM2 19.5C2 20.621 2.379 21.5 3 21.5h18c.621 0 1.121-.879 1.121-1.5C22 20.621 21.621 21.5 21 21.5h-18z"></path></svg>
            </a>
            <button wire:click="delete('{{ $note->id }}')" class="inline-flex items-center px-2 py-1 text-xs font-bold leading-tight rounded shadow-md hover:bg-red-100 hover:text-red-700">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l{-4 4}M5 7l{4 4}M10 16V4a4 4 0 0 1 8 0v12a2 2 0 0 0 2-2z"></path></svg>
            </button>
          </div>
        </div>
      </div>
        @endforeach
    </ul>
</div>
