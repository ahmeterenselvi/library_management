<div class="section px-2 px-lg-4 pt-5" id="announcement">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="marker marker-center">Duyurular</h2>
        </div>
        <div class="bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
            <div class="slick-slider">
                @foreach ($announcements as $announcement)
                    <div class="grid-item">
                        <figure class="portfolio-item">
                            <img src="{{ asset('images/'.$announcement->image) }}" alt="{{ $announcement->title }}" />
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
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.slick-slider').slick({
                slidesToShow: 3, // Gösterilecek slayt sayısı
                slidesToScroll: 1, // Kaydırma işlemi sırasında kaç slaytın geçileceği
                autoplay: true, // Otomatik oynatma
                autoplaySpeed: 3000, // Otomatik oynatma hızı (ms cinsinden)
                dots: true, // Navigasyon noktalarını gösterme
                arrows: true, // Ok işaretlerini gösterme
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
@endpush
