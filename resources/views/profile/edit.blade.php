@extends('layouts.app')

@section('content')
             <form method="POST" action="{{route('profile.update',$user->name)}}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-6">
                            <label for="name"
                             class="block mb-2 uppercase font-bold text-xs text-gray-700">
                               {{ __('Name') }}</label>

                            
                                <input id="name" type="text"
                                 class="border border-gray-400 p-2  w-full"
                                 name="name" value="{{ $user->name }}"
                                 required
                                 autocomplete="name"
                                 autofocus>

                                @error('name')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            
                        </div>

                        <div class="mb-6">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('E-Mail Address') }}</label>

                           
                                <input id="email" type="email" value="{{ $user->email }}" class="border border-gray-400 p-2  w-full" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                  <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            
                        </div>

                       
                        <div class="mb-6">
                            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" value="{{ $user->password }}" class="border border-gray-400 p-2  w-full" name="password" required autocomplete="new-password">

                                @error('password')
                                  <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            
                        </div>

                        <div class="mb-6">
                            <label for="password-confirm" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" value="{{ $user->password }}" class="border border-gray-400 p-2  w-full" name="password_confirmation" required autocomplete="new-password">
                           
                        </div>

                        <div class="mb-6">
                            
                                <button type="submit" class=" bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                                    {{ __('Register') }}
                                </button>
                            
                        </div>
             </form>
@endsection