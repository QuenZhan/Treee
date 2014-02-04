<?php 
$page=paseUrl();
function paseUrl(){
	$result="";
	if(array_key_exists("id",$_GET))$result=$_GET["id"];
	return $result;
}
?>
<!DOCTYPE html>
<html lang='zh-TW' class="han-la">
<head>
	<title>Treee</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" media="all" href="//cdnjs.cloudflare.com/ajax/libs/Han/2.2.3/han.css">
	<link href='layout.css' rel='stylesheet'/>
	<meta name="description" content="TNRTH作品集">
	<meta name="keywords" content="HTML5,CSS3,JavaScript,3D,autodesk maya,illustration,unity3d,game sprites,game design">
	<meta name="author" content="TRNTH">
	<meta property="og:url" content="" />
	<meta property="og:title" content="Jimbow 作品集" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="/data/cg/CG_ep1_0.jpg" />
	<meta property="og:description" content="個人作品集" />
	<meta property="og:site_name" content="PHOTOx1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head><body>
<!-- 國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國 -->
<!-- 國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國 -->
<!-- 國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國 -->

<?php 
switch($page):
case"":?>
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->
<?php
	break;
default:
?>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">Root</a> <span class="label label-info">4</span></li>
		  <li><a href="#">哈拉</a> <span class="badge">4</span></li>
		  <li><a href="#">機ㄅ</a> <span class="badge">4</span></li>
		  <li><a href="#">我覺得ㄊㄊ很機掰</a> <span class="badge">4</span></li>
		</ol>
    </div>
	<div class="container">
		<article class="panel panel-default">
		  <div class="panel-body">
			<div class="media">
			  <a class="pull-left" href="#">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAACgUlEQVR4nO3YsW7iWhRA0fn/T3FB4yKFizRINBQUtCncUPILfpV5UUJGs0fJTMysYknAjXwi7s4F58f1el3gV/34278A2yIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDMlDBPP8/LwMw3B3bbfbvVvb7/fLMAzLMAzLfr//9vO+k00HM8/zMk3TbTPerh+Px3dr6+adz+flfD6nTfzT876jTQczDMPy9PR0dwMvl8syjuO7tfW119cYx3GZ5/l2vXVtvfY8z58+72+/d/9kMNM03Tbh3sfA+hf9dsM+er6eEKfT6fb4eDx+2bwt2nQwH23CPM+3k6Ju4DiOy263W3a73YcnwWfO25qHDGaapuXl5eW3NvB0Ot1eOxwOXz5vax4ymPX5W9fr/99LXv/s65NkPVnWU+ZyuXzpvK15yGB+tnY4HD68a3m9tp409+5oPmveFv1zwVyv9/8v8rO7pPXj5jPnbdVDBMOfIxgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkPwHMlRHGXwWLnIAAAAASUVORK5CYII=" alt="picture" />
			  </a>
			  <div class="media-body">
			Basic panel example<br />
			  屁啦你才最機掰好嗎<br />
				Note: Siblings have at least one parent in common. Those<br />
				   related only by a common mother are {uterine siblings};<br />
				   those related only by a common father are {agnate<br />
				   siblings} or {consanguine siblings} (a legal term). A<br />
				   sibling having both parents in common is a<br />
				   {sibling-german} or a {full brother} or {full sister}.<br />
				   These modifying terms are more commonly used for the<br />
				   more specific {uterine brother}, {uterine sister},<br />
				   {agnate brother}, {brother-german}, etc.<br />
				   [PJC]<br />
			  </div>
			</div>
		  </div>
		  <div class="panel-footer">
			<button class="btn btn-primary btn-default" data-toggle="modal" data-target="#myModal">新文</button>
			<time>2014-02-22,19:30</time>
			<div id="example "class="popover top">
				<div class="arrow"></div>
				<h3 class="popover-title">Popover top</h3>
				<div class="popover-content">
				  <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				</div>
			  </div>
		  </div>
		</article>
    </div>
	<div class="container">
		
    </div>
	<div class="container">
		<ul class="media-list">
		  <li class="media">
			<a class="pull-left" href="#">
			  <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC" alt="...">
			</a>
			<div class="media-body">
				我覺得薩爾最機掰
			</div>
		  </li>
		</ul>
	</div>
	<div class="container">
		<ul class="media-list">
		  <a href="#" class="list-group-item">
			<span class="badge">14</span>
			<article>
				Cras justo odio<br>
				savabab<br>
				savabab<br>
				savabab<br>
			</article>
		  </a>
		  <a href="#" class="list-group-item level1">
			<span class="badge">4</span>
				Dapibus ac facilisis in
			</a>
		  <a href="#" class="list-group-item level1"><span class="badge">4</span>Morbi leo risus</a>
		  <a href="#" class="list-group-item level2"><span class="badge">4</span>Porta ac consectetur ac</a>
		  <a href="#" class="list-group-item"><span class="badge">4</span>Vestibulum at eros</a>
		</ul>
    </div>
	<div class="container">
		<a href="#parent" type="button" class="btn btn-primary btn-lg btn-block">回到最上</a>
    </div>

<?php endswitch;?>



    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tree</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">新增回應</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" role="form">		 
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">回應</label>
			<div class="col-sm-10">
				<div class="btn-group ">
				  <button type="button" class="btn btn-default">(ﾟ∀ﾟ)/</button>
				  <button type="button" class="btn btn-default">(・_ゝ・)</button>
				  <button type="button" class="btn btn-default">(´_ゝ`)</button>
				  <button type="button" class="btn btn-default">Good !</button>
				  <button type="button" class="btn btn-default">Suck</button>
				  <button type="button" class="btn btn-default">Fuck</button>
				  <button type="button" class="btn btn-primary">編輯</button>
				</div>
			  <textarea class="form-control" ></textarea>
			</div>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- 國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國 -->
<!-- 國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國 -->
<!-- 國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國國 -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Han/2.2.3/js/han.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
	
</script>
</body></html>