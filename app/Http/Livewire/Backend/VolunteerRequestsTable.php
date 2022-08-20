<?php

namespace App\Http\Livewire\Backend;

use App\Models\VolunteerRequest;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

/**
 * Class VolunteerRequestsTable.
 */
class VolunteerRequestsTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return VolunteerRequest::query()->when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
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
            Column::make(__('Phone')),
            Column::make(__('Age')),
            Column::make(__('Field')),
            Column::make(__('Location')),
            Column::make(__('Gender')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.volunteer.includes.row';
    }
}
