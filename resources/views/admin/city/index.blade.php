@extends('layouts.main')

@section('page_title')
    {{ __('Cities') }}
@endsection

@section('main-title')
    {{ __('Cities') }}
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Cities</h3>
                                <a href="{{ route('admin.cities.create') }}" class="btn btn-sm btn-primary mb-2">Create</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="city-table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
									@foreach ($cities as $city)
                                        <tr>
										    <td>{{ $city->id }}</td>
										    <td>{{ $city->name }}</td>
										    <td>
                                                <a href="{{ route('admin.cities.edit', $city) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pencil"></i></a>
                                                <form action="{{ route('admin.cities.destroy', $city) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger mr-1">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
									@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('custom-scripts')
    <script>
        $(document).ready(() => {
            $('#city-table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
