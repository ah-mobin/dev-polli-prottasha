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
          <h5 class="my-3">Section One</h5>
          <table class="table table-bordered">
              <tr>
                <th>First Content</th>
                <form action="{{ route('admin.home.sec-one.content-one') }}" method="POST">
                  @csrf
                  @method('put')
                  <td width="60%">
                      <textarea class="ckeditor form-control" name="item_one">
                          {!! $secOne->item_one !!}
                      </textarea>
                  </td>
                  <td><button type="submit" class="btn btn-success text-light">Update</button></td>
              </form>
              </tr>

              <tr>
                <th>First Content</th>
                <form action="{{ route('admin.home.sec-one.content-two') }}" method="POST">
                  @csrf
                  @method('put')
                  <td width="60%">
                      <textarea class="ckeditor form-control" name="item_two">
                          {!! $secOne->item_two !!}
                      </textarea>
                  </td>
                  <td><button type="submit" class="btn btn-success text-light">Update</button></td>
              </form>
              </tr>

              <tr>
                <th>First Content</th>
                <form action="{{ route('admin.home.sec-one.content-three') }}" method="POST">
                  @csrf
                  @method('put')
                  <td width="60%">
                      <textarea class="ckeditor form-control" name="item_three">
                          {!! $secOne->item_three !!}
                      </textarea>
                  </td>
                  <td><button type="submit" class="btn btn-success text-light">Update</button></td>
              </form>
              </tr>
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


        <div class="card-body">
          <h5 class="my-3">Section Three</h5>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSecThreeItem">
          Add Item
        </button>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse($threes as $item)
                  <tr>
                      <td>{{ $item->title }}</td>
                      <td><img src="{{ $item->image }}" height="120px" alt=""></td>
                      <td>
                        <button type="button" class="btn btn-info text-light ms-3" data-bs-toggle="modal" data-bs-target="#editSecThreeItem{{ $item->id }}">
                          Edit
                        </button>
                        <button type="button" class="btn btn-warning text-light ms-3" data-bs-toggle="modal" data-bs-target="#removeSecThreeItem{{ $item->id }}">
                          Remove
                        </button>
                      </td>
                  </tr>

                  <!-- Add Section Three Item Modal -->
                <div class="modal fade" id="editSecThreeItem{{ $item->id }}" tabindex="-1" aria-labelledby="editSecThreeItemLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <form action="{{ route('admin.home.sec-three.update',$item->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editSecThreeItemLabel">Edit Item</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ $item->title }}" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                          </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                          <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success text-light">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="removeSecThreeItem{{ $item->id }}" tabindex="-1" aria-labelledby="removeSecThreeItemLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <form action="{{ route('admin.home.sec-three.delete',$item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="modal-content">
                          <div class="modal-body text-center">
                            <h3>Are you sure you want remove the item?</h3>
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
          <h5 class="my-3">Youtube Videos</h5>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVideo">
          Add Slider
        </button>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>Title</th>
                      <th>Video</th>
                      <th>Remove</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse($videos as $item)
                  <tr>
                      <td>{{ $item->title }}</td>
                      <td><iframe width="100%" height="200" src="https://www.youtube.com/embed/{{ $item->yt_vide_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                      <td>
                        <button type="button" class="btn btn-info text-light ms-3" data-bs-toggle="modal" data-bs-target="#editVideo{{ $item->id }}">
                          Edit
                        </button>
                        <button type="button" class="btn btn-warning text-light ms-3" data-bs-toggle="modal" data-bs-target="#remeoveVideo{{ $item->id }}">
                          Remove
                        </button>
                      </td>
                  </tr>


                  <!-- Edit YT Modal -->
                <div class="modal fade" id="editVideo{{ $item->id }}" tabindex="-1" aria-labelledby="editVideoLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <form action="{{ route('admin.videos.update',$item->id) }}" method="post">
                      @csrf
                      @method('put')
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editVideoLabel">Edit Video Data</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ $item->title }}" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="ytVideId">Youtube Link ID</label>
                            <input type="text" name="yt_vide_id" value="{{ $item->yt_vide_id }}" class="form-control">
                          </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                          <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success text-light">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="remeoveVideo{{ $item->id }}" tabindex="-1" aria-labelledby="remeoveVideoLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <form action="{{ route('admin.videos.delete',$item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="modal-content">
                          <div class="modal-body text-center">
                            <h3>Are you sure you want remove the video?</h3>
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


    <!-- Add Section Three Item Modal -->
    <div class="modal fade" id="addSecThreeItem" tabindex="-1" aria-labelledby="addSecThreeItemLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('admin.home.sec-three.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addSecThreeItemLabel">Add New Item</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
              </div>
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

    <!-- Create YT Modal -->
    <div class="modal fade" id="addVideo" tabindex="-1" aria-labelledby="addVideoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('admin.videos.store') }}" method="post">
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addVideoLabel">Add New Youtube</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
              </div>
              <div class="form-group">
                <label for="ytVideId">Youtube Link ID</label>
                <input type="text" name="yt_vide_id" class="form-control">
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