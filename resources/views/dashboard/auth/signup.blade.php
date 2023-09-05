@extends("dashboard.layouts.auth-master")

@section("css")
<style>
    .registerform {
        display: none;
    }
</style>
@endsection

@section("js")
<script>
    $('#sectionChooser').change(function() {
            var myid = $(this).val();
            $('.registerform').each(function() {
                myid === $(this).attr('id') ? $(this).show() : $(this).hide();
            });
        });
</script>
@endsection

@section("title")
H-M-S | Sign Up
@endsection

@section("content")
    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden m-0">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.html" class="d-block">
                                                    <img src="{{asset("dashboard/assets/images/logo-light.png")}}" alt="" height="18">
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much!"</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" This System is designed to introduce you to the core principles and rules you'll need to follow to write functional."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">"Best agile practices of cleaning code Software System·Endure and succeed swirling ."</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Register Account</h5>
                                            <p class="text-muted">Sign up to Hospital System.</p>
                                        </div>

                                        <select class="form-select form-select-l" id="sectionChooser">
                                            <option value="" selected disabled>Register as </option>
                                            <option value="user">Patient</option>
                                            <option value="admin">Admin</option>
                                        </select>

                                        {{-- signup form  --}}
                                        <div class="registerform" id="user">
                                        <div class="mt-4">
                                            <form method="POST" action="{{ route('user.register') }}">
                                                @csrf
                                                                                        
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email"  placeholder="Enter email address"  required autocomplete="username">
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    <div class="invalid-feedback">

                                                        Please enter email
                                                    </div>
                                                </div> 


                                            

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Username <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="name" placeholder="Enter username" required type="text" name="name"  required autofocus autocomplete="name">
                                                    <div class="invalid-feedback">
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                                        Please enter username
                                                    </div>
                                                </div>



                                            
                                                <div class="mb-3">
                                                    <label class="form-label" for="password">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
{{-- ------------------------------------------------------------------------------------------------------------------ --}}
                                                <div class="mb-3">
                                                    <label class="form-label" for="password_confirmation">User Confirm Password</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" name="password_confirmation" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password_confirmation" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required autocomplete="new-password" >
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            
                                                            Please enter password
                                                        </div>
                                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                                    </div>
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>

                                            
                                        
{{-- ------------------------------------------------------------------------------------------------------------------ --}}
                                                <div class="mb-4">
                                                    <p class="mb-0 fs-13 text-muted fst-italic">By registering you agree to the Hospital System <a href="#" class="text-primary text-decoration-underline fst-normal fw-semibold">Terms of Use</a></p>
                                                </div>

                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-13">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-13 mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-13 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-13 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-13 mb-0">A least <b>number</b> (0-9)</p>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-14 mb-4 title text-muted">Create account with</h5>
                                                    </div>

                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        {{-- <div class="mt-5 text-center">
                                            <p class="mb-0">Already have an account ? <a href="{{ route("user.login") }}" class="fw-bold text-primary text-decoration-underline"> Sign in</a> </p>
                                        </div> --}}
                                    </div>
                                        {{-- end of signup form --}}

                                        {{-- register form  --}}
                                        <div  class="registerform" id="admin">
                                        <div class="mt-4">
                                            <form method="POST" action="{{ route('admin.register') }}">
                                                @csrf
                                                                                        
                                                <div class="mb-3">
                                                    <label for="email" class="form-label"> Admin Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email"  placeholder="Enter email address"  required autocomplete="username">
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    <div class="invalid-feedback">
                                                        Please enter email
                                                    </div>
                                                </div> 


                                               

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Admin Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="name" placeholder="Enter username" required type="text" name="name"  required autofocus autocomplete="name">
                                                    <div class="invalid-feedback">
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                                        Please enter name
                                                    </div>
                                                </div>



                                            
                                                <div class="mb-3">
                                                    <label class="form-label" for="password">Admin Password</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
{{-- ------------------------------------------------------------------------------------------------------------------ --}}
                                                <div class="mb-3">
                                                    <label class="form-label" for="password_confirmation">admin Confirm Password</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" name="password_confirmation" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password_confirmation" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required autocomplete="new-password" >
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            
                                                            Please enter password
                                                        </div>
                                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                                    </div>
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>

                                            
                                        
{{-- ------------------------------------------------------------------------------------------------------------------ --}}
                                                <div class="mb-4">
                                                    <p class="mb-0 fs-13 text-muted fst-italic">By registering you agree to the Hospital System <a href="#" class="text-primary text-decoration-underline fst-normal fw-semibold">Terms of Use</a></p>
                                                </div>

                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-13">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-13 mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-13 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-13 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-13 mb-0">A least <b>number</b> (0-9)</p>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Register</button>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-14 mb-4 title text-muted">Create account with</h5>
                                                    </div>

                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        {{-- end of register form --}}
                                    </div>
                                    
                                    <div class="mt-5 text-center">
                                        <p class="mb-0">Already have an account ? <a href="{{ route("admin.login") }}" class="fw-bold text-primary text-decoration-underline">Login</a></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
@endsection
       
