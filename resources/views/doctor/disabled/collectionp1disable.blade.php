<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-Collection</title>
    <link rel="shortcut icon" href="images/Color logo - no background.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/animate.cs') }}s">
    <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>

    <section class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-5 collectionf " style="height: 130vh;">
                <!-- <div class=""> -->
                <div class="  ps-4 pe-4  leftcollection">
                    <div class="contaier mt-5 col-lg-12 flex-column justify-content-center ">
                        <h3 id="unitAdd">Unit Admission</h3>

                        <ul class="navbar-nav justify-content-center leftco ">
                            <li class="nav-item licoll circ1">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check " aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('disabledregstration') }}">
                                    <p class="ps-3 ">Registration</p>
                                </a>
                            </li>

                            <!-- 1 -->
                            <li class="nav-item licoll ">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('disabledcbu') }}">
                                    <p class="ps-3">CBU Data</p>
                                </a>
                            </li>

                            <!-- 2 -->
                            <li class="nav-item licoll circ2">
                                <div class="rr bg-light vertline">
                                    <i class="fa fa-check"></i>
                                </div>
                                <a href="{{ route('disabledcollection') }}">
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
                    <!-- <i class="fa fa-circle circleleft"></i>
                        <i class="fa fa-circle circleleft cl2"></i> -->
                </div>
                <!-- </div> -->
            </div><!-- left side bar-->




            <div class="col-lg-9 col-md-8 col-sm-7 rightcollside">

                <div class="pt-3 col-12 d-flex trightcollection ">
                    <!-- <button type="button" class="ps-4 " style="background: transparent; border: none;" id="prevBtn"
                        onclick="nextPrev(-1)">
                        <i class="fa fa-arrow-left arrowprevee"></i>
                    </button> -->
                    <div class="ps-4 pt-3"><a href="{{ route('disabledcbu')  }}" id="prevve"><i
                                class="fa fa-arrow-left arrowprevee"></i></a> </div>
                    <div class="lilanurse pt-2">
                        <a href="profile.html" class="text-black text-decoration-none">
                            <div class="pe-3 text-capitalize">
                                <h6>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
                                <p>{{ auth()->user()->role->type }} </p>
                            </div>

                            <div class="">
                                <img src="{{ asset('assets/images/doctor.svg') }}" alt="" srcset="">
                            </div>
                        </a>
                    </div>


                </div>
                <!-- end top right side -->

                <div class="col-lg-12 mt-3 pe-2 ms-2">

                    <form action="" id="regForm" class=" ps-2 pb-3">
                        <div class="">
                            <div class="d-flex pt-3 justify-content-between">
                                <h5 class="ps-2 collh5">Cord Eligibility Criteria</h5>
                                <p class="me-1 mt-2 pagenum">Page 1 of 4</p>

                            </div>
                            <!--1 row -->
                            <!-- <div class="col-lg-12 col-sm-6 ">
                                <div class="d-flex">
                                    <input type="text" class="inputUnit divofform ps-3" id="cordLength"
                                        name="cordLength" placeholder="Cord Length" disabled style="border:1px solid #cccccc; padding-top:0px !important;">
                                    <input type="text" class="inputUnit ps-3 " id="placentalWeight"
                                        name="placentalWeight" placeholder="Placental Weight" disabled style="border:1px solid #cccccc; padding-top:0px !important;">
                                </div>

                                <div class=" d-flex">
                                    <input type="text" class="inputUnit divofform ps-3" id="cordPathology"
                                        name="cordPathology" placeholder="Cord Pathology " disabled>
                                    <input type="text" name="" class="inputUnit selectcollec pe-3" id="cordVessels"
                                        disabled placeholder="Cord has three Vessels ">


                                </div>
                            </div> -->
                            <div class="col-lg-12 col-sm-6 ">
                                <div class="d-flex justify-content-between">
                                    <input type="text" class="inputUnit me-4 ps-3 form-control " id="cordLength"
                                        name="cordLength" placeholder="Cord Length" disabled  style="border:1px solid #cccccc; ">
                                    <input type="text" class="inputUnit ps-3 form-control" id="placentalWeight"
                                        name="placentalWeight" placeholder="Placental Weight" disabled style="border:1px solid #cccccc; ">
                                </div>

                                <div class=" d-flex justify-content-between">
                                    <input type="text" class="inputUnit ps-3 form-control" id="cordPathology"
                                        name="cordPathology" placeholder="Cord Pathology " disabled style="border:1px solid #cccccc; ">
                                    <input type="text" name="" class="inputUnit selectcollec form-control pe-3" id="cordVessels" style="border:1px solid #cccccc; "
                                        disabled placeholder="Cord has three Vessels ">


                                </div>
                            </div>
                            <!-- end form1 -->
                            <!-- <div class="d-flex radiocollection ">
                                <h5 class="ps-1 collh5">Neonatal Eligibility Criteria </h5>
                                <p class="ms-5 mt-2 fw-bold"><span style="color:red;">*</span> Are there any infectious
                                    diseases?</p>
                                <div class="ms-4 mt-2 ">
                                    <input type="radio" id="yes" name="infectiousDiseases" value="yes" disabled checked>
                                    <label for="yes" class="me-3">Yes</label>
                                    <input type="radio" id="no" name="infectiousDiseases" value="no" disabled>
                                    <label for="no">No</label>
                                </div>
                            </div>top form2 -->
                            <div class="d-flex radiocollection ">
                                <h5 class="ps-1 collh5">Neonatal Eligibility Criteria </h5>
                                <p class="ms-5 mt-2 fw-bold"> Are there any infectious
                                    diseases?</p>
                                <div class="ms-4 mt-2 ">
                                    <input type="radio" id="yes" name="infectiousDiseases" value="yes" disabled checked>
                                    <label for="yes" class="me-3">Yes</label>
                                    <input type="radio" id="no" name="infectiousDiseases" value="no" disabled>
                                    <label for="no">No</label>
                                </div>
                            </div><!--top form2-->
                            <!-- <div class="col-lg-12 col-sm-6 ">

                               
                                <div class=" d-flex inputUnit ps-3" style="width: 100%; ">
                                    <span class="pt-3">*</span>
                                    <input type="text" class="inputrequiredYes" placeholder="Specify your answer"
                                        disabled>
                                </div>

                                <div class="d-flex">
                                    <input type="text" class="inputUnit divofform ps-3" id="NeonatalApgarScore1m"
                                        disabled name="NeonatalApgarScore1m"
                                        placeholder="Neonatal Apgar Score (1 min )">
                                    <input type="text" class="inputUnit ps-3 " id="NeonatalApgarScore10m" disabled
                                        name="NeonatalApgarScore10m" placeholder="Neonatal Apgar Score (10 min )">
                                </div>
                                <div class=" d-flex ">
                                    <input type="text" class="inputUnit divofform ps-3" id="NeonatalordeOfBirth"
                                        disabled name="NeonatalordeOfBirth" placeholder="Neonatal order of Birth ">
                                    <input type="text" name="" class="inputUnit selectcollec pe-3" id="NeonatalGender"
                                        disabled placeholder="Neonatal gender ">
                                   

                                </div>
                                <div class="d-flex">
                                    <input type="text" disabled class="inputUnit divofform ps-3" id="NeonatalHead"
                                        name="NeonatalHead" placeholder="Neonatal Head Circumference">
                                    <input type="text" disabled class="inputUnit ps-3 " id="NeonatalChest"
                                        name="NeonatalChest" placeholder="Neonatal Chest measurement">
                                </div>
                            </div> -->
                            <div class="col-lg-12 col-sm-6 ">

                                <div class=" d-flex inputUnit ps-3 " style="width: 100%; border:1px solid #cccccc !important ;background-color: #e9ecef;height: 30px;">
                                    
                                    <input type="text" class="inputrequiredYes form-control " placeholder="Specify your answer"
                                        disabled style="min-height: 20px !important;">
                                </div>

                                <div class="d-flex">
                                    <input type="text" class="inputUnit divofform ps-3 form-control " id="NeonatalApgarScore1m"
                                        disabled name="NeonatalApgarScore1m"
                                        placeholder="Neonatal Apgar Score (1 min )" style="border:1px solid #cccccc; ">
                                    <input type="text" class="inputUnit ps-3 form-control " id="NeonatalApgarScore10m" disabled
                                        name="NeonatalApgarScore10m" placeholder="Neonatal Apgar Score (10 min )" style="border:1px solid #cccccc; font-size: 17.5px; ">
                                </div>
                                <div class=" d-flex ">
                                    <input type="text" class="inputUnit divofform ps-3 form-control " id="NeonatalordeOfBirth"
                                        disabled name="NeonatalordeOfBirth" placeholder="Neonatal order of Birth " style="border:1px solid #cccccc; ">
                                    <input type="text" name="" class="inputUnit selectcollec pe-3 form-control " id="NeonatalGender"
                                        disabled placeholder="Neonatal gender " style="border:1px solid #cccccc;font-size: 17px; ">
                                    <!-- <select name="" class="inputUnit selectcollec pe-3" id="NeonatalGender"disabled>
                                        <option value class="d-none">Neonatal gender</option>
                                        <option value="male" selected >Male</option>
                                        <option value="female">Female</option>
                                    </select> -->

                                </div>
                                <div class="d-flex">
                                    <input type="text" disabled class="inputUnit divofform ps-3 form-control " id="NeonatalHead"
                                        name="NeonatalHead" placeholder="Neonatal Head Circumference"style="border:1px solid #cccccc; ">
                                    <input type="text" disabled class="inputUnit ps-3 form-control " id="NeonatalChest"
                                        name="NeonatalChest" placeholder="Neonatal Chest measurement" style="border:1px solid #cccccc; " >
                                </div>
                            </div>

                        </div>
                        <!-- tab 1-->
                        <div><a href="{{ route('laboratory1') }}" class="btn mt-4 px-5 "
                                style="font-size: 17px;margin-left:84%;width: 170px;">Next</a></div>



                    </form>
                    <!-- form -->
                </div>
                <!-- end bottom right side -->

            </div><!--end right side -->

        </div><!--row of page-->







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
