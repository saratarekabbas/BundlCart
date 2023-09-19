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
        <a href="#" class="hidden md:block p-3 px-6 pt-2 text-white bg-themePrimaryRed rounded-full baseline hover:bg-themeLightRed font-semibold">Get Started</a>
    </div>
</nav>
