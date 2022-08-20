<x-livewire-tables::bs4.table.cell>
    {{ $row->id }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->field }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <x-utils.edit-button :href="route('admin.volunteer.fields.edit', $row)" />
    <x-utils.delete-button :href="route('admin.volunteer.fields.destroy', $row)"/>
</x-livewire-tables::bs4.table.cell>
