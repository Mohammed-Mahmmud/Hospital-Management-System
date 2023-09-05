    @extends('dashboard.layouts.auth-master')

    @section('css')
    <style>
        .loginform {
            display: none;
        }
    </style>
    @endsection





    @section('title')
    H-M-S | Sign In
    @endsection

    @section('content')
    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="{{ route('panel') }}" class="d-block">
                                                    <img src="{{ asset('dashboard/assets/images/logo-light.png') }}" alt=""
                                                        height="18">
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators"
                                                            data-bs-slide-to="0" class="active" aria-current="true"
                                                            aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators"
                                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators"
                                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design,
                                                                easy for customization. Thanks very much! "</p>
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
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Login to continue to Hospital System.</p>
                                        </div>

                                        {{-- login options --}}
                                        <select class="form-select form-select-l" id="sectionChooser">
                                            <option value="" selected disabled>login as </option>
                                            <option value="user">Patient</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                        {{-- end options --}}

                                        {{-- user form --}}
                                        <div class="loginform" id="user">
                                            <div class="mt-4">
                                                <form method="POST" action="{{ route('user.login') }}">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">User Email</label>
                                                        <input type="email" class="form-control" name="email" id="useremail"
                                                            placeholder="Enter user mail" required autofocus
                                                            autocomplete="username" :value="old('email')">
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />


                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="float-end">
                                                            <a href="auth-pass-reset-cover.html" class="text-muted">Forgot
                                                                password?</a>
                                                        </div>
                                                        <label class="form-label" for="password-input">User Password</label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" name="password"
                                                                class="form-control pe-5 password-input"
                                                                placeholder="Enter password" id="user-password" required
                                                                autocomplete="current-password">
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="password-addon"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                        </div>

                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="user-auth-remember-check">
                                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{
                                                            __('Remember me') }}</span>

                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-success w-100" type="submit">Sign
                                                            In</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <div class="signin-other-title">
                                                            <h5 class="fs-14 mb-4 title">Sign In with</h5>
                                                        </div>

                                                        <div>
                                                            <button type="button"
                                                                class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                                    class="ri-facebook-fill fs-16"></i></button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                                    class="ri-google-fill fs-16"></i></button>
                                                            <button type="button"
                                                                class="btn btn-dark btn-icon waves-effect waves-light"><i
                                                                    class="ri-github-fill fs-16"></i></button>
                                                            <button type="button"
                                                                class="btn btn-info btn-icon waves-effect waves-light"><i
                                                                    class="ri-twitter-fill fs-16"></i></button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                            {{-- <div class="mt-5 text-center">
                                                <p class="mb-0">Don't have an account ? <a href="{{ route('user.register') }}"
                                                        class="fw-bold text-primary text-decoration-underline"> Sign up</a>
                                                </p>
                                            </div> --}}
                                        </div>


                                        {{-- admin form --}}
                                        <div class="loginform" id="admin">
                                            <div class="mt-4">
                                                <form method="POST" action="{{ route('admin.login') }}">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Admin Email</label>
                                                        <input type="email" class="form-control" name="email"
                                                            id="admin-email" placeholder="Enter admin mail" required
                                                            autofocus autocomplete="username" :value="old('email')">
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />


                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="float-end">
                                                            <a href="auth-pass-reset-cover.html" class="text-muted">Forgot
                                                                password?</a>
                                                        </div>
                                                        <label class="form-label" for="password-input">Admin
                                                            Password</label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" name="password"
                                                                class="form-control pe-5 password-input"
                                                                placeholder="Enter password" id="admin-password" required
                                                                autocomplete="current-password">
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="admin-password-addon"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                        </div>

                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="admin-auth-remember-check">
                                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{
                                                            __('Remember me') }}</span>

                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-success w-100" type="submit">Login</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <div class="signin-other-title">
                                                            <h5 class="fs-14 mb-4 title">Sign In with</h5>
                                                        </div>

                                                        <div>
                                                            <button type="button"
                                                                class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                                    class="ri-facebook-fill fs-16"></i></button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                                    class="ri-google-fill fs-16"></i></button>
                                                            <button type="button"
                                                                class="btn btn-dark btn-icon waves-effect waves-light"><i
                                                                    class="ri-github-fill fs-16"></i></button>
                                                            <button type="button"
                                                                class="btn btn-info btn-icon waves-effect waves-light"><i
                                                                    class="ri-twitter-fill fs-16"></i></button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>



                                        </div>
                                        {{-- end of login form --}}
                                    
                                        <div class="mt-5 text-center">
                                           <p class="mb-0">Don't have an account ? <a href="{{ route('admin.register') }}"
                                                   class="fw-bold text-primary text-decoration-underline"> Register </a>
                                           </p>
                                       </div>
                                    </div>
                                    
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
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

    @section('js')
    <script>
        $('#sectionChooser').change(function() {
                var myid = $(this).val();
                $('.loginform').each(function() {
                    myid === $(this).attr('id') ? $(this).show() : $(this).hide();
                });
            });
    </script>

    @endsection