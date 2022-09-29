<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use App\Models\OrderRequest;

/**
 * Class OrderRequestsTable.
 */
class OrderRequestsTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return OrderRequest::when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('Id'))
                ->sortable(),
            Column::make(__('Order type')),
            Column::make(__('Order date')),
            Column::make(__('Association name')),
            Column::make(__('Order description')),
            Column::make(__('Attachments')),
            Column::make(__('Status')),
            Column::make(__('Rejection reason')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.order_requests.includes.row';
    }
}
