@extends('layout')

@section('content')
<div class="main-container">
    <div class="breadcrumb-container">
        <div class="breadcrumb-container--elements">
            <div class="breadcrumb-data">
                <p class="section-name section-name--breadcrumb">THE ULTIMATE LUXURY</p>
                <p class="title-box--big section-name--breadcrumb">Contact Us</p>
            </div>
            <div class="breadcrumb-history">
                <span class="section-name">
                    <span class="section-name--crumbhome">Home</span> | 
                    <span class="section-name--crumb">Blog</span>
                </span>
            </div>
        </div>
    </div>
    <div class="contact-container">
        <div class="contact-container--data">
            <div class="contact-data location">
                <img src="/images/contact-position.png" alt="location-icon" />
                <div class="data-text">
                    <p class="title-box--litle">Hotel Address</p>
                    <p class="text-box"> 19/A, Cirikon City hall Tower New York, NYC</p>
                </div>
            </div>
            <div class="contact-data phone">
                <img src="/images/contact-phone.png" alt="phone-icon" />
                <div class="data-text">
                    <p class="title-box--litle">Phone Number</p>
                    <p class="text-box">+ 976 568 674</p>
                    <p class="text-box">+ 976 568 675</p>
                </div>
            </div>
            <div class="contact-data email">
                <img src="/images/contact-mail.png" alt="mail-icon" />
                <div class="data-text">
                    <p class="title-box--litle">Email</p>
                    <p class="text-box">info@webmail.com</p>
                    <p class="text-box">jobs.webmail@mail.com</p>
                </div>
            </div>
        </div>
        <div class="contact-container--map">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.3344252412594!2d-5.4507133847294!3d36.109709480096534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c94ef076b7a6b%3A0x7498073f7b0c046c!2sC.%20Torre%20de%20Punta%20Carnero%2C%2033%2C%2011207%20Algeciras%2C%20C%C3%A1diz!5e0!3m2!1ses!2ses!4v1647537767594!5m2!1ses!2ses" width="1170" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            <div id="map">EL MAPA</div>
            <div id="distances"></div>
            <div>
                <input id="input-address" type="text" placeholder="Enter a Location"/>
                <button id="send-address">Send</button>
            </div>
            <div>
                <select name="comunidades" id="comunidades">
                    <option value="" disabled selected>Select your region</option>
                </select>
            </div>
        </div>
        <div class="contact-container--form">
                <form>
                    <div class="name-email--section">
                        <input type="text" name="name" id="name" placeholder="Your Full Name"/>
                        <input type="text" name="email" id="email" placeholder="Enter Email Adress"/>
                    </div>
                    <div class="phone-subject--section">
                        <input type="text" name="phone" id="phone" placeholder="Add Phone Number"/>
                        <input type="text" name="subject" id="subject" placeholder="Enter Subject"/>
                    </div>
                    <div class="message--section">
                        <textarea name="message" id="message" placeholder="Enter Message"/></textarea>
                    </div>
                    <div class="btn-form-container">
                        <button class="button" type="submit">SEND</button>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection