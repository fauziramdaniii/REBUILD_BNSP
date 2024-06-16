@extends('layouts.main')

@section('content')
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
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                            <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                            <span class="nav-text">Following</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel"
                    aria-labelledby="kt_tab_pane_1_4">
                    <div class="card card-custom bg-success">
                        <div class="card-header border-0">
                            <div class="card-title">

                                <h3 class="card-label text-white">
                                    Fauzi Ramdani
                                </h3>
                            </div>
                            {{-- <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-white font-weight-bold">
                                    <i class="flaticon2-cube"></i> Settings
                                </a>
                            </div> --}}
                        </div>
                        <div class="separator separator-solid separator-white opacity-20"></div>
                        <div class="card-body text-white">
                            Satu Titik 2 Koma, Kamu Cantik No WA nya berapa, ehe 😘
                        </div>
                        <span class="card-icon text-right mr-5" title="Comment">
                            <i class="flaticon2-chat-1 text-white"></i>
                        </span>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                    Asomasow
                </div>
            </div>
        </div>
    </div>
@endsection
