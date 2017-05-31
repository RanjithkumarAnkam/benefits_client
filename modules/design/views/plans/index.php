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
  background-color: #eee;
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
  border-color: transparent transparent transparent #eee;
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
  border-color: #eee #eee #eee transparent;
  z-index: 150;
}
.nav-pills.nav-wizard > li:hover:not(:last-child) a:after {
  border-color: transparent transparent transparent #aaa;
}
.nav-pills.nav-wizard > li:hover:not(:first-child) a:before {
  border-color: #aaa #aaa #aaa transparent;
}
.nav-pills.nav-wizard > li:hover a {
  background-color: #aaa;
  color: #fff;
}
.nav-pills.nav-wizard > li.active:not(:last-child) a:after {
  border-color: transparent transparent transparent #428bca;
}
.nav-pills.nav-wizard > li.active:not(:first-child) a:before {
  border-color: #428bca #428bca #428bca transparent;
}
.nav-pills.nav-wizard > li.active a {
  background-color: #428bca;
}

.ul-block{
	text-align:center;
}
.ul-block ul{
	display:inline-block;
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
				<div class="col-xs-2"></div>
				<div class="col-xs-2" align="center">
					<img src="/images/design/account_setup_sel.png"  class="avatar"
						alt="Alternative text to the image">
						<p class="font-white margin-0">Account Setup</p>
				</div>
				<div class="col-xs-2" align="center">
					<img src="/images/design/cost_projectionsl.png" class="avatar"
						alt="Alternative text to the image">
						<p class="font-white margin-0">Cost Projections</p>
				</div>
				<div class="col-xs-2" align="center">
					<img src="/images/design/monthly_inputs.png" class="avatar"
						alt="Alternative text to the image">
						<p class="font-white margin-0">Input Monthly Financials</p>
				</div>
				<div class="col-xs-2" align="center">
					<img src="/images/design/reports.png" class="avatar"
						alt="Alternative text to the image">
						<p class="font-white margin-0">Generate Reports</p>
				</div>
				<div class="col-xs-2"></div>
			</div>

			<div class="col-md-12  padding-0 ul-block">
				<ul class="nav nav-pills nav-wizard">
					<li class="active"><a href="#" data-toggle="tab"><span>1</span>Plan Basics</a></li>
					<li><a href="#" data-toggle="tab"><span>2</span>Reinsurance Plans and Rates</a></li>
					<li><a href="#" data-toggle="tab"><span>3</span>Claim Types to Track</a></li>
					<li><a href="#" data-toggle="tab"><span>4</span>Additional Financial Entries</a></li>
					<li><a href="#" data-toggle="tab"><span>1</span>Emp Contributions &amp; Avg Enr</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
