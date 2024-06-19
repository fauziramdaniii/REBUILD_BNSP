@extends('layouts.card')

@section('card')
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line justify-content-center ">
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                            <span class="nav-icon"><i class="flaticon2-chat-1"></i></span>
                            <span class="nav-text">For You</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                            <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                            <span class="nav-text">Following</span>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('body')
    <div class="card-body">
        @if ($posts->isEmpty())
            <p>No Post available</p>
        @else
            @foreach ($posts as $post)
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel"
                        aria-labelledby="kt_tab_pane_1_4">
                        <div class="card card-custom bg-success">
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <span class="symbol symbol-40 mr-3">
                                        <img alt="Pic"
                                            src="{{ $user->profile_picture ? asset('uploads/img/' . $user->profile_picture) : asset('img/blank.png') }}" />
                                    </span>
                                    <h3 class="card-label text-white">{{ $user->username }}</h3>
                                </div>
                            </div>
                            <div class="separator separator-solid separator-white opacity-20"></div>
                            <div class="card-body text-white">
                                {{ $post->content }}
                            </div>
                            @if ($post->images->isEmpty())
                                <p>No images for this post.</p>
                            @else
                                <div class="row justify-content-center">
                                    @foreach ($post->images as $image)
                                        <div class="col-4 mb-3 ml-3 -mr-3">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <img src="{{ $image->image_url }}" alt="Post Image" class="img-fluid"
                                                        style="width: 100%; height: 150px; object-fit: cover;">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <span class="card-icon text-right mr-5" data-toggle="tooltip" title="Comment">
                                <i class="flaticon2-chat-1 text-white"></i>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        {{-- <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
            Asomasow
        </div> --}}
    </div>
@endsection
