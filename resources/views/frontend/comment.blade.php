
<div class="container mt-2">
    <div class="row">
            <div class="page-header">
                    <h1>Comments </h1>
                    </div> 
        @if (Auth::check())
            
        
        <div class="col-md-12 w-100">
            <div class="comments-list border w-100 p-2">
                <div class="media">
                    <div class="media-body">
                            <form action="/commentPost" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="commenter_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Comment</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Comment" name="comment">
                                </div>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Comment" name="userid" value="{{Auth::user()->id}}" hidden>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Comment" name="postid" value="{{$post->id}}" hidden>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                </div>
                
            </div>
        </div>
        </div>
        @endif
        {{-- Comments --}}
        <div class="col-md-12 w-100">
            @if (!empty($comments))
            
            @foreach ($comments as $comment)  
                <div class="comments-list border w-100 p-4 mt-2">
                    <div class="media">
                        <div class="media-body">
                            
                            <h4 class="media-heading user_name">{{$comment->name}}</h4>
                        {{$comment->comment}}
                            @if (Auth::check()) 
                                <form action="/commentDelete/{{$comment->id}}" method="post" id="commentDeleteForm">
                                    @csrf
                                </form>
                                @if ((Auth::user()->id == $post->userid) || (Auth::user()->id == $comment->userid))
                                <a class="btn btn-danger" onclick="document.getElementById('commentDeleteForm').submit()"><small>Delete</small></a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>
</div>

