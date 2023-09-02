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
                                  Product
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Tanggal di buat
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Harga (Rp)
                                </th>
                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                              @foreach ($dataProduct as $item)
                                <tr>
                                  <td class="px-6 py-4 whitespace-no-wrap">
                                    {{$item->name}}
                                  </td>
                                  <td class="px-6 py-4 whitespace-no-wrap">
                                    {{date('d-m-Y')}}
                                  </td>
                                  <td class="px-6 py-4 whitespace-no-wrap">
                                    {{$item->price}}
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
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Judul Modal</h2>
                        <p class="text-gray-700 mb-4">Konten modal Anda di sini.</p>
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