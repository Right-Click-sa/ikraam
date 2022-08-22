<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use App\Models\MembershipRequest;

/**
 * Class MembershipRequestsTable.
 */
class MembershipRequestsTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return MembershipRequest::query()->when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
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
            Column::make(__('Membership')),
            Column::make(__('Phone')),
            Column::make(__('City')),
            Column::make(__('Identification Number')),
            Column::make(__('Gender')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.membership_requests.includes.row';
    }
}
