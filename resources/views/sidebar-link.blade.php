<div class="lg:w-32">
    <ul>
        <li><a class="font-blod text-lg mb-4 block" href="{{route('home')}}">Home</a></li>
        <li><a class="font-blod text-lg mb-4 block" href="">Exploer</a></li>
        <li><a class="font-blod text-lg mb-4 block" href="">Notification</a></li>
        <li><a class="font-blod text-lg mb-4 block" href="">Message</a></li>
        <li><a class="font-blod text-lg mb-4 block" href="">List</a></li>
        <li><a class="font-blod text-lg mb-4 block" href="{{route('profile.show',Auth()->user()->name)}}">Profile</a></li>
        <li><a class="font-blod text-lg mb-4 block" href="">More</a></li>
    </ul>
</div>