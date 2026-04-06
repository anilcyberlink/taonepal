<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="footer-widget-about">
                        <h6 class="footer-widget__title">{{ $about->post_type }}</h6>
                        <p class="color-gray">
                            {{ $about->caption }}
                        </p>
                        <a href="{{ route('appointment') }}" class="btn btn__primary btn__primary-style2 btn__link">
                            <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Services</h6>
                        <nav>
                            <ul class="list-unstyled">
                                @foreach ($service->take(6) as $value)
                                    <li><a
                                            href="{{ url(geturl($value['uri'], $value['page_key'])) }}">{{ $value->post_title }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Links</h6>
                        <nav>
                            <ul class="list-unstyled">
                                @foreach ($navigations as $row)
                                    <li><a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="footer-widget-contact">
                        <h6 class="footer-widget__title color-heading">Contact Us</h6>
                        <ul class="contact-list list-unstyled">
                            <li>If you have any questions or need help, feel free to contact with our team.</li>
                            <li>
                                <a href="tel: {{ $setting->phone }}" class="phone__number">
                                    <i class="icon-phone"></i> <span>{{ $setting->phone }} </span>
                                </a>
                            </li>
                            <li class="color-body">Location: {{ $setting->location1 }}
                            </li>
                        </ul>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('page.posttype', 'contact-us') }}"
                                class="btn btn__primary btn__link mr-30">
                                <i class="icon-arrow-right"></i> <span>Get Directions</span>
                            </a>
                            <ul class="social-icons list-unstyled mb-0">
                                <li><a href="{{ $setting->facebook_link }}" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $setting->instagram_link }}" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $setting->twitter_link }}" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->
                        </div>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12  text-center">
                    <span class="fz-14">{{ $setting->copyright_text }}</span>
                    <a class="fz-14 color-primary" href="http://cyberlink.com.np">Cyberlink Pvt. Ltd.</a>
                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
</footer><!-- /.Footer -->

<button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
</div><!-- /.wrapper -->

<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')
</body>

</html>
