@extends('admin.master')

@section('title', __('keywords.testimonials'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <x-success/>
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.testimonials') }}</h2>

                    <div class="page-title-right">
                        <x-action-button type="add" href="{{ route('admin.testimonials.create') }}"/>
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
                                        <th width="10%">{{ __('keywords.name') }}</th>
                                        <th width="10%">{{ __('keywords.position') }}</th>
                                        <th>{{__('keywords.description')}}</th>
                                        <th width="15%">{{__('keywords.image')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($testimonials) > 0)
                                        @foreach($testimonials as $testimonial)
                                            <tr>
                                                <td>{{ $testimonials->firstItem() + $loop->index }}</td>
                                                <td>{{ $testimonial->name }}</td>
                                                <td>{{ $testimonial->position }}</td>
                                                <td>{{ $testimonial->description }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/testimonials/' . $testimonial->image) }}"
                                                         alt="{{ $testimonial->name }}"
                                                         class="img-fluid img-thumbnail"
                                                         style="width: 100px; height: 100px; object-fit: cover;">
                                                <td>
                                                    <x-action-button type="edit"
                                                                     href="{{ route('admin.testimonials.edit', $testimonial) }}"/>
                                                    <x-action-button type="show"
                                                                     href="{{ route('admin.testimonials.show', $testimonial) }}"/>
                                                    <x-delete-button
                                                            href="{{ route('admin.testimonials.destroy', $testimonial) }}"
                                                            id="{{ $testimonial->id }}"/>
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
                                {{ $testimonials->render('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div>
            </div>
        </div>
    </div>
@endsection