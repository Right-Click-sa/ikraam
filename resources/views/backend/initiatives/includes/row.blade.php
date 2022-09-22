<x-livewire-tables::bs4.table.cell>
    {{ $row->id }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->title }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <x-utils.edit-button :href="route('admin.initiatives.edit', $row)" />
    <x-utils.delete-button :href="route('admin.initiatives.destroy', $row)"/>
</x-livewire-tables::bs4.table.cell>
