@extends('admin.master')

@section('title', __('keywords.edit_feature'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.edit_feature') }}</h2>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.features.update', $feature) }}" method="POST"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                {{-- Title --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="title">{{ __('keywords.title') }}</label>
                                        <input type="text" name="title" id="title" class="form-control"
                                               placeholder="{{ __('keywords.title') }}" value="{{ $feature->title }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                                </div>

                                {{-- Icon --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="icon">{{ __('keywords.icon') }}</label>
                                        <input type="text" name="icon" id="icon" class="form-control"
                                               placeholder="{{ __('keywords.icon') }}" value="{{ $feature->icon }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('icon')" class="mt-2"/>
                                </div>

                                {{-- Description --}}
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="description">{{ __('keywords.description') }}</label>
                                        <textarea name="description" id="description" rows="4" class="form-control"
                                                  placeholder="{{ __('keywords.description') }}">{{ $feature->description }}</textarea>
                                    </div>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                                </div>
                            </div>
                            <x-submit-button field="{{__('keywords.edit_feature')}}"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection