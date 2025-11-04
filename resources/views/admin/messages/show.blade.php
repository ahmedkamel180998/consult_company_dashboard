@extends('admin.master')

@section('title', __('keywords.show_message'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            {{-- Name --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title">{{ __('keywords.name') }}</label>
                                    <p class="form-control">{{ $message->name }}</p>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title">{{ __('keywords.email') }}</label>
                                    <p class="form-control">{{ $message->email }}</p>
                                </div>
                            </div>

                            {{-- Subject --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title">{{ __('keywords.subject') }}</label>
                                    <p class="form-control">{{ $message->subject }}</p>
                                </div>
                            </div>

                            {{-- Message Date --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title">{{ __('keywords.created_at') }}</label>
                                    <p class="form-control">{{ $message->created_at_human }}</p>
                                </div>
                            </div>

                            {{-- Message --}}
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="description">{{ __('keywords.message') }}</label>
                                    <textarea name="description" id="description" rows="4"
                                              class="form-control">{{ $message->message }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection