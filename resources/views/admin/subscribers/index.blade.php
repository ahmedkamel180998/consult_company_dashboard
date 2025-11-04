@extends('admin.master')

@section('title', __('keywords.subscribers'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <x-success/>
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.subscribers') }}</h2>
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
                                        <th>{{ __('keywords.email') }}</th>
                                        <th width="15%">{{__('keywords.actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($subscribers) > 0)
                                        @foreach($subscribers as $subscriber)
                                            <tr>
                                                <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                                <td>{{ $subscriber->email }}</td>
                                                <td>
                                                    <x-delete-button
                                                            href="{{ route('admin.subscribers.destroy', $subscriber) }}"
                                                            id="{{ $subscriber->id }}"/>
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
                                {{ $subscribers->render('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div>
            </div>
        </div>
    </div>
@endsection