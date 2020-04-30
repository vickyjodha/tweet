<div class="border border-gray-300 rounded-lg mb-5">
      @foreach($tweets as $tweet)
            <div class="flex p-4 {{$loop->last?'':' border-b border-b-gray-400'}} ">
                <div class="mr-2 flex-shrink-0">
                   <a href="{{route('profile.show',$tweet->user->name)}}">
                       <img src="{{$tweet->user->avatar}}" width="44px" height="44px"  class="rounded-full mr-2" alt="">
                    </a>
                </div>
                <div>
                    <h5 class="font-blod mb-4">
                    <a href="{{route('profile.show',$tweet->user->name)}}">
                        {{$tweet->user->name}}
                    </a> 
                    </h5>
                    <p class="text-sm">
                    {{$tweet->body}}
                    </p>
                    <div class="flex" >
                        <div class="mr-3">
                            <form action="{{route('like.store',$tweet->id)}}" method="POST">
                               @csrf
                                    <button type="submit" class="fa fa-thumbs-up pr-2 "
                                        aria-hidden="true">
                                        
                                        {{$tweet->likes}}
                                        </button>
                            </form>
                        </div>
                        <div class="hover:red">
                            <form action="{{route('like.destroy',$tweet->id)}}" method="POST">
                                 @csrf
                                 @method('delete')
                                    <button type="submit"class="fa fa-thumbs-down"
                                         aria-hidden="true">{{$tweet->Dislikes}}
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
            
    @endforeach
</div>
       