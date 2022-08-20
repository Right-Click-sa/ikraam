<?php

namespace App\Http\Livewire\Backend;

use App\Models\Committee;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

/**
 * Class CommitteesTable.
 */
class CommitteesTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return Committee::when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('Id'))
                ->sortable(),
            Column::make(__('Committee Name')),
            Column::make(__('Chairman')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.committees.includes.row';
    }
}
