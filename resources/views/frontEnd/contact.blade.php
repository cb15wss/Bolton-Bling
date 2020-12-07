@extends('frontEnd.layouts.master')
@section('title','Contact')
@section('content')
    <section>

        <!-- Contact page-->
            <div class="container">
                <header class="mb-5">
                    <h1 class="heading-line">Contact Us</h1>
                </header>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-icon">
                            <div class="icon icon-051-placeholder-1"></div>
                        </div>
                        <h3>Address</h3>
                        <p class="text-muted font-weight-light">125 Bolton Road<br>Bolton, BL1 2PJ<br>England, <strong>United Kingdom</strong></p>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-icon">
                            <div class="icon icon-051-support"></div>
                        </div>
                        <h3>Phone</h3>
                        <p class="text-muted font-weight-light"> Call us.</p>
                        <p><strong>+44 1204 436 393</strong></p>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-icon">
                            <div class="icon icon-051-message"></div>
                        </div>
                        <h3>Email Address</h3>
                        <ul class="list-style-none">
                            <li><strong><a href="mailto:">support@boltonbling.com</a></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <header class="mb-5">
                    <h2 class="heading-line">Contact form</h2>
                </header>
                <div class="row">
                    <div class="col-md-7">
                        <form id="contact-form" method="post" action="#" class="custom-form form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Your firstname *</label>
                                            <input type="text" name="name" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="surname">Your lastname *</label>
                                            <input type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Your email *</label>
                                    <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="message">Your message for us *</label>
                                    <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                                </div>
                                <input type="submit" value="Send message" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
