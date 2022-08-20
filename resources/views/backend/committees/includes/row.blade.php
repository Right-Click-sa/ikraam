<x-livewire-tables::bs4.table.cell>
    {{ $row->id }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->committee_name }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->chairman }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <x-utils.edit-button :href="route('admin.about.committees.edit', $row)" />
    <x-utils.delete-button :href="route('admin.about.committees.destroy', $row)"/>
</x-livewire-tables::bs4.table.cell>
