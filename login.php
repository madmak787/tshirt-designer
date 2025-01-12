<?php
require_once 'inc/header-login.php';
?>

<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
        <div class="w-lg-500px p-10">

            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
                <div class="text-center mb-11">
                    <h1 class="text-gray-900 fw-bolder mb-3">
                        Sign In
                    </h1>

                    <div class="text-gray-500 fw-semibold fs-6">
                        T-Shirt Designer
                    </div>
                </div>

                <div class="fv-row mb-8">
                    <input type="text" placeholder="Email" name="email" autocomplete="off"
                        class="form-control bg-transparent" />
                </div>

                <div class="fv-row mb-3">
                    <input type="password" placeholder="Password" name="password" autocomplete="off"
                        class="form-control bg-transparent" />
                </div>

                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                    <div></div>

                    <a href="reset-password.html" class="link-primary">
                        Forgot Password ?
                    </a>
                </div>

                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">

                        <span class="indicator-label">Sign In</span>

                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>

                <div class="text-gray-500 text-center fw-semibold fs-6">
                    Not a Member yet?

                    <a href="register.php" class="link-primary">
                        Sign up
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
        <div class="d-flex fw-semibold text-primary fs-base gap-5">
            <a href="https://instagram.com/madmak787" target="_blank">MAK</a>
        </div>
    </div>
</div>

<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(assets/img/auth-bg.png)">
    <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
        <a href="#" class="mb-0 mb-lg-12">
            <img alt="Logo" src="assets/img/custom-1.png" class="h-60px h-lg-75px" />
        </a>

        <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="assets/img/auth-screens.png" alt="" />

        <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
            Fast, Efficient and Productive
        </h1>

        <div class="d-none d-lg-block text-white fs-base text-center">
            In this kind of post, <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>

            introduces a person they’ve interviewed <br /> and provides some background information about

            <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>
            and their <br /> work following this is a transcript of the interview.
        </div>
    </div>
</div>

<?php
require_once 'inc/footer.php';
?>