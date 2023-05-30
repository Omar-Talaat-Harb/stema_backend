<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-CBU</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/Color logo - no background.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>
    <section class="container-fluid">

        <div class="row">
            <!-- <div class="col-lg-2 col-md-3 dash"
                style="background: linear-gradient(to bottom, #0EB0BA, #304BAB); height: 100vh;">
                <h2>Unit Admission</h2>
                <nav class="nav flex-column">
                    <div class="d-flex">
                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                        <h5><a class="nav-link active" aria-current="page" href="regisrtation.html">Registration</a></h5>
                    </div><!-- d-flex 1 --
                    <div class="d-flex">
                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                        <h5><a class="nav-link active" aria-current="page" href="cbu.html">CBU Data</a></h5>
                    </div><!-- d-flex 2 --
                    <div class="d-flex">
                        <div><i class="fas fa-ellipsis-h"></i></div>
                        <h5><a class="nav-link active" aria-current="page" href="collections.html">Collection</a></h5>
                    </div><!-- d-flex 3 --
                    <div class="d-flex">
                        <div><i class="fas fa-ellipsis-h"></i></div>
                        <h5><a class="nav-link active" aria-current="page" href="labratories.html">Labratories</a></h5>
                    </div><!-- d-flex 4 --
                </nav>

            </div> -->
            <!--section2-->
            <div class="col-lg-3 col-md-4 col-sm-5 collectionf " style="height: 120vh;">
                <!-- <div class=""> -->
                <div class="  ps-4 pe-4  leftcollection">
                    <div class="contaier mt-5 col-lg-12 flex-column justify-content-center ">
                        <h3 id="unitAdd">Unit Admission</h3>

                        <ul class="navbar-nav justify-content-center leftco ">
                            <li class="nav-item licoll circ1">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check " aria-hidden="true"></i>
                                </div>
                                <a href="disabledregstration.html">
                                    <p class="ps-3 ">Registration</p>
                                </a>
                            </li>

                            <!-- 1 -->
                            <li class="nav-item licoll ">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <a href="disableldCBU.html">
                                    <p class="ps-3">CBU Data</p>
                                </a>
                            </li>

                            <!-- 2 -->
                            <li class="nav-item licoll circ2">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <a href="collectionp1disable.html">
                                    <p class="ps-3">Collection</p>
                                </a>
                            </li>
                            <!-- 3 -->
                            <li class="nav-item licoll ">
                                <div class="ir ">
                                    <i class="fa-regular fa-circle"></i>
                                </div>
                                <a href="{{ route('laboratory1') }}">
                                    <p class="ps-3">Laboratories</p>
                                </a>
                            </li>
                            <!-- 4 -->
                        </ul>


                    </div>

                </div>
                <!-- </div> -->
            </div><!-- left side bar-->

            <div class="col-9 files">
                <div class="container m-auto container-fluid">
                    <div class="d-flex ">
                        <div class="col-lg-1 p-4">
                            <a href="disadledcontactdata.html">
                                <i class="fas fa-arrow-left fa-2x"></i>
                            </a>
                        </div> <!-- back button -->
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 hstack gap-2  ms-auto user">
                            <div class=" ms-auto ">
                                <h6>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
                                <p>{{ auth()->user()->role->type }} </p>
                            </div>

                            <a href="profile.html"> <img src="images/nurse.svg" alt="user-photo" width="60px"></a>

                        </div>
                        <div class="col-lg-1"></div>


                    </div>
                    <div class="row">
                        <div class="d-flex donrhead mt-5">
                            <div class="col-10" style="color: #0EB0BA;">
                                <h1>CBU Data</h1>
                            </div>
                            <div class="col-2">

                            </div>

                        </div><!--cbu-->


                        <div class="row donors">

                            <div class="col-6">
                                <div class="d-flex donorform" style="margin-left:2px;">

                                    <input type="text" class="form-control myformcontrol mydisable" placeholder="Talkha Hospital"
                                        required id="entry1" disabled>
                                </div>
                                <div class="d-flex">

                                    <select name="Donation type" id="RH_system 1" style="color: gray;" class="form-control myformcontrol"
                                        disabled required>
                                        <option value="Public">Public</option>
                                        <option value="Private">Private</option>
                                    </select>
                                </div>


                            </div>
                            <div class="col-6">

                                <input type="number" class="form-control myformcontrol mydisable" placeholder="209908739" disabled
                                    id="entry3">

                                <div class="d-flex" style="margin-top: -41px; margin-left: -10px;">

                                    <select name="source" id="source"  style="color: gray;" class="form-control myformcontrol" required disabled>

                                        <option value="Cord_tissue">Cord Tissue</option>
                                        <option value="Cord_blood">Cord Blood</option>
                                        <option value="Amniotic">Amniotic Fluid</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">


                                <div class="d-flex chosefile">

                                        <div class="image-upload" style="margin-top:55px; margin-right: -40px; z-index: 2;">
                                            <label for="file-input" >
                                              <img src="images/attach.svg"/>
                                            </label>


                                            <input id="file-input" type="file" disabled />
                                          </div>
                                    <input type="text" class="form-control myformcontrol attach mydisable"
                                        placeholder="Cord Blood Donar Consent.jpg" id="entry4" disabled>
                                </div>

                                <div class="d-flex chosefile">

                                    <div class="image-upload" style="margin-top:55px; margin-right: -40px; z-index: 2;">
                                        <label for="file-input" >
                                          <img src="images/attach.svg"/>
                                        </label>

                                            <input id="file-input" type="file"disabled />
                                          </div>
                                        <input type="text" class="form-control myformcontrol attach mydisable"
                                        placeholder="Cord Blood Donor Agreement.jpg" id="entry5" disabled>
                                </div>
                                <div class="d-flex chosefile">

                                    <div class="image-upload" style="margin-top:55px; margin-right: -40px; z-index: 2;">
                                        <label for="file-input" >
                                          <img src="images/attach.svg"/>
                                        </label>


                                            <input id="file-input" type="file"disabled />
                                          </div>
                                        <input type="text" class="form-control myformcontrol attach mydisable" placeholder="CBU Unit Image.jpg"
                                        id="entry6" disabled>

                                </div>
                                <div class="offset-10"> <a href="collectionp1disable.html" class="btn" style="width:100%;">Next</a>
                                </div>
                            </div><!--inputs-->
                            <div class="row myfiles">


                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div><!--row-->
    </section>







    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="JS/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
