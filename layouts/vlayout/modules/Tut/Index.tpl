<div class="container-fluid">
	<div class="">
		<div class="row-fluid">
			<div class="span12">
				<div id="tut-step">
				<ul style="margin-top: 10px;" id="mainNav" class="fiveStep">
					<li class="lastDone"><a href="#home" data-toggle="tab">Marketing & Kinh doanh</a></li>
					<li class="current"><a href="#profile" data-toggle="tab">Cơ hội bán hàng</a></li>
					<li class="current"><a href="#support" data-toggle="tab">Hỗ trợ</a></li>
				</ul>
				</div>
				<!-- <ul class="nav nav-pills">
				  <li class="active"><a href="#home" data-toggle="tab">Quản lý tiềm năng</a></li>
				  <li><a href="#profile" data-toggle="tab">Quản lý cơ hội bán hàng</a></li>
				  <li><a href="#support" data-toggle="tab">Quản lý Hỗ Trợ & Quản lý Dự Án</a></li>
				</ul> -->
				<div class="tab-content-tut" style="overflow: visible;">
				  <div class="tab-pane active" id="home" style="text-align: center">
				  	<img src="layouts/vlayout/skins/crmplus/images/s1.png" />
				  </div>
				  <div class="tab-pane" id="profile" style="text-align: center">
				  	<img src="layouts/vlayout/skins/crmplus/images/s2.png" />
				  </div>
				  <div class="tab-pane" id="support" style="text-align: center">
				  	<img src="layouts/vlayout/skins/crmplus/images/s3.png" />
				  </div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<link href="layouts/vlayout/skins/crmplus/crmplus.css" rel="stylesheet" />
<script>
$(function(){
	$("#mainNav li a").live("click", function(){
		var content= $(this).attr("href");
		$("#mainNav li").removeClass("lastDone").addClass("current");
		$(this).parent("li").addClass("lastDone");
		$(".tab-content-tut div").removeClass("active");
		$(content).addClass("active");
	})
})

</script>