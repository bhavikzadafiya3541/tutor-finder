@extends('layouts.main')

@section('page_title')
    {{ __('Tutors') }}
@endsection

@section('main-title')
    {{ __('Tutors') }}
@endsection

@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            Tutors
        </li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Tutors</h3>
                                <a href="{{ route('admin.tutors.create') }}" class="btn btn-sm btn-primary mb-2">Create</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="tutor-table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
									@foreach ($tutors as $tutor)
                                        <tr>
										    <td>{{ $tutor->id }}</td>
										    <td>{{ $tutor->name }}</td>
										    <td>{{ $tutor->email }}</td>
										    <td>
                                                <a href="{{ route('admin.tutors.edit', $tutor) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pencil"></i></a>
                                                <form action="{{ route('admin.tutors.destroy', $tutor) }}" method="POST" style="display: inline;">
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
            $('#tutor-table').DataTable({
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
