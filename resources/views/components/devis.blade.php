    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Demandez un devis</h5>
                        <h1 class="mb-0">Besoin d'un devis gratuit ? N'hésitez pas à nous contacter</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reponses Dans les 24h</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Disponible 24h/24</h5>
                        </div>
                    </div>
                    <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Appelez pour poser n'importe quelle question</h5>
                            <h4 class="text-primary mb-0">+237 657994610</h4>
                        </div>
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fab fa-whatsapp fw-normal text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Appelez pour poser n'importe quelle question</h5>
                            <h4 class="text-primary mb-0"><a class="me-2" href="https://wa.me/+237653531407">+237 653531407</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form action="" @method('post')>
                            @csrf
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="votre nom" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="votre adresse email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select name="service" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Choisir un service</option>
                                        <option value="infographie">infographie</option>
                                        <option value="Serigraphie">Serigraphie</option>
                                        <option value="Imprimerie">Imprimerie</option>
                                        <option value="sites_web&aplications mobiles">conception de sites web & applications mobiles</option>
                                        <option value="Packaging">Packaging</option>
                                        <option value="Branding">Branding</option>
                                        <option value="Gravure">Gravure</option>
                                        <option value="Marquage">Marquage</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" name="message" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Demander un devis</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
