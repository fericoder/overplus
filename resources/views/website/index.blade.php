@extends('website/master')

@section('content')



    <div id="hero-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                    <div class="contents">
                        <h1 class="head-title"> سامانه مبادلات تجهیزات مازاد صنعت نفت، گاز و پتروشیمی </h1>
                        <p>ارایه و مشاهده کالاها و تجهیزات مازاد پروژه های صنعت پتروشیمی</p>
                        <div class="search-bar">
                            <div class="search-inner">
                                <form style="direction: rtl" class="search-form">

                                    <button class="btn btn-common" type="button"><i class="lni-search"></i> جستجو</button>

                                    <div class="form-group">
                                        <input style="margin-right: 10px;" type="text" name="customword" class="form-control" placeholder="نام یا کد تجهیز" />
                                    </div>


                                    <div class="form-group inputwithicon">
                                        <div class="select">
                                            <select>
                                                <option value="none">انتخاب دسته بندی</option>
                                                <option value="none">تولید و حفاری</option>
                                                <option value="none">تاسيسات و ماشين آلات</option>
                                                <option value="none">حمل و نقل</option>
                                                <option value="none">ماشن آلات و ابزار دقیق</option>
                                                <option value="none">لوازم ساختمانی</option>
                                                <option value="none">الکتریکی و مخابرات</option>
                                                <option value="none">لوله، شیر و اتصالات</option>
                                                <option value="none">مصالح ساختمانی و فلزات</option>
                                                <option value="none">ابزار آلات</option>
                                            </select>
                                        </div>
                                        <i class="lni-menu"></i>
                                    </div>


                                    <div class="form-group inputwithicon">
                                        <div class="select">
                                            <select>
                                                <option value="none">انتخاب شهر</option>
                                                <option value="none">تمامی شهر ها</option>
                                                <option value="none">اهواز</option>
                                                <option value="none">بوشهر</option>
                                                <option value="none">بندر عباس</option>
                                            </select>
                                        </div>
                                        <i class="lni-target"></i>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section id="categories">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-xs-12">
                <div id="categories-icon-slider" class="categories-wrapper owl-carousel owl-theme">
                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4>تولید و حفاری</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4>تاسيسات و ماشين آلات</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4>حمل و نقل</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4> ماشن آلات و ابزار دقیق</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4>لوازم ساختمانی</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4> الکتریکی و مخابرات</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4>لوله، شیر و اتصالات</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4>مصالح ساختمانی و فلزات</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4>ابزار آلات</h4>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4>رنگ و مواد شیمیایی</h4>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="item">
                        <a href="">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/img/category/img-2.png" alt="" />
                                    </div>
                                    <h4>لوازم دفتر و ایمنی</h4>
                                </div>
                            </div>
                        </a>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>



<section class="featured-lis section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                <h3 class="section-title">آخرین مزایدات</h3>
                <div id="new-products" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-item">
                            <div class="product-content">
                                <h3 class="product-title"><a href="">عنوان مزایده</a></h3>
                                <span>ایمنی</span>
                                <div class="card-text">
                                    <div class="float-right">

                                        <span class="count-review">نام شرکت</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> عسلویه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">

                            <div class="product-content">
                                <h3 class="product-title"><a href="">عنوان مزایده</a></h3>
                                <span>ابزار دقیق</span>
                                <div class="card-text">
                                    <div class="float-right">
                                        <span class="count-review">نام شرکت</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> بهبهان</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">

                            <div class="product-content">
                                <h3 class="product-title"><a href="">عنوان مزایده</a></h3>
                                <span>ابزار آلات</span>

                                <div class="card-text">
                                    <div class="float-right">
                                        <span class="count-review">نام شرکت</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> عسلویه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">

                            <div class="product-content">
                                <h3 class="product-title"><a href="">عنوان مزایده</a></h3>
                                <span>ماشین آلات</span>

                                <div class="card-text">
                                    <div class="float-right">
                                        <span class="count-review">نام شرکت</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> ماهشهر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">

                            <div class="product-content">
                                <h3 class="product-title"><a href="">عنوان مزایده</a></h3>
                                <span>ابزار آلات</span>

                                <div class="card-text">
                                    <div class="float-right">
                                        <span class="count-review">نام شرکت</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> عسلویه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">

                            <div class="product-content">
                                <h3 class="product-title"><a href="">عنوان مزایده</a></h3>
                                <span>حفاری</span>

                                <div class="card-text">
                                    <div class="float-right">
                                        <span class="count-review">نام شرکت</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> بهبهان</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="works section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">نحوه کار با سامانه</h3>
            </div>


            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="works-item">
                    <div class="icon-box">
                        <i class="lni-thumbs-up"></i>
                    </div>
                    <p style="direction: rtl;" >۳- استفاده از امکانات</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="works-item">
                    <div class="icon-box">
                        <i class="lni-bookmark-alt"></i>
                    </div>
                    <p style="direction: rtl;" >۲- احراز هویت</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="works-item">
                    <div class="icon-box">
                        <i class="lni-users"></i>
                    </div>
                    <p style="direction: rtl;">۱- ایجاد حساب کاربری</p>
                </div>
            </div>


            <hr class="works-line" />
        </div>
    </div>
</section>

<section class="services bg-light section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">امکانات کلی سامانه</h3>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                    <div class="icon">
                        <i class="lni-leaf"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">عنوان</a></h3>
                        <p>توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
                    <div class="icon">
                        <i class="lni-display"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">عنوان</a></h3>
                        <p>توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon">
                        <i class="lni-color-pallet"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">عنوان</a></h3>
                        <p>توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
                    <div class="icon">
                        <i class="lni-emoji-smile"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">عنوان</a></h3>
                        <p>توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="1s">
                    <div class="icon">
                        <i class="lni-pencil-alt"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">عنوان</a></h3>
                        <p>توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.8s">
                    <div class="icon">
                        <i class="lni-headphone-alt"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">عنوان</a></h3>
                        <p>توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
