@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 1360.97px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Yangiliklar</h1>
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
                                <a class="btn btn-primary" href="{{ route('posts.index') }}">Bekor qilish</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <select class="custom-select" id="inputGroupSelect03" name="category_id" required>
                                        <option value="">kategoriya...</option>
                                        @foreach($category as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->name_uz }}</option>
                                        @endforeach
                                    </select>
                                    <hr>
                                    <input type="file" name="image" class="form-control" >
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
                                            <input type="text" name="title_uz" value="{{ $post->title_uz }}" class="form-control" >
                                            <hr>
                                            <input type="text" name="description_uz" value="{{ $post->description_uz }}" class="form-control"
                                                   >
                                            <hr>
                                            <input type="text" name="youtube_link_uz" value="{{ $post->youtube_link_uz }}" class="form-control"
                                                   >
                                            <hr>
                                            <label for="video">Video Fayl yuklash (min 1MB - max 5mb)</label>
                                            <input type="file" name="video_uz" class="form-control" >
                                            <hr>
                                            <hr>
                                            <textarea class="form-control" id="summary-ckeditor"
                                                      name="body_uz">
                                               {{ $post->body_uz }}
                                            </textarea>
                                        </div>
                                        <div class="tab-pane fade" id="kiril" role="tabpanel"
                                             aria-labelledby="profile-tab">
                                            <input type="text" name="title_cyril" class="form-control"
                                                   value="{{ $post->title_cyril }}">
                                            <hr>
                                            <input type="text" name="description_cyril" value="{{ $post->description_cyril }}" class="form-control"
                                                   >
                                            <hr>
                                            <input type="text" name="youtube_link_cyril" class="form-control"
                                                   value="{{ $post->youtube_link_cyril }}">
                                            <hr>
                                            <label for="video">Video Fayl yuklash (min 1MB - max 5mb)</label>
                                            <input type="file" name="video_cyril"  class="form-control" >
                                            <hr>
                                            <hr>
                                            <textarea class="form-control" id="summary-ckeditor1"
                                                      name="body_cyril">
                                                {{$post->body_cyril}}
                                            </textarea>
                                        </div>
                                        <div class="tab-pane fade" id="ru" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <input type="text" name="title_ru" class="form-control"  value="{{ $post->title_ru }}">
                                            <hr>
                                            <input type="text" name="description_ru" class="form-control"
                                                   value="{{ $post->description_ru }}">
                                            <hr>
                                            <input type="text" name="youtube_link_ru" class="form-control"
                                                   value="{{ $post->youtube_link_ru }}">
                                            <hr>
                                            <label for="video">Video Fayl yuklash (min 1MB - max 5mb)</label>
                                            <input type="file" name="video_ru" class="form-control" >
                                            <hr>
                                            <hr>
                                            <textarea class="form-control" id="summary-ckeditor2"
                                                      name="body_ru">
                                                {{ $post->body_ru }}
                                            </textarea>
                                        </div>
                                        <div class="tab-pane fade" id="en" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <input type="text" name="title_en" class="form-control" value="{{ $post->title_en }}">
                                            <hr>
                                            <input type="text" name="description_en" class="form-control"
                                                   value="{{ $post->description_en }}">
                                            <hr>
                                            <input type="text" name="youtube_link_en" class="form-control"
                                                   value="{{ $post->youtube_link_en }}">
                                            <hr>
                                            <label for="video">Video Fayl yuklash (min 1MB - max 5mb)</label>
                                            <input type="file" name="video_en" class="form-control" >
                                            <hr>
                                            <hr>
                                            <textarea class="form-control" id="summary-ckeditor3"
                                                      name="body_en">
                                                {{ $post->body_en }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Saqlash</button>
                                </form>
                            </div>
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
        CKEDITOR.replace('summary-ckeditor1');
        CKEDITOR.replace('summary-ckeditor2');
        CKEDITOR.replace('summary-ckeditor3');
        filebrowserBrowseUrl: '/browser/browse.php';
        filebrowserImageBrowseUrl: '/browser/browse.php?type=Images';
        filebrowserUploadUrl: '/uploader/upload.php';
        filebrowserImageUploadUrl: '/uploader/upload.php?type=Images';
    </script>
@endsection
