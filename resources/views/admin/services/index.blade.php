@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @if(session('success'))
                <div class="col-12 alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.services') }}</h2>

                    <div class="page-title-right">
                        <a href="{{ route('admin.services.create') }}" class="btn btn-sm btn-primary">
                            {{ __('keywords.add_new') }}
                        </a>
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
                                    @if(count($services) > 0)
                                        @foreach($services as $service)
                                            <tr>
                                                <td>{{ $services->firstItem() + $loop->index }}</td>
                                                <td>{{ $service->title }}</td>
                                                <td>
                                                    <i class="{{ $service->icon }} fa-2x"></i>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.services.edit', $service) }}"
                                                       class="btn btn-sm btn-success">
                                                        <i class="fe fe-edit fa-2x"></i>
                                                    </a>
                                                    <a href="{{ route('admin.services.show', $service) }}"
                                                       class="btn btn-sm btn-primary">
                                                        <i class="fe fe-eye fa-2x"></i>
                                                    </a>
                                                    <form action="{{ route('admin.services.destroy', $service) }}"
                                                          method="post"
                                                          class="d-inline-block form_delete_service">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="confirmDelete()">
                                                            <i class="fe fe-trash-2 fa-2x"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"
                                                class="text-center alert alert-danger">{{ __('keywords.no_services') }}</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                                {{ $services->render('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            if (confirm("Are you sure you want to delete this service?")) {
                document.querySelector('.form_delete_service').submit();
            }
        }
    </script>
@endsection