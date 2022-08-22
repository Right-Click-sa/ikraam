<x-livewire-tables::bs4.table.cell>
    {{ $row->id }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->type }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <x-utils.edit-button :href="route('admin.membership.edit', $row)" />
    <x-utils.delete-button :href="route('admin.membership.destroy', $row)"/>
</x-livewire-tables::bs4.table.cell>
