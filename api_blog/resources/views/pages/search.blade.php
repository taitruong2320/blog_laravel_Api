@extends('layout');
@section('content');

<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
             
                <div class="about-one">
                    <h3>Từ khóa tìm kiếm : {{$keywords}}</h3>
                </div>
                {{-- <div class="about-two">
                    
                    
                    <ul>
                        <li><p>Share : </p></li>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                        <li><a href="#"><span class="pin"> </span></a></li>
                        <li><a href="#"><span class="rss"> </span></a></li>
                        <li><a href="#"><span class="drbl"> </span></a></li>
                    </ul>
                </div>	 --}}
                <div class="about-tre">
                    <div class="a-1">
                        @foreach($category_post as $key => $post)
                        <a href="{{route('bai-viet.show',['id'=>$post->id])}}">
                            <div class=""  style="margin:5px">
                                <div class="col-md-6 abt-left">
                                    <img style="width: 350px;height: 236px;" src="{{asset('public/uploads/'.$post->image)}}" alt="{{Str::slug($post->title)}}" />
                                {{-- </div>
                                <div class="col-md-6 abt-left"> --}}
                                    <h6>{{$post->category->title}}</h6>
                                    <h3>{{$post->title}}</h3>
                                    <p>{!!$post->short_desc!!}</p>
                                    <label>{{$post->post_date}}</label>
                                    
                                        <a href="{{route('bai-viet.show',['id'=>$post->id])}}">Đọc tiếp...</a>
                                    
                                </div>   
                            </div>
                        </a>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>	
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Danh mục gợi ý</h3>
                    <ul>
                        @foreach($category as $key => $value)
                        <li><a href="{{route('danh-muc.show',['id'=>$value->id,'slug'=>Str::slug($value->title)])}}">{{$value->title}} </a></li>
                        @endforeach
                    </ul>	
                </div>
                {{-- <div class="abt-2">
                    <h3>Bài viết xem nhiều</h3>
                        @foreach($views_post as $key => $new)
                        <a href="{{route('bai-viet.show',['id'=>$new->id])}}">
                        <div class="might-grid">
                            <div class="grid-might">
                                <img src="{{asset('public/uploads/'.$new->image)}}" class="img-responsive" alt=""> 
                            </div>
                            <div class="might-top">
                                <h4><a href="{{route('bai-viet.show',['id'=>$new->id])}}">{{$new->title}}</a></h4>
                                <p>{!!substr($new->short_desc,0,150)!!}...</p> 
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                        @endforeach						
                </div> --}}
            </div>
            <div class="clearfix"></div>			
        </div>		
    </div>
</div>
@endsection