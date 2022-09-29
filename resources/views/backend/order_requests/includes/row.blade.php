<x-livewire-tables::bs4.table.cell>
    {{ $row->id }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->type->type }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->created_at->toDateString() }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->association->name }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->description }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    @foreach($row->attachments as $attachment)
      <a href="/img/backend/orders_attachments/{{ $attachment->attachment }}" download>
        {{ $attachment->attachment }}
      </a>
      <hr>
    @endforeach
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
  <div @if($row->status->id == 1) class="p-1 mb-2 bg-success text-white text-center" @elseif($row->status->id == 2) class="p-1 mb-2 bg-warning text-dark text-center" @elseif($row->status->id == 3) class="p-1 mb-2 bg-danger text-white text-center" @endif >
    {{ $row->status->status }}
  </div>
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->rejection_reason }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <x-utils.edit-button :href="route('admin.order.requests.edit', $row)" />
    <x-utils.delete-button :href="route('admin.order.requests.destroy', $row)"/>
</x-livewire-tables::bs4.table.cell>
