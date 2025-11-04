@extends('admin.master')

@section('title', __('keywords.messages'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <x-success/>
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.messages') }}</h2>
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
                                        <th width="10%">{{ __('keywords.name') }}</th>
                                        <th width="15%">{{__('keywords.email')}}</th>
                                        <th width="20%">{{__('keywords.subject')}}</th>
                                        <th width="35%">{{__('keywords.message')}}</th>
                                        <th width="10%">{{__('keywords.actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($messages) > 0)
                                        @foreach($messages as $message)
                                            <tr>
                                                <td>{{ $messages->firstItem() + $loop->index }}</td>
                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->subject }}</td>
                                                <td>{{ $message->message }}</td>
                                                <td>
                                                    <x-action-button type="show"
                                                                     href="{{ route('admin.messages.show', $message) }}"/>
                                                    <x-delete-button
                                                            href="{{ route('admin.messages.destroy', $message) }}"
                                                            id="{{ $message->id }}"/>
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
                                {{ $messages->render('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div>
            </div>
        </div>
    </div>
@endsection