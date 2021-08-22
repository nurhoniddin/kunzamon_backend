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
                            <form action="{{ route('ads.update',$ads->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                                @method('PATCH')
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
                                    <label for="checkbox" class="form-group text-uppercase"> Sahifaga junatish
                                        <div class="form-check text-uppercase">
                                            <input class="form-check-input" type="checkbox" value="1" name="home" >
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Bosh sahifa
                                            </label>
                                        </div>

                                        <div class="form-check text-uppercase">
                                            <input class="form-check-input" type="checkbox" value="1" name="detail" >
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Alohida
                                            </label>
                                        </div>

                                        <div class="form-check text-uppercase">
                                            <input class="form-check-input" type="checkbox" value="1" name="category" >
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Kategoriya
                                            </label>
                                        </div>
                                    </label>
                                    <hr>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="uz" role="tabpanel"
                                             aria-labelledby="uz">
                                            <label class="text-uppercase" for="title_uz">Rasm</label>
                                            <input type="file" name="image"  class="form-control" >
                                            <hr>

                                            <label class="text-uppercase" for="title_uz">youtube link</label>
                                            <input type="text" name="youtube_link_uz" value="{{ $ads->youtube_link_uz }}"  class="form-control" >
                                            <hr>

                                            <label class="text-uppercase" for="title_uz">video yuklash (min 1mb - max 5m)</label>
                                            <input type="file" name="video_uz"   class="form-control" >
                                            <hr>

                                            <label class="text-uppercase" for="content_uz">Matn</label>
                                            <textarea class="form-control" name="content_uz" id="" cols="30" rows="10">
                                                {{ $ads->content_uz }}
                                            </textarea>
                                            <hr>

                                        </div>
                                        <div class="tab-pane fade" id="kiril" role="tabpanel"
                                             aria-labelledby="kiril">
                                            <label class="text-uppercase" for="title_uz">youtube link</label>
                                            <input type="text" name="youtube_link_cyril" value="{{ $ads->youtube_link_cyril }}"  class="form-control" >
                                            <hr>

                                            <label class="text-uppercase" for="title_uz">video yuklash (min 1mb - max 5m)</label>
                                            <input type="file" name="video_cyril"  class="form-control" >
                                            <hr>
                                            <label class="text-uppercase" for="content_uz">Matn</label>
                                            <textarea class="form-control" name="content_cyril" id="" cols="30" rows="10">
                                                {{ $ads->content_cyril }}
                                            </textarea>
                                            <hr>
                                        </div>
                                        <div class="tab-pane fade" id="ru" role="tabpanel"
                                             aria-labelledby="ru">
                                            <label class="text-uppercase" for="title_uz">youtube link</label>
                                            <input type="text" name="youtube_link_ru" value="{{ $ads->youtube_link_ru }}"  class="form-control" >
                                            <hr>

                                            <label class="text-uppercase" for="title_uz">video yuklash (min 1mb - max 5m)</label>
                                            <input type="file" name="video_ru"  class="form-control" >
                                            <hr>
                                            <label class="text-uppercase" for="content_uz">Matn</label>
                                            <textarea class="form-control" name="content_ru" id="" cols="30" rows="10">
                                                {{ $ads->content_ru }}
                                            </textarea>
                                            <hr>
                                        </div>
                                        <div class="tab-pane fade" id="en" role="tabpanel"
                                             aria-labelledby="en">
                                            <label class="text-uppercase" for="title_uz">youtube link</label>
                                            <input type="text" name="youtube_link_en" value="{{ $ads->youtube_link_en }}"  class="form-control" >
                                            <hr>

                                            <label class="text-uppercase" for="title_uz">video yuklash (min 1mb - max 5m)</label>
                                            <input type="file" name="video_en"  class="form-control" >
                                            <hr>
                                            <label class="text-uppercase" for="content_uz">Matn</label>
                                            <textarea class="form-control" name="content_en" id="" cols="30" rows="10">
                                                {{ $ads->content_en }}
                                            </textarea>
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

