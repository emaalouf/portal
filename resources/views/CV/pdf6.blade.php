																					<!--page container-->
<div class="allContent">
																					<!--part left-->
	<div class="leftRight">
		<div class="allLeft">
																					<!--picture-->
			<div class="Top">
				<img src="https://www.w3schools.com/w3images/avatar_hat.jpg">
				<h2 class="jane">Jane Doe</h2>
			</div>
																					<!--Enter data-->
			<div class="partTwo">
				<p><i class="fa">&#xf0b1;</i>Designer</p>
				<p><i class="fa">&#xf015;</i>London, UK</p>
				<p><i class="fa">&#xf0e0;</i>ex@mail.com</p>
				<p><i class="fa">	&#xf095;</i>1224435534</p>
			</div>
		<hr>
																					<!--Enter Skills-->
			<div class="partTwo">
				<p class="star"><i class="fa">&#xf069;</i><b>Skills</b></p>
				<p>Adobe Photoshop</p>
				<div class="outside ">
					<div class="inside center" id="ninty">90%</div>
				</div>
				<p>Photography</p>
				<div class="outside">
					<div class="inside center" id="eighty">80%</div>
				</div>
				<p>Illustrator</p>
				<div class="outside">
					<div class="inside center" id="seventy-five">75%</div>
				</div>
				<p>Media</p>
				<div class="outside">
					<div class="inside center" id="fifty">50%</div>
				</div>
			<br><br>
				<p class="star"><i class="fa">	&#xf0ac;</i><b>Languages</b></p>
				<p>English</p>
				<div class="outside center">
					<div class="inside" id="one-hundred">100%</div>
				</div>
				<p>Spanish</p>
				<div class="outside">
					<div class="inside center" id="fifty-five">55%</div>
				</div>
				<p>German</p>
				<div class="outside">
					<div class="inside center" id="tweny-five">25%</div>
				</div>
			</div>
		</div>
	</div>
																					<!--part right-->
	<div class="rightLeft">
		<div class="partRight">
																					<!--write experience-->
			<div class="com">
				<h2 class="icon"><i class="fa">&#xf0f2;</i>Work Experience</h2>
			</div>
		<br>
			<div class="com">
				<h5>Front End Developer / w3schools.com</h5>
				<h6><i class="fa">&#xf073;</i>Jan 2015 - <span>Current</span></h6>
				<p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.
				</p>
			</div>
			<hr>
			<div class="com">
				<h5>Web Developer / something.com</h5>
				<h6><i class="fa">&#xf073;</i>Mar 2012 - Dec 2014</h6>
				<p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.
				</p>
			</div>
		<hr>
			<div class="com">
				<h5>Graphic Designer / designsomething.com</h5>
				<h6><i class="fa">&#xf073;</i>Jun 2010 - Mar 2012</h6>
				<p class="end">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
																					<!--levels education-->
		<div class="partRight">
			<div class="com">
				<h2 class="icon"><i class="fa">&#xf0a3;</i>Education</h2>
			</div>
		<br>
			<div class="com">
				<h5>W3Schools.com</h5>
				<h6><i class="fa">&#xf073;</i>Forever</h6>
				<p>Web Development! All I need to know in one place</p>
			</div>
			<hr>
			<div class="com">
				<h5>London Business School</h5>
				<h6><i class="fa">&#xf073;</i>2013 - 2015</h6>
				<p>Master Degree</p>
			</div>
			<hr>
			<div class="com">
				<h5>School of Coding</h5>
				<h6><i class="fa">&#xf073;</i>2010 - 2013</h6>
				<p class="end">Bachelor Degree</p>
			</div>
		</div>
	</div>
																					<!--end container-->
</div>
																					<!--footer-->
<footer class="center">
	<p>Find me on social media.</p>
	<i class="fa">&#xf09a;</i>
	<i class="fa">&#xf16d;</i>
	<i class="fa">&#xf2ab;</i>
	<i class="fa">&#xf0d2;</i>
	<i class="fa">&#xf099;</i>
	<i class="fa">&#xf0e1;</i>
	<p>Powered by<a>w3.css</a></p>
</footer>

<style>
    *{
    -moz-box-sizing: border-box;
         box-sizing: border-box
}
html, body, h1, h2, h3, h4, h5, h6{
	font-family:"Roboto", sans-serif
}
body{background-color:lightgray; min-height:1000px}
																						/*page container*/
.allContent{
	margin:10px; display:flex; min-height:900px; position: relative
}
																						/*part left*/
.leftRight{
	background-color:white; width:33%; margin:16px 5px; max-height: 1075px; box-shadow:3px 3px 5px 4px gray 
}
.Top img{width:100%}
.jane{margin:-50px 0 0 20px;  font-size:27px}
																							/* Skills*/
.partTwo{margin:30px 20px}
.partTwo p{color:gray}
 i{
	color:teal; margin-right:20px; font-size:20px
}
hr{color:lightgray; margin:0 30px}
.star{font-size:20px; }

.outside{
	background-color:lightgray; border-radius:15px
}
.inside{
	background-color:teal; border-radius:15px; color:white
}
#ninty{width:90%}
#eighty{width:80%}
#seventy-five{width:75%}
#fifty{width:50%}
#one-hundred{width:100%}
#fifty-five{width:55%}
#tweny-five{width:25%}
																							/*part right*/
.rightLeft{width:70%; margin:-4px -8px 0 5px; }
																							/*experience.. education*/
.partRight{
	background-color:white; box-shadow:3px 3px 5px 4px gray;  
}
.com{margin:0 30px }
.com h5{color:gray; font-size:16px; }
.icon{
	margin:20px 0 5px 0; padding:32px 0 0; color:gray
}
.icon  i {font-size:35px}
h6{
	color:teal; margin:10px 0; font-size:15px
}
span{
	color:white; background-color:teal; padding:3px 8px; border-radius:5px
}
.end{padding-bottom:50px}
																							/*footer*/
footer{
	;color:white; padding:10px; background-color:teal; width:100%;  
}
footer i{color:white; margin:0}
															/*frame work*/
.center{text-align:center}	
															/*media quries to mall screen*/
@media (max-width:420px) {
    .allContent{display:block; }
   .leftRight{ width:100%;  max-height:1100px}
    .rightLeft{width:100%}


}
	
@media (max-width:640px) {
	
    .allContent{display:block; }
   .leftRight{ width:100%;  max-height:1500px }
    .rightLeft{width:100%}

}
@media (min-width:768px) {
	
}
@media (min-width:992px) {
	
}
@media (min-width:1200px) {
	
}
</style>