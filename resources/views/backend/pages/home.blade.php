@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Home Page') }}
        </div>

        <div class="card-body">
            <h5 class="my-3">Sliders</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSlider">
            Add Slider
          </button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sliders as $item)
                    <tr>
                        <td><a href="{{ $item->image }}"><img src="{{ $item->image }}" height="350" width="250" alt=""></a></td>
                        <td>
                          <button type="button" class="btn btn-warning text-light ms-3" data-bs-toggle="modal" data-bs-target="#remeoveSlider{{ $item->id }}">
                            Remove
                          </button>
                        </td>
                    </tr>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="remeoveSlider{{ $item->id }}" tabindex="-1" aria-labelledby="remeoveSliderLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <form action="{{ route('admin.sliders.delete',$item->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="modal-content">
                            <div class="modal-body text-center">
                              <h3>Are you sure you want remove the slider?</h3>
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
                        <td colspan="3" class="text-center">No Data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>


        <div class="card-body">
            <h5 class="my-3">Success Stories</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStory">
            Add Story
          </button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Story</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($stories as $item)
                    <tr>
                        <td><a href="{{ $item->image }}"><img src="{{ $item->image }}" height="350" width="250" alt=""></a></td>
                        <td>
                          <button type="button" class="btn btn-warning text-light ms-3" data-bs-toggle="modal" data-bs-target="#remeoveStory{{ $item->id }}">
                            Remove
                          </button>
                        </td>
                    </tr>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="remeoveStory{{ $item->id }}" tabindex="-1" aria-labelledby="remeoveStoryLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <form action="{{ route('admin.stories.delete',$item->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="modal-content">
                            <div class="modal-body text-center">
                              <h3>Are you sure you want remove the story?</h3>
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
                        <td colspan="3" class="text-center">No Data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>
    </div>



    <!-- Create Slider Modal -->
    <div class="modal fade" id="addSlider" tabindex="-1" aria-labelledby="addSliderLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <form action="{{ route('admin.sliders.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addSliderLabel">Add Slider</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image" class="form-control">
                </div>
              </div>
              <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success text-light">Add</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    <!-- Create Story Modal -->
    <div class="modal fade" id="addStory" tabindex="-1" aria-labelledby="addStoryLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('admin.stories.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addStoryLabel">Add Story</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
              <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success text-light">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection