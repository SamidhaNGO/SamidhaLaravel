@extends('layouts.default')

@section('main_container')
 <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <i><h2 class="page-header"><i>Samidha Services for NPOs, NGOs and CSR</i></h2></i>
            </div>
            <div class="col-md-6">
                <p>Samidha has good experience working on different social projects in last 10 years. When organizations

are formed with the individuals coming from varied skills, it has potential to grow faster and make

significant contribution in the field. Additionally, volunteer organizations develop that maturity faster

than other organizations. Samidha was lucky to have lot of experts in the education sector as mentors,

which gave extra edge to whatever we were doing. Apart from all these, Samidha’s culture to keep

exploring, learning from the mistakes and walking extra miles, helped rise above the level.</p></br>
<p>Samidha has developed expertise in the areas like Education Research, Managing Volunteer

Organizations, conducting Visioning Exercises with Senior Leadership, Designing IT Environment for

NGOs, Recruiting Senior Leadership roles. We are providing services on the following lines.</p>
            </div>
            <div class="col-md-6">
			<figure>
				<img class="img-responsive" src="images/services-1.jpg" alt="">
				<figcaption style="text-align: center;"><b><i>“Baseline Study for Mulyawardhan Program of ‘Government of Goa’</i></b></figcaption>
				</figure>
            </div>
			
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    
                </h1>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4><i class="fa fa-file-text" aria-hidden="true"></i> Education Research</h4>
                    </div>
                    <div class="panel-body">
                        <p>Samidha has worked extensively on the national, international researchers and have expertise in

professionally managing the Educational Research. 10 Years experience at various level also

gives us domain expertise. We have experts whose researches are getting published in the

international journal.</p>
<h4> Services Offered</h4>
                        <ul>
						<li>Research Designing (All types)</li>
						<li>Conducting Field Work</li>
						<li>Secondary Data Research</li>
						<li>Research Data Analysis</li>
						<li>Report Writing and Presentations</li>
						<li>Publishing Support</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4><i class="fa fa-users" aria-hidden="true"></i> Leadership Support</h4>
                    </div>
                    <div class="panel-body">
                        <p>Running Non-profit is altogether different ball of game. We have people who are working at

leadership positions in corporate and latter aligned their skills to non-profit sector. This gives

them extra edge to position non-profit ventures in markets. Samidha members have worked in

close association with the government systems and therefore understand how to work with the

public administration.</p>
<h4> Services Offered</h4>
                        <ul>
						<li>Conducting Visioning Exercises with the Senior Leadership</li>
						<li>Developing organizational structures, processes</li>
						<li>Developing Theory of Change with Leadership</li>
						
						</ul>
                        
                    </div>
                </div>
            </div>
           
        </div>
		 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    
                </h1>
            </div>
           <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4><i class="fa fa-sticky-note" aria-hidden="true"></i> Program and Project Design</h4>
                    </div>
                    <div class="panel-body">
                        <p>Designing Innovations, Social Change projects need good understanding of the social sector.

Program should be sustainable and aligned with the larger discourses in the sector. Innovations

should be addressing the ground level problems. There should be proper exist plans for the Non-

government sector organizations. Scalability is something which need to be addressed at during

the designing phase only. Again, storing monitoring, control, feedback systems are required for

the successful implementation of the program. </p>
                       <h4> Services Offered</h4>
                        <ul>
						<li>Designing Large Educational Change</li>
						<li>Implementing standards like Six Sigma, PMP, ITPL</li>
						<li>Developing Monitoring and Evaluation frameworks</li>
						<li>Conducting Program Impact Analysis</li>
						
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Proposal Writing</h4>
                    </div>
                    <div class="panel-body">
                        <p>Samidha have good experience of piloting, proposing new ideas, conducting literature reviews,

handling secondary data. Proposal writing is also a nitch skill now a day. Proposals should be

grounded and supported with enough facts. Again, proposals need to be customized according

to the needs to inviting organizations. Program, Grants, Fellowship, Research and all other kinds

of proposal must be developed with the expected language, formats and structures.</p>
                        <h4> Services Offered</h4>
                        <ul>
						<li>Developing Proposals for CSR</li>
						<li>Writing Research Proposal</li>
						<li>Writing Program Grants Proposal</li>
						
						
						</ul>
                    </div>
                </div>
            </div>
      
        </div>
        <hr>
        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <h3 style="color:#337AB7">Please send your request on <a href="mailto:services@samidha.org">services@samidha.org</a></h3>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-success btn-block" href="{{ URL::to('/contactus')}}">Get in touch</a>
                </div>
            </div>
        </div>

        <hr>

    </div>
@endsection
