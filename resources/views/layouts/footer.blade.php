{{--Footer Section--}}
<footer class="bg-themeTextBlack">
    <div
        class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-x-2 space-y-8 md:flex-row md:space-y-0">
        {{--Logo and Social Links container--}}
        <div
            class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
            <div class="mx-auto my-6 text-center text-white md:hidden">
                Copyright &copy 2022, All Rights Reserved
            </div>
            {{--Logo--}}
            <div>
                <img src="{{asset('./assets/brand/BundlCart-logo-white.png')}}" class="h-8 object-contain" alt="">
            </div>
            {{--Social Links Container--}}
            <div class="flex justify-center space-x-4">
                {{--Links--}}
                <a href=""><img src="{{asset('./assets/social-icons/icon-facebook.svg')}}" alt=""
                                class="h-8 object-contain"></a>
                <a href=""><img src="{{asset('./assets/social-icons/icon-youtube.svg')}}" alt=""
                                class="h-8 object-contain"></a>
                <a href=""><img src="{{asset('./assets/social-icons/icon-twitter.svg')}}" alt=""
                                class="h-8 object-contain"></a>
                <a href=""><img src="{{asset('./assets/social-icons/icon-pinterest.svg')}}" alt=""
                                class="h-8 object-contain"></a>
                <a href=""><img src="{{asset('./assets/social-icons/icon-instagram.svg')}}" alt=""
                                class="h-8 object-contain"></a>
            </div>
        </div>

        {{--List Container--}}
        <div class="flex justify-around space-x-32">
            <div class="flex flex-col space-y-3 text-white">
                <a href="#" class="hover:text-themePrimaryRed">Home</a>
                <a href="#" class="hover:text-themePrimaryRed">Pricing</a>
                <a href="#" class="hover:text-themePrimaryRed">Products</a>
                <a href="#" class="hover:text-themePrimaryRed">About Us</a>
            </div>
            <div class="flex flex-col space-y-3 text-white">
                <a href="#" class="hover:text-themePrimaryRed">Careers</a>
                <a href="#" class="hover:text-themePrimaryRed">Community</a>
                <a href="#" class="hover:text-themePrimaryRed">Privacy Policy</a>
            </div>
        </div>

        {{--Input Container--}}
        <div class="flex-flex-col justify-between">
            <form action="">
                <div class="flex space-x-3">
                    <input type="text" class="flex-1 px-4 rounded-full focus:outline-none"
                           placeholder="Updated in your inbox"/>
                    <button
                        class="px-6 py-2 text-white rounded-full bg-themePrimaryRed hover:bg-themeLightRed focus:outline-none">
                        Go
                    </button>
                </div>
            </form>
            <div class="hidden text-white md:block">Copyright &copy 2022, All Rights Reserved</div>
        </div>
    </div>
</footer>

