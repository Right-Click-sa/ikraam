@extends('backend.layouts.app')

@section('title', __('Membership Requests'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Membership Requests')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.membership-requests-table />
        </x-slot>
    </x-backend.card>
@endsection
