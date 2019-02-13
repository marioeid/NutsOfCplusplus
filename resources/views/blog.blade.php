@extends('layout')

@section('cssfile')
<link rel="stylesheet" href="css/blog.css">
@endsection

@section('title')
C++ Blog
@endsection

@section('content')
<img class="sz" src="img/black-and-white-black-and-white-depth-of-field-785429.jpg">
<div class="centered">learning C++ Blog</div>

<div class="col-12 col-md-12 col-sm-12 col-12 text-center centered2">
    <a class="mybtn">home page</a>
    <a class="mybtn" data-toggle="modal" data-target="#exampleModalCenter">post</a>

    <a class="mybtn">your profile</a>
</div>

<div class="container">
    <div class="row">

        <!-- Button trigger modal -->

        <!-- Modal -->
        <form class="postform">
            {{ csrf_field() }}
            <div id="toky" data-token="{{csrf_token()}}"></div>
            <div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <textarea id="formtitle" class="title" placeholder="Add your title" name="title"></textarea>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <textarea id="formbody" name="body" class="bl" placeholder="Add your body"></textarea>
                            </div>
                            <button id="post_create" class="btn mybtn right">post</button>

                        </div>
                    </div>
                </div>





            </div>
        </form>

    </div>

    <div class="row" id="posts">
        <div class="col-3 no-pd cat">
            <div class="card box">
                <div class="card-header welcome_user">
                 welcome {{ Auth::user()->name }}
                </div>
                <div class="card-body">
                    <div class="card-text box-text">
                        <ul>
                        <li>posts</li>
                        <li>comments</li>
                        <li>likes</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
   
        @foreach($posts as $post)
        <div class="col-6 no-pd">
            <div class="card box">
                <div class="card-header">
             
                    <div class="row">
                     <div class="pic col-2">
                     <img class="imgcir" src="img/wp1951411.jpg">
                        
                     </div>
                     
                        <div class="col-9">
                            by {{$post->user->name}}
                            <div class="col-12 no-pd">
                                <p>
                                    <i class="fa fa-clock-o"></i> {{$post->updated_at->diffforhumans()}}

                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                    <div class="col-11 mx-auto line"></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">{{$post->title}}</div>
                    <p class="card-text">{{$post->body}}</p>

                </div>
                <div class="card-footer">
                    <div class="row">

                        <div class="col btn">like</div>
                        <div class="col btn showcommentform">comment</div>
                        <div class="col btn">edit</div>
                        <a class="col btn post_delete" data-token="{{ csrf_token() }}" data-id="{{$post->id}}" data-url="/deletepost/{{$post->id}}">delete</a>
                        <div class="col btn showcomments">show comments</div>
                        <form class="commentform col-12">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <textarea name="body" class="form-control"></textarea>
                                <input type="hidden" value="{{ $post->id }}" name="post_id">
                                <input type="hidden" value="{{ Auth::user()->name }}" name="user_name">
                            </div>
                            <div class="form-group">
                                <div id="toky2" data-token="{{csrf_token()}}"></div>
                                <button class="comment_create btn btn-dark" type="submit">ADD comment</button>
                            </div>
                        </form>

                    </div>


                </div>


            </div>
            <div class="comments">
                @foreach($post->comments as $comment)

                <div class="col-10 no-pd offset-2">
                    <div class="card box">
                        <div class="card-header bootstrap">

                            <div class="row">
                            <div class="pic col-3">
                            <img class="imgcir" src="img/wp1951411.jpg">
                                
                            </div>
                               <div class="col-9">
                                    by {{$comment->user_name}}
                                    <div class="col-12 no-pd">
                                        <p>
                                            <i class="fa fa-clock-o"></i> six hours ago

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">hello</div>
                            <p class="card-text">{{$comment->body}}</p>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <a href="#" class="btn col">like</a>
                                <a href="#" class="btn col">edit</a>
                                <a href="#" class="btn col">delete</a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        @endforeach
        <div class="col-3 no-pd cat">
            <div class="card box">
                <div class="card-header headerit">
                    Categories
                </div>
                <div class="card-body">
                    <div class="card-text box-text">
                            
                                <ul>
                                    <li>c++</li>
                                    <li>projects</li>
                                    <li>gui</li>
                                    <li>algorithms</li>
                                    <li>problems</li>
                                    <li>data structure</li>
                                </ul>

                    

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jsfile')
<script src="js/blog.js">
</script>

@endsection
