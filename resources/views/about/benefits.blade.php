@extends('layout.body',['headerClass'=>'events-hero','active'=>'benefits','script'=>'benefits'])
@section('title')
	IEEE BENEFITS
@endsection
@section('caption')
	<h2>IEEE BENEFITS</h2>
@endsection

@section('content')

<section class="events-search-filter benefits">
    <div class="container">
        <div class="row">
            <div class="section-content clearfix">
                <div id="btn-left" class="col-xs-6 btn-right btnActive">Volunteer Benefits</div>
                <div id="btn-right" class="col-xs-6 btn-left">Membership Benefits</div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
<div class="clearfix"></div>
<section id="Graduated" class="membership-ben hide">
    <div class="container">
        <div class="row">
            <div class="benefits">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 graduated-Benefits">
                    <h2 class="benefits-h">Membership Benefits</h2>
                    <p>This post is followed with all the information you need if you’re looking up to being an IEEE member.<br>
                        IEEE offers its members a great deal of benefits:<br>
                        . You join a community over 420,000 of technology and engineering professionals with a common goal of knowledge, learn, interact, innovate and collaborate.<br>
                        . you will be joined in a place that links you to the professionals and experts in their field of interest.<br>
                        . We will keep you upgraded with the new events and activities that the branch launches.<br>
                        . You will have an access to the largest library of electrical engineering, computer science, and electronic technical literature.<br>
                        . You will know the latest industry news, events and technology trends.<br>
                        . You will be able to form a network of other group members to share knowledge and experience.<br>
                        And many more benefits join now and be an IEEE member.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 images">
                    <div class="image1"><img src="{{URL::to('images/m_benefits.jpg')}}" alt="benefit"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Undergraduate" class="membership-ben">
    <div class="container">
        <div class="row">
            <div class="benefits">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 undergraduate-benefits">
                    <h2 class="benefits-h">Volunteer Benefits</h2>
                    <p>
                        Didn’t you ask yourself before what are the advantages of being an IEEE volunteer ?<br>
                        Well at first you need to ask how would you be a part of IEEE team.<br>
                        You have to wait the recruitment event to be launched, IEEEPUASB will announce the new recruitment for the new volunteers to join early at the beginning of the season. All what you have to do from this moment is to sign up your name, choose your targeted committee, and wait for the interview.<br>
                        Now for the fun part, the advantages you get is plenty and varied, you will work in an atmosphere of dedication and self- upgrade. This will force you to get involved in many activities that will make you more accurate, organized, sharp, motivated and creative.<br>
                        The best of all, that you will work in friendly working place.<br>
                        As a summary, being an IEEE volunteer is a process of GIVE dedication ...TAKE knowledge.

                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 images">
                    <div class="image1"><img src="{{URL::to('images/v_benefits.jpg')}}" alt="benefit"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection