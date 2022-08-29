<x-livewire-tables::bs4.table.cell>
    {{ $row->id }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->name }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->email }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->number }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->city }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->objective }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->administrative_officer }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->administrative_officer_number }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <a href="/img/backend/associations/files/{{ $row->file }}" download>
      {{ $row->file }}
    </a>
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <x-utils.edit-button :href="route('admin.associations.edit', $row)" />
    <x-utils.delete-button :href="route('admin.associations.destroy', $row)"/>
</x-livewire-tables::bs4.table.cell>
