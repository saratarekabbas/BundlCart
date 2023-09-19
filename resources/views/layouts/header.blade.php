{{--Navbar--}}
<nav class="relative container mx-auto p-6">
    {{--Flex Container--}}
    <div class="flex items-center justify-between">
        {{--Logo--}}
        <div class="pt-2">
            <img src="{{asset('./assets/brand/BundlCart-logo.png')}}" class="h-15 w-40 object-contain" alt="">
        </div>
        {{--Menu Items--}}
        <div class="hidden md:flex space-x-6">
            <a href="#" class="hover:text-themeTextHover">Home</a>
            <a href="#" class="hover:text-themeTextHover">Products</a>
            <a href="#" class="hover:text-themeTextHover">About Us</a>
            <a href="#" class="hover:text-themeTextHover">Deals</a>
        </div>
        {{--Button--}}
        <a href="#"
           class="hidden md:block p-3 px-6 pt-2 text-white bg-themePrimaryRed rounded-full baseline hover:bg-themeLightRed font-semibold">Get
            Started</a>
        {{--Hamburger Icon--}}
        <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
            <span class="hamburger-top"></span>
            <span class="hamburger-middle"></span>
            <span class="hamburger-bottom"></span>
        </button>

        {{--Mobile Menu--}}
        <div class="md:hidden">
            <div id="menu"
                 class="absolute flex-col items-center self-end py-8 mt-10 hidden space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                <a href="#">Pricing</a>
                <a href="#">Products</a>
                <a href="#">About Us</a>
                <a href="#">Deals</a>
            </div>
        </div>
    </div>
</nav>
