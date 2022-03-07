@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Organogram') }}
        </div>

        <div class="card-body">

            <table class="table table-bordered">
            
                <tr>
                    <th width="20%">Photo</th>
                    <form action="{{ route('admin.pages.management.organogram.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <td>
                            <a href="{{ $image }}"><img src="{{ $image }}" height="250" alt=""></a>
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