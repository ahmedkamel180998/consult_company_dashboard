@extends('admin.master')

@section('title', __('keywords.features'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <x-success/>
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.features') }}</h2>

                    <div class="page-title-right">
                        <x-action-button type="add" href="{{ route('admin.features.create') }}"/>
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
                                    @if(count($features) > 0)
                                        @foreach($features as $feature)
                                            <tr>
                                                <td>{{ $features->firstItem() + $loop->index }}</td>
                                                <td>{{ $feature->title }}</td>
                                                <td>
                                                    <i class="{{ $feature->icon }} fa-2x"></i>
                                                </td>
                                                <td>
                                                    <x-action-button type="edit"
                                                                     href="{{ route('admin.features.edit', $feature) }}"/>
                                                    <x-action-button type="show"
                                                                     href="{{ route('admin.features.show', $feature) }}"/>
                                                    <x-delete-button
                                                            href="{{ route('admin.features.destroy', $feature) }}"
                                                            id="{{ $feature->id }}"/>
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
                                {{ $features->render('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div>
            </div>
        </div>
    </div>
@endsection