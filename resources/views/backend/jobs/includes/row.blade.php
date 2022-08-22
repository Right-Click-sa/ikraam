<x-livewire-tables::bs4.table.cell>
    {{ $row->id }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->job }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->description }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <x-utils.edit-button :href="route('admin.job.edit', $row)" />
    <x-utils.delete-button :href="route('admin.job.destroy', $row)"/>
</x-livewire-tables::bs4.table.cell>
