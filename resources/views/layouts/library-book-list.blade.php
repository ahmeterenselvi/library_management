<div class="section px-3 px-lg-4 pt-5" id="services">
    <div class="container-narrow">
        <div class="text-center mb-5">
            <h2 class="marker marker-center">My Services</h2>
        </div>
        <div class="text-center">
            <p class="mx-auto mb-3" style="max-width:600px"> Actually there is no service here.</p>
        </div>
        <div class="row py-3">
            @foreach ($books as $book)
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <img class="mb-2" src="{{ asset('images/' . $book->image) }}" width="96" height="96"
                         alt="{{ $book->title }}"/>
                    <td>{{ $book->page_count }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td class="{{ $book->available ? 'available-yes' : 'available-no' }}">
                        {{ $book->available ? 'Ödünç Almaya Uygun' : 'Ödünç Almaya Uygun Değil' }}
                    </td>
                </div>
            @endforeach
        </div>
    </div>
</div>
