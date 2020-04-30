@extends('layouts.app')

@section('content')
    <header class="">
        <div class="relative">
            <img src="{{asset('public/image/bgprofile.png')}}" style="border-radius: 16px;" class="rounded-lg mb-2" alt="profile image new change">
            <img src="{{$user->avatar}}"  class="rounded-full mr-2 absolute  transform -translate-x-1/2 -translate-y-1/2" 
        style="left:50%;"
        width="150"
        alt="">
        </div>
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-4 ">{{$user->name}}</h2>
                <p class="text-sm"> Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
            @if(auth()->user()->is($user))
               <a href="{{route('profile.edit',$user->name)}}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs">Edit Profile</a>
            @else
                <form action="{{asset('/profiles')}}/{{$user->name}}/follow" method="POST">
                @csrf
                    <button type="submit"
                    class="bg-blue-500 rounded-full ml-2 shadow py-2 px-4 text-white text-xs">
                    {{Auth()->user()->following($user)?'UnFollow Me':'Follow me'}} </button>
                </form>
            @endif    
            </div>
        </div>
        <p class="text-sm text-center mb-5">
        
            Why do we use it?
            It is a long established
            fact that a reader will be distracted
            by the readable content of a page when
            looking at its layout. The point of using
            Lorem Ipsum is that it has a more-or-less
            normal distribution of letters, as opposed
            to using 'Content here, content here', making
            it look like readable English. Many desktop 
            publishing packages and web page editors now
            use Lorem Ipsum as their default model text, 
            and a search for 'lorem ipsum' will uncover 
            many web sites still in their infancy. Various
            versions have evolved over the years, sometimes
            by accident, sometimes on purpose (injected 
            humour and the like).

        </p>
        
    </header>
    @include('tweet-link',['tweets'=>$user->tweets])
@endsection