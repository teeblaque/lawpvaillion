@extends('welcome')

@section('contents')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Create Client</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Profile Client</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase"></h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                    <label for="inputFirstName" class="form-label">First Name</label>
                    <input type="text" placeholder="First name" class="form-control form-control-lg" value="{{old('first_name')}}" name="first_name" id="inputFirstName" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="inputFirstName" class="form-label">Last Name</label>
                    <input type="text" placeholder="Last Name" class="form-control form-control-lg" value="{{old('last_name')}}" name="last_name" id="inputFirstName" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="inputFirstName" class="form-label">Email</label>
                    <input type="email" placeholder="Email" class="form-control form-control-lg" value="{{old('email')}}" name="email" id="inputFirstName" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="inputFirstName" class="form-label">Primary Legal Counsel</label>
                    <input type="text" placeholder="Legal Counsel" class="form-control form-control-lg" value="{{old('primary_legal_counsel')}}" name="primary_legal_counsel" id="inputFirstName" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="inputFirstName" class="form-label">Date of Birth</label>
                    <input type="text" placeholder="Date of Birth" class="form-control form-control-lg datepicker" value="{{old('dob')}}" name="dob" id="inputFirstName" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="inputFirstName" class="form-label">Profile</label>
                    <input type="file" id="formFile" class="form-control form-control-lg" value="{{old('avatar')}}" name="avatar" id="inputFirstName">
                </div>

                <div class="col-md-12">
                    <label for="inputFirstName" class="form-label">Case Details</label>
                    <textarea class="form-control" placeholder="Case Details" id="mytextarea" name="case_details"></textarea>
                    {{-- <textarea class="form-control" id="case_details" name="newcase_details" placeholder="Description..." rows="3" required></textarea> --}}
                </div>

                <div class="col-12">
                    <br><br>
                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                </div>
                    </div>
            </form>
        </div>
    </div>

@endsection
