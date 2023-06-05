<style>
    .announcement {
        height: 300px;
        object-fit: cover;
        object-position: center;
    }
    .slick-next:before {
        color: black;
    }
    .slick-prev:before {
        color: black;
    }
</style>
<div class="section px-2 px-lg-4 pt-5" id="announcements">
    <div class="container-narrow">
        <div class="text-center mb-5">
            <h2 class="marker marker-center">Duyurular</h2>
        </div>
        <div class="bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
            <div class="slick-slider">
                @foreach ($announcements as $announcement)
                    <div class="grid-item">
                        <figure class="portfolio-item">
                            <img class="announcement" src="{{ asset('images/'.$announcement->image) }}" alt="{{ $announcement->title }}" />
                            <figcaption>
                                <h4 class="h5 mb-0">{{ $announcement->title }}</h4>
                                <div>{{ $announcement->date }}</div>
                                <div>{{ $announcement->description }}</div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>

        $(document).on('ready', function () {
            $(".slick-slider").slick({
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay:true,
                autoplaySpeed: 2500,
                centerMode :true
            });
        });
    </script>
@endpush
