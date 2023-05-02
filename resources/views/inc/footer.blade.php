

<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="subscribe-form-wrap">
                    <h6>Subscribe. Every weekly.</h6>

                    <form class="custom-form subscribe-form" action="#" method="get" role="form">
                        <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your Email Address" required>

                        <button type="submit" class="form-control" id="subscribe-submit">Subscribe</button>
                    </form>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <h3 class="footer-heading">Products</h3>
                <ul class="list-unstyled">
                    <li><a href="/register">Create CV</a></li>
                    <li><a href="/register">CV Templates</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <h3 class="footer-heading">Quick Links</h3>
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy; 2023 <a href="https://colorlib.com" target="_blank" class="text-primary">CJ Resume</a> All rights reserved | Designed by <a href="https://templatemo.com" target="_blank" class="text-primary">TemplateMo</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ url('assets/js/userprofile.js') }}"></script>

@php
    
    /**
     *  Alert
     */
    $message = '';
    $icon = '';
    
    if (!empty($errors->all())) {
        $icon = 'error';
        $message = $errors->first();
    } elseif (session()->has('success')) {
        $icon = 'success';
        $message = session()->get('success');
    } elseif (session()->has('error')) {
        $icon = 'error';
        $message = session()->get('error');
    } elseif (!empty($success)) {
        $icon = 'success';
        $message = $success;
    }
    
@endphp

<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'center',
        showConfirmButton: false,
        timer: 3000
    });
    var message = '{{ $message }}';
    var icon = '{{ $icon }}';
    if (message.length > 0) {
        Toast.fire({
            icon: icon,
            title: message
        });
    }
</script>

<script>
    // Delete Confirmation
    function confirm_form_delete(element) {
        var form = $(element).closest("form");

        Swal.fire({
            title: `Are you sure you want to delete this profile?`,
            text: "If you delete this, it will be gone forever.",
            customClass: {
                cancelButton: 'btn btn-danger'
            },
            showCancelButton: true,
            cancelButtonText: 'No',
            cancelButtonColor: '#ce4242',
            confirmButtonColor: '#004A99',
            confirmButtonText: `Yes`,
            closeOnConfirm: false
        }).then((result) => {

            if (!result.isConfirmed) return;

            jQuery(form).submit();

        });
    }
    
    function saverecord() {
        $("#submitbtn").trigger('click');
    }

    /**
     *  Display Image 
     */
    function display_image(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();
            reader.onload = function(e) {

                $(input).closest('div').find('.box-image-preview').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }

    }
</script>
</body>

</footer>

