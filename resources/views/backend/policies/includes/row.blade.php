<x-livewire-tables::bs4.table.cell>
    {{ $row->id }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->policy }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
  <a href="/img/backend/about/policies/{{ $row->file }}" download>
    {{ $row->file }}
  </a>
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <x-utils.edit-button :href="route('admin.about.policies.edit', $row)" />
    <x-utils.delete-button :href="route('admin.about.policies.destroy', $row)"/>
</x-livewire-tables::bs4.table.cell>
