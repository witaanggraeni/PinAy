@extends('layouts.master')
@section('content')


    <section class="mt-[40px]">
        <div>
            <a href="/album"><button class="px-3 py-1 bg-slate-200 rounded-md ml-8"><-</button></a>
        </div>

        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-[40px] text-center font-fontutama text-red-800">Buat Album</h3>
        </div>
    </section>
    <form action="/buat-album" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="mt-[45px]">
            <div class="w-[400px] bg-white rounded-3xl shadow-2xl mx-auto px-9 py-9">
                 <div class="flex flex-col">
                        <h3>Nama Album</h3>
                        <input type="text" name="nama_album" id="" class="bg-gray-50 border border-black text-gray-900 text-sm rounded-lg block w-full p-2.5 place py-2 ">
                        <h3 class="mt-4">Deskripsi</h3>
                        <textarea name="deskripsi" id="" cols="30" rows="10"
                        class="bg-gray-50 w-full h-24 mb-2 border border-black rounded-xl"></textarea>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="file_input">Upload file</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" name="foto" id="file_input" type="file">
                            <button type="submit" class="mt-5 text-white font-fontpopins bg-red-800 hover:bg-red-800 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-xl text-sm w-[100px] ml-[230px] sm:w-28 px-2 py-3 text-center dark:bg-red-800 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Buat Album</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
    @endsection
