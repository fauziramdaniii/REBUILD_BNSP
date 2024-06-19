<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">

<head>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Social Media</title>
    <meta name="description" content="No aside layout examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="../../../theme/demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle1036.css?v=2.1.1"
        rel="stylesheet" type="text/css" />
    <link href="../../../theme/demo1/dist/assets/plugins/global/plugins.bundle1036.css?v=2.1.1" rel="stylesheet"
        type="text/css" />
    <link href="../../../theme/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle1036.css?v=2.1.1" rel="stylesheet"
        type="text/css" />
    <link href="../../../theme/demo1/dist/assets/css/style.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
    <link href="../../../theme/demo1/dist/assets/css/themes/layout/header/base/light.css" rel="stylesheet"
        type="text/css" />
    <link href="../../../theme/demo1/dist/assets/css/themes/layout/header/menu/light.css" rel="stylesheet"
        type="text/css" />
    <link href="../../../theme/demo1/dist/assets/css/themes/layout/brand/light.css" rel="stylesheet" type="text/css" />
    <link href="../../../theme/demo1/dist/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css"> --}}
</head>

<style>
    /* .modal-dialog {
        max-width: 90%;
    } */

    .modal-header {
        border: none;
    }

    .modal-title-filter {
        color: #2D2D2D;
        font-size: 1.2em;
        text-align: center;
    }
</style>

<body id="kt_body"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled page-loading">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="flex-row-auto offcanvas-mobile " id="kt_content_sidebar">
                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body" id="tabstrip">
                            <!--begin::User-->
                            <div class="text-center">

                                <div class="card-header py-3">
                                    <div class="card-title align-items-start flex-column">
                                        <h3 class="card-label font-weight-bolder text-dark">Ceker T-Rex</h3>
                                    </div>
                                </div>


                                <ul
                                    class="navi navi-hover navi-active navi-accent navi-link-rounded font-weight-bold pb-10">
                                    <li class="navi-item py-1">
                                        <a class="navi-link py-4 {{ Request::is('home*') ? 'active' : '' }}"
                                            href="/home" id="home">
                                            <span class="navi-icon mr-2">
                                                <span class="svg-icon svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Home/Home.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path
                                                                d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                            <path
                                                                d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            </span>
                                            <span class="navi-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="navi-item py-1">
                                        <a class="navi-link py-4 {{ Request::is('tag*') ? 'active' : '' }}"
                                            href="/tag">
                                            <span class="navi-icon mr-2">
                                                <span class="svg-icon svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/General/Search.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path
                                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            </span>
                                            <span class="navi-text">Hashtag</span>
                                        </a>
                                    </li>
                                    <li class="navi-item py-1">
                                        <a class="navi-link py-4 {{ Request::is('profile') ? 'active' : '' }}"
                                            href="/profile">
                                            <span class="navi-icon mr-2">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Communication/Adress-book2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <span class="navi-text">Profile</span>
                                        </a>
                                    </li>
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-primary btn-lg btn-block mt-5"
                                            data-toggle="modal" data-target="#exampleModalScrollable">POST
                                        </button>
                                    </div>


                                    <form action="{{ route('logout') }}" method="POST" class="mt-10"
                                        id="form-logout">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                            <div class="d-flex flex-column text-right pr-3">
                                                <span
                                                    class="text-dark-75 font-weight-bold font-size-sm">{{ Auth()->user()->username ?? 'guest' }}</span>
                                                <span class="font-weight-bolder font-size-sm">Logout</span>
                                            </div>
                                            <span class="symbol symbol-40">
                                                <img alt="Pic" src="<?php echo \App\Models\User::getPicture(auth()->user()->id); ?>" />
                                            </span>
                                        </button>
                                    </form>

                                </ul>
                                <!--end::Nav-->
                            </div>
                            <!--end::Body-->

                        </div>
                        <!--end::Nav Panels Wizard 1-->
                    </div>
                </div>
            </div>
            <div class="col-lg-8" id="content-container">
                @yield('content')
            </div>
        </div>

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop">
            <span class="svg-icon">
                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10"
                            rx="1" />
                        <path
                            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                            fill="#000000" fill-rule="nonzero" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </div>


        <!-- Button trigger modal-->

        <!-- Modal-->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="symbol symbol-40">
                            <img alt="Pic"
                                src="{{ $user->profile_picture ? asset('uploads/img/' . $user->profile_picture) : asset('img/blank.png') }}" />
                        </span>
                        <h5 class="modal-title modal-title-filter" id="exampleModalLabel">
                            {{ Auth::user()->username }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="postForm" class="dropzone" action="/posts" method="post">
                            @csrf
                            <div class="mb-3">
                                <textarea class="form-control" id="content" name="content" rows="3" placeholder="What's on your mind?"></textarea>
                            </div>
                            <div class="mb-3">
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <div class="dropzone dropzone-default dropzone-primary" id="kt_dropzone_2">
                                            <div class="dropzone-msg dz-message needsclick">
                                                <h3 class="dropzone-msg-title">Drop Images Here or Click to Upload.
                                                </h3>
                                                <span class="dropzone-msg-desc">Upload up to 10 files</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary font-weight-bold"
                            onclick="submitPostForm()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

</body>

<script src="{{ asset('../../../theme/demo1/dist/assets/plugins/global/plugins.bundle1036.js?v=2.1.1') }}"></script>
<script src="{{ asset('../../../theme/demo1/dist/assets/js/scripts.bundle1036.js?v=2.1.1') }}"></script>
<script src="{{ asset('../../../theme/demo1/dist/assets/js/pages/widgets1036.js?v=2.1.1') }}"></script>
<script src="{{ asset('../../../theme/demo1/dist/assets/js/pages/custom/profile/profile1036.js?v=2.1.1') }}"></script>
<script src="{{ asset('../../../theme/demo1/dist/assets/js/pages/features/file-upload/dropzonejs1036.js?v=2.1.1') }}">
</script>
<script>
    $('#exampleModalScrollable').on('shown.bs.modal', function() {
        // Code to refresh or reapply the image background
        $('.image-input-wrapper').css('background-image', function() {
            return 'url(' + ($(this).data('image-url') || '{{ asset('img/blank.png') }}') + ')';
        });
    });

    Dropzone.autoDiscover = false;
    let uploadedImages = [];

    const myDropzone = new Dropzone("#kt_dropzone_2", {
        url: '/upload_temp', // Temporary endpoint for uploading images
        paramName: 'file',
        maxFiles: 10,
        maxFilesize: 2, // MB
        acceptedFiles: 'image/*',
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        success: function(file, response) {
            uploadedImages.push(response.filepath); // Store the uploaded file paths
        },
        removedfile: function(file) {
            let response;
            if (file.xhr && file.xhr.response) {
                response = JSON.parse(file.xhr.response);
            }

            if (response && response.filepath) {
                let index = uploadedImages.indexOf(response.filepath);
                if (index > -1) {
                    uploadedImages.splice(index, 1);
                }
            }

            let _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) :
                void 0;
        }
    });

    function submitPostForm() {
        const content = document.getElementById('content').value;
        const userId = "{{ Auth::user()->id }}"; // Assuming the user is logged in and their ID is available

        // Debugging logs
        console.log('User ID:', userId);
        console.log('Content:', content);
        console.log('Uploaded Images:', uploadedImages);

        // Create a FormData object
        let formData = new FormData();
        formData.append('user_id', userId);
        formData.append('content', content);
        formData.append('_token', "{{ csrf_token() }}");

        // Append images to the formData
        for (let i = 0; i < uploadedImages.length; i++) {
            formData.append('images[]', uploadedImages[i]);
        }

        $.ajax({
            url: '/posts',
            type: 'POST',
            data: formData,
            processData: false, // Prevent jQuery from processing the data
            contentType: false, // Prevent jQuery from setting content type
            success: function(response) {
                // Handle success
                alert('Post created successfully!');

                // Clear the form fields
                document.getElementById('content').value = '';

                // Clear Dropzone files
                myDropzone.removeAllFiles(true);

                // Clear the uploadedImages array
                uploadedImages = [];

                // Hide the modal
                $('#exampleModalScrollable').modal('hide');

                // Optionally, refresh the page or update the post list dynamically
            },
            error: function(response) {
                // Handle error
                alert('Failed to create post.');
                console.log(response); // Log the response for debugging
            }
        });
    }
</script>

</html>
