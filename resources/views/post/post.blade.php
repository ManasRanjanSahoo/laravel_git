


 <div class="blog-post">
            <h2 class="blog-post-title">

            <a href="post/{{$post->id}}"> 	
            {{$post->title}}           </a>
            </h2>
<br/>
            {{$post->description}}
<br/>
            Authour Name: {{$post->author_name}}
           <br/><br/>
           <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} </p>
          </div>