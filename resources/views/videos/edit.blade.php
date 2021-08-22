@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 1360.97px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Videolar</h1>
                    </div>
                    {{--                    <div class="col-sm-6">--}}
                    {{--                        <ol class="breadcrumb float-sm-right">--}}
                    {{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                    {{--                            <li class="breadcrumb-item active">Simple Tables</li>--}}
                    {{--                        </ol>--}}
                    {{--                    </div>--}}
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-primary" href="{{ route('videos.index') }}">Bekor qilish</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('videos.update',$video->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <select class="custom-select" id="inputGroupSelect03" name="videocat_id" required>
                                        <option value="">kategoriya...</option>
                                        @foreach($category as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->name_uz }}</option>
                                        @endforeach
                                    </select>
                                    <hr>
                                    <label for="video">image</label>
                                    <input type="file" name="image" class="form-control">
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#uz"
                                               role="tab" aria-controls="home" aria-selected="true">uz</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#kiril"
                                               role="tab" aria-controls="profile" aria-selected="false">kiril</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ru" role="tab"
                                               aria-controls="contact" aria-selected="false">ru</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#en" role="tab"
                                               aria-controls="contact" aria-selected="false">en</a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="uz" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <input type="text" name="title_uz" value="{{ $video->title_uz }}" class="form-control" placeholder="video nomi">
                                            <hr>
                                            <input type="text" name="video_link_uz" value="{{ $video->video_link_uz }}" class="form-control" placeholder="video link">
                                            <hr>
                                            <label for="video">video</label>
                                            <input type="file" name="video_file_uz" class="form-control">
                                            <hr>
                                        </div>
                                        <div class="tab-pane fade" id="kiril" role="tabpanel"
                                             aria-labelledby="profile-tab">
                                            <input type="text" name="title_cyril" value="{{ $video->title_cyril }}" class="form-control" placeholder="video nomi">
                                            <hr>
                                            <input type="text" name="video_link_cyril" value="{{ $video->video_link_cyril }}" class="form-control" placeholder="video link">
                                            <hr>
                                            <label for="video">video</label>
                                            <input type="file" name="video_file_cyril" class="form-control">
                                            <hr>
                                        </div>
                                        <div class="tab-pane fade" id="ru" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <input type="text" name="title_ru" value="{{ $video->title_ru }}" class="form-control" placeholder="video nomi">
                                            <hr>
                                            <input type="text" name="video_link_ru" value="{{ $video->video_link_ru }}" class="form-control" placeholder="video link">
                                            <hr>
                                            <label for="video">video</label>
                                            <input type="file" name="video_file_ru" class="form-control">
                                            <hr>
                                        </div>
                                        <div class="tab-pane fade" id="en" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <input type="text" name="title_en" value="{{ $video->title_en }}" class="form-control" placeholder="video nomi">
                                            <hr>
                                            <input type="text" name="video_link_en" value="{{ $video->video_link_en }}" class="form-control" placeholder="video link">
                                            <hr>
                                            <label for="video">video</label>
                                            <input type="file" name="video_file_en" class="form-control">
                                            <hr>
                                        </div>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary mt-3" >Saqlash</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
