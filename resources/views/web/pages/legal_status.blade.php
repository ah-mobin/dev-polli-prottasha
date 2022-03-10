@extends('web.layout.main')

@section('page')
    <div class="col-md-8 col-12">
        <div class="branches py-2 my-4">
            <h3 class="text-center mb-4">{{ $title }}</h3>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Name of Concerned Dept/Institude</th>
                    <th>Registration No</th>
                    <th>Date of Registration</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($statuses as $ls)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $ls->department_name }}</td>
                    <td>
                        @if(!empty($ls->registration_link))
                        <a class="btn btn-primary" href={{ $ls->registration_link }}>Click Here</a>
                        @else
                            {{ $ls->registration_no }}
                        @endif
                    </td>
                    <td>{{ $ls->registration_date }}</td>
                </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
