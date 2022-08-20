<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use App\Models\VolunteerField;

/**
 * Class FieldsTable.
 */
class FieldsTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return VolunteerField::when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('Id'))
                ->sortable(),
            Column::make(__('Volunteer Field')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.fields.includes.row';
    }
}
