<nav>
    <div class="bg-[#ff6522] flex items-center justify-between px-10 border-b-2 border-black">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        {{-- Logo --}}
        <div class="w-44">
            <a href="/"><img class="cursor-pointer hover:scale-105" src="/img/crash-logo.png" alt="crash-logo"></a>
        </div>

        {{-- Nav Links Desktop --}}
        <div class="hidden md:flex items-center">
            <ul class="flex font-crashInsane text-white text-4xl md:space-x-20">
                <li><a class="hover:text-[#9a0000] hover:border-b-4 border-[#9a0000]" href="/">Home</a></li>
                <li><a class="hover:text-[#9a0000] hover:border-b-4 border-[#9a0000]" href="{{ route('crash.evolution') }}">Evolution</a></li>
                <li><a class="hover:text-[#9a0000] hover:border-b-4 border-[#9a0000]" href="{{ route('crash.games') }}">Games</a></li>
                <li><a class="hover:text-[#9a0000] hover:border-b-4 border-[#9a0000]" href="{{ route('all.posts') }}">Community</a></li>
                <li><a class="hover:text-[#9a0000] hover:border-b-4 border-[#9a0000]" href="{{ route('contact.page') }}">About Us</a></li>
            </ul>
        </div>

            <!-- Mobile menu button -->
            <div class="md:hidden items-center">
                <button class="outline-none mobile-menu-button">
                <svg class=" w-12 h-12 text-white hover:text-[#9a0000]"
                    x-show="!showMenu"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    >
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                </button>
            </div>
    </div>

            <!-- Mobile Menu -->
			<div class="hidden mobile-menu bg-[#ff6522] border-t-2 border-b-2">
				<ul class="font-crashInsane text-white text-2xl pl-5 py-5 space-y-5 ">
					<li><a href="/" class="hover:text-[#9a0000] hover:border-b-4 border-[#9a0000]">Home</a></li>
					<li><a href="{{ route('crash.evolution') }}" class="hover:text-[#9a0000] hover:border-b-4 border-[#9a0000]">Evolution</a></li>
					<li><a href="{{ route('crash.games') }}" class="hover:text-[#9a0000] hover:border-b-4 border-[#9a0000]">Games</a></li>
					<li><a href="{{ route('all.posts') }}" class="hover:text-[#9a0000] hover:border-b-4 border-[#9a0000]">Community</a></li>
					<li><a href="{{ route('contact.page') }}" class="hover:text-[#9a0000] hover:border-b-4 border-[#9a0000]">About Us</a></li>
				</ul>
			</div>

             {{-- Script --}}
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
</nav>