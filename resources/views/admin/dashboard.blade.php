@extends('default-template')
@section('contents')
<div class="bg-stone-50">
    @include('admin.atom.headers')
    <div class="flex h-screen">
        @include('admin.atom.sidebar')
        <main class="w-3/4 p-4">
            <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>
            <div class="mb-4">
                <div class="flex">

                    <div class="w-56 h-28 mr-6 bg-gradient-to-l from-blue-200 to-indigo-300 rounded-2xl shadow">
                        <div class="w-56 h-28 flex flex-col justify-between p-4">
                            <div class="mx-3 my-2 text-slate-500 text-sm font-normal">Jumlah User</div>
                            <div class="mx-3 my-2">
                                <span class="text-blue-950 text-2xl font-normal leading-7">150 </span><span class="text-blue-950 text-base font-normal leading-tight">User</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-56 h-28 mr-6 bg-gradient-to-l from-blue-200 to-indigo-300 rounded-2xl shadow">
                        <div class="w-56 h-28 flex flex-col justify-between p-4">
                            <div class="mx-3 my-2 text-slate-500 text-sm font-normal">Jumlah User Aktif</div>
                            <div class="mx-3 my-2">
                                <span class="text-blue-950 text-2xl font-normal leading-7">150 </span><span class="text-blue-950 text-base font-normal leading-tight">User</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-56 h-28 mr-6 bg-gradient-to-l from-blue-200 to-indigo-300 rounded-2xl shadow">
                        <div class="w-56 h-28 flex flex-col justify-between p-4">
                            <div class="mx-3 my-2 text-slate-500 text-sm font-normal">Jumlah Product</div>
                            <div class="mx-3 my-2">
                                <span class="text-blue-950 text-2xl font-normal leading-7">150 </span><span class="text-blue-950 text-base font-normal leading-tight">User</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-56 h-28 mr-6 bg-gradient-to-l from-blue-200 to-indigo-300 rounded-2xl shadow">
                        <div class="w-56 h-28 flex flex-col justify-between p-4">
                            <div class="mx-3 my-2 text-slate-500 text-sm font-normal">Jumlah Product Aktif</div>
                            <div class="mx-3 my-2">
                                <span class="text-blue-950 text-2xl font-normal leading-7">150 </span><span class="text-blue-950 text-base font-normal leading-tight">User</span>
                            </div>
                        </div>
                    </div>                   
                    
                </div>
            </div>
            <div class="mb-4">
                <div class="w-auto h-80 bg-white rounded-xl">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Produk Terbaru</div>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                              <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Nama
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Email
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Role
                                </th>
                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                              <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                  John Doe
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                  john@example.com
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                  Admin
                                </td>
                              </tr>
                              <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                  Jane Smith
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                  jane@example.com
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                  User
                                </td>
                              </tr>
                              <!-- Tambahkan baris lain jika diperlukan -->
                            </tbody>
                          </table>
                    </div>
                </div>
                
            </div>
        </main>
    </div>
</div>


@endsection