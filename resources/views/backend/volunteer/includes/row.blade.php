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
    {{ $row->phone }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->age }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->field->field }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->location->location }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->gender->gender }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <x-utils.delete-button :href="route('admin.volunteer.requests.destroy', $row)"/>
</x-livewire-tables::bs4.table.cell>
