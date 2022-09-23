<style>



#SearchIcon:hover
{
    cursor:pointer;
}
</style>
<script>
$(document).ready(function (){
        $('#SearchIcon').click(function (e)
        {
            var searchstring = $('.searchstring').val();
                // window.alert(searchstring);
                if(searchstring=='')
                {
                    window.location.replace("/");
                }
                else
                {
                    window.location.replace("/Shop/"+searchstring);
                }


        });
});
</script>
<!-- ======= Header ======= -->
    <header id="header" class="z-depth-1"  style="position:fixed;top:0px;width:100%;font-family: 'Balsamiq Sans', cursive;">

        <div class="container d-flex" >

          <div id="Gainaloe_Logo" class="logo mr-auto" >
            <!--  <h1 class="text-light"><a href="/">CompanYName</a></h1>  -->
            <a href="/" ><img src=" {{asset('assets/img/Logom.PNG')}}" alt="" class="img-fluid" ></a>



          </div>

          <p class="mobile-nav-toggle"><i class="fas fa-bars"></i> </p>
            <div class="col-md-4 "  >

                <div class="input-group md-form form-sm  " style="width:105%;">
                    <input class="form-control my-0 py-1 red-border searchstring" list="plists" name="plist" id="plist" type="text" placeholder="Search" aria-label="Search" >
                    <datalist id="plists">
                        @php
                            $Products=App\Models\Products::where('status','=','1')->get();
                        @endphp
                        @foreach($Products as $item)
                            <option value="{{$item->url}}">{{$item->name}} </option>
                        @endforeach
                    </datalist>

                    <div class="input-group-append" id="SearchIcon">
                    <span class="input-group-text  lighten-3" id="basic-text1"><i class="fas "
                                                                                  aria-hidden="true"    >
                            <img src="{{url('assets/img/search.gif')}}"style="width: 25px;">

                        </i></span>
                    </div>
                </div>

            </div>

            <nav class="nav-menu d-none d-lg-block contentfont"style="margin-top: 10px;" >

            <ul style="margin-top:5px;">

              <li class="active"><a href="/" >Home</a></li>
                <li class="active"><a href="{{url('/type-product/'.'1')}}" >Shirt</a></li>
                <li class="active"><a href="{{url('/type-product/'.'2')}}" >Shoe</a></li>
                <li class="active"><a href="{{url('/type-product/'.'3')}}" >kits</a></li>
                @if(auth()->user()!=null)
                @if(auth()->user()->role=='admin')
                <li class="active"><a href="/admin-dash" >admin-dash</a></li>
                @endif
                @endif
                @if (Route::has('login'))

                @auth
                  <li class="drop-down active"><a href="#">  <i class="far fa-user-circle active "></i>  My Account  <i class="fas fa-angle-down"></i></a>
                       <ul>
                            <li><a href="{{url('dashboard')}}" ><i class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
                            <li><a href="{{url('profile')}}" ><i class="fas fa-user"></i>  Profile</a></li>
                            <li><a href="{{url('Orders')}}" > <i class="fas fa-table"></i> Orders</a></li>
                             <a   href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  <i class="fas fa-sign-in-alt"></i> {{ __('Logout') }}</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>

                        </ul>
                  </li>

                @else
                <li> <a href="{{ route('login') }}">Login</a> </li>

                    @if (Route::has('register'))
                    <li> <a href="{{ route('register') }}">Register</a> </li>
                    @endif
                @endauth

                @endif



             <li><a href="{{url('cart')}}" style="margin-left:15px;">   <i class="fas  fa-2x"><img src="{{url('assets/img/buy.gif')}}"style="width: 30px;"></i>
              <span class="basket-item-count" style="margin-left:-4px;">
                <span class="badge badge-pill red"> {{ count((array) session('cart')) }}  </span>
                </span></a></li>

            </ul>

          </nav><!-- .nav-menu -->

        </div>
      </header><!-- End Header -->
   <br><br><br>
