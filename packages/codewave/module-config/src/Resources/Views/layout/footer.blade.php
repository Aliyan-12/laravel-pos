<footer class="text-center text-lg-start text-muted mt-3" style="background-color: #f5f5f5;">
    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start pt-4 pb-4">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-12 col-lg-3 col-sm-12 mb-2">
                    <!-- Content -->
                    <a href="https://mdbootstrap.com/" target="_blank" class="">
                        <img src="{{asset('logos/gray.PNG')}}" height="35" />
                    </a>
                    <p class="mt-2 text-dark">
                        © 2023 Copyright: wecodeu.com
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <!-- Links -->
                    <h6 class="text-uppercase text-dark fw-bold mb-2">
                        Store
                    </h6>
                    <ul class="list-unstyled mb-4">
                        <li><a class="text-muted" href="#">About us</a></li>
                        <li><a class="text-muted" href="#">Find store</a></li>
                        <li><a class="text-muted" href="#">Categories</a></li>
                        <li><a class="text-muted" href="#">Blogs</a></li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <!-- Links -->
                    <h6 class="text-uppercase text-dark fw-bold mb-2">
                        Information
                    </h6>
                    <ul class="list-unstyled mb-4">
                        <li><a class="text-muted" href="#">Help center</a></li>
                        <li><a class="text-muted" href="#">Money refund</a></li>
                        <li><a class="text-muted" href="#">Shipping info</a></li>
                        <li><a class="text-muted" href="#">Refunds</a></li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <!-- Links -->
                    <h6 class="text-uppercase text-dark fw-bold mb-2">
                        Support
                    </h6>
                    <ul class="list-unstyled mb-4">
                        <li><a class="text-muted" href="#">Help center</a></li>
                        <li><a class="text-muted" href="#">Documents</a></li>
                        <li><a class="text-muted" href="#">Account restore</a></li>
                        <li><a class="text-muted" href="#">My orders</a></li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-12 col-sm-12 col-lg-3">
                    <!-- Links -->
                    <h6 class="text-uppercase text-dark fw-bold mb-2">Newsletter</h6>
                    <p class="text-muted">Stay connected for Module Marvels and Exclusive Offers!</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
                        <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                            Join
                        </button>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <div class="">
        <div class="container">
            <div class="d-flex justify-content-between py-4 border-top">
                <!--- payment --->
                <div>
                    <i class="fab fa-lg fa-cc-visa text-dark"></i>
                    <i class="fab fa-lg fa-cc-amex text-dark"></i>
                    <i class="fab fa-lg fa-cc-mastercard text-dark"></i>
                    <i class="fab fa-lg fa-cc-paypal text-dark"></i>
                </div>
                <!--- payment --->

                <!--- language selector --->
                <div class="dropdown dropup">
                    <a class="dropdown-toggle text-dark" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Urdu</a>
                        </li>
                    </ul>
                </div>
                <!--- language selector --->
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->
<!-- MDB -->
<script type="text/javascript" src="{{ asset('front/assets/js/mdb.min.js') }}"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="{{ asset('front/assets/js/script.js') }}"></script>