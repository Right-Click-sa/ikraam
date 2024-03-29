<?php

namespace App\Http\Livewire\Backend;

use App\Models\ContactUs;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

/**
 * Class ContactUsTable.
 */
class ContactUsTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return ContactUs::query()->when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
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
            Column::make(__('Message')),
            Column::make(__('Date')),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.contact.includes.row';
    }
}
