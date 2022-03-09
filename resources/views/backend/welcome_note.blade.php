@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Welcome Note') }}
        </div>

        <div class="card-body">

            @includeIf('flash')

            <table class="table table-bordered">
                <tr>
                    <th width="20%">Title</th>
                    <form action="{{ route('admin.welcome-note.title') }}" method="POST">
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
                    <th>Note Content</th>
                    <form action="{{ route('admin.welcome-note.note') }}" method="POST">
                        @csrf
                        <td>
                            <textarea class="ckeditor form-control" name="note">
                                {!! $data->note !!}
                            </textarea>
                        </td>
                        <td><button type="submit" class="btn btn-success text-light">Update</button></td>
                    </form>
                </tr>
            </table>
            
        </div>
    </div>
@endsection