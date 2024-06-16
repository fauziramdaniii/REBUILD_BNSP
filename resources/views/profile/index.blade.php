@extends('layouts.card')

@section('card')
    <ul class="nav nav-tabs nav-bold nav-tabs-line">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                <span class="nav-icon"><i class="flaticon2-chat-1"></i></span>
                <span class="nav-text">Posts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                <span class="nav-text">Setting Profile</span>
            </a>
        </li>
    </ul>
@endsection

@section('body')
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
                Asomasow
            </div>
            <div class="tab-pane fade " id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                <div class="card card-custom gutter-b">
                    <div class="card-header py-3">
                        <div class="card-title align-items-start flex-column">
                            <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                            <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal
                                information</span>
                        </div>
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-primary font-weight-bolder mr-2"
                                id="saveChangesButton">Save Changes</button>
                        </div>
                    </div>
                    <form class="form" action="{{ route('profile.update') }}" method="POST" id="formUpdateProfile"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h5 class="font-weight-bold mb-6">User Info</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Photo</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="image-input image-input-outline" id="kt_profile_avatar"
                                        style="background-image: url(../../../../../theme/demo1/dist/assets/media/users/blank.png)">
                                        <div class="image-input-wrapper" id="profileImageWrapper"
                                            style="background-image: url(<?php echo \App\Models\User::getPicture(auth()->user()->id); ?>)">
                                        </div>
                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change" data-toggle="tooltip" title="Change avatar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="profile_picture" accept=".png, .jpg, .jpeg"
                                                id="profilePictureInput" />
                                            <input type="hidden" name="profile_picture_remove" />
                                        </label>
                                        <span
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                    </div>
                                    <span class="form-text text-muted">Allowed file types: png, jpg, jpeg And Max Size
                                        2MB</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Username</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input name="username" class="form-control form-control-lg form-control-solid"
                                        type="text" value="{{ $user->username }}" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Email</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input name="email" class="form-control form-control-lg form-control-solid"
                                        type="text" value="{{ $user->email }}" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Bio</label>
                                <div class="col-lg-9 col-xl-6">
                                    <textarea name="bio" class="form-control form-control-lg form-control-solid">{{ $user->bio }}</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to show image preview
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#profileImageWrapper').css('background-image', 'url(' + e.target.result + ')');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            // Change event for profile picture input
            $('#profilePictureInput').change(function() {
                readURL(this);
            });

            // AJAX submit for form
            $('#saveChangesButton').on('click', function(e) {
                e.preventDefault();

                var formData = new FormData($('#formUpdateProfile')[0]);

                $.ajax({
                    url: "{{ route('profile.update') }}",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        alert(response.success);
                    },
                    error: function(response) {
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>
@endsection
