<nav class="navbar navbar-expand-lg ps-3 navbar-light fixed-top"
        style="background: linear-gradient(to right,#0EB0BA, #3080ab);">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 ps-5" href="index.html"><img src="{{ asset('assets/images/White logo - no background.png') }}" alt="STEMA"
                    width="100px"></a>

            <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">
                <input type="text" placeholder="Search" id="search">


                <i class="fas fa-search"
                    style="border-radius: 100%; border:0EB0BA 2px solid; padding:10px;color: white;background-color:#0EB0BA; margin: 10px;"></i>
            </div>

            <div class="d-flex" >
            <div style="color: white;" >
                <h5>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h5>
                <p>{{ auth()->user()->role->type }}</p>
            </div>
            <div>
                <img src="{{ asset('assets/images/admin photo2.svg') }}" alt="admin" style="margin-right:50px; margin-left: 20px;" >
            </div>

        </div>

        </div>
        </div>
    </nav>
