<div class="w-[1366px] h-[70px] relative">
    <div class="w-[1366px] h-[70px] left-4 top-[15px] absolute">
      <img src="{{ asset('assets/img/logo.svg') }}" />
    </div>
    <div class="w-[214px] h-10 left-[1112px] top-[15px] absolute">
      @if (!isset($_COOKIE['auth_']))
        <a href="{{ route('login') }}" class="w-24 h-10 px-4 py-2 left-0 top-0 absolute border border-blue-500 justify-center items-center gap-2.5 inline-flex">
          <div class="text-blue-500 text-sm font-bold tracking-[3.50px]">MASUK</div>
        </a>
        <button class="w-[102px] h-10 px-4 py-2 left-[112px] top-0 absolute bg-blue-500 justify-center items-center gap-2.5 inline-flex">
          <div class="text-orange-100 text-sm font-bold tracking-[3.50px]">DAFTAR</div>
        </button>
      @else
      <a href="{{ route('dashboard-admin', ['name'=> 'aku']) }}" class="left-[122px]">
        <div class="w-24 h-9 relative">
          <div class="w-auto text-blue-500 text-xs font-normal">Hallo Admin,</div>
          <div class="w-auto text-black text-sm font-normal">Aden S. Putra</div>
        </div>
        <div class="w-auto h-10 px-4 left-[90px] top-0 absolute inline-flex">
          <div class="w-10 h-10 bg-stone-300 rounded-full"></div>
        </div>          

      </a>
      @endif


    </div>
    <form class="w-[662px] h-8 left-[352px] top-[19px] absolute bg-stone-50 rounded-sm justify-between items-center gap-[188px] inline-flex">
        <input class="appearance-none border rounded w-[662px] py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Cari parfum kesukaanmu">
    </form>
</div>