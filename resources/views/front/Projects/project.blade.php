@extends('layouts.site')
@section('content')
    @include('front.Projects.includes.create_middlebar')
    <div class="row">
        {{-- @include('front.Projects.includes.projects_middlebar') --}}
        @foreach ($projects as $project)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <!-- Project Box -->
                <div class="project-box one mb-30">
                    <!-- Custom Checkbox -->
                    <label class="custom-checkbox">
                        <input type="checkbox" class="projectCheckbox">
                        <span class="checkmark"></span>
                    </label>
                    <!-- End Custom Checkbox -->

                    <div class="d-flex justify-content-between align-items-center mb-20">
                        <div class="___class_+?23___">
                            <a href="task-list.html">
                                <h4>{{ $project->title }}</h4>
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <!-- Starred -->
                            <div class="star">
                                <a href="#"><img src="{{ asset('assets/front/img/svg/star.svg') }}" alt=""
                                        class="svg"></a>
                            </div>
                            <!-- End Starred -->

                            <!-- Dropdown Button -->
                            <div class="dropdown-button ml-3">
                                <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                    <div class="menu-icon mr-0">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="color-balls">
                                        <span class="color color1"></span>
                                        <span class="color color2"></span>
                                        <span class="color color3"></span>
                                        <span class="color color4"></span>
                                        <span class="color color5"></span>
                                        <span class="color color6"></span>
                                        <span class="color color7"></span>
                                        <span class="color color8"></span>
                                    </div>
                                    <a href="create-new.html" class="edit">Edit</a>
                                    <a href="#" class="select">Select</a>
                                    <a href="#" class="delete">Delete</a>
                                </div>
                            </div>
                            <!-- End Dropdown Button -->
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-end pt-1">
                        <div class="font-12">
                            <p class="mb-0 l-height">Last update</p>
                            <p class="bold black">{{ $project->updated_at ? $project->updated_at : 'Soon' }}</p>
                        </div>

                        <div class="member">
                            <a href="#"><img src="{{ asset('assets/front/img/avatar/m27.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- End Project Box -->
            </div>
        @endforeach
        {{-- <div class="col-xl-3 col-lg-4 col-sm-6">
            <!-- Project Box -->
            <div class="project-box d-flex align-items-center justify-content-center mb-30">
                <a href="{{ route('projects.create') }}" class="bold font-14 black d-flex align-items-center">
                    <img src="{{ asset('assets/front/img/svg/plus.svg') }}" alt="" class="svg mr-2">
                    Create New Project
                </a>
            </div>
            <!-- End Project Box -->
        </div> --}}
    </div>
@endsection