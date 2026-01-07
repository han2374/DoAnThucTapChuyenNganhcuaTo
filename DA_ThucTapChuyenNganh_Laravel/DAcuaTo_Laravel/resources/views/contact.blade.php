<x:layoutHome> 
@section('body')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact us</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Widget Section Begin -->
    <section class="contact-widget spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Địa Chỉ</h4>
                            <p>180 Cao Lỗ, P4, Q8, TP HCM</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Hotline</h4>
                            <p>0702586700</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Email</h4>
                            <p>Videoviewer@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Widget Section End -->

    <!-- Call To Action Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                 <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798902705!2d-74.25986790365917!3d40.697670067823786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1596152431947!5m2!1sen!2sbd"
                            height="450" style="border:0;"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <h3>Get in touch</h3>
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Name">
                            <input type="text" name="email" placeholder="Email">
                            <input type="text" name="website" placeholder="Website">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->
        <script>
        (function(){
            // lazy load map iframe when it enters viewport
            var maps = document.querySelectorAll('.lazy-map');
            if('IntersectionObserver' in window && maps.length){
                var obs = new IntersectionObserver(function(entries, observer){
                    entries.forEach(function(entry){
                        if(entry.isIntersecting){
                            var iframe = entry.target;
                            var src = iframe.getAttribute('data-src');
                            if(src){ iframe.setAttribute('src', src); iframe.removeAttribute('data-src'); }
                            observer.unobserve(iframe);
                        }
                    });
                }, {rootMargin: '200px'});
                maps.forEach(function(m){ obs.observe(m); });
            } else {
                // fallback: load immediately
                maps.forEach(function(m){ var s = m.getAttribute('data-src'); if(s) m.setAttribute('src', s); });
            }
        })();
        </script>
@endsection
</x:layoutHome> 