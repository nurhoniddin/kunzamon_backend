@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 1360.97px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>E'lonlar</h1>
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
                                <a class="btn btn-info" href="{{ route('notification.index') }}"><i
                                        class="fa fa-arrow-alt-circle-left "></i></a>
                            </div>
                            <form action="{{ route('notification.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- /.card-header -->
                                <div class="card-body">
                                    <input type="file" name="image" class="form-control" required="">
                                    <br>
                                    <label for="ads_start">Boshlanishi</label>
                                    <input type="date" name="ads_start"  class="form-control">
                                    <hr>
                                    <label for="ads_end">Tugashi</label>
                                    <input type="date" name="ads_end"  class="form-control">
                                    <hr>
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
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="uz" role="tabpanel"
                                             aria-labelledby="uz">
                                            <label for="title_uz">Sarlavha</label>
                                            <input type="text" name="title_uz"  class="form-control">
                                            <hr>
                                            <label for="description_uz">Qisqacha</label>
                                            <input type="text" name="description_uz"   class="form-control">
                                            <hr>
                                            <label for="body_uz">To'liq ma'lumot</label>
                                            <textarea class="form-control" id="editor1"  name="body_uz">

                                            </textarea>
                                        </div>
                                        <div class="tab-pane fade" id="kiril" role="tabpanel"
                                             aria-labelledby="kiril">
                                            <label for="title_uz">Sarlavha</label>
                                            <input type="text" name="title_cyril"  class="form-control">
                                            <hr>
                                            <label for="description_uz">Qisqacha</label>
                                            <input type="text" name="description_cyril"   class="form-control">
                                            <hr>
                                            <label for="body_uz">To'liq ma'lumot</label>
                                            <textarea class="form-control" id="editor2"  name="body_cyril">

                                            </textarea>
                                        </div>
                                        <div class="tab-pane fade" id="ru" role="tabpanel"
                                             aria-labelledby="ru">
                                            <label for="title_uz">Sarlavha</label>
                                            <input type="text" name="title_ru"  class="form-control">
                                            <hr>
                                            <label for="description_uz">Qisqacha</label>
                                            <input type="text" name="description_ru"   class="form-control">
                                            <hr>
                                            <label for="body_uz">To'liq ma'lumot</label>
                                            <textarea class="form-control" id="editor3"  name="body_ru">

                                            </textarea>
                                        </div>
                                        <div class="tab-pane fade" id="en" role="tabpanel"
                                             aria-labelledby="en">
                                            <label for="title_uz">Sarlavha</label>
                                            <input type="text" name="title_en"  class="form-control">
                                            <hr>
                                            <label for="description_en">Qisqacha</label>
                                            <input type="text" name="description_en"   class="form-control">
                                            <hr>
                                            <label for="body_en">To'liq ma'lumot</label>
                                            <textarea class="form-control" id="editor4"  name="body_en">

                                            </textarea>
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

