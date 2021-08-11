@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bài viết <a href="{{url('/home')}}">Back</a></div>

                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            <p>{{Session::get('success')}}</p>
                        </div>
                    @endif
                    @if (Session::has('failure'))
                    <div class="alert alert-danger" role="alert">
                        <p>{{Session::get('failure')}}</p>
                    </div>
                    @endif
                    <table class="table table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Views</th>
                            <th scope="col">Ngày đăng</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Mô tả ngắn</th>
                            <th scope="col">Thuộc danh mục</th>
                            <th scope="col">Quản lÝ</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=0
                            @endphp
                            @foreach ($post as $postss)
                            @php
                            $i++;
                            @endphp
                          <tr>
                            <th scope="row">{{$i}}</th>
                            <th scope="row">{{$postss->title}}</th>
                            <th scope="row">{{$postss->views}}</th>
                            <th scope="row">{{$postss->post_date}}</th>
                            <th scope="row"><img width="100px" src="{{asset('public/uploads/'.$postss->image)}}"></th>
                            <th scope="row">{!!substr($postss->short_desc,0,50)!!}</th>
                            <th scope="row">{{$postss->category->title}}</th>
                            <td>
                                <form action="{{route('post.destroy',[$postss->id])}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" class="btn btn-danger mb-2 btn-sm" value="Delete">
                                </form>

                                <a href="{{route('post.show',[$postss->id])}}" class="btn btn-warning btn-sm">Edit</a> 
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
            <div style="margin:5px">
                {{ $post->links() }}
            </div>
            {{-- <nav style="margin:5px" aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav> --}}
        </div>
    </div>
</div>
@endsection