<div class="border border-blue-400 rounded-lg px-8 py-6 mb-4">
     <form action="{{route('tweets.store')}}" method="POST">
     @csrf
        <textarea name="body" id="" class="w-full mb-0 pb-0"
        placeholder="insert this value">
        </textarea>
        <hr class="mb-4 mt-0 pt-0">
        <footer class="flex justify-between">
        <img src="{{Auth()->user()->avatar}}" width="44px" height="44px"  class="rounded-full mr-2" alt="">
        
        <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweet-a-roo</button>
        </footer>
     </form>
                                @error('body')
                                    <span class="invalid-feedback text-red-500 " role="alert">
                                        <p class="mt-2 mb-0">{{ $message }}</p>
                                    </span>
                                @enderror
 </div>