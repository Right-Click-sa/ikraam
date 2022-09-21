<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use App\Models\AssociationRequest;

/**
 * Class AssociationsRequestsTable.
 */
class AssociationsRequestsTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return AssociationRequest::query()->when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }


    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('Id'))
                ->sortable(),
            Column::make(__('Name')),
            Column::make(__('Email')),
            Column::make(__('City')),
            Column::make(__('Chairman')),
            Column::make(__('Founding date')),
            Column::make(__('License')),
            Column::make(__('Executive director')),
            Column::make(__('Executive director\'s number')),
            Column::make(__('Association website')),
            Column::make(__('Association activity')),
            Column::make(__('Administrative officer')),
            Column::make(__("Administrative officer's number")),
            Column::make(__('Certificate')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.associations_requests.includes.row';
    }
}
