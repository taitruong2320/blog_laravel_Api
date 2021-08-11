@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm bài viết <a href="{{url('/home')}}">Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('post.store')}}" autocomplete="off" method="post" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" placeholder="Tiêu đề..." class="form-control" name="title" required>
                            <label for="title">Lượt Views</label>
                            <input type="text" placeholder="Thêm lượt views" class="form-control" name="views" required>
                            <label for="title">Hình ảnh</label>
                            <input type="file" class="form-control" name="image" required>
                            <label for="title">Mô tả ngắn</label>
                            <textarea name="short_desc" id="ckeditor_shortdesc" placeholder="Mô tả ngắn..." rows="5" class="form-control" style="resize:none" required></textarea>
                            <label for="title">Nội dung</label>
                            <textarea name="desc" id="ckeditor_desc"  placeholder="Nội dung..." rows="5" class="form-control" style="resize:none" required></textarea>
                            <label for="title">Danh mục</label>
                            <select name="post_category_id" class="form-control">
                                @foreach ($category as $key => $cate)
                                <option value="{{$cate->id}}">{{$cate->title}}</option>
                                @endforeach
                            </select> 
                            <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="Thêm bài viết">
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection