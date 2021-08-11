@extends('layout');
@section('content');
{{-- <div class="single">
    <div class="container">
            <div class="single-top">
                    <a href="#"><img class="img-responsive" src="{{ asset('images/single-1.jpg')}}" alt=" "></a>
                <div class=" single-grid">
                    <h4>SED LOREET ALIQUAM LEOTELLUS DOLOR DAPIBUS</h4>				
                        <ul class="blog-ic">
                            <li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Super user</span> </a> </li>
                               <li><span><i class="glyphicon glyphicon-time"> </i>June 14, 2013</span></li>		  						 	
                               <li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits:145</span></li>
                          </ul>		  						
                    <p>Cras consequat iaculis lorem, id vehicula erat mattis quis. Vivamus laoreet velit justo, in ven e natis purus pretium sit amet. Praesent lectus tortor, tincidu nt in consectetur vestibulum, ultrices nec neque. Praesent nec sagittis mauris. Fusce convallis nunc neque. Integer egestas aliquam interdum. Nulla ante diam, interdum nec tempus eu, feugiat vel erat. Integer aliquam mi quis accum san porta.
                    Quisque nec turpis nisi. Proin lobortis nisl ut orci euismod, et lobortis est scelerisque. Sed eget volutpat ipsum. Integer fring illa leo porttitor, ultrices quam non, lobortis ligula. Aliquam vel consequat arcu.</p>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.
                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                </div>
                <div class="comments heading">
                    <h3>Comments</h3>
                    <div class="media">
                          <div class="media-body">
                            <h4 class="media-heading">	Richard Spark</h4>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs .  </p>
                          </div>
                      <div class="media-right">
                        <a href="#">
                            <img src="images/si.png" alt=""> </a>
                      </div>
                 </div>
                  <div class="media">
                      <div class="media-left">
                        <a href="#">
                            <img src="images/si.png" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Joseph Goh</h4>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs .  </p>
                      </div>
                    </div>
                </div>
                <div class="comment-bottom heading">
                    <h3>Leave a Comment</h3>
                    <form>	
                    <input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
                    <input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
                    <input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
                    <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                        <input type="submit" value="Send">
                </form>
                </div>
            </div>	
        </div>					
</div> --}}
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
                {{-- @foreach($category_post as $key => $title)
                    $title_category = $title->category->title;
                @endforeach --}}
                <div class="about-one">
                    <h3>{{$title_category->title}}</h3>
                </div>
                <div class="about-two">
                    
                    <p>{!!$title_category->shor_desc!!}</p>
                    <ul>
                        <li><p>Share : </p></li>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                        <li><a href="#"><span class="pin"> </span></a></li>
                        <li><a href="#"><span class="rss"> </span></a></li>
                        <li><a href="#"><span class="drbl"> </span></a></li>
                    </ul>
                </div>	
                <div class="about-tre">
                    <div class="a-1">
                        @foreach($category_post as $key => $post)
                        <a href="{{route('bai-viet.show',['id'=>$post->id,'slug'=>Str::slug($post->title)] )}}">
                            <div class=""  style="margin:5px">
                                <div class="col-md-6 abt-left">
                                    <img style="width: 350px;height: 236px;" src="{{asset('public/uploads/'.$post->image)}}" alt="{{Str::slug($post->title)}}" />
                                
                                    <h6>{{$post->category->title}}</h6>
                                    <h3 >{{substr($post->title,0,30)}}</h3>
                                    <p>{!!substr($post->short_desc,0,120)!!}</p>
                                    <label>{{$post->post_date}}</label>
                                    
                                        <a href="{{route('bai-viet.show',['id'=>$post->id])}}">Đọc tiếp...</a>
                                    
                                </div>   
                            </div>
                        </a> 
                        @endforeach
                        {{$category_post->links()}}
                        <div class="clearfix"></div>
                    </div>
                </div>	
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Danh mục gợi ý</h3>
                    <ul>
                        @foreach($category_recomment as $key => $value)
                        <li><a href="{{route('danh-muc.show',['id'=>$value->id,'slug'=>Str::slug($value->title)])}}">{{$value->title}} </a></li>
                        @endforeach
                    </ul>	
                </div>
                <div class="abt-2">
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
                </div>
            </div>
            <div class="clearfix"></div>			
        </div>		
    </div>
</div>
@endsection