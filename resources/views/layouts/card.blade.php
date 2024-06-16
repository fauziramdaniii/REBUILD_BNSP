@extends('layouts.main')

@section('content')
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line justify-content-center ">
            <div class="card-toolbar">
                @yield('card')
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
                    @yield('body')
                </div>
            </div>
        </div>
    </div>
@endsection
