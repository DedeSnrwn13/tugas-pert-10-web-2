@extends('mahasiswa.layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Latihan CRUD</h2>
            </div>
            <div>
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>

    @session('success')
        <div class="alert alert-success my-3">
            {{ $value }}
        </div>
    @endsession

    <div class="row mt-2">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswas as $mahasiswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mahasiswa->name }}</td>
                                <td>{{ $mahasiswa->class }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">Edit</a>
                                        <div class="mx-2"></div>
                                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
