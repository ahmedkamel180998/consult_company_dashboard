@extends('admin.master')

@section('title', __('keywords.settings'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.settings') }}</h2>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <x-success/>
                        <form action="{{ route('admin.settings.update', $setting) }}" method="POST"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                {{-- Address --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="address">{{ __('keywords.address') }}</label>
                                        <input type="text" name="address" id="address" class="form-control"
                                               placeholder="{{ __('keywords.address') }}" value="{{ $setting->title }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                                </div>

                                {{-- Phone --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="phone">{{ __('keywords.phone') }}</label>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                               placeholder="{{ __('keywords.phone') }}" value="{{ $setting->phone }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('phone')" class="mt-2"/>
                                </div>

                                {{-- Email --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="email">{{ __('keywords.email') }}</label>
                                        <input type="text" name="email" id="email" class="form-control"
                                               placeholder="{{ __('keywords.email') }}" value="{{ $setting->email }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                </div>

                                {{-- Facebook --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="facebook">{{ __('keywords.facebook') }}</label>
                                        <input type="url" name="facebook" id="facebook" class="form-control"
                                               placeholder="{{ __('keywords.facebook') }}"
                                               value="{{ $setting->facebook }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('facebook')" class="mt-2"/>
                                </div>

                                {{-- Twitter --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="twitter">{{ __('keywords.twitter') }}</label>
                                        <input type="url" name="twitter" id="twitter" class="form-control"
                                               placeholder="{{ __('keywords.twitter') }}"
                                               value="{{ $setting->twitter }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('twitter')" class="mt-2"/>
                                </div>

                                {{-- Youtube --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="youtube">{{ __('keywords.youtube') }}</label>
                                        <input type="url" name="youtube" id="youtube" class="form-control"
                                               placeholder="{{ __('keywords.youtube') }}"
                                               value="{{ $setting->youtube }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('youtube')" class="mt-2"/>
                                </div>

                                {{-- LinkedIN --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                                        <input type="url" name="linkedin" id="linkedin" class="form-control"
                                               placeholder="{{ __('keywords.linkedin') }}"
                                               value="{{ $setting->linkedin }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('linkedin')" class="mt-2"/>
                                </div>

                                {{-- Insagram --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="instagram">{{ __('keywords.instagram') }}</label>
                                        <input type="url" name="instagram" id="instagram" class="form-control"
                                               placeholder="{{ __('keywords.instagram') }}"
                                               value="{{ $setting->instagram }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('instagram')" class="mt-2"/>
                                </div>
                            </div>
                            <x-submit-button field="{{__('keywords.edit_setting')}}"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection