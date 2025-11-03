@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <x-success/>
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.services') }}</h2>

                    <div class="page-title-right">
                        <x-action-button type="add" href="{{ route('admin.services.create') }}"/>
                    </div>
                </div>
                <div class="row">
                    <!-- simple table -->
                    <div class="col-md-12 my-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>{{ __('keywords.title') }}</th>
                                        <th width="10%">{{ __('keywords.icon') }}</th>
                                        <th width="15%">{{__('keywords.actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($services) > 0)
                                        @foreach($services as $service)
                                            <tr>
                                                <td>{{ $services->firstItem() + $loop->index }}</td>
                                                <td>{{ $service->title }}</td>
                                                <td>
                                                    <i class="{{ $service->icon }} fa-2x"></i>
                                                </td>
                                                <td>
                                                    <x-action-button type="edit"
                                                                     href="{{ route('admin.services.edit', $service) }}"/>
                                                    <x-action-button type="show"
                                                                     href="{{ route('admin.services.show', $service) }}"/>
                                                    <x-delete-button
                                                            href="{{ route('admin.services.destroy', $service) }}"
                                                            id="{{ $service->id }}"/>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <x-alert/>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                                {{ $services->render('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div>
            </div>
        </div>
    </div>
@endsection