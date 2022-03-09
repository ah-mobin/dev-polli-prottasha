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
                    <td>{{ $ls->registration_link ? $ls->registration_link : $ls->registration_no }}</td>
                    <td>{{ $ls->registration_date }}</td>
                </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
