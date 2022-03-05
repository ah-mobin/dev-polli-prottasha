@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Promotional Banner') }}
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th width="20%">Title</th>
                    <form action="{{ route('admin.promotional-banner.title') }}" method="POST">
                        @csrf
                        <td>
                            <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                        </td>
                        <td>
                            <button type="submit" class="text-light btn btn-success">Update</button>
                        </td>
                    </form>
                </tr>

                <tr>
                    <th width="20%">Photo</th>
                    <form action="{{ route('admin.promotional-banner.image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <td>
                            <img src="{{ $data->image }}" height="150" alt="">
                        </td>
                        <td>
                            <input type="file" name="image" class="form-control">
                            <button type="submit" class="text-light btn btn-success">Update</button>
                        </td>
                    </form>
                </tr>
            </table>
            
        </div>
    </div>
@endsection