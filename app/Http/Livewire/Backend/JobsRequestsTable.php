<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use App\Models\JobRequest;

/**
 * Class JobsRequestsTable.
 */
class JobsRequestsTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return JobRequest::query()->when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
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
            Column::make(__('Job')),
            Column::make(__('Phone')),
            Column::make(__('Age')),
            Column::make(__('Identification Number')),
            Column::make(__('Specialization')),
            Column::make(__('Gender')),
            Column::make(__('CV')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.jobs_requests.includes.row';
    }
}
