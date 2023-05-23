<div class="section px-3 px-lg-4 pt-5" id="books">
    <div class="container-narrow">
        <div class="text-center mb-5">
            <h2 class="marker marker-center">Kitaplar</h2>
        </div>
        <div class="row py-3">
            @foreach ($books as $book)
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{ asset('images/' . $book->image) }}" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">Yazar: {{ $book->author }}</p>
                            <p class="card-text">Sayfa Sayısı: {{ $book->page_count }}</p>
                            <p class="card-text">Yayınevi: {{ $book->publisher }}</p>
                            <p class="{{ $book->available ? 'text-success' : 'text-danger' }}">
                                {{ $book->available ? 'Ödünç Almaya Uygun' : 'Ödünç Almaya Uygun Değil' }}
                            </p>
                            @if ($book->available)
                                <form action="{{ route('library.borrow', $book->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Ödünç Al</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
