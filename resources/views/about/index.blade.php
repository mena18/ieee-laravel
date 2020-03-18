@extends('layout.body',['headerClass'=>'events-hero','active'=>'benefits','script'=>'benefits'])
@section('title')
	About us
@endsection
@section('caption')
	<h2>About us</h2>
@endsection

@section('content')

<style>
  .ul{
    line-height:3;
  }
  .ul li{
    list-style: initial;
  }
  .text-footer{
    text-align:center;
    margin:20px;
  }
</style>

<section class="events-search-filter benefits">
    <div class="container">
        <div class="row">
            <div class="section-content clearfix">
                <div id="btn-left" class="col-xs-6 btn-right btnActive">IEEE</div>
                <div id="btn-right" class="col-xs-6 btn-left">IEEEPUASB</div>
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 graduated-Benefits">
                    <p style="font-size:18px;">
                      IEEE PUA SB is student branch create a local network of Students and give students the opportunity to meet and learn from fellow students, as well as faculty members and professionals in the field.
IEEE PUA SB is established in 15 may 2014 The branch also Provide the student with verity of soft skills and technical skills to Learn

                    </p>
                    <div class="text-footer">
                      <h3>IEEE Pharos University in Alexandria Student Branch,</h3>
                      <h1>IEEE PUA SB</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Undergraduate" class="membership-ben">
    <div class="container">
        <div class="row">
            <div class="benefits">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 undergraduate-benefits">

                  <p>The Institute of Electrical and Electronics Engineers, IEEE, was found in 1884; it is a non-profit organization that aims for technological innovation.</p>

                  <p>There are more than 430,000 IEEE members in more than 160 countries. The IEEE publishes a third of the world’s technical literature in electrical engineering, computer science and electronics and is a leading developer of international standards that underpin many of today's telecommunications, information technology and power generation products and services.</p>

                  <p>Obviously, the organization couldn’t cover the whole world without dividing it through regions; the organization made 10 regions, region 8 covers Europe, Middle East, and Africa.</p>

                  <p>The driving force of Region 8 Technical Activities In each region, there are many sections that run under its management, for example, IEEE Egypt Section that covers the geographical area of the Arab Republic of Egypt and was established on September 8, 1955 as the 2nd IEEE section outside the US. IEEE Egypt Section consists of 3 main entities:</p>
                  <div style="margin-left:20px;">
                  <ul class="ul">
                    <li>Student Activities: 30+ affiliated IEEE student branches in different Egyptian universities.</li>
                    <li>Affinity Groups: IEEE Young Professionals (YP) Egypt, IEEE Women in Engineering (WIE) Egypt</li>
                    <li>Technical Activities: concentrated in the so-called Society Chapters such as: RAS – Computer society</li>
                    <li>The chain of IEEE, its regions and section, leads to the last parts of the chain</li>
                  </ul>
                  </div>

                  <div class="text-footer">
                    <h3>IEEE Pharos University in Alexandria Student Branch,</h3>
                    <h1>IEEE PUA SB</h1>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
