@extends('backend.layouts.app')

@section('title', __('Associations Join Requests'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Associations Join Requests')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.associations-requests-table />
        </x-slot>
    </x-backend.card>
@endsection
