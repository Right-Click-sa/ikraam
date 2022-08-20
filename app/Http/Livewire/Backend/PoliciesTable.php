<?php

namespace App\Http\Livewire\Backend;

use App\Models\Policy;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

/**
 * Class PoliciesTable.
 */
class PoliciesTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return Policy::when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('Id'))
                ->sortable(),
            Column::make(__('Policy')),
            Column::make(__('File')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.policies.includes.row';
    }
}
