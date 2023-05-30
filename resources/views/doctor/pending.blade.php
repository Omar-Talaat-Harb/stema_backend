<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>STEMA-Pending</title>
<link rel="shortcut icon" href="{{ asset('assets/images/Color logo - no background.png') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/CSS/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/CSS/aos.css') }}">
<link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>




<nav class="navbar navbar-expand-lg ps-3 navbar-light fixed-top"
    style="background: linear-gradient(to right,#0EB0BA, #3080ab);">
    <div class="container-fluid">
    <a class="navbar-brand ms-5 ps-5" href="#"><img src="{{ asset('assets/images/White logo - no background.png') }}" alt="STEMA"
        width="100px"></a>

    <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">
        <input type="text" placeholder="Search" id="search">


        <i class="fas fa-search"
        style="border-radius: 100%; border:0EB0BA 2px solid; padding:10px;color: white;background-color:#0EB0BA; margin: 10px;"></i>
    </div>

    <div class="pt-3">

        <a href="profile.html" class="text-black text-decoration-none d-flex ">
        <div class="pe-3 text-capitalize text-light">
            <h6>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
            <p>{{ auth()->user()->role->type }} </p>
        </div>

        <div>
            <img src="{{ asset('assets/images/doctor.svg') }}" class="rounded-circle" alt="" srcset="">
        </div>
        </a>

    </div>


    </div>
    </div>
</nav>

<section style="margin-top:10%;">
    <div>
    <h2 style="color: #0EB0BA;margin-left:5%;">Pending Files</h2>
    </div>
    <div class="container">
    <div class="row">

        <table class="table table-striped" style="text-align:center;">
        <thead>
            <tr>
            <button class="headline">No.<th scope="col"></th></button>
            <button class="headline">File name<th scope="col"></th></button>
            <button class="headline" style="margin-left:15%;">Created By<th scope="col"></th></button>
            <button class="headline" style="margin-left:13%;">Last modified<th scope="col"></th></button>

            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1.</th>
            <td class="filename text-capitalize name"><a href="{{ route('disabledregstration') }}"
                class="text-decoration-none text-black">Nada yasser</a></td>
            <td class="gry">Mona Zaher</td>
            <td class="gry">3 Nov 20:05</td>



            </tr>
            <tr>
            <th scope="row">2.</th>
            <!-- <td  class="filename">Madeha Ali</td> -->
            <td class="filename text-capitalize name"><a href="{{ route('disabledregstration') }}"
                class="text-decoration-none text-black">Madeha Ali</a></td>
            <td class="gry">Mazen Abdallah</td>
            <td class="gry">2 Aug 08:00</td>
            </tr>
            <tr>
            <th scope="row">3.</th>
            <!-- <td  class="filename">Gehan Nasr</td> -->
            <td class="filename text-capitalize name"><a href="{{ route('disabledregstration') }}"
                class="text-decoration-none text-black">Gehan Nasr</a></td>
            <td class="gry">Zena Mohamed</td>
            <td class="gry">5 Sep 14:00</td>
            </tr>
            <tr>
            <th scope="row">4.</th>
            <!-- <td  class="filename"></td> -->
            <td class="filename text-capitalize name"><a href="{{ route('disabledregstration') }}"
                class="text-decoration-none text-black">Hana Abdallah</a></td>
            <td class="gry">Laila Ahmed</td>
            <td class="gry">14 Nov 10:22</td>
            </tr>
            <tr>
            <th scope="row">5.</th>
            <!-- <td  class="filename"></td> -->
            <td class="filename text-capitalize name"><a href="{{ route('disabledregstration') }}"
                class="text-decoration-none text-black">Rasha Mohsen</a></td>
            <td class="gry">Farid Adel</td>
            <td class="gry">7 Dec 20:22</td>
            </tr>
        </tbody>
        </table>
    </div>

    </div>
    <!-- modal -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">


        <div class="modal-body text-center">

            <form action="#">
            <h5>Are you sure you want to delete this user</h5>
            <div class="mybtn">
                <button type="button" class="cancel" data-bs-dismiss="modal">Close</button>
                <button type="button" class="delete">Delete</button>
            </div>



            </form>
        </div>


        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
    </div><!--modal  -->

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
