@extends('layout.index_layout')
@section('title', 'Web Jualan')
@section('content')
<div id="indexpageview"></div>

<!-- Latest Blog -->
<section class="div-konten">
    <div class="container bc-white">
        <div class="row">
            <div class="col-md-12 mod-ponsel">
                <div class="row">
                    <div class="col-md-3 border-kanan">
                        <img class="im-chartren" src="/pictures/chart.png">
                        <h5 class="marl-2">TODAY'S TRENDING</h5>
                    </div>
                    <div class="col-md-4">
                        <h5 class="coren marl-2 h-bestseller">Best Sellers</h5>
                    </div>
                    <div class="col-md">
                        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                            <div class="row coleser">
                                <div class="col-md-8 hidethis">
                                </div>

                                <div class="col-md-2">
                                    <a type="button" class="seq-prev slide" aria-label="Previous"><span
                                            class="fa fa-angle-left"></span></a>
                                </div>
                                <div class="col-md-2">
                                    <a type="button" class="seq-next slide" aria-label="Next"><span
                                            class="fa fa-angle-right"></span></a>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                </div>

            </div>
        </div>

        <hr class="hr-trend">
        <div class="row modheadrow">
            <section id="aa-slider">
                <div class="aa-slider-area">
                    <div id="sequence" class="seq">
                        <div class="seq-screen">
                            <ul class="seq-canvas">
                                <li>
                                    <div class="row modheadrow">

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="https://bubblestore-admin.geniebook.com/assets/product/559b11c95037941ee5e7f04f30057c0b_1606232862.png"
                                                            alt="fashion img">
                                                    </a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit.</small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>76</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="http://bubblestore-admin.geniebook.com/assets/product/7c2712e342b39f276f1ae740d9ac2d84_1624519506.JPG"></a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>laudantium laborum ipsa excepturi soluta, dolore
                                                        similique.</small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>1207</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="http://bubblestore-admin.geniebook.com/assets/product/8af881048892db156ab5b38385232bb1_1619590754.jpg"></a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>accusamus dolorum ipsam adipisci laudantium laborum</small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>324</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="http://bubblestore-admin.geniebook.com/assets/product/04d5b7c0afbda640f57f10162197f55b_1618122627.png"></a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>Voluptates voluptatum accusamus dolorum ipsam adipisci
                                                        laudantium </small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>98</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="row modheadrow">

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="https://cf.shopee.sg/file/d4157703bbff2df3978683c41747a139"
                                                            alt="fashion img">
                                                    </a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit.</small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>76</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="https://bubblestore-admin.geniebook.com/assets/product/cdf959890a71b27d5a9330595110e646_1615456558.JPG"></a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>laudantium laborum ipsa excepturi soluta, dolore
                                                        similique.</small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>1207</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="https://cf.shopee.sg/file/40fe8834adeb7c27f30f345962520f79"></a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>accusamus dolorum ipsam adipisci laudantium laborum</small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>324</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="https://cf.shopee.sg/file/ddf1d7fd999b2dfb533e733c1d6ef529"></a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>Voluptates voluptatum accusamus dolorum ipsam adipisci
                                                        laudantium </small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>98</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="row modheadrow">

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="https://cf.shopee.sg/file/ddf1d7fd999b2dfb533e733c1d6ef529"
                                                            alt="fashion img">
                                                    </a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit.</small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>76</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="https://bubblestore-admin.geniebook.com/assets/product/cdf959890a71b27d5a9330595110e646_1615456558.JPG"></a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>laudantium laborum ipsa excepturi soluta, dolore
                                                        similique.</small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>1207</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="https://cf.shopee.sg/file/40fe8834adeb7c27f30f345962520f79"></a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>accusamus dolorum ipsam adipisci laudantium laborum</small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>324</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                        <div class="col-md-3 col-sm-3 produk-slider">
                                            <article class="aa-blog-content-single">
                                                <figure class="aa-blog-img">
                                                    <a href="#">
                                                        <img class="produkpic"
                                                            src="https://cf.shopee.sg/file/40fe8834adeb7c27f30f345962520f79"></a>
                                                </figure>
                                                <a class="aprodukslide" href="#">
                                                    <small>Voluptates voluptatum accusamus dolorum ipsam adipisci
                                                        laudantium </small>
                                                    <div class="aa-article-bottom">
                                                        <small><span class="ico-bulet"><span
                                                                    class="fa fa-circle"></span></span>98</small>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- slider navigation btn -->
                    </div>
                </div>
            </section>
        </div>







    </div>
</section>
<!-- / Latest Blog -->





</div>


@endsection
