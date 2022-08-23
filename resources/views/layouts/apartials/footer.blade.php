<footer id="footer" class="footer-hover-links-light mt-0" data-plugin-image-background data-plugin-options="{ 'bgPosition': 'center 100%'}">
    <div class="container">
        <div class="footer-top-featured-boxes featured-boxes">
            <div class="row">
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" >
                        <i class="fas fa-globe-americas"></i>
                        <div class="d-inline-block " >
                            <h2 style="margin-top: 12px;" class="text-2 pt-1 mb-0">INSTANT DELIVERY</h2>

                        </div>
                    </a>
                </div>
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" >
                        <i class="fas fa-file-contract fa-10x" ></i>
                        <div class="d-inline-block " >
                            <h2 style="margin-top: 12px;" class="text-2 pt-1 mb-0">COMPLETE DOCUMENTATION</h2>

                        </div>
                    </a>
                </div>
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" >
                        <i class="fab fa-rocketchat fa-10x"></i>
                        <div class="d-inline-block ">
                            <h2 style="margin-top: 10px;" class="text-2 pt-1 mb-0">FAST SUPPORT</h2>

                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 mb-4 mb-lg-0 ">
                <div class="text-center">
                    <a href="{{route('anasayfa')}}" class="logo ">
                        <img alt="EZY Website Template" class="img-fluid mb-3" src="/frontend/img/anasayfa/logo-1.png">
                    </a>
                </div>
                <ul class="list list-icon list-unstyled">
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Address:</span>1961. Cd. No:27 , Mutlukent Çankaya / Ankara / Turkey</li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Phone:</span> <a href="tel:+903122357735">+90 (312) 235 77 35</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Phone:</span> <a href="tel:+903122357736">+90 (312) 235 77 36</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Email:</span> <a href="mailto:globalsales@rdglobal.com.tr" class="link-underline-light">globalsales@rdglobal.com.tr</a></li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <h2 class="text-3 mb-3 text-center">USEFUL LINKS</h2>
                <ul class="list list-icon list-unstyled">
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="{{route('anasayfa')}}">Home</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="#">Products</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="#">Documents</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="#">Product Development Center</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="{{route('about-us')}}">About Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h2 class="text-3 mb-4 text-center">Get Fast Product List</h2>
                <form class="newsletter-form" action="php/newsletter-subscribe.php" method="POST">

                    <div class="input-group bg-light rounded">
                        <input type="email" class="newsletter-email form-control border-0 rounded" placeholder="Enter Email address" aria-label="Enter Email address" required>

                    </div>
                    <div class="input-group-btn p-1 text-center">
                        <button class="btn oem-button font-weight-semibold btn-h-2 rounded h-100" type="submit"><span class="text-light">SUBSCRIBE</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer-copyright bg-dark-2">
        <div class="container">
            <div class="row text-center align-items-center">

                <div class="col-md-12 ">
                    <p class="text-center pb-0 mb-0 text-light ">Copyrights © {{date('Y')}}. All Rights Reserved <a href="https://www.rdglobal.com.tr/" class="text-light text ">RD GLOBAL</a></p>
                </div>
            </div>
        </div>
    </div>

</footer>
