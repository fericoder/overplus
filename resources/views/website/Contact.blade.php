@extends('website/master')

@section('content')


<div class="page-header" style="background: url(assets/img/oil1.jpg);">
<div class="container">
<div class="row overplus-rtl">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">تماس باما</h2>
<ol class="breadcrumb">
<li><a href="/">صفحه اصلی /</a></li>
<li class="current">تماس باما</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section id="google-map-area">
<div class="container">
<div class="row">
<div class="col-12">
<object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
</div>
</div>
</div>
</section>


<section id="content" class="section-padding overplus-rtl">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-xs-12">

<form id="contactForm" class="contact-form" data-toggle="validator">
<h2 class="contact-title">
  برای ما پیام ارسال کنید
</h2>
<div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="نام و نام خانوادگی" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<input type="email" class="form-control" id="email" placeholder="ایمیل" required data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<input type="text" class="form-control" id="msg_subject" name="subject" placeholder="موضموع" required data-error="Please enter your subject">
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" placeholder="پیام خود را ارسال کنید" rows="7" data-error="Write your message" required></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
</div>
 </div>
<div class="col-md-12">
<button type="submit" id="submit" class="btn btn-common">اکنون ارسال کنید</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="information mb-4">
<h3>آدرس</h3>
<div class="contact-datails">
<p>ایران، تهران، خیابان هفت تیر</p>
</div>
</div>
<div class="information">
<h3>اطلاعات تماس</h3>
<div class="contact-datails">
<ul class="list-unstyled info">
<li><span>آدرس : </span><p> ایران،تهران،خیابان هفت تیر</p></li>
<li><span>ایمیل : </span><p><a href="#">overplus@mail.com</a></p></li>
<li><span>شماره تماس : </span><p class="overplus-byekan">88542369</p></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>


@endsection
