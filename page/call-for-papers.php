<div class="contentWrap">
	
	<div class="wrapper mContent">
	<div class="text left">
		<img src="img/papers.png" class="teaserPic" alt="Papers">
	</div>
	<div class="aside left">
		<h2 class="subtitle darkBlue" style="margin-top: 20px;">Papers</h2>
		<p class="darkBlue">Each year, over hundreds of papers are submitted and peer reviewed and published in leading journals.</p>
	</div>
	<div class="clear"></div>
</div>


<div class="speakers bluebg">
	<div class="wrapper">
		<div class="aside left">
			<ul class="paperNav">
				<li data-id="full-papers" class="active"><a href="#/call-for-papers/full-papers">Full & Review Papers</a></li>
				<li data-id="case-studies"><a href="#/call-for-papers/case-studies">Case Studies</a></li>
				<li data-id="student-design-consortium"><a href="#/call-for-papers/student-design-consortium">Student Design Consortium</a></li>
			</ul>
		</div>
		<!-- Insert paper pages here -->
		<ul id="paperWrap" class="text left">
				<li id="full-papers" class="show" >
					<?php include("full-papers.php"); ?>
				</li>
				<li id="case-studies" class="hide">
					<?php include("case-studies.php"); ?>
				</li>
				<li id="student-design-consortium" class="hide">
					<?php include("student-design-consortium.php"); ?>
				</li>
		</ul>
		<div class="clear"></div>

	</div>
</div>

</div>