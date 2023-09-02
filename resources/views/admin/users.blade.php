@extends('default-template')
@section('contents')
<div class="bg-stone-50">
    @include('admin.atom.headers')
    <div class="flex h-screen">
        @include('admin.atom.sidebar')
        <main class="w-3/4 p-4">
            <h1 class="text-2xl font-semibold mb-4">Manajemen Users</h1>
        </main>
    </div>
</div>

@endsection