@extends('layouts.master')

@section('content')
    {{--Hero Section--}}
    <section id="hero">
        {{--Flex Container--}}
        <div class="container flex flex-col-reverse md:flex-row items-center px-6 mx-auto mt-10 space-y-0 space-x-0">
            {{--Left Item: Text--}}
            <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left text-themeTextBlack">
                    Discover the Future of Shopping</h1>
                <p class="max-w-sm text-center text-themeTextHover md:text-left"> Explore a vast selection of
                    high-quality products from trusted sellers and elevate your shopping journey with subscription-based
                    convenience. From fashion to electronics, home decor to beauty, we've got it all! Shop smarter,
                    subscribe with confidence, and experience the future of e-commerce right here.</p>
                <div class="flex justify-center md:justify-start">
                    <a href="#"
                       class="p-3 px-6 pt-2 text-white bg-themePrimaryRed rounded-full baseline hover:bg-themeLightRed">Get
                        Started</a>
                </div>
            </div>
            {{--Right Item: Image--}}
            <div class="w-1/2">
                <img src="{{asset('./assets/illustrations/hero.avif')}}" alt="">

                {{--                                <img src="{{asset('./assets/illustrations/hero (1).png')}}" alt="">--}}
                {{--                <img src="{{asset('./assets/illustrations/hero (2).png')}}" alt="">--}}
                {{--                <img src="{{asset('./assets/illustrations/hero (3).png')}}" alt="">--}}

                {{--                <img src="{{asset('./assets/illustrations/hero (4).png')}}" alt="">--}}

                {{--                <img src="{{asset('./assets/illustrations/hero (5).png')}}" alt="">--}}

                {{--                <img src="{{asset('./assets/illustrations/hero (6).png')}}" alt="">--}}

                {{--                <img src="{{asset('./assets/illustrations/hero (7).png')}}" alt="">--}}

                {{--                                <img class="w-1/2" src="{{asset('./assets/illustrations/hero (9).png')}}" alt="">--}}

                {{--                                <img src="{{asset('./assets/illustrations/hero (10).png')}}" alt="">--}}

                {{--                                <img src="{{asset('./assets/illustrations/hero (19).png')}}" alt="">--}}

                {{--                                                <img src="{{asset('./assets/illustrations/hero (20).svg')}}" alt="">--}}


            </div>

        </div>
    </section>

    {{--Features Section--}}
    <section id="features">
        {{--Flex Container--}}
        <div class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row">
            {{--"What's Different" Section--}}
            <div class="flex flex-col space-y-12 md:w-1/2">
                <h2 class="max-w-md text-4xl font-bold text-center md:text-left text-themeTextBlack">What's different
                    about BundlCart?</h2>
                <p class="max-w-sm text-center md:text-left text-themeTextHover">
                    Lorem ipsum dolor sit amet, alias commodi consectetur cupiditate, dolorum, earum esse est
                    exercitationem iste itaque iusto libero nulla numquam quis quo quod sit tempora. Dicta, odit?
                </p>
            </div>
            {{--Numbered List--}}
            <div class="flex flex-col space-y-8 md:w-1/2">
                {{--List Item 1--}}
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <div class="rounded-l-full bg-themeLighterRed md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-themePrimaryRed">01</div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden text-themeTextBlack">Track company-wide
                                progress</h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block text-themeTextBlack">Track company-wide
                            progress</h3>
                        <p class="text-themeTextHover">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                            architecto at deserunt eum iste laborum nulla reiciendis temporibus! Asperiores excepturi
                            explicabo fuga modi neque nobis, officiis omnis repellat similique voluptas.</p>
                    </div>
                </div>
                {{--List Item 2--}}
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <div class="rounded-l-full bg-themeLighterRed md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-themePrimaryRed">02</div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden text-themeTextBlack">Advanced built-in
                                reports</h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block text-themeTextBlack">Advanced built-in
                            reports</h3>
                        <p class="text-themeTextHover">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                            architecto at deserunt eum iste laborum nulla reiciendis temporibus! Asperiores excepturi
                            explicabo fuga modi neque nobis, officiis omnis repellat similique voluptas.</p>
                    </div>
                </div>
                {{--List Item 3--}}
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <div class="rounded-l-full bg-themeLighterRed md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-themePrimaryRed">03</div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden text-themeTextBlack">Everything you need in
                                one place</h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block text-themeTextBlack">Everything you need in
                            one place</h3>
                        <p class="text-themeTextHover">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                            architecto at deserunt eum iste laborum nulla reiciendis temporibus! Asperiores excepturi
                            explicabo fuga modi neque nobis, officiis omnis repellat similique voluptas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Testimonials Section--}}
    <section id="testimonials">
        {{--Container to the heading and the testimonials blocks--}}
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
            {{--Heading--}}
            <h2 class="text-4xl font-bold text-center text-themeTextBlack">What's different about BundlCart?</h2>
            {{--Testimonials--}}
            <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                {{--Testimonial #1--}}
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-themeBackgroundGray md:w-1/3">
                    <img src="{{asset('./assets/avatars/avatar-anisha.png')}}" class="w-16 -mt-14"
                         alt=""> {{--Negative Margin Top; so that it comes out of it--}}
                    <h5 class="text-lg font-bold text-themeTextBlack">Anisha Li</h5>
                    <p class="text-sm text-themeTextHover">"Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Fugit illo in nihil non omnis quae rem temporibus. Enim expedita natus quod saepe similique!
                        Minima nemo nobis officia quos saepe veritatis!"</p>
                </div>
                {{--Testimonial #2--}}
                <div
                    class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-themeBackgroundGray md:w-1/3 md:flex">
                    <img src="{{asset('./assets/avatars/avatar-ali.png')}}" class="w-16 -mt-14"
                         alt=""> {{--Negative Margin Top; so that it comes out of it--}}
                    <h5 class="text-lg font-bold text-themeTextBlack">Ali Bravo</h5>
                    <p class="text-sm text-themeTextHover">"Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Fugit illo in nihil non omnis quae rem temporibus. Enim expedita natus quod saepe similique!
                        Minima nemo nobis officia quos saepe veritatis!"</p>
                </div>
                {{--Testimonial #3--}}
                <div
                    class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-themeBackgroundGray md:w-1/3 md:flex">
                    <img src="{{asset('./assets/avatars/avatar-shanai.png')}}" class="w-16 -mt-14"
                         alt=""> {{--Negative Margin Top; so that it comes out of it--}}
                    <h5 class="text-lg font-bold text-themeTextBlack">Shanai Richard</h5>
                    <p class="text-sm text-themeTextHover">"Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Fugit illo in nihil non omnis quae rem temporibus. Enim expedita natus quod saepe similique!
                        Minima nemo nobis officia quos saepe veritatis!"</p>
                </div>
            </div>

            {{--Button--}}
            <div class="my-16">
                <a href="#"
                   class="mx-auto px-6 pt-2 p-3 bg-themePrimaryRed text-white rounded-full hover:bg-themeLighterRed">Get
                    Started</a>
            </div>
        </div>
    </section>

    {{--Call to Action Section--}}
    <section id="CTA" class="bg-themePrimaryRed">
        {{--Flex Container--}}
        <div
            class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0">
            <h2 class="text-5xl font-bold leading-tight text-center text-white md:text-4xl md:max-w-xl md:text-left">
                Simplify how your team works today
            </h2>
            <div><a href="#"
                    class="mx-auto px-6 pt-2 p-3 bg-white text-themePrimaryRed rounded-full hover:shadow-xl">Get
                    Started</a></div>
        </div>
    </section>


@endsection



