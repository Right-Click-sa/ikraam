<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use App\Models\Job;

/**
 * Class JobsTable.
 */
class JobsTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return Job::when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('Id'))
                ->sortable(),
            Column::make(__('Job')),
            Column::make(__('Description')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.jobs.includes.row';
    }
}
