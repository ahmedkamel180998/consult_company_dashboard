@extends('admin.master')

@section('title', __('keywords.show_feature'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            {{-- Title --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title">{{ __('keywords.title') }}</label>
                                    <p class="form-control">{{ $feature->title }}</p>
                                </div>
                            </div>

                            {{-- Icon --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="icon">{{ __('keywords.icon') }}</label>
                                    <p class="form-control">
                                        {{ $feature->icon }}
                                        <i class="{{ $feature->icon }} fa-2x"></i>
                                    </p>
                                </div>
                            </div>

                            {{-- Description --}}
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <textarea name="description" id="description" rows="4"
                                              class="form-control">{{ $feature->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection