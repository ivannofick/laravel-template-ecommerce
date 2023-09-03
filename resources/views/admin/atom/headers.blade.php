<div class="w-full h-16 bg-white">
  <div class="grid grid-cols-2 gap-2">
      <div class="ml-[91px] pt-[20px]">
          <div class="w-28 h-11 text-neutral-900 text-sm font-normal">
              <img src="{{ asset('assets/img/logo.svg') }}" />
          </div>
      </div>
      <div class="grid justify-items-end mr-[91px] pt-[20px]">

        <div class="relative inline-block text-right">
          <div id="dropdownButton"  class="left-[122px] grid grid-cols-2 gap-2">
            <div class="w-24 h-9">
              <div class="w-auto text-blue-500 text-xs font-normal">Hallo {{session()->get('roles') == 1 ? "Admin" : "Customer"}},</div>
              <div class="w-auto text-black text-sm font-normal">{{session()->get('email')}}</div>
            </div>
            <div class="w-auto h-10 px-4 left-[90px] top-0">
              <div class="w-10 h-10 bg-stone-300 rounded-full"></div>
            </div>          
    
          </div>

          <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
            <div class="flex flex-col items-center px-4 py-2 border-b border-gray-200">
              <div class="w-16 h-16 bg-stone-300 rounded-full mb-2"></div>
              <span class="text-black text-sm font-normal">{{session()->get('name')}}</span>
              <span class="text-black text-xs font-normal">{{session()->get('email')}}</span>
            </div>
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-red-600 hover:bg-gray-100 text-center">Logout</a>
          </div>
        </div>
        
      </div>

  </div>
</div>

<script>
const dropdownButton = document.getElementById('dropdownButton');
const dropdownMenu = document.getElementById('dropdownMenu');

dropdownButton.addEventListener('click', function () {
  if (dropdownMenu.classList.contains('hidden')) {
    dropdownMenu.classList.remove('hidden');
  } else {
    dropdownMenu.classList.add('hidden');
  }
});
</script>

