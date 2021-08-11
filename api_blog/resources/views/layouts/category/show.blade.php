@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật mục bài viết <a href="{{url('/home')}}">Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('category.update',[$category->id])}}" autocomplete="off" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" value="{{$category->title}}" class="form-control" name="title">
                            <label for="title">Mô tả danh mục</label>
                            <textarea name="short_desc" id="ckeditor_desc"  placeholder="Nội dung..." rows="5" class="form-control" style="resize:none" >{{$category->shor_desc}}</textarea>
                            <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="Cập nhật ">
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection