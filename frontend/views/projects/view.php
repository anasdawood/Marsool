<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Projects */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Projects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile("https://use.fontawesome.com/releases/v5.3.1/css/all.css");
$this->registerCssFile("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css");
?>

<div class="projects-view">
    <input id="model_id" type="hidden" value="<?= $model->id ?>"

           <div class="container margin-bottom-40 padding-top-40">




        <!-- Col MD -->
        <div class="col-md-8 margin-bottom-20">

            <div class="text-center margin-bottom-20">
                <img class="img-responsive img-rounded" style="display: inline-block;" src="<?= 'uploads\\' . $model->image; ?>">
            </div>

            <h1 class="font-default title-image none-overflow margin-bottom-20">
                <?= $model->title ?>
            </h1>

            <hr>

            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-3">
                    <a class="btn btn-block btn-primary" href="#"><i class="fab fa-facebook-f"></i> Share</a>
                </div>

                <div class="col-md-3">
                    <a class="btn btn-twitter btn-block" href="#" style="background-color: #00aced; color: white;"><i class="fab fa-twitter"></i> Tweet</a>
                </div>

                <div class="col-md-3">
                    <a class="btn btn-google-plus btn-block" href="#" style="background-color: #fd4639; color: white;"><i class="fab fa-google-plus-g"></i> Share</a>
                </div>

                <div class="col-md-3">
                    <a class="btn btn-default btn-block" data-toggle="modal" data-target="#embedModal" href="#"><i class="fa fa-code myicon-right"></i> Embed</a>
                </div>

                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="embedModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header headerModal">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h5 class="modal-title">
                                    Copy this code on your website
                                </h5>
                            </div><!-- Modal header -->

                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<div style='width:350px;'><script src='http://fundme.miguelvasquez.net/c/478/widget.js' type='text/javascript'></script></div>" readonly="readonly" id="embedCode">
                                </div><!-- /.form-group-->
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-default" id="btn_copy_code">Copy Code</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <ul class="nav nav-tabs nav-justified" style="margin-bottom: 20px;">
                <li class="active"><a href="#desc" aria-controls="home" role="tab" data-toggle="tab" class="font-default"><strong>The Story</strong></a></li>
                <li><a href="#donations" aria-controls="home" role="tab" data-toggle="tab" class="font-default"><strong>Donations</strong> <span class="badge update-ico">1</span></a></li>
                <li><a href="#updates" aria-controls="home" role="tab" data-toggle="tab" class="font-default"><strong>Updates</strong> <span class="badge update-ico">0</span></a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active description wordBreak" id="desc">
                    <?= $model->description ?>
                </div>

                <div role="tabpanel" class="tab-pane fade in description wordBreak" id="donations">


                    <ul class="list-group" id="listDonations">



                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object img-circle imgDonations" src="https://www.gravatar.com/avatar/542cbadc642326cf49f2448013ec348f?d=http%3A%2F%2Ffundme.miguelvasquez.net%2Fpublic%2Favatar%2Fdefault.jpg&amp;s=40" width="40" height="40">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mark Pritchard</h4>
                                    <span class="btn-block recent-donation-amount font-default">
                                        $75
                                    </span>
                                    <small class="btn-block timeAgo text-muted" data="2018-07-22T12:55:50+00:00">3 months ago</small>
                                </div>
                            </div>
                        </li>




                    </ul>


                </div>

                <div role="tabpanel" class="tab-pane fade description wordBreak margin-top-30" id="updates">

                    <span class="btn-block text-center">
                        <i class="icon-history ico-no-result"></i>
                    </span>
                    <span class="text-center btn-block">No results have been found</span>


                </div>
            </div>

            <div class="btn-block margin-top-20">
                <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" data-width="100%" data-href="http://fundme.miguelvasquez.net/campaign/478/feed-the-damn-cat" data-numposts="5" fb-xfbml-state="rendered"><span style="height: 178px;"><iframe id="f2b3ce131990914" name="f10164f41522964" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=833373956732438&amp;channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FjeGFvz3E6vx.js%3Fversion%3D42%23cb%3Df245f360a3cdc5c%26domain%3Dfundme.miguelvasquez.net%26origin%3Dhttp%253A%252F%252Ffundme.miguelvasquez.net%252Ff3a04fb3101a05%26relation%3Dparent.parent&amp;href=http%3A%2F%2Ffundme.miguelvasquez.net%2Fcampaign%2F478%2Ffeed-the-damn-cat&amp;locale=en_US&amp;numposts=5&amp;sdk=joey&amp;version=v2.8&amp;width=100%25" style="border: none; overflow: hidden; height: 178px; width: 100%;"></iframe></span></div>
            </div>


        </div><!-- /COL MD -->

        <div class="col-md-4">


            <!-- Start Panel -->
            <div class="panel panel-default panel-transparent">
                <div class="panel-body">
                    <div class="media none-overflow">
                        <div class="media-center margin-bottom-5">
                            <img class="img-circle center-block" src="http://fundme.miguelvasquez.net/public/avatar/default.jpg" width="60" height="60">
                        </div>
                        <div class="media-body text-center">

                            <h4 class="media-heading">
                                <?= $model->User->username ?>

                                <a href="#" title="Contact the Organizer" data-toggle="modal" data-target="#sendEmail">
                                    <i class="fa fa-envelope myicon-right"></i>
                                </a>
                            </h4>

                            <small class="media-heading text-muted btn-block margin-zero">Created <?= date('Y-m-d', $model->created_at) ?></small>
                            <small class="media-heading text-muted btn-block"><i class="fa fa-map-marker myicon-right"></i> <?= $model->location ?></small>
                        </div>
                    </div>
                </div>
            </div><!-- End Panel -->


            <?php if ($daysleft <= 0) { ?>
                <div class="alert btnDisabled text-center btn-block custom-rounded" role="alert" style="margin-bottom: 20px">
                    <i class="fa fa-lock myicon-right"></i> Campaign Ended!
                </div>
            <?php } else { ?>
                <a href="#" class="btn btn-main btn-donate btn-lg btn-block custom-rounded " style="background-color: #f45302;color: white; margin-bottom: 20px;">
                    Donate Now
                </a>
            <?php } ?>




            <div class="panel panel-default">
                <div class="panel-body text-center">

                    <?php if ($didLike) { ?>
                        <a href="#" class="btnLike">
                            <h3 class="btn-block text-center margin-zero"><i id="heart" class="far fa-heart"></i> <span id="countLikes"><?= $model->likes ?></span></h3>
                        </a>
                        <?php } else { ?>
                        <a href="#">
                            <h3 class="btn-block text-center margin-zero"><i id="heart" class="fas fa-heart"></i> <span id="countLikes"><?= $model->likes ?></span></h3>
                        </a>
                    <?php } ?>

                </div>
            </div>

            <!-- Start Panel -->
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php if ($daysleft <= 0) { ?>
                        <h4 class="margin-zero text-center" data-date="Jul 30, 2018">
                            <i class="fa fa-lock myicon-right"></i>
                            <strong>There is no time anymore</strong>
                        </h4>
                    <?php } else { ?>
                        <h4 class="margin-zero text-center" data-date="Oct 31, 2018">

                            <i class="far fa-clock"></i>
                            <strong><?= $daysleft . Yii::t('frontend', ' days left') ?></strong>

                        </h4>
                    <?php } ?>





                </div>
            </div><!-- End Panel -->


            <!-- Start Panel -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="btn-block margin-zero" style="line-height: inherit;">
                        <strong class="font-default">$<?= $model->raised ?></strong>
                        <small> <?= Yii::t('frontend', 'of') . " " . $model->goal . " " . Yii::t('frontend', 'goal') ?> </small>
                    </h3>

                    <span class="progress margin-top-10 margin-bottom-10">
                        <span class="percentage" style="width: 50%" aria-valuemin="0" aria-valuemax="100" role="progressbar"></span>
                    </span>

                    <small class="btn-block margin-bottom-10 text-muted">
                        <?= ($model->raised * 100) / $model->goal ?> Raised by 1 Donation
                    </small>

                    <small class="btn-block">
                        <a href="http://fundme.miguelvasquez.net/category/Animals" title="Animals">
                            <i class="icon-tag myicon-right"></i> Animals
                        </a>
                    </small>
                </div>
            </div><!-- End Panel -->

            <div class="input-group margin-bottom-20">
                <input type="text" readonly="readonly" id="url_campaign" class="form-control" value="http://fundme.miguelvasquez.net/campaign/478/feed-the-damn-cat">
                <div class="input-group-btn">
                    <button class="btn btn-default" id="btn_campaign_url">Copy Link</button>
                </div>
            </div>




            <div class="modal fade" id="sendEmail" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modalContactOrganizer">
                    <div class="modal-content">
                        <div class="modal-header headerModal headerModalOverlay position-relative" style="background-image: url('http://fundme.miguelvasquez.net/public/campaigns/large/5981531377794aridnudsyxsf5a6gtnhlj55uouhtr8dqmgmtdvbc.jpg')">
                            <button type="button" class="close closeLight position-relative" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

                            <span class="btn-block margin-top-15 margin-bottom-15 text-center position-relative">
                                <img class="img-circle" src="http://fundme.miguelvasquez.net/public/avatar//default.jpg" width="80" height="80">
                            </span>

                            <h5 class="modal-title text-center font-default position-relative" id="myModalLabel">
                                Marcel Powolny
                            </h5>

                            <h4 class="modal-title text-center font-default position-relative" id="myModalLabel">
                                Contact the Organizer
                            </h4>
                        </div><!-- Modal header -->

                        <div class="modal-body listWrap text-center center-block modalForm">

                            <!-- form start -->
                            <form method="POST" class="margin-bottom-15" action="http://fundme.miguelvasquez.net/contact/organizer" enctype="multipart/form-data" id="formContactOrganizer">
                                <input type="hidden" name="_token" value="UIijaSa23SkcoY6uPegawJ1oDUGcdbXpIFDNC3Ar">
                                <input type="hidden" name="id" value="598">

                                <!-- Start Form Group -->
                                <div class="form-group">
                                    <input type="text" required="" name="name" class="form-control" placeholder="Name">
                                </div><!-- /.form-group-->

                                <!-- Start Form Group -->
                                <div class="form-group">
                                    <input type="text" required="" name="email" class="form-control" placeholder="Email">
                                </div><!-- /.form-group-->

                                <!-- Start Form Group -->
                                <div class="form-group">
                                    <textarea name="message" rows="4" class="form-control" placeholder="Message"></textarea>
                                </div><!-- /.form-group-->

                                <!-- Alert -->
                                <div class="alert alert-danger display-none" id="dangerAlert">
                                    <ul class="list-unstyled text-left" id="showErrors"></ul>
                                </div><!-- Alert -->

                                <button type="submit" class="btn btn-lg btn-main custom-rounded" id="buttonFormSubmit">Send Message</button>
                            </form>

                            <!-- Alert -->
                            <div class="alert alert-success display-none" id="successAlert">
                                <ul class="list-unstyled" id="showSuccess"></ul>
                            </div><!-- Alert -->

                        </div><!-- Modal body -->
                    </div><!-- Modal content -->
                </div><!-- Modal dialog -->
            </div><!-- Modal -->

        </div><!-- /COL MD -->

    </div>
</div>