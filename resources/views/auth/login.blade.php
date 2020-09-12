@extends('layouts.auth')

@section('content')
<div class="flex h-screen bg-gray-200 p-4 rotate">
        <div class="sm:max-w-xl md:max-w-2xl w-full m-auto">
            <form method="POST" action="{{ route('login') }}" class="flex items-stretch bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-indigo-500 sm:border-0">
                @csrf
                <div class="flex hidden overflow-hidden relative sm:block w-5/12 md:w-6/12 bg-gray-600 text-gray-300 py-4 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
                    <div class="flex-1 absolute bottom-0 text-white p-10">
                        <h3 class="text-4xl font-bold inline-block">Login</h3>
                        <p class="text-gray-500 whitespace-no-wrap">
                            Welcome back!
                        </p>
                    </div>
                    <svg class="absolute animate h-full w-4/12 sm:w-2/12 right-0 inset-y-0 fill-current text-white" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <polygon points="0,0 100,100 100,0">
                    </svg>
                </div>
                <div class="flex-1 p-6 sm:p-10 sm:py-12">
                    <h3 class="text-xl text-gray-700 font-bold mb-6">
                        Login <span class="text-gray-400 font-light">to your account</span></h3>

                    <input id="email" type="email" class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('email') ? ' border-red-500' : '' }}" placeholder="Email" name="email" required autofocus>
                    <!-- @if ($errors->has('email'))
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $errors->first('email') }}
                        </p>
                    @endif -->

                    <input id="password" type="password" class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('password') ? ' border-red-500' : '' }}" name="password" required placeholder="Password">

                    <div class="flex flex-wrap items-center">
                        <div class="w-full sm:flex-1">
                            <input type="submit" value="Login" class="w-full sm:w-auto bg-indigo-500 text-indigo-100 px-6 py-2 rounded hover:bg-indigo-600 focus:outline-none cursor-pointer">
                        </div>
                        <div class="text-sm text-gray-500 hover:text-gray-700 pt-4 sm:p-0">
                            <a href="{{ route('password.request') }}">Forgot password?</a>
                        </div>
                    </div>

                    <p class="w-full text-xs text-left text-gray-700 mt-8">
                        Don't have an account?
                        <a class="text-blue-500 hover:text-blue-700 no-underline" href="/register">
                            Register
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection
