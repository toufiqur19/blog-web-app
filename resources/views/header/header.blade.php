<header>
	<nav class="bg-gray-800 h-13 w-full">
		<input type="checkbox" id="check" hidden>
		<label for="check" class="float-right leading-[80px] cursor-pointer text-white mr-10 text-2xl lg:hidden"><i class="fa-solid fa-bars"></i></label>
		<span class="text-2xl font-bold pl-12 lg-pl-24 leading-[60px] text-white"><a class="brand" wire:navigate href="{{route('home')}}">Ts Blog</a></span>
		<ul class="float-right mr-12 lg:flex leading-[60px] fixed lg:relative text-white h-[100vh] lg:h-0 w-[100%] lg:w-fit top-15 lg:top-0 left-[-100%] lg:left-0 transition-all lg:transition-none duration-300 bg-gray-700 text-center z-50">
			<li class="menu-item active"><a wire:navigate href="{{route('home')}}">Home</a></li>
			<li class="menu-item"><a wire:navigate href="{{route('aboutUs')}}">About</a></li>
			<li class="menu-item"><a wire:navigate href="{{route('blogPage')}}">Blog</a></li>
			<li class="menu-item"><a wire:navigate href="{{route('servicesPage')}}">Service</a></li>
			<li class="menu-item"><a wire:navigate href="{{route('contractPage')}}">Contract</a></li>

            @auth
            <button class="drop_down relative lg:ml-40 lg:flex jutify-center items-center h-6 shadow-none text-white focus:ring mt-3 group">
            <li class="px-2 left-20 flex jutify-center items-center ">
                {{Auth::user()->name;}}
                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </li>
            <div class="absolute hidden group-focus:block top-full">
                <ul class="">
                    <li class="lg:bg-gray-800 bg-none text-white mt-3 logout"><livewire:login-out /></li>
                </ul>
            </div>
            </button>
            @endauth

			@guest
            <li class="menu-item"><a wire:navigate href="{{route('login')}}">Login</a></li>
			<li class="menu-item"><a wire:navigate href="{{route('registration')}}">Register</a></li>
			@endguest

		</ul>
	</nav>
</header>