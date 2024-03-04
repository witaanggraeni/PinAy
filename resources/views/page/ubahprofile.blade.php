@extends('layouts.master')
@section('content')


    <section class="mt-32">
        <div>
            <a href="/profile"><button class="px-3 py-1 bg-slate-200 rounded-md ml-8"></button></a>
        </div>
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-4xl text-center font-fontutama text-red-800">Edit Profile</h3>
        </div>
    </section>
    @if ($message = Session::get('success'))
        <div class="flex justify-center mt-4">
            <div id="toast-undo" class="flex items-center justify-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="text-sm font-normal text-blue-600">
                {{ $message }}
                </div>
                <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse">
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-undo" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif
    <form action="update" method="POST" enctype="multipart/form-data">
        @csrf
    <section class=" max-w-screen-md mx-auto mt-4 ">
        <div class="flex flex-wrap justify-between flex-container">
            <div class="flex flex-col items-center w-2/6 h-72 bg-white rounded-md shadow-md max-[200px]:w-full">
                <img src="{{ asset('assets/'.$user->picture)}}" alt="" class="rounded-full w-20 h-20 mt-5" >
                <input type="file" name="picture" class="items-center w-48 h-10 mt-10 border rounded-md">

            </div>
            <div class="w-3/5 max-[364px]:w-full">
                <div class="w-[364px] bg-white rounded-3xl shadow-2xl mx-auto px-9 py-9">
                    

                        <h5 class="font-fontpopins">Nama Lengkap</h5>
                        <input type="text" name="nama_lengkap" value="{{ $user->nama_lengkap }}" class="bg-gray-50 border border-black text-gray-900 text-sm rounded-lg block w-full p-2.5 place py-2 ">
                        <h5 class="font-fontpopins">Username</h5>
                        <input type="text" name="username" value="{{ $user->username }}" class="bg-gray-50 border border-black text-gray-900 text-sm rounded-lg block w-full p-2.5 place py-2 ">
                        </select>
                        <h5 class="font-fontpopins">Alamat</h5>
                        <input type="text" name="alamat" value="{{ $user->alamat }}" class="bg-gray-50 border border-black text-gray-900 text-sm rounded-lg block w-full p-2.5 place py-7">

                        <button type="submit" class="mt-2 text-white font-fontpopins bg-red-800 hover:bg-red-800 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-xl text-sm w-[152px] ml-[250px] sm:w-28 px-2 py-3 text-center dark:bg-red-800 dark:hover:bg-red-700 dark:focus:ring-red-800">Perbaharui</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
    @endsection
