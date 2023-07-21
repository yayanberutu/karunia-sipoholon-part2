<!--Start Header-->
<div id="header-1">
    <header class="header-two">
        <div class="container">
            <a href="index-2.html">
                <img class="logo2" src="{{ asset('assets/images/logob.png') }}" alt="" width="200"
                    height="100"></a>
            <a href="index-2.html"><img class="logo-dark" src="{{ asset('assets/images/logoa.png') }}" alt=""
                    width="150" height="70"></a>

            <div class="cont-right">

                <nav class="menu-5 nav">
                    <ul class="wtf-menu">
                        <li><a href="{{ route('web.dashboard') }}">Home</a>
                            {{-- <ul class="submenu">
                                <li> <a href="index-2.html" class="select">Home 1</a> </li>
                                <li> <a href="index2.html">Home 2</a> </li>
                            </ul> --}}
                        </li>

                        <li class="parent"><a>Menu</a>
                            <ul class="submenu">
                                <li><a href="{{ route('web.food') }}">Menu</a>
                                <li><a href="{{ route('web.checkout.history') }}">History</a>
                                </li>
                            </ul>
                        </li>




                        <li class="parent"><a>Hotel</a>

                            <ul class="submenu">
                                <li><a href="{{ route('web.penginapan') }}">Hotel</a>
                                <li><a href="{{ route('web.penginapan.history') }}">History</a>
                                </li>
                            </ul>

                        </li>

                        <li class="parent"><a>Pemandian</a>
                            <ul class="submenu">
                                <li><a href="{{ route('web.pemandian') }}">Pemandian</a></li>
                                <li><a href="{{ route('web.pemandian.history') }}">History</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('web.kritik') }}">contact us</a>
                        </li>


                    </ul>
                </nav>

                <ul class="social-icons">

                    <li><a href="https://www.instagram.com/karunia_airpanas/?hl=id"><i class="icon-instagram"></i></a>
                    </li>

                </ul>

                <ul class="shop-bag">
                    <li class="close-bag">
                        <a class="cart-button"><span class="num top-cart-number"></span><i class="icon-icons163"></i>
                        </a>
                    </li>
                    <li class="open-bag">
                        <div class="top-cart-items"></div>
                        <div class="sub-total">
                            <span>SUBTOTAL: <strong class="top-checkout-price"></strong></span>
                            <div class="buttons">
                                <a href="{{ route('web.cart.index') }}" class="view-cart">view cart</a>
                                <a href="{{ route('web.checkout.customer') }}" class="check-out">Check Out</a>
                            </div>
                        </div>
                    </li>
                </ul>

                <nav class="menu-5 nav">
                    <ul class="wtf-menu">
                        <li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+628 2259
                                    11787</span></a>
                        </li>
                        <li>
                            <a href="#" class="select-item">
                                <i class="icon-user"></i>
                            </a>
                            <ul class="submenu">
                                @auth
                                    <li><a href="{{ route('web.logout') }}">Logout</a></li>
                                @else
                                    <li><a href="{{ route('auth.index') }}">Login</a></li>
                                @endauth
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>


        </div>

    </header>
</div>

<!--End Header-->
