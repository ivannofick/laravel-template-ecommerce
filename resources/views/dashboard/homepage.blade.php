@extends('default-template')
@section('contents')
@include('dashboard.atom.headers')

<div class="p-24">
    <div class="text-stone-900 text-2xl font-bold pb-12">Product Tersedia</div>
    <div class="w-44 h-64 bg-white shadow border border-neutral-300">
        <img class="w-full h-40" src="{{ asset('assets/img/parfum.svg') }}" />
        <div class="w-full p-4 h-[94px] mt-4">
            <p class="text-stone-900 text-sm font-bold leading-none">Euodia</p>
            <p class="text-blue-500 text-sm font-bold">IDR x.xxx.980</p>
        </div>
    </div>
</div>
@include('dashboard.atom.footers')
<script type="text/javascript">
        $.ajax({
            url: "{{ env('API_URL') }}/product/data?skip=0&take=5",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            type: "GET", /* or type:"GET" or type:"PUT" */
            success: function (data) {
                if (data.code.status === 0) {
                    const response = data.data;
                    console.log(response) 
                }

            }
        });
</script>
@endsection
