<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join Us | El Samara</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('form/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('form/css/style.css')}}">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign Up</h2> 
                        {!! Form::open(['url' => '/postregister','class' => 'form-wrap']) !!}
                            {!!Form::text('nama_depan','',['class' => 'form-group','placeholder' => 'Nama Depan'])!!}
                            {!!Form::text('nama_belakang','',['class' => 'form-group','placeholder' => 'Nama Belakang'])!!}
                            <!-- <div class="form-select" id="service-select">
                                {!!Form::select('jenis_kelamin',['' => 'Pilih Jenis Kelamin','Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'],'L');!!}
                            </div> -->
                            <!-- {!!Form::date('tanggalLahir','',['class' => 'form-group','placeholder' => 'Tanggal Lahir'])!!} -->
                            <!-- {!!Form::textarea('alamat','',['class' => 'form-group','placeholder' => 'Alamat'])!!} -->
                            {!!Form::text('instansi','',['class' => 'form-group','placeholder' => 'Instansi'])!!}
                            {!!Form::email('email','',['class' => 'form-group','placeholder' => 'Email'])!!}
                            {!!Form::text('instagram','',['class' => 'form-group ','placeholder' => 'Instagram'])!!}
                            {!!Form::number('noHandphone','',['class' => 'form-group','placeholder' => 'No Handphone'])!!}
                            {!!Form::password('password',['class' => 'form-group','placeholder' => 'Password'])!!}
                            
                            <!-- <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        <!-- </form> -->
                        {!! Form::close() !!}
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('form/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="{{asset('form/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('form/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>