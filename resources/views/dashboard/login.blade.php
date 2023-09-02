@extends('default-template')
<div class="w-full h-screen bg-white grid grid-cols-2">
    <div class="w-auto h-96 col-start-1">
        <img src="{{asset('assets/img/background-blue-login.svg')}}" />
    </div>
    <div class="w-auto h-96">
        <div class="p-24">
            <div class="mb-6">
                <div class="text-neutral-700 text-2xl font-medium mb-4">Selamat Datang Admin</div>
                <div class="text-neutral-400 text-xs font-normal">Silahkan masukkan email atau nomor telepon dan password<br/>Anda untuk mulai menggunakan aplikasi</div>
            </div>
            <form class="w-auto" method="POST" action="{{ route('post-login') }}">
                @csrf
                <div class="h-8 rounded-sm mb-12">
                    <div class="text-neutral-500 text-xs font-normal">Email / Nomor Telpon</div>
                    <input class="w-full h-11 py-2 px-4 bg-white border border-zinc-500" id="username" name="email" type="text" placeholder="email">
                </div>
                <div class="h-8 rounded-sm mb-12">
                    <div class="text-neutral-500 text-xs font-normal">Password</div>
                    <input class="w-full h-11 py-2 px-4 bg-white border border-zinc-500" id="password" name="password" type="password" placeholder="password">
                </div>
                <button class="w-full h-11 bg-blue-500">
                    <div class="text-center text-white text-sm font-semibold">MASUK</div>
                </button>
            </form>
        </div>
    </div>
</div>