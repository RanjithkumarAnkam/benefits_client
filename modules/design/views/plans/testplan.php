<style>
.nav-pills.nav-wizard > li {
  position: relative;
  overflow: visible;
  border-right: 10px solid transparent;
  border-left: 15px solid transparent;
}
.nav-pills.nav-wizard > li + li {
  margin-left: 0;
}
.nav-pills.nav-wizard > li:first-child {
  border-left: 0;
}
.nav-pills.nav-wizard > li:first-child a {
  border-radius: 5px 0 0 5px;
}
.nav-pills.nav-wizard > li:last-child {
  border-right: 0;
}
.nav-pills.nav-wizard > li:last-child a {
  border-radius: 0 5px 5px 0;
}
.nav-pills.nav-wizard > li a {
  border-radius: 0;
  background-color: skyblue;
}
.nav-pills.nav-wizard > li:not(:last-child) a:after {
  position: absolute;
  content: "";
  top: 0px;
  right: -20px;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 20px 0 20px 20px;
  border-color: transparent transparent transparent skyblue;
  z-index: 150;
}
.nav-pills.nav-wizard > li:not(:first-child) a:before {
  position: absolute;
  content: "";
  top: 0px;
  left: -20px;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 20px 0 20px 20px;
  border-color: skyblue skyblue skyblue transparent;
  z-index: 150;
}
.nav-pills.nav-wizard > li:hover:not(:last-child) a:after {
  border-color: transparent transparent transparent skyblue ;
}
.nav-pills.nav-wizard > li:hover:not(:first-child) a:before {
  border-color: skyblue skyblue skyblue transparent;
}
.nav-pills.nav-wizard > li:hover a {
  background-color: skyblue;
  color: #fff;
}



.ul-block{
	text-align:center;
}
.ul-block ul{
	display:inline-block;
}




.inner-block-text{
	color:#3c3c3c;
}
.main-pills > li:after {
    content: " ";
    position: absolute;
    opacity: 0;
    margin: 0;
    margin-left: -10px;
    bottom: -11px;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    transition: left 1s;
}

.main-pills > li.active:after {
    left: 50%;
    opacity: 1;
}

.main-pills > li[rel-index="-1"]:after {
    left: calc(50% + 100%);
}

.main-pills > li[rel-index="-2"]:after {
    left: calc(50% + 200%);
}

.main-pills > li[rel-index="-3"]:after {
    left: calc(50% + 300%);
}

.main-pills > li[rel-index="1"]:after {
    left: calc(50% - 100% );
}

.main-pills > li[rel-index="2"]:after {
    left: calc(50% - 200%);
}

.main-pills > li[rel-index="3"]:after {
    left: calc(50% - 300%);
}
/*
.inner-block-ul>li.active{
	background-color: #f7971e !important;
}*/

.nav-pills.nav-wizard > li.active a {
  background-color: #f7971e;
}
.nav-pills.nav-wizard > li.active:not(:last-child) a:after {
  border-color: transparent transparent transparent #f7971e;
}
.nav-pills.nav-wizard > li.active:not(:first-child) a:before {
  border-color: #f7971e #f7971e #f7971e transparent;
}
.inner-block-digits{
    margin-right: 5px;
    background: #fff;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    text-align: center;
	color: #3c3c3c;
}
.nav-pills.nav-wizard > li.active div {
  color: #f7971e;
}
.nav-pills.nav-wizard > li.active span {
  color: #FFF;
}

</style>



<section class="page-content padding-0">
	<div class="row">
		<div class="search-header">
			<div class="col-lg-12 search-header-inner">
				<div class="col-md-3 div-search ">
					<div class="search-block">
						<div class="form-input-icon form-input-icon-right">
							<i class="icmn-search"></i> <input type="text"
								class="form-control form-control-sm"
								placeholder="Search within the result...">
							<button type="submit" class="search-block-submit "></button>
						</div>
					</div>
				</div>

				<div class="col-md-9 aplhabets-div  ">
					<ul class="categoryList  font-white">
						<li><div class="categoryButton selected">All</div></li>
						<li><div class="categoryButton">A</div></li>
						<li><div class="categoryButton">B</div></li>
						<li><div class="categoryButton">C</div></li>
						<li><div class="categoryButton">D</div></li>
						<li><div class="categoryButton">E</div></li>
						<li><div class="categoryButton">F</div></li>
						<li><div class="categoryButton">G</div></li>
						<li><div class="categoryButton">H</div></li>
						<li><div class="categoryButton">I</div></li>
						<li><div class="categoryButton">J</div></li>
						<li><div class="categoryButton">K</div></li>
						<li><div class="categoryButton">L</div></li>
						<li><div class="categoryButton">M</div></li>
						<li><div class="categoryButton">N</div></li>
						<li><div class="categoryButton">O</div></li>
						<li><div class="categoryButton">P</div></li>
						<li><div class="categoryButton">Q</div></li>
						<li><div class="categoryButton">R</div></li>
						<li><div class="categoryButton">S</div></li>
						<li><div class="categoryButton">T</div></li>
						<li><div class="categoryButton">U</div></li>
						<li><div class="categoryButton">V</div></li>
						<li><div class="categoryButton">W</div></li>
						<li><div class="categoryButton">X</div></li>
						<li><div class="categoryButton">Y</div></li>
						<li><div class="categoryButton">Z</div></li>
						<li><div class="categoryButton">#</div></li>
					</ul>

				</div>

			</div>
		</div>
	</div>


	<div class="page-content col-md-12">
		<div class="col-md-12 border-ddd widget">
			<div class="search-header padding-10">
			
				<ul class="nav nav-pills col-md-12 main-pills">
						<li class="col-md-2"></li>
					  <li href="#account_setup_block" data-toggle="tab" class="active col-md-2" align="center"><img src="/images/design/account_setup_sel.png"  class="avatar"
							alt="Alternative text to the image">
							<p class="font-white margin-0">Account Setup</p></li>
					  <li href="#cost_projections_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/cost_projectionsl.png" class="avatar"
							alt="Alternative text to the image">
							<p class="font-white margin-0">Cost Projections</p></li>
					  <li href="#input_monthly_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/monthly_inputs.png" class="avatar"
							alt="Alternative text to the image">
							<p class="font-white margin-0">Input Monthly Financials</p></li>
					  <li href="#generate_reports_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/reports.png" class="avatar"
							alt="Alternative text to the image">
							<p class="font-white margin-0">Generate Reports</p></li>
						<li class="col-md-2"></li>
				</ul>
			
			</div>
			<div class="tab-content clearfix">
				<div class="tab-pane active" id="account_setup_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard inner-block-ul">
							<li href="#" data-toggle="tab" class="active inner-block-li"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Plan Basics</span></a></li>
							<li href="#" data-toggle="tab" class="inner-block-li"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Reinsurance Plans and Rates</span></a></li>
							<li href="#" data-toggle="tab" class="inner-block-li"><a><div class="inner-block-digits pull-left">3</div><span class="inner-block-text">Claim Types to Track</span></a></li>
							<li href="#" data-toggle="tab" class="inner-block-li"><a><div class="inner-block-digits pull-left">4</div><span class="inner-block-text">Additional Financial Entries</span></a></li>
							<li href="#" data-toggle="tab" class="inner-block-li"><a><div class="inner-block-digits pull-left">5</div><span class="inner-block-text">Emp Contributions &amp; Avg Enr</span></a></li>
						</ul>
					</div>
				</div>
				<div class="tab-pane" id="cost_projections_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard">
							<li href="#" data-toggle="tab" class="active inner-block-li"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text" title="Remainder of Year Claim Projection Assumptions">Remainder of Year Claim...</span></a></li>
							<li href="#" data-toggle="tab" class="inner-block-li"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Renewal Claims Projection Assumptions</span></a></li>
							<li href="#" data-toggle="tab" class="inner-block-li"><a><div class="inner-block-digits pull-left">3</div><span class="inner-block-text" title="Renewal Cost Item Renewal Assumptions">Renewal Cost Item Renewal...</span></a></li>
							<li href="#" data-toggle="tab" class="inner-block-li"><a><div class="inner-block-digits pull-left">4</div><span class="inner-block-text" title="Renewal Employee Contribution & Average Enrollment Assumption">Renewal Employee Contribution...</span></a></li>
						</ul>
					</div>
				</div>
				<div class="tab-pane" id="input_monthly_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard">
							<li href="#" data-toggle="tab" class="active inner-block-li"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Monthly Financials</span></a></li>
							<li href="#" data-toggle="tab" class="inner-block-li"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Large Claims</span></a></li>
							<li href="#" data-toggle="tab" class="inner-block-li"><a><div class="inner-block-digits pull-left">3</div><span class="inner-block-text">Network Performance</span></a></li>
							<li href="#" data-toggle="tab" class="inner-block-li"><a><div class="inner-block-digits pull-left">4</div><span class="inner-block-text">Pharmacy Performance</span></a></li>
						</ul>
					</div>
				</div>
				<div class="tab-pane" id="generate_reports_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard">
							<li href="#" data-toggle="tab" class="active inner-block-li"><a href="#" data-toggle="tab"><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Reports</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
