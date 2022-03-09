@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Legal Status') }}
        </div>

        @includeIf('flash')

        <div class="card-body">
            <button type="button" class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#addLG">
                Add
              </button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Department Name</th>
                        <th>Registration No</th>
                        <th>Registration Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td>{{ $item->department_name }}</td>
                        <td>
                            @if($item->registration_link)
                                <a href="{{ $item->registration_link }}">Click Here</a>
                            @else
                            {{ $item->registration_no }}
                            @endif
                        </td>
                        <td>{{ $item->registration_date }}</td>
                        <td>
                            <button type="button" class="btn btn-warning text-light" data-bs-toggle="modal" data-bs-target="#editLG{{ $item->id }}">
                                Edit
                            </button>

                            <button type="button" class="btn btn-danger text-light" data-bs-toggle="modal" data-bs-target="#removeLG{{ $item->id }}">
                                Remove
                            </button>
                        </td>
                    </tr>


                    <!-- Update Modal -->
    <div class="modal fade" id="editLG{{ $item->id }}" tabindex="-1" aria-labelledby="editLGLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('admin.pages.legal-status.update',$item->id) }}" method="post">
                @csrf
                @method('put')
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editLGLabel">Update Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="departmentName">Department Name</label>
                      <input type="text" name="department_name" value="{{ $item->department_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="registration_no">Registration No</label>
                        <input type="text" name="registration_no" value="{{ $item->registration_no }}" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="registrationLink">Registration Link</label>
                        <input type="text" name="registration_link" value="{{ $item->registration_link }}" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="registrationDate">Registration Date</label>
                        <input type="date" name="registration_date" value="{{ $item->registration_date }}" class="form-control">
                      </div>
                  </div>
                  <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success text-light">Create</button>
                  </div>
                </div>
              </form>
        </div>
      </div>


      <div class="modal fade" id="removeLG{{ $item->id }}" tabindex="-1" aria-labelledby="removeLGLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <form action="{{ route('admin.pages.legal-status.delete',$item->id) }}" method="post">
            @csrf
            @method('delete')
            <div class="modal-content">
              <div class="modal-body">
                <h3>Are you sure you want to delete the item?</h3>
              </div>
              <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-success text-light" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger text-light">Yes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">No Data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>
    </div>




    <!-- Create Modal -->
    <div class="modal fade" id="addLG" tabindex="-1" aria-labelledby="addWWDLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <form action="{{ route('admin.pages.legal-status.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addWWDLabel">Add Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="departmentName">Department Name</label>
                  <input type="text" name="department_name" value="{{ old('department_name') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="registration_no">Registration No</label>
                    <input type="text" name="registration_no" value="{{ old('registration_no') }}" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="registrationLink">Registration Link</label>
                    <input type="text" name="registration_link" value="{{ old('registration_link') }}" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="registrationDate">Registration Date</label>
                    <input type="date" name="registration_date" value="{{ old('registration_date') }}" class="form-control">
                  </div>
              </div>
              <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success text-light">Create</button>
              </div>
            </div>
          </form>
        </div>
      </div>
@endsection