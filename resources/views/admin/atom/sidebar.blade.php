<aside class="w-1/4 bg-white p-4">
    <ul>
        <li class="{{ request()->segment(1) == 'account' ? "bg-blue-500" : "bg-white" }}">
            <a href="{{ route('dashboard-admin', ['name'=> 'aku']) }}" class="w-full hover:underline inline-flex p-4">
                <img src="{{ asset('/assets/img/icon/house.svg') }}" class="mr-2"/>
                Dashboard
            </a>
        </li>
        <li class="{{ request()->segment(1) == 'users' ? "bg-blue-500" : "bg-white" }}">
            <a href="{{ route('users-admin', ['name'=> 'aku']) }}" class="w-full hover:underline inline-flex p-4">
                <img src="{{ asset('/assets/img/icon/user.svg') }}" class="mr-2" style="filter:invert(3);"/>
                Manajemen User
            </a>
        </li>
        <li class="{{ request()->segment(1) == 'product' ? "bg-blue-500" : "bg-white" }}">
            <a href="{{ route('dashboard-admin', ['name'=> 'aku']) }}" class="w-full hover:underline inline-flex p-4">
                <img src="{{ asset('/assets/img/icon/book.svg') }}" class="mr-2" style="color: #00000"/>
                Manajemen Produk
            </a>
        </li>
    </ul>
</aside>


