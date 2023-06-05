<style>
    .avatar {
        border-radius: 250px !important;
        border: 5px double #f6e05e;
    }
</style>
<div class="section pt-4 px-3 px-lg-4" id="about">
    <div class="container-narrow">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h4 my-2">Merhaba <?php echo session('student.name'); ?>!</h2>
                <div class="row mt-3">
                    <div class="col-sm-10">
                        <div class="pb-1">Öğrenci Numarası:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo session('student.student_number'); ?></div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1">Email:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo session('student.email'); ?></div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1">Telefon Numarası:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo session('student.phone'); ?></div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1">Şifre:</div>
                    </div>
                    <div class="col-sm-10">
                        <!--<div class="pb-1 fw-bolder"><?php echo session('student.password'); ?></div>-->
                        <div class="pb-1 fw-bolder">**********</div>
                    </div>
                </div>
                <div class="mt-3" data-aos="fade-up" data-aos-delay="200">
                    <a class="btn btn-primary shadow-sm mt-1 hover-effect" href="{{ route('profile.index') }}">Bilgilerimi Düzenle
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img
                    class="avatar img-fluid mt-2" src="{{ asset('images/'.session('student.image')) }}" width="400" height="400"
                    alt="Ahmet Eren Selvi"/></div>
        </div>
    </div>
</div>
