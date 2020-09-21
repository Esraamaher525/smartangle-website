<!-- ======= Hero Section ======= -->
<section id="hero">
    @include('layouts.header')
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                @forelse($slides as $index => $slide)
                    <!-- Slide -->
                    <div class="carousel-item {{$index == 0 ? 'active' : ''}}" style="background-image: url({{'/storage/'.$slide->image}});">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="animate__animated animate__fadeInDown">{{$slide->getTranslatedAttribute('title')}}</h3>
                                <p class="animate__animated animate__fadeInUp wow fadeInUp">{{$slide->getTranslatedAttribute('content')}}</p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</section><!-- End Hero -->
