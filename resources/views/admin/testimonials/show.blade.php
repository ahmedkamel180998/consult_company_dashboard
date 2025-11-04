@extends('admin.master')

@section('title', __('keywords.show_testimonial'))

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
                                    <label for="name">{{ __('keywords.name') }}</label>
                                    <p class="form-control">{{ $testimonial->name }}</p>
                                </div>
                            </div>

                            {{-- Position --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="position">{{ __('keywords.position') }}</label>
                                    <p class="form-control">{{ $testimonial->position }}</p>
                                </div>
                            </div>

                            {{-- Image --}}
                            <div class="col-md-2">
                                <div class="form-group mb-3">
                                    <label for="image">{{ __('keywords.image') }}</label>
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/testimonials/' . $testimonial->image) }}"
                                             alt="{{ $testimonial->name }}"
                                             class="img-fluid" style="width: 100px; height: 100px;">
                                    </div>
                                </div>
                            </div>


                            {{-- Description --}}
                            <div class="col-md-10">
                                <div class="form-group mb-3">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <textarea name="description" id="description" rows="4"
                                              class="form-control">{{ $testimonial->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection