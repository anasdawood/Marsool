<?php $this->registerJs("$(document).ready(function(){ document.getElementById('makeFull').style.width = '100%'; })", $this::POS_READY); ?>
    <div class="popout font-default"></div>
    <div class="wrap-loader">
        <i class="fa fa-cog fa-spin fa-3x fa-fw cog-loader"></i>
        <i class="fa fa-cog fa-spin fa-3x fa-fw cog-loader-small"></i>
    </div>
    <div class="btn-block text-center showBanner padding-top-10 padding-bottom-10" style="display:none;">This site uses cookies, by continuing to use the service, you accept our use of cookies <button class="btn btn-sm btn-success" id="close-banner">I agree</button></div>

    <div class="jumbotron index-header jumbotron_set jumbotron-cover " 
         style="background: url(http://whitewatergallery.com/wp-content/uploads/red-brick-wall.jpg) no-repeat center center #D1D1D1;color: white;
         background-size: cover;
         position: relative;
         height: 400px;">
        <div class="container wrap-jumbotron position-relative">
            <h1 class="title-site txt-left" id="titleSite">جميع الاحتياجات الخيريه في موقع واحد</h1>
            <p class="subtitle-site txt-left"><strong>محتاج، متبرع، متطوع</strong></p>
        </div><!-- container wrap-jumbotron -->
    </div><!-- jumbotron -->

    <div class="container margin-bottom-40">

        <div class="col-md-12 btn-block margin-bottom-40 head-home">
            <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow"><?= Yii::t('frontend', 'الأقسام') ?></h1>
            <h5 class="btn-block text-center class-montserrat subtitle-color">
            </h5>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 row-margin-20">
            <a href="?r=needy/create">
                <img  style="height: 290px;" class="img-responsive btn-block custom-rounded" src="https://monoawards.com/upload/images/1417284037bh7xialiasgharian_babak_old_man_laughing.jpg" alt="Needy">
            </a>

            <h1 class="title-services">
                <a href="?r=needy/create">
                    <?=Yii::t('frontend', 'أمر')?>
                </a>
            </h1>
        </div><!-- col-md-3 row-margin-20 -->

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 row-margin-20">
            <a href="?r=projects">
                <img style="height: 290px;" class="img-responsive btn-block custom-rounded" src="https://i.pinimg.com/originals/b3/9e/ad/b39eadfd99f4c86e4ca6a2a44fc1d6aa.jpg" alt="Charity">
            </a>

            <h1 class="title-services">
                <a href="?r=projects">
                    <?=Yii::t('frontend', 'سوا')?>
                </a>
            </h1>
        </div><!-- col-md-3 row-margin-20 -->

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 row-margin-20">
            <a href="?r=volunteer/create">
                <img style="height: 290px;" class="img-responsive btn-block custom-rounded" src="images/kafo.jpg" alt="Community">
            </a>

            <h1 class="title-services">
                <a href="?r=volunteer/create">
                    <?=Yii::t('frontend', 'كفو')?>
                </a>
            </h1>
        </div><!-- col-md-3 row-margin-20 -->


    </div><!-- container -->

    <div class="container margin-bottom-40">
        <div class="col-md-12 btn-block margin-bottom-40">
            <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow">المشاريع</h1>
            <h5 class="btn-block text-center class-montserrat subtitle-color">اضافات جديده</h5>
        </div>

        <div class="margin-bottom-30">
            <div class="posts" id="posts" style="padding-top: 15px;">
                <div class="row" id="campaigns">
                    
                    <div class="col-xs-12 col-sm-6 col-md-3 col-thumb">
                        <div class="thumbnail padding-top-zero">

                            <a class="position-relative btn-block img-grid" href="#">


                                <img title="أنقذو أطفال افريقيا" src="images/child.jpg" class="image-url img-responsive btn-block radius-image">
                            </a>

                            <div class="caption">
                                <h1 class="title-campaigns font-default">
                                    <a title="أنقذو أطفال افريقيا" class="item-link" href="#">
                                        أنقذو أطفال افريقيا
                                    </a>
                                </h1>

                                <p class="desc-campaigns">
                                    <img src="http://fundme.miguelvasquez.net/public/avatar/default.jpg" width="20" height="20" class="img-circle avatar-campaign"> جمعية مسلمو أفريقيا
                                </p>

                                <p class="desc-campaigns text-overflow">
                                    بعد الجفاف الذي ضرب أواسط أفريقيا، تقوم جمعيتنا بجمع التبرعات اللازمه لتسيير قوافل المساعدات إلى اخواننا هناك
                                </p>

                                <p class="desc-campaigns">
                                    <span class="stats-campaigns margin-bottom-zero">

                                        <em>


                                            <strong>No deadline</strong>
                                        </em>

                                    </span>

                                    <span class="stats-campaigns">
                                        <span class="pull-left">
                                            <strong>$9,060</strong>
                                            Raised
                                        </span>
                                        <span class="pull-right"><strong>151%</strong></span>
                                    </span>

                                    <span class="progress">
                                        <span class="percentage" style="width: 151%" aria-valuemin="0" aria-valuemax="100" role="progressbar"></span>
                                    </span>
                                </p>

                                <h6 class="margin-bottom-zero">
                                    <em><strong>Goal $6,000</strong></em>
                                </h6>

                            </div><!-- /caption -->
                        </div><!-- /thumbnail -->
                    </div><!-- /col-sm-6 col-md-4 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-thumb">
                        <div class="thumbnail padding-top-zero">

                            <a class="position-relative btn-block img-grid" href="http://fundme.miguelvasquez.net/campaign/509/build-factory">


                                <img title="Build factory" src="http://fundme.miguelvasquez.net/public/campaigns/small/41537553877xxs6zc0gp9hfe43ggcwdzjoaq7kb88yxip2vs9tr.jpg" class="image-url img-responsive btn-block radius-image">
                            </a>

                            <div class="caption">
                                <h1 class="title-campaigns font-default">
                                    <a title="Build factory" class="item-link" href="http://fundme.miguelvasquez.net/campaign/509/build-factory">
                                        Build factory
                                    </a>
                                </h1>

                                <p class="desc-campaigns">
                                    <img src="http://fundme.miguelvasquez.net/public/avatar/4153624777311zd6uavwym3eut.jpg" width="20" height="20" class="img-circle avatar-campaign"> John Doe
                                </p>

                                <p class="desc-campaigns text-overflow">
                                    Bygga en rövballefabrik
                                </p>

                                <p class="desc-campaigns">
                                    <span class="stats-campaigns margin-bottom-zero">

                                        <em>

                                            <strong>85</strong> days left



                                        </em>

                                    </span>

                                    <span class="stats-campaigns">
                                        <span class="pull-left">
                                            <strong>$0</strong>
                                            Raised
                                        </span>
                                        <span class="pull-right"><strong>0%</strong></span>
                                    </span>

                                    <span class="progress">
                                        <span class="percentage" style="width: 0%" aria-valuemin="0" aria-valuemax="100" role="progressbar"></span>
                                    </span>
                                </p>

                                <h6 class="margin-bottom-zero">
                                    <em><strong>Goal $100,000</strong></em>
                                </h6>

                            </div><!-- /caption -->
                        </div><!-- /thumbnail -->
                    </div><!-- /col-sm-6 col-md-4 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-thumb">
                        <div class="thumbnail padding-top-zero">

                            <a class="position-relative btn-block img-grid" href="images/weeding.jpg">


                                <img style="height: 190px" title="testcamp" src="images/weeding.jpg" class="image-url img-responsive btn-block radius-image">
                            </a>

                            <div class="caption">
                                <h1 class="title-campaigns font-default">
                                    <a title="زواج جماعي" class="item-link" href="#">
                                        زواج جماعي
                                    </a>
                                </h1>

                                <p class="desc-campaigns">
                                    <img src="http://fundme.miguelvasquez.net/public/avatar/default.jpg" width="20" height="20" class="img-circle avatar-campaign"> محمد عبد الله
                                </p>

                                <p class="desc-campaigns text-overflow">
                                    تحت رعاية جمعية أمة للأعمال الخيريه سيتم جمع التبرعات لعقد قران جماعي. 
                                </p>

                                <p class="desc-campaigns">
                                    <span class="stats-campaigns margin-bottom-zero">

                                        <em>

                                            <strong class="text-danger">There is no time anymore</strong>



                                        </em>

                                    </span>

                                    <span class="stats-campaigns">
                                        <span class="pull-left">
                                            <strong>$10</strong>
                                            Raised
                                        </span>
                                        <span class="pull-right"><strong>1%</strong></span>
                                    </span>

                                    <span class="progress">
                                        <span class="percentage" style="width: 1%" aria-valuemin="0" aria-valuemax="100" role="progressbar"></span>
                                    </span>
                                </p>

                                <h6 class="margin-bottom-zero">
                                    <em><strong>Goal $1,200</strong></em>
                                </h6>

                            </div><!-- /caption -->
                        </div><!-- /thumbnail -->
                    </div><!-- /col-sm-6 col-md-4 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-thumb">
                        <div class="thumbnail padding-top-zero">

                            <a class="position-relative btn-block img-grid" href="http://fundme.miguelvasquez.net/campaign/506/donation-to-save-fire-victims">


                                <img title="Donation to save fire victims." src="http://fundme.miguelvasquez.net/public/campaigns/small/415371163785aldfbvqrtowawxyw4adjftqgjmzgyoilanfed60.jpg" class="image-url img-responsive btn-block radius-image">
                            </a>

                            <div class="caption">
                                <h1 class="title-campaigns font-default">
                                    <a title="Donation to save fire victims." class="item-link" href="http://fundme.miguelvasquez.net/campaign/506/donation-to-save-fire-victims">
                                        Donation to save fire victims.
                                    </a>
                                </h1>

                                <p class="desc-campaigns">
                                    <img src="http://fundme.miguelvasquez.net/public/avatar/4153624777311zd6uavwym3eut.jpg" width="20" height="20" class="img-circle avatar-campaign"> John Doe
                                </p>

                                <p class="desc-campaigns text-overflow">
                                    victims of the recent fire out break in Accra needs support.
                                </p>

                                <p class="desc-campaigns">
                                    <span class="stats-campaigns margin-bottom-zero">

                                        <em>

                                            <strong class="text-danger">Campaign Ended!</strong>

                                        </em>

                                    </span>

                                    <span class="stats-campaigns">
                                        <span class="pull-left">
                                            <strong>$0</strong>
                                            Raised
                                        </span>
                                        <span class="pull-right"><strong>0%</strong></span>
                                    </span>

                                    <span class="progress">
                                        <span class="percentage" style="width: 0%" aria-valuemin="0" aria-valuemax="100" role="progressbar"></span>
                                    </span>
                                </p>

                                <h6 class="margin-bottom-zero">
                                    <em><strong>Goal $500</strong></em>
                                </h6>

                            </div><!-- /caption -->
                        </div><!-- /thumbnail -->
                    </div><!-- /col-sm-6 col-md-4 -->
                    
                    
                    <div class="col-xs-12 col-sm-6 col-md-3 col-thumb">
                        <div class="thumbnail padding-top-zero">

                            <a class="position-relative btn-block img-grid" href="images/work.jpg">


                                <img title="تمويل أسر منتجه" src="images/work.jpg" class="image-url img-responsive btn-block radius-image">
                            </a>

                            <div class="caption">
                                <h1 class="title-campaigns font-default">
                                    <a title="تمويل أسر منتجه" class="item-link" href="#">
                                        تمويل أسر منتجه
                                    </a>
                                </h1>

                                <p class="desc-campaigns">
                                    <img src="http://fundme.miguelvasquez.net/public/avatar/default.jpg" width="20" height="20" class="img-circle avatar-campaign"> وليد
                                </p>

                                <p class="desc-campaigns text-overflow">
                                    أعرف أسره منتجه بحاجه للتمويل لكي يبدأو مشروعه.
                                </p>

                                <p class="desc-campaigns">
                                    <span class="stats-campaigns margin-bottom-zero">

                                        <em>

                                            <strong class="text-danger">There is no time anymore</strong>



                                        </em>

                                    </span>

                                    <span class="stats-campaigns">
                                        <span class="pull-left">
                                            <strong>$0</strong>
                                            Raised
                                        </span>
                                        <span class="pull-right"><strong>0%</strong></span>
                                    </span>

                                    <span class="progress">
                                        <span class="percentage" style="width: 0%" aria-valuemin="0" aria-valuemax="100" role="progressbar"></span>
                                    </span>
                                </p>

                                <h6 class="margin-bottom-zero">
                                    <em><strong>Goal $106</strong></em>
                                </h6>

                            </div><!-- /caption -->
                        </div><!-- /thumbnail -->
                    </div><!-- /col-sm-6 col-md-4 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-thumb">
                        <div class="thumbnail padding-top-zero">

                            <a class="position-relative btn-block img-grid" href="images/mos.jpg">


                                <img title="مسجد متعثر في مالاكوفكا" src="images/mos.jpg" class="image-url img-responsive btn-block radius-image">
                            </a>

                            <div class="caption">
                                <h1 class="title-campaigns font-default">
                                    <a title="مسجد متعثر في مالاكوفكا" class="item-link" href="http://fundme.miguelvasquez.net/campaign/502/fund-rise-for-flood-effected-people">
                                        مسجد متعثر في مالاكوفكا
                                    </a>
                                </h1>

                                <p class="desc-campaigns">
                                    <img src="http://fundme.miguelvasquez.net/public/avatar/4153624777311zd6uavwym3eut.jpg" width="20" height="20" class="img-circle avatar-campaign"> John Doe
                                </p>

                                <p class="desc-campaigns text-overflow">
                                    تما جمع المبلغ الأكبر لبناء المسجد، إلا أن فرق العمله أثر على المبلغ النهائي
                                </p>

                                <p class="desc-campaigns">
                                    <span class="stats-campaigns margin-bottom-zero">

                                        <em>

                                            <strong class="text-danger">Campaign Ended!</strong>

                                        </em>

                                    </span>

                                    <span class="stats-campaigns">
                                        <span class="pull-left">
                                            <strong>$10</strong>
                                            Raised
                                        </span>
                                        <span class="pull-right"><strong>0%</strong></span>
                                    </span>

                                    <span class="progress">
                                        <span class="percentage" style="width: 0%" aria-valuemin="0" aria-valuemax="100" role="progressbar"></span>
                                    </span>
                                </p>

                                <h6 class="margin-bottom-zero">
                                    <em><strong>Goal $10,000</strong></em>
                                </h6>

                            </div><!-- /caption -->
                        </div><!-- /thumbnail -->
                    </div><!-- /col-sm-6 col-md-4 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-thumb">
                        <div class="thumbnail padding-top-zero">

                            <a class="position-relative btn-block img-grid" href="images/cooler.jpg">


                                <img title="Art of War Classes" src="images/cooler.jpg" class="image-url img-responsive btn-block radius-image">
                            </a>

                            <div class="caption">
                                <h1 class="title-campaigns font-default">
                                    <a title="براد ماء لمسجد السلام" class="item-link" href="#">
                                        براد ماء لمسجد السلام
                                    </a>
                                </h1>

                                <p class="desc-campaigns">
                                    <img src="http://fundme.miguelvasquez.net/public/avatar/default.jpg" width="20" height="20" class="img-circle avatar-campaign"> خالد سالم
                                </p>

                                <p class="desc-campaigns text-overflow">
                                    يوجد مسجد في حي السلام بحاجه لبرادة ماء. البراد السابق لا يعمل بشكل جيد ويحتاج للصيانه. الرجاء الاتطلاع على صفحة المشروع لمعرفة المزيد
                                </p>

                                <p class="desc-campaigns">
                                    <span class="stats-campaigns margin-bottom-zero">

                                        <em>

                                            <strong class="text-danger">There is no time anymore</strong>



                                        </em>

                                    </span>

                                    <span class="stats-campaigns">
                                        <span class="pull-left">
                                            <strong>$0</strong>
                                            Raised
                                        </span>
                                        <span class="pull-right"><strong>0%</strong></span>
                                    </span>

                                    <span class="progress">
                                        <span class="percentage" style="width: 0%" aria-valuemin="0" aria-valuemax="100" role="progressbar"></span>
                                    </span>
                                </p>

                                <h6 class="margin-bottom-zero">
                                    <em><strong>Goal $1,000</strong></em>
                                </h6>

                            </div><!-- /caption -->
                        </div><!-- /thumbnail -->
                    </div><!-- /col-sm-6 col-md-4 -->
                    
                    
                    <div class="col-xs-12 loadMoreSpin">
                        <a href="http://fundme.miguelvasquez.net?page=2" rel="next" class="list-group-item text-center loadPaginator" id="paginator">
                            <i class="fa fa-repeat myicon-right"></i> Load more
                        </a>

                    </div>
                </div><!-- /row -->
            </div><!-- ./ End Posts -->		</div>

        <div class="row margin-bottom-40">

            <div class="container">
                <div class="col-md-4 border-stats">
                    <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow"><span class=".numbers-with-commas counter">651</span></h1>
                    <h5 class="btn-block text-center class-montserrat subtitle-color text-uppercase">الأعضاء</h5>
                </div><!-- col-md-3 -->

                <div class="col-md-4 border-stats">
                    <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow"><span class=".numbers-with-commas counter">475</span></h1>
                    <h5 class="btn-block text-center class-montserrat subtitle-color text-uppercase">المشاريع</h5>
                </div><!-- col-md-3 -->

                <div class="col-md-4 border-stats">
                    <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow"><span class=".numbers-with-commas counter">831</span></h1>
                    <h5 class="btn-block text-center class-montserrat subtitle-color text-uppercase">المتطوعين</h5>
                </div><!-- col-md-3 -->

            </div><!-- row -->
        </div>

    </div><!-- container wrap-ui -->
