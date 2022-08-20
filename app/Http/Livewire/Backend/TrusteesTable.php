<?php

namespace App\Http\Livewire\Backend;

use App\Models\Trustee;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

/**
 * Class TrusteesTable.
 */
class TrusteesTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return Trustee::when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('Id'))
                ->sortable(),
            Column::make(__('Trustee Title')),
            Column::make(__('Name')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.trustees.includes.row';
    }
}
