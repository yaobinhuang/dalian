<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<html>
	<head>
		<style>
		#h_title {
			width: 100%;
			height:60px;
			padding-left: 200px;
			border-top: 1px solid #3D6FB5;
			clear: both;
			
		}
		#top{width: 1000px;
			height: 120px;
			
			margin: 0px auto;



		}
		#h_tu{
			width:500px;
			height: 120px;
			
			
			float: left;
		}
		#h_tuleft{ 
			width:500px;
			height: 120px;
			
			float: right;
		}
		
		


	

		.a1 {display:block;
			width: 100px;
			height: 50px;
			color: black;
			font-weight: bolder;
			font-size: 20px;
			text-decoration: none;
			float: left;
			text-align: center;
			line-height: 50px;
		}
		.a1:hover{
			background: #3D6FB5;
			color: white;
		}
		.a2{
			text-decoration: none;

		}
		#p1{  
			text-indent: 300px;
			color: blue;
				
		}
		#input1{    margin-left: 200px;
			     height: 20px;
			     border-radius: 0px;
			     height: 30px;
			     border: 1px blue solid;
			     border-right: none;
		}	
		#input2{   
			
			 border-radius: 0px;	
			    height: 34px;
			line-height: 20px;
			   border: 1px blue solid;
			   border-left: none;
			   background: blue;
			color: white;

		}
		#top1{
			width: 100%;
			min-height: 50px;

		}
		#d_body{width: 1126px;
			min-height: 152px;
			
			margin:0px auto;
			overflow: hidden;
	
		}
		#body_left{width: 191px;
			min-height: 76px;
			overflow: auto;
			
			float: left;

		}
		#job{width: 191px;
			height: 80px;
			background: #6FCBF3;

		}
		#job #job_box{width: 80px;
			height: 60px;
			border-bottom: white 1px solid;
			color: white;
			font-size: 20px;
			text-align: center;
			line-height: 60px;
			margin-left: 20px;

		}
		#job1{width: 191px;
			height: 60px;
			background: #0FA7E8;
			line-height: 60px;
			text-indent: 20px;

		}
		#job1 a{text-decoration: none;
			color: white;

		}
		#talk{width: 191px;
			height: 60px;
			background: #EDEDED;
			line-height: 60px;
			text-indent: 20px;


		}
		#talk a{text-decoration: none;
			color:black;

		}
		#talk:hover{
			background: #0FA7E8;
		

		}
		#talk:hover a{
			color: white;

		}

		#body_right{ width: 846px;
			min-height: 200px;
			overflow: hidden;
			
			float: right;
		}
		#body_right .br_job{width: 846px;
				     height: 50px;
				     border-bottom: dashed #E6E6E6 2px;
				 }
		#body_right .br_job .zhi{display: block;
					width: 846px;
					height: 50px;
					text-decoration: none;
					clear: both;
		}
		#body_right .br_job .zhi .zhi_p1{
						float: left;
						color: black;
		}
		#body_right .br_job .zhi:hover .zhi_p1{
						
						color: blue;
		}
		#body_right .br_job .zhi .zhi_p2{
						float: right;
		}
		#bottom{
			width: 100%;
			min-height: 150px;
			overflow: hidden;
			background: #0FA9EB;
			margin-top: 100px;
			text-align: center;
			padding-top: 50px;
			color: white;
		}
		#bottom a{
			text-decoration: none;
			color: white;
		}
		</style>
		

	</head>
	<body>
		
		<div id="top">
			<div id="h_tu"><img src="./image/2017-04-26 11:44:19屏幕截图.png" alt="" /></div>
			<div  id="h_tuleft">
				
				<p id="p1"><a href="" class="a2">设为首页</a>丨<a href="" class="a2">加入收藏</a></p>
				<input id="input1" type="text" /><input  id="input2" type="submit" value="搜索" />

				
			</div>
		</div>	
		<div id="h_title">
		    <a  class="a1" href="">网站首页</a>
		    <a href="" class="a1">关于诚技</a>
		    <a href="" class="a1">新闻资讯</a>
		    <a href="" class="a1">产品中心</a>
		    <a href="" class="a1">成功案例</a>
		    <a href="" class="a1">人才招聘</a>
		    <a href="" class="a1">联系我们</a>
		</div>   
		<div id="top1"><img src="./image/2017-04-26 18:58:12屏幕截图.png" alt="" /></div>
		<div id="d_body">
			<div id="body_left">
				<div id="job">
					<div id="job_box">人才招聘</div>

				</div>
				<div id="job1"><a href="">>招聘职位</a></div>
				<div id="talk"><a href="">>在线留言</a></div>
			</div>
		
					<div id="body_right">
		<?php 			echo '<div></div>';
					echo '<div class="br_job">
						<a href="" class="zhi">
							<p class="zhi_p1">机械工程师</p>
							<p class="zhi_p2">应聘职位</p>
						</a>
					</div>';
					echo '<div class="br_job">
						<a href="" class="zhi">
							<p class="zhi_p1">机械设计主管</p>
							<p class="zhi_p2">应聘职位</p>
						</a>
					</div>';
					echo '<div class="br_job">
						<a href="" class="zhi">
							<p class="zhi_p1">  电气自动化工程师</p>
							<p class="zhi_p2">应聘职位</p>
						</a>
					</div>';
					echo '<div class="br_job">
						<a href="" class="zhi">
							<p class="zhi_p1"> 电气自动化设计主管</p>
							<p class="zhi_p2">应聘职位</p>
						</a>
					</div>';
					echo '<div class="br_job">
						<a href="" class="zhi">
							<p class="zhi_p1">液压工程师</p>
							<p class="zhi_p2">应聘职位</p>
						</a>
					</div>';
					echo '<div class="br_job">
						<a href="" class="zhi">
							<p class="zhi_p1">液压钳工</p>
							<p class="zhi_p2">应聘职位</p>
						</a>
					</div>';
					echo '<div class="br_job">
						<a href="" class="zhi">
							<p class="zhi_p1">招聘电工</p>
							<p class="zhi_p2">应聘职位</p>
						</a>
					</div>';
					echo '<div class="br_job">
						<a href="" class="zhi">
							<p class="zhi_p1">装配钳工</p>
							<p class="zhi_p2">应聘职位</p>
						</a>
					</div>';

		?>
				</div>

		</div>
		<div id="bottom">
				<a href="">关于诚技</a> | <a href=""> 新闻资讯</a> | <a href="">产品中心 </a>| <a href="">成功案例</a> | <a href=""> 人才招聘</a> | <a href=""> 联系我们</a><br />
				
				<p>Copyright © 大连诚技机电设备有限公司 版权所有 辽ICP备13015234号-2</p>
				<p>网站设计：仟亿科技</p>
		</div>


	</body>
</html>

    