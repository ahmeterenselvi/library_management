<style>
    .message {
        margin-top: 200px;
        height: 400px
    }
</style>
<div class="section px-3 px-lg-4 pt-5" id="message">
    <div class="container-narrow">
        <div class="row py-3">
            <div class="col-md-12">
                <h1>Yeni Mesaj Oluştur</h1>
                <form method="POST" action="{{ route('library.store') }}">
                    @csrf
                    <div class="form-group" style="visibility: hidden">
                        <input type="text" class="form-control" name="receiver" id="receiver" value="admin" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Başlık:</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>

                    <div class="form-group">
                        <label for="message">İçerik:</label>
                        <input type="text" class="form-control" name="message" id="message" required>
                    </div>
                    @if (session('student'))
                    <div class="form-group" style="visibility: hidden">
                        <input type="text" class="form-control" name="sender_student_id" id="sender_student_id" value="{{session('student')['id']}}"
                               required>
                    </div>
                    @endif

                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
