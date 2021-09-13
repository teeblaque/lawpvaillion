@extends('welcome')

@section('contents')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">User Profile</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ url('client/'.$user->avatar)}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="100" height="100">
                                <div class="mt-3">
                                    <h4>John Doe</h4>
                                    <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModals"  onclick="fun_edit('{{ $user->id }}')"><i class="ti-pencil icon-md"></i>Update profile</button>
                                    <input type="hidden" name="hidden_view" id="hidden_view" value="{{ route('user.edit') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">FIrst Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$user->first_name}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Last Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$user->last_name}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$user->email}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Date of Birth</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$user->dob}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Primary Legal Counsel</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$user->primary_legal_counsel}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Case Details</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea class="form-control" placeholder="Case Details" id="mytextarea" name="case_details">{!! $user->case_details !!}</textarea>
                                    {{-- <textarea class="form-control" name="details" id="details" cols="30" rows="10">{!! $user->case_details !!}</textarea> --}}
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- update modal --}}
       <div class="modal fade" id="exampleLargeModals" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Profile Picture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="edit_id" id="edit_id" value="">

                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Avatar</label>
                                    <input type="file" class="form-control" name="newavatar" id="avatar">
                                </div>

                                <div class="col-md-6">
                                    <img id="myimage" src="" width="100" height="100">
                                </div>

                                <div class="col-12">
                                    <br><br>
                                    <button type="submit" class="btn btn-primary px-5">Update</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                        </div>
                    </div>
            </div>
        </div>
    {{-- End update Modal --}}
@endsection

@section('scripts')
    <script>
        function fun_edit(id)
        {
            var view_url = $("#hidden_view").val();
                $.ajax({
                    url: view_url,
                    type:"GET",
                    data: {"id":id},
                    success: function(result){
                    // console.log(result);
                    $("#edit_id").val(result.id);
                    $("#myimage").attr('src', '/client/'+result.avatar);
                }
            });
        }
    </script>
@endsection
