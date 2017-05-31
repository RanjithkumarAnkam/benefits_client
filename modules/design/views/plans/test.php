

<style>
/* Main tabs */
@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);

body {
    font-family: 'Roboto Condensed', san-serif;
    background: #16A085;
}

.board {
    width: 100%;
    height: auto;
    margin: 30px auto;
    background: none;
}

.board .nav-tabs {
    position: relative;
    margin: 40px auto;
    margin-bottom: 0;
    box-sizing: border-box;
}

.liner {
    height: 2px;
    background: #ddd;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.nav-tabs > li {
    width: 25%;
}

.nav-tabs > li:after {
    content: " ";
    position: absolute;
    opacity: 0;
    margin: 0;
    margin-left: -10px;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #aaa;
    transition: left 1s;
}

.nav-tabs > li.active:after {
    left: 50%;
    opacity: 1;
}

.nav-tabs > li[rel-index="-1"]:after {
    left: calc(50% + 100%);
}

.nav-tabs > li[rel-index="-2"]:after {
    left: calc(50% + 200%);
}

.nav-tabs > li[rel-index="-3"]:after {
    left: calc(50% + 300%);
}

.nav-tabs > li[rel-index="1"]:after {
    left: calc(50% - 100% );
}

.nav-tabs > li[rel-index="2"]:after {
    left: calc(50% - 200%);
}

.nav-tabs > li[rel-index="3"]:after {
    left: calc(50% - 300%);
}

.nav-tabs > li a {
    width: 70px;
    height: 70px;
    line-height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
    border: none;
    background: none;
}

.nav-tabs > li a:hover {
    border: none;
    background: none;
}

.nav-tabs > li.active a, .nav-tabs > li.active a:hover {
    border: none;
    background: none;
}

.nav-tabs > li span {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100%;
    background: white;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}

.nav-tabs > li:nth-of-type(1) span {
    color: #3e5e9a;
    border: 2px solid #3e5e9a;
}

.nav-tabs > li:nth-of-type(1).active span {
    color: #fff;
    background: #3e5e9a;
}

.nav-tabs > li:nth-of-type(2) span {
    color: #f1685e;
    border: 2px solid #f1685e;
}

.nav-tabs > li:nth-of-type(2).active span {
    color: #fff;
    background: #f1685e;
}

.nav-tabs > li:nth-of-type(3) span {
    color: #febe29;
    border: 2px solid #febe29;
}

.nav-tabs > li:nth-of-type(3).active span {
    color: #fff;
    background: #febe29;
}

.nav-tabs > li:nth-of-type(4) span {
    color: #25c225;
    border: 2px solid #25c225;
}

.nav-tabs > li:nth-of-type(4).active span {
    color: #fff;
    background: #25c225;
}

.nav-tabs > li > a.disabled {
    opacity: 1;
}

.nav-tabs > li > a.disabled span {
    border-color: #ddd;
    color: #aaa;
}

div[role="tabpanel"]:after {
    content: "";
    display: block;
    clear: both;
}

/* Begin Business Info */

#step-1 {
    background: white;
}
</style>


<script>
$(function() {
    // Nav Tab stuff
    $('.nav-tabs > li > a').click(function() {
        if($(this).hasClass('disabled')) {
            return false;
        } else {
            var linkIndex = $(this).parent().index() - 1;
            $('.nav-tabs > li').each(function(index, item) {
                $(item).attr('rel-index', index - linkIndex);
            });
        }
    });
    $('#step-1-next').click(function() {
        // Check values here
        var isValid = true;
        
        if(isValid) {
            $('.nav-tabs > li:nth-of-type(2) > a').removeClass('disabled').click();
			$('.nav-tabs > li:nth-of-type(2)').addClass('active');
        }
    });
    $('#step-2-next').click(function() {
        // Check values here
        var isValid = true;
        
        if(isValid) {
            $('.nav-tabs > li:nth-of-type(3) > a').removeClass('disabled').click();
			$('.nav-tabs > li:nth-of-type(3)').addClass('active');
        }
    });
    $('#step-3-next').click(function() {
        // Check values here
        var isValid = true;
        
        if(isValid) {
            $('.nav-tabs > li:nth-of-type(4) > a').removeClass('disabled').click();
			$('.nav-tabs > li:nth-of-type(4)').addClass('active');
        }
    });
	
	$('#first_block').click(function(){
		$('.nav-tabs > li:nth-of-type(1)').addClass('active');
	});
});

</script>




<div class="container">
    <div class="row">
        <div class="board">
            <ul class="nav nav-tabs">
                <div class="liner"></div>
                <li rel-index="0" class="active">
                    <a href="#step-1" class="btn" aria-controls="step-1" role="tab" data-toggle="tab" id="first_block">
                        <span><i class="glyphicon glyphicon-user"></i></span>
                    </a>
                </li>
                <li rel-index="1">
                    <a href="#step-2" class="btn disabled" aria-controls="step-2" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-heart"></i></span>
                    </a>
                </li>
                <li rel-index="2">
                    <a href="#step-3" class="btn disabled" aria-controls="step-3" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-plus"></i></span>
                    </a>
                </li>
                <li rel-index="3">
                    <a href="#step-4" class="btn disabled" aria-controls="step-4" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-ok"></i></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="step-1">
                <div class="col-md-12">
                
                    <button id="step-1-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="step-2">
                <div class="col-md-12">
                    <button id="step-2-next" class="btn btn-lg btn-primary pull-right">Next</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="step-3">
                <div class="col-md-12">
                    <button id="step-3-next" class="btn btn-lg btn-primary pull-right">Next</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="step-4">
                <div class="col-md-12">
                    <button id="step-4-next" class="btn btn-lg btn-primary pull-right">Continue</button>
                </div>
            </div>
        </div>
    </div>
</div>
