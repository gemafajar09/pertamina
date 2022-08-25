@extends('auth.index')

@section('content')

<div class="mx-auto h-[400px] w-96 rounded-md bg-white shadow-2xl shadow-gray-500">
    <div class="relative ml-5 mr-5 flex items-center py-5 pt-12">
        <div class="flex-grow border-t border-gray-400"></div>
        <span class="mx-4 flex-shrink text-2xl font-bold text-gray-600">
            <img src="{{asset('img/pertamina.png')}}" class="w-32" alt="">
        </span>
        <div class="flex-grow border-t border-gray-400"></div>
    </div>
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="ml-5 mr-5">
            <label for="" class="text-lg text-gray-600">Username</label>
            <div class="{{ $errors->has('email') ? 'group duration-300 relative' : '' }} ">
                <input type="email" name="email" placeholder="example@gmail.com" value="{{old('email')}}"
                    autocomplete="off"
                    class="h-12 w-full rounded-xl pl-5 text-gray-400 shadow-md shadow-zinc-200 {{ $errors->has('email') ? 'outline outline-red-400 outline-1 group' : 'outline outline-none' }}" />
                <span
                    class="absolute hidden group-hover:flex -top-2 -right-3 translate-x-full w-48 px-2 py-1 bg-gray-700 rounded-lg text-center text-white text-sm before:content-[''] before:absolute before:top-1/2  before:right-[100%] before:-translate-y-1/2 before:border-8 before:border-y-transparent before:border-l-transparent before:border-r-gray-700">{{$errors->first('email')}}</span>
            </div>
        </div>
        <div class="ml-5 mr-5 mt-3">
            <label for="" class="text-lg text-gray-600">Password</label>
            <div class="{{ $errors->has('password') ? 'group duration-300 relative' : '' }} ">
                <input type="password" name="password" placeholder="*******" value="{{old('password')}}"
                    autocomplete="off"
                    class="h-12 w-full rounded-xl pl-5 text-gray-400 shadow-md shadow-zinc-200 {{ $errors->has('password') ? 'outline outline-red-400 outline-1' : 'outline outline-none' }}" />

                <span
                    class="absolute hidden group-hover:flex -top-2 -right-3 translate-x-full w-48 px-2 py-1 bg-gray-700 rounded-lg text-center text-white text-sm before:content-[''] before:absolute before:top-1/2  before:right-[100%] before:-translate-y-1/2 before:border-8 before:border-y-transparent before:border-l-transparent before:border-r-gray-700">{{$errors->first('password')}}</span>

            </div>
        </div>

        <div class="flex justify-between">
            <div class="ml-5 mt-9">
                <!-- <p>Lupa Password ? <a href="" class="text-red-500 hover:text-red-300">Klik Disini</a></p> -->
            </div>

            <div class="mt-9 ml-5 mr-5 text-right">
                <button type="submit"
                    class="h-9 w-24 rounded-md bg-white text-blue-500 outline outline-blue-500 outline-1 hover:bg-blue-500 hover:text-white">Log
                    In</button>
            </div>
        </div>
    </form>
</div>
@endsection
