@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 1360.97px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reklama & Roliklar</h1>
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
                                <a class="btn btn-info" href="{{ route('ads.index') }}"><i
                                            class="fa fa-arrow-alt-circle-left "></i></a>
                            </div>
                            <form action="{{ route('ads.store') }}" method="post" enctype="multipart/form-data">
                            @csr    f
                            <!-- /.card-header -->
                                <div class="card-body">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                               href="#uz" role="tab" aria-controls="uz"
                                               aria-selected="false">Uz</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                               href="#kiril" role="tab" aria-controls="pills-profile"
                                               aria-selected="false">Кирилча</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                               href="#ru" role="tab" aria-controls="ru"
                                               aria-selected="false">Русча</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                               href="#en" role="tab" aria-controls="en"
                                               aria-selected="false">English</a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <select class="form-select form-control text-uppercase" aria-label="Default select example">
                                        <option  selected>Sahifani Tanlang</option>
                                        <option value="1">Bosh Sahifa</option>
                                        <option value="2">Alohida Maqola</option>
                                        <option value="3">Kategoriya</option>
                                    </select>
                                    <hr>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="uz" role="tabpanel"
                                             aria-labelledby="uz">
                                            <label class="text-uppercase" for="title_uz">youtube link</label>
                                            <input type="text" name="youtube_link_uz"  class="form-control" required>
                                            <hr>

                                            <label class="text-uppercase" for="title_uz">video yuklash (min 1mb - max 5m)</label>
                                            <input type="file" name="video_uz"  class="form-control" required>
                                            <hr>

                                        </div>
                                        <div class="tab-pane fade" id="kiril" role="tabpanel"
                                             aria-labelledby="kiril">
                                            <label class="text-uppercase" for="title_uz">youtube link</label>
                                            <input type="text" name="youtube_link_cyril"  class="form-control" required>
                                            <hr>

                                            <label class="text-uppercase" for="title_uz">video yuklash (min 1mb - max 5m)</label>
                                            <input type="file" name="video_cyril"  class="form-control" required>
                                            <hr>
                                        </div>
                                        <div class="tab-pane fade" id="ru" role="tabpanel"
                                             aria-labelledby="ru">
                                            <label class="text-uppercase" for="title_uz">youtube link</label>
                                            <input type="text" name="youtube_link_ru"  class="form-control" required>
                                            <hr>

                                            <label class="text-uppercase" for="title_uz">video yuklash (min 1mb - max 5m)</label>
                                            <input type="file" name="video_ru"  class="form-control" required>
                                            <hr>
                                        </div>
                                        <div class="tab-pane fade" id="en" role="tabpanel"
                                             aria-labelledby="en">
                                            <label class="text-uppercase" for="title_uz">youtube link</label>
                                            <input type="text" name="youtube_link_en"  class="form-control" required>
                                            <hr>

                                            <label class="text-uppercase" for="title_uz">video yuklash (min 1mb - max 5m)</label>
                                            <input type="file" name="video_en"  class="form-control" required>
                                            <hr>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Saqlash</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
        CKEDITOR.replace( 'editor3' );
        CKEDITOR.replace( 'editor4' );
        filebrowserBrowseUrl: '/browser/browse.php';
        filebrowserImageBrowseUrl: '/browser/browse.php?type=Images';
        filebrowserUploadUrl: '/uploader/upload.php';
        filebrowserImageUploadUrl: '/uploader/upload.php?type=Images';
    </script>
@endsection

