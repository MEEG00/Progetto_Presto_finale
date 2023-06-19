@if (session('access.denied'))
        <h3 class="text-center alert alert-danger">{{session('access.denied')}}</h3>
@endif
@if (session('message'))
        <h3 class="text-center alert alert-success">{{session('message')}}</h3>
@endif
@if (session('wasted'))
        <h3 class="text-center alert alert-danger">{{session('wasted')}}</h3>
@endif

<x-layout>
{{-- LOGO --}}
    <div class="container-fluid align-items-center ">
        <div class="row p-0 m-0 b-0 opacity-0" id='container-home' >

            <div class="col-12 justify-content-end align-items-start d-flex " id='slogan'>
                <p class="textcustom d-none d-xl-block">DISCOVER TREASURES FROM THE PAST, ANEW.</p>
            </div>

            <div class="col-12 header d-flex align-items-center d-flex flex-column ">
                <div class="col-12 d-flex align-items-end divcustom mt-5 mt-lg-0 " id='slogan2'>
                    <p class="textcustom ms-5 text-center pads">Elevate Your Style with Timeless Luxury.</p>
                </div>
                      
                <div class="col-12 d-flex align-items-center d-flex flex-column ">
                <div class="col-12 d-flex align-items-end copy mt-5 mt-lg-0 ">
                    <p class="d-none d-xl-block pads ">Codeartisans 2023 ©</p>

                </div>
                <div class="col-12 justify-content-center d-flex p-0 " id="logo">

                    <h1 class="new mb-5">presto</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- VISION  --}}

                <div class="container underlogo align-items-center justify-content-center d-flex opacity-0 mb-5 "  id="ourvision"  >
                    <div class="row justify-content-center" >

                            <div class="col-12 col-md-6 text-light under">
                                <h2>{{__('ui.ourv')}}</h2>

                            </div>
                            <div class="col-12 col-md-6 text-light under1 " id="ourv-obs-point" >
                                <p>{{__('ui.ourvision')}}</p>

                            </div>
                    </div>
                </div>

                {{-- steps --}}

    <div class="container-fluid justify-content-center mt-5 pt-5 steps">
        <div class="row justify-content-center d-flex">
        <div class="col-12 text-light">
             <h2 class="text-center">Earn money never was so easy!</h2>

        </div>
        <div class="col-12 col-md-6 justify-content-center d-flex mt-5 pt-5">
        <div class="justify-content-center d-flex">
            <img src="{{Storage::url('public/media/step1.png')}}" class="pngstep" alt="">
        </div>   
        </div>
        <div class="col-12 col-md-6 text-light align-items-center mt-5 pt-5 d-flex">
            <p class="text-center steprule">Registration: Create an account on the selected website by following the registration instructions. Fill in the required fields with your personal information, such as name, email, and password. Verify your account if necessary.</p>
        </div>
        <div class="col-12 col-md-6 justify-content-center d-block d-sm-none d-sm-block d-flex">
        <div class="justify-content-center d-flex">
            <img src="{{Storage::url('public/media/step2.png')}}" class="pngstep" alt="">
        </div>
        </div>
        <div class="col-12 col-md-6 text-light mt-5 align-items-center d-flex">
            <p class="text-center steprule">Create your product: Log in to your account and create a new listing for the used product you want to sell. Provide a clear description of the product, including details such as brand, model, condition, and key features. Add high-quality photos to attract buyers' attention and wait our revisor accept it!</p>
        </div>
        <div class="col-12 col-md-6 justify-content-center d-none d-md-block d-lg-block d-flex">
        <div class="justify-content-center d-flex">
            <img src="{{Storage::url('public/media/step2.png')}}" class="pngstep" alt="">
        </div>
        </div>
        <div class="col-12 col-md-6 justify-content-center d-flex">
        <div class="justify-content-center d-flex">
            <img src="{{Storage::url('public/media/step3.png')}}" class="pngstep" alt="">
        </div>
        </div>
        <div class="col-12 col-md-6 text-light mt-5 align-items-center d-flex">
            <p class="text-center steprule">Managing Offers and Communication: Monitor your account to check for inquiries from interested buyers. Respond promptly to questions and negotiate any offers. Establish the final selling price and coordinate the payment and delivery method with the buyer. Maintain clear and friendly communication throughout the selling process.</p>
        </div>  
        </div>
    </div>

{{-- ARRIVALS/CARD  --}}

                <div class="container-fluid align-items-center pt-5 mt-5">
                    <div class="row">
                        <div class="col-12 col-md-3 d-flex justify-content-center mt-5 ">
                    <h2 class="title-text">{{__('ui.new')}}</h2>
                </div>

                <div class="col-md-9 col-12">
                    <div class="row">
                        @foreach ($articles->take(6) as $article)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center my-4">
                            <a href="{{route('show_article',compact('article'))}}" class="">
                                <div class="card">
                                    <div class="fadex"></div>
                                    <img src="{{$article->images()->first()->GetUrl(500,500)}}" class="card-img-top img-fluid rounded-bottom" alt="...">
                                    <div class="overlay rounded-end">
                                        <p class="text-card ms-3">{{$article->price}} €</p>
                                        <h6 class="fst-italic ms-3">Created by: {{Ucwords($article->user->name)}}</h6>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text text fst-italic text-light mb-2">{{$article->category->category}}</p>
                                        <h5 class="card-title text-light text fw-bold">{{$article->title}}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
            </div>






</x-layout>
