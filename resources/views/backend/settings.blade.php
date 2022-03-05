@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Settings Data') }}
        </div>

        <div class="card-body">

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <table class="table table-bordered">
                <tr>
                    <th width="35%">Site Name</th>
                    <form action="{{ route('admin.settings.sitename') }}" method="POST">
                        @csrf
                        <td>
                            <input type="text" name="site_name" value="{{ $data->site_name }}" class="form-control">
                        </td>
                        <td>
                            <button class="btn btn-success text-light" type="submit">Update</button>
                        </td>
                    </form>
                </tr>

                <tr>
                    <th width="35%">Site Name in Bangla</th>
                    <form action="{{ route('admin.settings.sitename-bn') }}" method="POST">
                        @csrf
                    <td>
                        <input type="text" name="site_name_bn" value="{{ $data->site_name_bn }}" class="form-control">
                    </td>
                    <td>
                        <button class="btn btn-success text-light" type="submit">Update</button>
                    </td>
                </form>
                </tr>

                <tr>
                    <th width="35%">Favicon</th>
                    <form action="{{ route('admin.settings.favicon') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <td>
                        <img src="{{ $data->favicon }}" height="50" alt="">
                    </td>
                    <td>
                        <input type="file" name="favicon" class="form-control">
                        <button class="btn btn-success text-light" type="submit">Update</button>
                    </td>
                </form>
                </tr>

                <tr>
                    <th width="35%">Logo</th>
                    <form action="{{ route('admin.settings.logo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <td>
                        <img src="{{ $data->logo }}" height="150" alt="">
                    </td>
                    <td>
                        <input type="file" name="logo" class="form-control">
                        <button class="btn btn-success text-light" type="submit">Update</button>
                    </td>
                </form>
                </tr>

                <tr>
                    <th width="35%">Physical Address Line One</th>
                    <form action="{{ route('admin.settings.address-one') }}" method="POST">
                        @csrf
                    <td>
                        <input type="text" name="physical_address_line_one" class="form-control" value="{{ $data->physical_address_line_one }}">
                    </td>
                    <td>
                        <button class="btn btn-success text-light" type="submit">Update</button>
                    </td>
                </form>
                </tr>

                <tr>
                    <th width="35%">Physical Address Line Two</th>
                    <form action="{{ route('admin.settings.address-two') }}" method="POST">
                        @csrf
                    <td>
                        <input type="text" name="physical_address_line_two" class="form-control" value="{{ $data->physical_address_line_two }}">
                    </td>
                    <td>
                        <button class="btn btn-success text-light" type="submit">Update</button>
                    </td>
                </form>
                </tr>

                <tr>
                    <th width="35%">Email Address</th>
                    <form action="{{ route('admin.settings.email') }}" method="POST">
                        @csrf
                    <td>
                        <input type="text" name="email_address" class="form-control" value="{{ $data->email_address }}">
                    </td>
                    <td>
                        <button class="btn btn-success text-light" type="submit">Update</button>
                    </td>
                </form>
                </tr>

                <tr>
                    <th width="35%">Phone Number</th>
                    <form action="{{ route('admin.settings.phone') }}" method="POST">
                        @csrf
                    <td>
                        <input type="text" name="phone_number" class="form-control" value="{{ $data->phone_number }}">
                    </td>
                    <td>
                        <button class="btn btn-success text-light" type="submit">Update</button>
                    </td>
                </form>
                </tr>

                <tr>
                    <th width="35%">Google Map Track Id</th>
                    <form action="{{ route('admin.settings.google-map-id') }}" method="POST">
                        @csrf
                    <td>
                        <input type="text" name="google_map" class="form-control" value="{{ $data->google_map }}">
                    </td>
                    <td>
                        <button class="btn btn-success text-light" type="submit">Update</button>
                    </td>
                </form>
                </tr>

                <tr>
                    <th width="35%">Facebook Page Id</th>
                    <form action="{{ route('admin.settings.fb-page-id') }}" method="POST">
                        @csrf
                    <td>
                        <input type="text" name="facebook_page" class="form-control" value="{{ $data->facebook_page }}">
                    </td>
                    <td>
                        <button class="btn btn-success text-light" type="submit">Update</button>
                    </td>
                </form>
                </tr>
                <tr>
                    <th width="35%">Footer Copyright Text</th>
                    <form action="{{ route('admin.settings.copyright-text') }}" method="POST">
                        @csrf
                    <td>
                        <input type="text" name="copyright_text" class="form-control" value="{{ $data->copyright_text }}">
                    </td>
                    <td>
                        <button class="btn btn-success text-light" type="submit">Update</button>
                    </td>
                </form>
                </tr>
                <tbody>
            </table>
        </div>
    </div>
@endsection