<!DOCTYPE html>
<html lang="pt-BR" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ouvidoria do Município de Ibema</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Douglas Dall'Agnol" />

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css/selectize.css" />

    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-left">
                    <div class="phone">
                        <i class="mdi mdi-phone-classic"></i> (45) 3238-1347
                    </div>
                    <div class="email">
                        <a href="#">
                            <i class="mdi mdi-email"></i> contato@pibema.pr.gov.br
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    <img src="images/logo-light.png" alt="" class="logo-light" height="40" />
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="40" />
                </a>
            </div>                 
            <div class="buy-button">
                <a href="index.html" class="btn btn-primary"><i class="mdi mdi-plus"></i> Enviar Pedido</a>
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                    <li><a href="index.html">Início</a></li>
                    <li><a href="index.html">Prefeitura</a></li>
                    <li><a href="index.html">Fale Conosco</a></li>
                    <li><a href="index.html">Pedido Presencial</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Novo Pedido</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- POST A JOB START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form3">
                                <h4 class="text-dark mb-3">Envie seu pedido:</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Title</label>
                                            <input id="company-name" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Type</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Job Type">Job Type</option>
                                                    <option value="1">Full Time</option>
                                                    <option value="2">Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Category</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Category">Category</option>
                                                    <option value="1">Web Developer</option>
                                                    <option value="2">PHP Developer</option>
                                                    <option value="3">Web Designer</option>
                                                    <option value="4">Graphic Designer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">City</label>
                                            <input id="city" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Country</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Country">Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Bangladesh</option>
                                                    <option value="3">Canada</option>
                                                    <option value="4">Dominica</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Minimum Salary</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="$8000">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Maximum Salary</label>
                                            <input id="maximum-salary" type="text" class="form-control resume" placeholder="$20000">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Education Level</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Level">Level</option>
                                                    <option value="1">Level-1</option>
                                                    <option value="2">Level-2</option>
                                                    <option value="3">Level-3</option>
                                                    <option value="4">Level-4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Year of Experience</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Experience">Experience</option>
                                                    <option value="1">1 Year</option>
                                                    <option value="2">2 Year</option>
                                                    <option value="3">3 Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Website</label>
                                            <input id="url" type="url" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Email Address</label>
                                            <input id="email-address" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Phone Number</label>
                                            <input id="number" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Gender</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Gender">Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Shift</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Shift">Shift</option>
                                                    <option value="1">Morning</option>
                                                    <option value="2">Evening</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Description</label>
                                            <textarea id="description" rows="6" class="form-control resume" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <div class="input-group mt-2 mb-2">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label rounded"><i class="mdi mdi-cloud-upload mr-1"></i> Upload Files</label>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item">
                                                <h6 class="text-muted mb-0">Upload Images Or Documents.</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <a href="#" class="btn btn-primary">Post a Job</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POST A JOB END -->

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="images/logo-light.png" height="55" alt=""></a>
                    <p class="mt-4">Av. Ney Euyrson Napoli, 1426, Centro - Ibema/PR. <br>CEP:85478-000</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Prefeitura</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Página Principal</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Câmara Municipal</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Secretaria</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Contatos</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Eventos</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Notícias</li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Publicações Oficiais </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Coleta Seletiva</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Links Úteis</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Recursos</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Portal da Transparência</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Cidadão Web</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Diário Oficial</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Acesso a Informação </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Contra-Cheque Online</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Licitações</a></li>
                    </ul>
                </div>
            
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Horário de Atendimento</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Segunda - Sexta:</li>
                        <li class="mt-2">das 08:00 as 12:00</li>
                        <li class="mt-2">das 13:30 as 17:30</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">© 2019 Ouvidoria Municipal. Design by Douglas Dall'Agnol.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/counter.int.js"></script>

    <script src="js/app.js"></script>
    <script src="js/home.js"></script>

</body>
</html>