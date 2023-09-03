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
                                    {{date('d-m-Y', strtotime($item->production_date))}}
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
                  <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50">
                      <div class="modal-content py-4 text-left px-6" >
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Add Product</h2>
                        <form class="mb-4" method="POST">
                            <div style="max-height: 266px; overflow-x: hidden; height: 266px; overflow-y: scroll;">
                              @csrf
                              <div class="h-8 rounded-sm mb-12">
                                  <div class="text-neutral-500 text-xs font-normal">Nama Produk</div>
                                  <input class="w-full h-11 py-2 px-4 bg-white border border-zinc-500" id="name" name="name" type="text" placeholder="Fill Name Product">
                              </div>
                              <div class="h-8 rounded-sm mb-12">
                                  <div class="text-neutral-500 text-xs font-normal">Harga Produk</div>
                                  <input class="w-full h-11 py-2 px-4 bg-white border border-zinc-500" id="price" name="price" type="text" placeholder="Fill Price Product">
                              </div>
                              <div class="h-8 rounded-sm mb-12">
                                  <div class="text-neutral-500 text-xs font-normal">Status Produk</div>
                                  <select class="w-full h-11 py-2 px-4 bg-white border border-zinc-500" id="status" name="status">
                                      <option value="1">Aktif</option>
                                      <option value="2">Tidak Aktif</option>
                                  </select>
                              </div>
                              <div class="h-8 rounded-sm mb-12">
                                  <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Produk</label>
                                  <input type="file" id="image" name="image">
                                  <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                              </div>
                            </div>
                              <div class="flex justify-between mt-6">
                                  <a id="closeModalButton" class="cursor-pointer px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
                                      Tutup
                                  </a>
                                  <a class="px-4 py-2 bg-blue-500 rounded-md hover:bg-blue-300 focus:outline-none focus:bg-blue-300" onclick="saveProduct(event)">
                                      <div class="text-center text-white text-sm font-semibold">Tambah</div>
                                  </a>
                              </div>
                        </form>
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

function saveProduct(event) {
    event.preventDefault();
}
  </script>

@endsection