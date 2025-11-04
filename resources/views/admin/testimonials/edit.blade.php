@extends('admin.master')

@section('title', __('keywords.edit_testimonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.edit_testimonial') }}</h2>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                {{-- Name --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">{{ __('keywords.name') }}</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                               placeholder="{{ __('keywords.name') }}" value="{{ $testimonial->name }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                </div>

                                {{-- Position --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="position">{{ __('keywords.position') }}</label>
                                        <input type="text" name="position" id="position" class="form-control"
                                               placeholder="{{ __('keywords.position') }}"
                                               value="{{ $testimonial->position }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('position')" class="mt-2"/>
                                </div>

                                {{-- Image --}}
                                <div class="col-md-12">
                                    <div class="form-group mb-3 py-2">
                                        <label for="image">{{ __('keywords.image') }}</label>
                                        <input type="file" name="image" id="image" class="file-input-styled d-block"
                                               placeholder="{{ __('keywords.image') }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('image')" class="mt-2"/>
                                </div>


                                {{-- Description --}}
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="description">{{ __('keywords.description') }}</label>
                                        <textarea name="description" id="description" rows="4" class="form-control"
                                                  placeholder="{{ __('keywords.description') }}">{{$testimonial->description}}</textarea>
                                    </div>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                                </div>
                            </div>
                            <x-submit-button field="{{__('keywords.edit_testimonial')}}"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection