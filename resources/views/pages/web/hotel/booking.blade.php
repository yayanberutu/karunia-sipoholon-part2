<x-web-layout title="Booking">
    <style>
        .cool-button {
            background-color: #E9B947;
            /* Warna latar belakang */
            color: white;
            /* Warna teks */
            border: none;
            /* Menghilangkan border */
            padding: 12px 24px;
            /* Ukuran padding */
            text-align: center;
            /* Posisi teks menjadi di tengah */
            text-decoration: none;
            /* Menghilangkan underline */
            display: inline-block;
            /* Menampilkan sebagai elemen inline */
            font-size: 15px;
            /* Ukuran font */
            transition-duration: 0.s;
            /* Durasi efek transisi */
            cursor: pointer;
            /* Mengubah kursor saat diarahkan ke button */
        }

        .cool-button:hover {
            background-color: #E9B947;
            /* Warna latar belakang saat dihover */
        }
    </style>
    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>Room Detail</h1>
                        <span>Karunia Sipoholon</span>
                        <ul>
                            <li><a href="#">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-img"></div>
    </div>


    <!--End Sub Banner-->



    <!--Start Content-->
    <div class="content">

        <!--Start Rooms-->
        <div class="booking-steps">
            <div class="container">


                <!--Start Bread Crumb-->

                <div class="bread-crumb">
                    <div class="row">
                        <div class="col-md-12">



                            <div class="bread-crumb-sec">
                                <a>
                                    <span class="number">1</span>
                                    <div class="clear"></div>
                                    <span class="text">Your Room</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a class="selected">
                                    <span class="number">2</span>
                                    <div class="clear"></div>
                                    <span class="text">Place Your Reservation</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a>
                                    <span class="number">3</span>
                                    <div class="clear"></div>
                                    <span class="text">Confirmation</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!--End Bread Crumb-->



                <!--Start Select Room-->

                <div class="detail-sections">
                    <div class="row">
                        <form action="{{ route('web.penginapan.storeReservation') }}" method="post">
                            <input type="hidden" name="hotel_id" value="{{ $hotelId }}">
                            <input type="hidden" name="checkin" value="{{ $checkin }}">
                            <input type="hidden" name="checkout" value="{{ $checkout }}">
                            <input type="hidden" name="adults" value="{{ $adults }}">
                            <input type="hidden" name="price" value="{{ $price }}">

                            @csrf
                            <div class="col-md-4">
                                <div class="reservation">
                                    <span class="title">Your Reservation</span>

                                    <ul>
                                        <li><span><strong>Check In:</strong> {{ $checkin }}</span></li>
                                        <li><span><strong>Check Out:</strong> {{ $checkout }}</span></li>
                                        <li><span><strong>Guests:</strong>{{ $adults }} Orang </span></li>
                                        <li><span><strong>Rooms:</strong> Kamar {{ $hotelId }}</span></li>
                                    </ul>

                                    <div class="total-price">
                                        <span class="sub-title">Total Price</span>
                                        <span class="price">Rp. {{ number_format($price) }}</span>
                                    </div>
                                    <br> <br>
                                    <center>
                                        <button type="submit" class="cool-button">Buat Pesanan</button>
                                    </center>

                                </div>

                            </div>


                            <div class="col-md-8">

                                <div class="guest-detail">

                                    <h4>Guest Details</h4>

                                    <div class="form">

                                        <div class="col-md-6">
                                            <div class="field">
                                                <label>Nama Lengkap <span></span></label>
                                                <input name="fullname" type="text"
                                                    value="{{ Auth::user()->fullname }}">
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="field">
                                                <label>Email <span></span></label>
                                                <input name="email" type="text" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
{{-- 
                                        <div class="col-md-6">
                                            <div class="field">
                                                <label>Alamat <span></span></label>
                                                <input name="address" type="text"
                                                    value="{{ Auth::user()->address }}">
                                            </div>
                                        </div> --}}

                                        <div class="col-md-6">
                                            <div class="field">
                                                <label>Telephone Number <span></span></label>
                                                <input name="phone" type="text" value="{{ Auth::user()->phone }}">
                                            </div>
                                        </div>
                                        {{-- 
                                    <div class="book-now">

                                        <div class="col-md-6">
                                            <div class="payment-method">
                                                <span>book now by email?</span>
                                                <p>Details of your reservation have just been sent to you in a
                                                    confirmation email, we look forward.</p>
                                                <a href="room-step3.html">Book now by email</a>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="payment-method">
                                                <span>book now by paypal?</span>
                                                <p>Details of your reservation have just been sent to you in a
                                                    confirmation email, we look forward.</p>
                                                <a href="#.">pay now with paypal</a>
                                            </div>
                                        </div>

                                    </div> --}}



                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>


                <!--End Select Room-->








            </div>
        </div>
        <!--End Rooms-->

    </div>
    <!--End Content-->


</x-web-layout>
