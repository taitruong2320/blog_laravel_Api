@extends('layout')
@section('content')
@include('pages.banner')
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
                {{-- <div class="about-one">
                    <p>Find The Most</p>
                    <h3>Coffee of the month</h3>
                </div>
                <div class="about-two">
                    <a href="single.html"><img src="images/c-1.jpg" alt="" /></a>
                    <p>Posted by <a href="#">Johnson</a> on 10 feb, 2015 <a href="#">comments(2)</a></p>
                    <p>Phasellus fringilla enim nibh, ac pharetra nulla vestibulum ac. Donec tempor fermentum felis, non placerat sem ultrices ut. Nam molestie nunc nec felis hendrerit, in pulvinar arcu mollis. Quisque eget purus nec velit venenatis tincidunt vitae ac massa. Proin vel ornare tellus. Duis consectetur gravida tellus ut varius. Aenean tellus massa, laoreet ut euismod et, pretium id ex. Mauris hendrerit suscipit hendrerit.</p>
                    <p>Quisque ultrices ligula a nisl porttitor, vitae porta tortor eleifend. Nulla nec imperdiet ipsum, ut cursus mauris. Proin ut sodales sem, quis vestibulum libero. Proin tempor venenatis congue. Phasellus mollis massa sit amet pharetra consequat. Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
                    <div class="about-btn">
                        <a href="{{url('/bai-viet/1')}}">Read More</a>
                    </div>
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
                        @foreach($all_post as $key => $post)
                        
                            <div class=""  style="margin:5px">
                                <a href="{{route('danh-muc.show',['id'=>$post->category->id,'slug'=>Str::slug($post->category->title)])}}"><h6>{{$post->category->title}}</h6></a>
                                <a href="{{route('bai-viet.show',['id'=>$post->id])}}">
                                <div class="col-md-6 abt-left">
                                    <img style="width: 350px;height: 236px;" src="{{asset('public/uploads/'.$post->image)}}" alt="{{Str::slug($post->title)}}" />
                                
                                    
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
            {{$all_post->links()}}
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Bài viết mới nhất</h3>
                        @foreach($new_post as $key => $new)
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
                </div>
                <div class="abt-2">
                    <h3>Bài viết nhiều</h3>
                    <ul>
                        @foreach($views_post as $key => $view)
                        <li><a href="{{route('bai-viet.show',['id'=>$view->id])}}">{{$view->title}}</a></li>
                        @endforeach	
                    </ul>	
                    
                </div>
                <div class="abt-2">
                    <h3>NEWS LETTER</h3>
                    <div class="news">
                        <form>
                            <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>			
        </div>		
    </div>
</div>
@endsection