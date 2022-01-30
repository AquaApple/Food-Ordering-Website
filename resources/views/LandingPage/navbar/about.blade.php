@include('LandingPage.Includes.head')
    <body id="page-top">
 
     @include('LandingPage.Includes.nav')
 <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container" id="aboutstyle">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ml-auto"><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra eros sit amet congue ultricies. Nullam efficitur maximus arcu, non ornare nulla molestie id. Aliquam ut metus posuere, dictum diam sit amet, sagittis orci. Quisque bibendum lacus eu neque tincidunt, eu placerat velit molestie. Nullam finibus ac nisi vel semper.</p></div>
            <div class="col-lg-4 mr-auto"><p class="lead">Cras in pulvinar nisl. Donec at magna dolor. Nunc velit orci, mollis nec sapien ac, dapibus pulvinar ex. Cras pretium dictum vulputate. Quisque ac massa non nibh eleifend pharetra. Integer at felis vel augue condimentum vehicula nec non nibh. Integer risus orci, pellentesque eu ex sit amet, auctor dignissim nunc.</p></div>
        </div>
       
    </div>
</section>
<!-- copy Right section -->
@include('LandingPage.Includes.copyright')
@include('LandingPage.Includes.scripts')
