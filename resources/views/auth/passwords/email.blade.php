@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">

        <svg class="fill-current text-white w-16" xmlns="http://www.w3.org/2000/svg" width="40" height="50" viewBox="16.897 95.742 578.207 600.517"><path d="M16.897 696.259V95.742L372.48 311.7s10.494-18.844-4.455-30.427l-14.949-11.551-18.844-13.695 115.272-69.368v268.43L119.892 255.994v324.794s2.476 57.817-22.242 72.041-80.753 43.43-80.753 43.43z"/><path d="M595.104 95.742v600.517L239.52 480.301s-10.494 18.844 4.455 30.427l14.949 11.551 18.844 13.695-115.271 69.367V336.945l329.611 199.062V211.179s-2.475-57.817 22.242-72.041c24.718-14.223 80.754-43.396 80.754-43.396z"/></svg>

        <h1 class="text-white text-3xl pt-8">Welcome back</h1>
        <h2 class="text-blue-300 ">Enter Your credentials below</h2>

        <form method="POST" action="{{ route('password.email') }}" class="pt-8">
            @csrf

            <div class="relative">
                <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                    @error('email')
                    <span class="text-red-800 text-sm pt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="pt-8">
                <button type="submit" class="w-full bg-gray-400 py-3 px-2 text-left uppercase rounded text-blue-800 font-bold">
                    Send Password Reset Link
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
