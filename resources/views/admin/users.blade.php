@extends('default-template')
@section('contents')
<style>
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
</style>
<div class="bg-stone-50">
    @include('admin.atom.headers')
    <div class="flex h-screen">
        @include('admin.atom.sidebar')
        <main class="w-3/4 p-4">
            <h1 class="text-2xl font-semibold mb-4">Manajemen Users</h1>
            <div class="mb-4">
                <div class="w-auto h-80 bg-white rounded-xl">
                    <div class="px-6 py-4">
                        <div class="flex justify-between items-center mb-4">
                            <h1 class="text-2xl font-semibold text-gray-800">Daftar Produk</h1>
                            <button id="showModalButton" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                              Tambah Product
                            </button>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                              <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  No
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Nama Users
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Email
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  No Telepon
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Status
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Action
                                </th>
                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                              @foreach ($dataUsers as $key => $item)
                                <tr>
                                  <td class="px-6 py-4 whitespace-no-wrap">
                                    {{$key + 1}}
                                  </td>
                                  <td class="px-6 py-4 whitespace-no-wrap">
                                    {{$item->name}}
                                  </td>
                                  <td class="px-6 py-4 whitespace-no-wrap">
                                    {{$item->email}}
                                  </td>
                                  <td class="px-6 py-4 whitespace-no-wrap">
                                    {{$item->phone_number}}
                                  </td>
                                  <td class="px-6 py-4 whitespace-no-wrap">
                                    @if ($item->status == 1)
                                      <button class="bg-green-500 text-white font-bold py-2 px-4 rounded-full">Aktif</button>
                                        
                                    @else
                                      <button class="bg-red-500 text-white font-bold py-2 px-4 rounded-full opacity-50 cursor-not-allowed">Tidak Aktif</button> 
                                    @endif
                                  </td>
                                  <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="flex justify-between">
                                      <button class="bg-green-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full flex items-center">
                                        <img src="{{asset('assets/img/icon/eye.svg')}}" alt="View" class="w-4 h-4" />
                                      </button>
                                      <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full flex items-center">
                                        <img src="{{asset('assets/img/icon/notepencil.svg')}}" alt="Edit" class="w-4 h-4" />
                                      </button>
                                    </div>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
                <div id="myModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                  
                    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                      <div class="modal-content py-4 text-left px-6">
                        <!-- Isi modal Anda di sini -->
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Add Product</h2>
                        <p class="text-gray-700 mb-4">
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

                        </p>
                        <div class="flex justify-end">
                          <button id="closeModalButton" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
                            Tutup
                          </button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script>
    const showModalButton = document.getElementById('showModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('myModal');
  
    showModalButton.addEventListener('click', function () {
      modal.classList.remove('hidden');
      document.body.classList.add('modal-active');
    });
  
    closeModalButton.addEventListener('click', function () {
      modal.classList.add('hidden');
      document.body.classList.remove('modal-active');
    });
  </script>

@endsection