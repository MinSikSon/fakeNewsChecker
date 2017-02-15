<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>하이염</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:81/style.css?ver=3">
</head>
<body id="target">
	<header>
		<h1><a href="http://localhost:81/index.php?id=1">JavaScript</a></h1>
		<img src="http://nv1.tveta.naver.net/libs/1148/1148835/20170223152550-MwFWrl7G.jpg" alt="test">
	</header>
	<!--<h2>JavaS</h2>-->
	<!--JavaScript-->
	<nav>
		<ol>
			<?php
				echo file_get_contents("list.txt");
			?>
		</ol>
	</nav>
	<div id="control">
		<!-- <input type="button" value="블랙1" id="black_btn" />
		<input type="button" value="화이트1" id="white_btn" /> -->
		<input type="button" value="black" id="black" onclick="document.getElementById('target').className='black'" />
		<input type="button" value="white" id="white" onclick="document.getElementById('target').className='white'" />
	</div>
	<article>
		<?php
		if(empty($_GET['id']) == false){
			echo file_get_contents($_GET['id'].".txt");
		}else{
			echo 'empty';
		}
		?>
		<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//saengkowebaebmandeulgisueob-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
	</article>
	<script src="http://localhost:81/script.js?ver=2"></script>
	</script>


	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58ab186b66272e0ab0353918/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
