<div class="section pt-4 px-3 px-lg-4" id="about">
    <div class="container-narrow">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h4 my-2">Hello! I’m <?php echo session('student_name'); ?></h2>
                <div class="row mt-3">
                    <div class="col-sm-2">
                        <div class="pb-1">Öğrenci Numarası:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo session('student_number'); ?></div>
                    </div>
                    <div class="col-sm-2">
                        <div class="pb-1">Email:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo session('email'); ?></div>
                    </div>
                    <div class="col-sm-2">
                        <div class="pb-1">Telefon Numarası:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo session('phone'); ?></div>
                    </div>
                    <div class="col-sm-2">
                        <div class="pb-1">Şifre:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo session('password'); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img
                    class="avatar img-fluid mt-2" src="#" width="400" height="400"
                    alt="Ahmet Eren Selvi"/></div>
        </div>
    </div>
</div>
