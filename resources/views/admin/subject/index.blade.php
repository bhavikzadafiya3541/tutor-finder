@extends('layouts.main')

@section('page_title')
    {{ __('Subjects') }}
@endsection

@section('main-title')
    {{ __('Subjects') }}
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Subjects</h3>
                                <a href="{{ route('admin.subjects.create') }}" class="btn btn-sm btn-primary mb-2">Create</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="subject-table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
									@foreach ($subjects as $subject)
                                        <tr>
										    <td>{{ $subject->id }}</td>
										    <td>{{ $subject->name }}</td>
										    <td>
                                                <a href="{{ route('admin.subjects.edit', $subject) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pencil"></i></a>
                                                <form action="{{ route('admin.subjects.destroy', $subject) }}" method="POST" style="display: inline;">
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
            $('#subject-table').DataTable({
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
