<html>

    <head>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <!-- Bootstrap Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css" />

    </head>

    <body>
        
        <!-- Fitur Website -->
        <div id="fitur" class="py-4">

            <div class="container">

                <div class="row">

                    @foreach($feature as $data)
                        @include('components.feature', [
                                'data' => $data
                            ])
                    @endforeach

                </div>

            </div>

        </div>

        <div id="blog" class="py-4">

            <div class="container">

                <div class="row">

                    <div class="col col-8">

                        <div class="card mb-3">

                            <img src="https://images.unsplash.com/photo-1632406896548-3d5e70c8f461?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80" class="card-img-top" />

                            <div class="card-body">

                                <h5 class="card-title">Judul Artikel</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet</p>
                                <p class="card-text">
                                    <small class="text-muted">1 jam yang lalu</small>
                                </p>

                            </div>

                        </div>
                        
                    </div>

                    <div class="col col-4">

                        <div class="card mb-3">

                            <img src="https://images.unsplash.com/photo-1632406896548-3d5e70c8f461?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80" class="card-img-top" />

                            <div class="card-body">

                                <h5 class="card-title">Judul Artikel</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet</p>
                                <p class="card-text">
                                    <small class="text-muted">1 jam yang lalu</small>
                                </p>

                            </div>

                        </div>
                        
                    </div>

                    <div class="col col-4">

                        <div class="card mb-3">

                            <img src="https://images.unsplash.com/photo-1632406896548-3d5e70c8f461?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80" class="card-img-top" />

                            <div class="card-body">

                                <h5 class="card-title">Judul Artikel</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet</p>
                                <p class="card-text">
                                    <small class="text-muted">1 jam yang lalu</small>
                                </p>

                            </div>

                        </div>
                        
                    </div>

                    <div class="col col-4">

                        <div class="card mb-3">

                            <img src="https://images.unsplash.com/photo-1632406896548-3d5e70c8f461?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80" class="card-img-top" />

                            <div class="card-body">

                                <h5 class="card-title">Judul Artikel</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet</p>
                                <p class="card-text">
                                    <small class="text-muted">1 jam yang lalu</small>
                                </p>

                            </div>

                        </div>
                        
                    </div>

                </div>

            </div>

        </div>

        <div id="accordion">

            <div class="container">

                <div class="col col-12">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Accordion Item #1
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Accordion Item #2
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    </body>

</html>