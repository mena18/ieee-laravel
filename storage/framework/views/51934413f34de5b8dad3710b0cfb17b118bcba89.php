<?php $__env->startSection('title'); ?>
    Homepage
<?php $__env->stopSection(); ?>


<?php $__env->startSection('caption'); ?>
    <div class="hero-caption col-sm-7 col-md-7">
        <h2 class="wow animated bounceInLeft">Welcome to <span>IEEE PUA SB</span></h2>
        <p>Welcome to the world's largest professional organization dedicated to advancing technological innovation and excellence for the benefit of humanity.</p>
    </div>

    <div class="hero-img col-sm-5 col-md-5">
        <img src="<?php echo e(URL::to('images/ieeepuasb-back-tshirt.png')); ?>" alt="image">
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="featured-box white-bg">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="box-1">
                    <a href="<?php echo e(route('team.volunteers')); ?>">
                        Volunteers <!-- <span>Events</span> -->
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="box-2">
                    <a href="<?php echo e(route('courses.index')); ?>">
                        Courses <!-- <span>Stories</span> -->
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="box-3">
                    <a href="<?php echo e(route('about.committees')); ?>">
                        Committees <!-- <span>Benefits</span> -->
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php if($mega!==null): ?>
        <section class="megaEvent">
            <img src="<?php echo e(URL::to('images/events/b4cade14b9e79598869833bfcdaaf4682446fd23.jpg')); ?>" alt="Mega Event">
            <a href="<?php echo e(route('mega.event',['id'=>$mega->id])); ?>" class="btn btn-success btn-lg col-xs-12 megaBtn">Read More &amp; Register</a>
        </section>
    <?php endif; ?>
    <section class="we-have-faith">
        <div class="section-header col-sm-6 pull-left wow animated bounceInLeft">
            <h3 class="icon"><img src="images/mission-icon.png" alt="Mission Icon" title="Mission Icon" height="100"
                                  width="100"></h3>
            <h3>mission</h3>
            <p>
                IEEE's core purpose is to foster technological innovation and excellence for the benefit of
                humanity.
            </p>
        </div>
        <div class="section-header vision col-sm-6 pull-left wow animated bounceInRight">
            <h3 class="icon"><i class="fa fa-eye" aria-hidden="true"></i></h3>
            <h3>vision</h3>
            <p>
                IEEE will be essential to the global technical community and to technical professionals everywhere,
                and be universally recognized for the contributions of technology and of technical professionals in
                improving global conditions.
            </p>
        </div>
    </section>
    <section class="achievements">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2>IEEE PUA SB NUMBERS</h2>
                </div>
            </div>
            <div class="row">
                <div class="section-content">
                    <div class="col-sm-3">
                        <h3 class="home-count">2013</h3>
                        <p>Year Founded</p>
                    </div>
                    <div class="col-sm-3">
                        <h3 class="home-count"><?php echo e($event_number); ?></h3>
                        <p>Event</p>
                    </div>
                    <div class="col-sm-3">
                        <h3 class="home-count">11</h3>
                        <p>Committee</p>
                    </div>
                    <div class="col-sm-3">
                        <h3 class="home-count"><?php echo e($volunteers_number); ?></h3>
                        <p>Volunteer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('inc.fiveimages',['gallery'=>$gallery], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content">
                        <div class="tab-pane arabic active" id="testimonial-1">
                            " لن اجامل ان قلت اني اشرف الان على افضل فريق عمل انضممت اليه ، انا فخور و ممتن لليوم الذي شغلت فيه هذا المنصب الذي اعتبره واحد من اهم المناصب التي تقلدتها يوما او ساكون فيها في المستقبل " </div>
                        <div class="tab-pane" id="testimonial-2">
                            "The only place where you can have fun while you learn."
                        </div>
                        <div class="tab-pane " id="testimonial-3">
                            "We have always been fueled by an eager passion for sharing knowledge."
                        </div>
                        <div class="tab-pane" id="testimonial-4">
                            "Each one of us has the power to change the world. This is how we started IEEE PUA Student Branch."
                        </div>
                        <div class="tab-pane" id="testimonial-5">
                            "For true volunteers, I would like to thank all the people working in IEEEPUASB organization.This organization provides opportunities to learn and practice the soft and hard skills that you need so don't miss this opportunity."
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <ul class="nav">
                        <li>
                            <a href="#testimonial-2" data-toggle="tab">
                                <img src="images/quotes/abdelrahman-nasr.png" alt="image">
                                <strong>Abdelrahman Nasr El-Din</strong>
                                <span>Former Chairman</span>
                            </a>
                        </li>

                        <li>
                            <a href="#testimonial-5" data-toggle="tab">
                                <img src="images/quotes/ahmed-hesham.png" alt="image">
                                <strong>Ahmed Hesham</strong>
                                <span>Co-founder</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="#testimonial-1" data-toggle="tab">
                                <img src="images/quotes/karim-soliman.jpg" alt="image">
                                <strong>Karim Soliman</strong>
                                <span>Counselor of IEEE PUA SB</span>
                            </a>
                        </li>

                        <li>
                            <a href="#testimonial-4" data-toggle="tab">
                                <img src="images/quotes/osama-abulkhair.jpg" alt="image">
                                <strong>Osama Abulkhair</strong>
                                <span>Counselor of IEEE PUA SB</span>
                            </a>
                        </li>
                        <li>
                            <a href="#testimonial-3" data-toggle="tab">
                                <img src="images/quotes/abdelrahman-geddawi.png" alt="image">
                                <strong>Abdelrahman El-Gedawi</strong>
                                <span>Former Chairman</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.body', ['headerClass'=>'hero-3', 'active'=>'home','script'=>['home']], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>