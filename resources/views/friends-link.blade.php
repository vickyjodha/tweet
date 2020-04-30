<div class="lg:w-1/6 ">
    <div class="bg-blue-100 rounded-lg p-4">
        <h1 class="font-blod text-lx mb-4">Following {{Auth()->user()->follows->count()}}</h1>
        <ul>
            @foreach(Auth()->user()->follows as $user)
                <li class="mb-4">
                    <div >
                    <a href="{{route('profile.show',$user)}}" class="flex items-center text-sm">
                    <img src="{{$user->avatar}}" width="44px" height="44px"  class="rounded-full mr-2" alt="">
                    {{$user->name}}
                    </a>
                    </div>
                </li>
            @endforeach
        </ul>
        <ul>
        <h1 class="font-blod text-lx mb-4">Follower {{Auth()->user()->follower->count()}}</h1>
            @foreach(Auth()->user()->follower as $follower)
            
            <li class="mb-4">
                    <div >
                    <a href="{{route('profile.show',$follower)}}" class="flex items-center text-sm">
                    <img src="{{$follower->avatar}}" width="44px" height="44px"  class="rounded-full mr-2" alt="">
                    {{$follower->name}}
                    </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>    
</div>