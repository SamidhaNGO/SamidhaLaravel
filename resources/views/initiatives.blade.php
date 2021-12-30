@extends('layouts.default')

@section('main_container')
@push('stylesheets')
<style>
.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
	border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
	margin-bottom: -1px;
}
</style>
@endpush
<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <h2>Samidha Learning Community </h2>
          <span class="under-line"></span>
          <p> <strong>Samidha</strong> Learning Community (SLC) Centers are innovative approach to connect the educational thoughts like Community Based Learning, Lifelong Learning, Continuous Learning with Child Education.
               We are using Service Learning and Critical Pedagogies as our tools for the same.
               <strong>Samidha</strong> is focused on Child education but assumes that its not complete without educating the community.
               Therefore, we are trying to provide those learning opportunities to adults.
          </p>
        </div>
        <div class="col-lg-12">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/videoseries?list=PLP3c8XLJYSDJYI9EAAJYe7m_yOnaNYBvS" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-12">
          <p>SLC focuses on Child Education, but there are few essential aspects without which SLCs cannot sustain.
    		  Therefore, <strong>Samidha</strong> is trying to work towards those as well.
    		  Everyone in the community need to give thoughts to those other points only then SLCCs can services in 21st Century
    		  </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-success">
              <div class="panel-heading">
                  <h3 class="panel-title">Objectives for Year 2017-18</h3>
              </div>
          		<div class="panel-body">
                <h5><b>1. Educational Projects</b></h5>
            	  <p>
            	  Design, Implement, research, document and publish Educational Projects for Children to provide academic support, explore personal interests and achieve social sensibility, in a rural and urban context
            	  </p>
            	  <h5><b>2. Piloting Support Functions</b></h5>
            	  <p>
            	  Piloting essentials for establishing <strong>Samidha</strong> Learning Community like self-sustainability, self-reliance, increasing happiness, democratic principles, minimalist lifestyle at organizational level through Samidhians
            	  </p>
                <div class="panel-group" id="accordion">
                 <div class="panel panel-success">
                   <div class="panel-heading panel panel-success">
                     <h4 class="panel-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Educational Projects <i class="fa fa-chevron-down pull-right"></i></a>
                     </h4>
                   </div>
                   <div id="collapse1" class="panel-collapse collapse in">
                     <div class="panel-body">
                       <p>Educational projects have following three focus areas,</p>
                       <table class="table table-bordered" style="width:90%">
                       <thead>
                         <tr>
                           <th></th>
                           <th>Academic Support</th>
                           <th>Personal Interests</th>
                           <th>Social Sensibility</th>
                         </tr>
                        </thead>
                        <tbody>
                         <tr>
                           <th scope="row">1</th>
                           <td>Muktachhand</td>
                           <td>Library</td>
                         <td>Running <strong>Samidha</strong> Social Sensibility framework on 8 themes</td>
                         </tr>
                         <tr>
                           <th scope="row">2</th>
                           <td>The Granny Cloud</td>
                           <td>Morning Curriculum</td>
                           <td>Know your surrounding</td>
                         </tr>
                         <tr>
                           <th scope="row">3</th>
                           <td>Computer Awareness</td>
                           <td>Music Room</td>
                         <td>Need identification</td>
                         </tr>
                        <tr>
                           <th scope="row">4</th>
                           <td>Science Corner</td>
                         <td>Sports Room</td>
                         <td>Projects to address immediate needs</td>
                         </tr>
                        <tr>
                         <th scope="row">5</th>
                         <td>Writing Corner</td>
                         <td>Crafts Room</td>
                         <td>Integrating <strong>Samidha</strong> Social Sensibility Framework during all efforts</td>
                         </tr>
                        </tbody>
                        </table>
                     </div>
                   </div>
                 </div>
                 <div class="panel panel-success">
                   <div class="panel-heading">
                     <h4 class="panel-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Piloting SLC Support Functions <i class="fa fa-chevron-down pull-right"></i></a>
                     </h4>
                   </div>
                   <div id="collapse2" class="panel-collapse collapse">
                     <div class="panel-body">
                       <p>
                        <strong>Samidha</strong> think that learning communities won't sustain if few values, practices and believes are missing.
                        Therefore, <strong>Samidha</strong> will concentrate on these during the 2 Year of the SLC development.
                        But as its first time <strong>Samidha</strong> will be introducing it in the Urban and Rural context, we will be piloting it with the help of all Samidhians before planning something on these thoughts.
                        We will not force these things on any of the volunteers but will propose it as part of the organizational plan for year 2017-18.
                        </p>
                        <p>
                        <strong>Samidha</strong> have identified total 5 focus areas for the Support Functions
                        <div class="row">
                            <div class="col-md-4">
                                <div class="list-group">
                                    <span class="list-group-item">
                                        <h4>
                                            Self-sustainability
                                          </h4>
                                    </span>
                                    <span class="list-group-item">
                                        <h4>practicing Democratic/Samidha values</h4>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="list-group">
                                    <span class="list-group-item">
                                        <h4>Self reliance for basic needs (food, clothing, shelter)</h4>
                                    </span>
                                    <span class="list-group-item">
                                        <h4>Reducing consumptions by Minimalist lifestyle</h4>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list-group">
                                    <span class="list-group-item">
                                        <h4>proactive measures to increase the happiness</h4>
                                    </span>
                                </div>
                            </div>

                          </div>
                          <strong>Samidha</strong> is proposing to prepare the daily checklist for the members to track their practices. Before finalizing this checklist <strong>Samidha</strong> will gather list of good practices on above areas. Each area will be focused every week to prepare and try the checklist. After 5 weeks finale list will be prepared and posters will be created for Samidhians. These data will be collected back and soft coded. <strong>Samidha</strong> will try to understand the challenges and will take expert advices for addressing those. Based on these study for entire year <strong>Samidha</strong> will design its projects around those.
                        </p>
                    </div>
                   </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
      </div>
     
      <div class="row">
        <div class="col-lg-12">
          <h2>What we did in the past ?</h2>
          <span class="under-line"></span>

          <div class="panel with-nav-tabs panel-success">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#weDidInPastEdu" data-toggle="tab">Education</a></li>
                        <li><a href="#weDidInPastOrg" data-toggle="tab">Helping Other organizations</a></li>
                        <li><a href="#weDidInPastOwnInitiatives" data-toggle="tab">Own initiatives towards sustainability</a></li>
                        <li><a href="#weDidInPastServices" data-toggle="tab">Our Services projects</a></li>
                        <li><a href="#weDidInPastFunding" data-toggle="tab">Fund Raising Activity</a></li>
                        <li><a href="#weDidInPastOther" data-toggle="tab">Other</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="weDidInPastEdu">
                          <div class="col-md-4">
                            <ul class="list-group">
                              <li class="list-group-item">Muktachhand</li>
                            </ul>
                          </div>
                          <div class="col-md-4">
                            <ul class="list-group">
                              <li class="list-group-item">Computer literacy</li>
                            </ul>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="weDidInPastOrg">
                          <div class="col-md-4">
                            <ul class="list-group">
                              <li class="list-group-item">Begging for a great cause</li>
                              <li class="list-group-item">Visit Orphanage</li>
                            </ul>
                          </div>
                          <div class="col-md-4">
                            <ul class="list-group">
                              <li class="list-group-item">Melghat Workshop</li>
                              <li class="list-group-item">Volunteering at Hemalkasa</li>
                            </ul>
                          </div>
                          <div class="col-md-4">
                            <ul class="list-group">
                              <li class="list-group-item">Charity show at Bharat natya mandir</li>
                              <li class="list-group-item">SWACH</li>
                            </ul>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="weDidInPastOwnInitiatives">
                          <div class="col-md-4">
                            <ul class="list-group">
                            <li class="list-group-item">Sinhagadavar Ek Sakal (A beautiful morning on Fort Sinhagad)</li>
                          </ul>
                        </div>
                        <div class="col-md-4">
                          <ul class="list-group">
                            <li class="list-group-item">Plantation Drive</li>
                          </ul>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="weDidInPastServices">
                          <div class="col-md-4">
                            <ul class="list-group">
                              <li class="list-group-item">Baseline Study for Goa state</li>
                            </ul>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="weDidInPastFunding">
                          <div class="col-md-4">
                          <ul class="list-group">
                            <li class="list-group-item">Raddi Collection</li>
                          </ul>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="weDidInPastOther">
                          <div class="col-md-4">
                          <ul class="list-group">
                            <li class="list-group-item">Anti Child-Begging Campaign (ACBC)</li>
                          </ul>
                        </div>
                        <div class="col-md-4">
                          <ul class="list-group">
                            <li class="list-group-item">Women’s Day celebration</li>
                          </ul>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection
