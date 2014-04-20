<?php 
require_once 'Treee.php';
class Page{
	public $breadcrumb=array();
	public $treeMain=null;
	public $children=array();
	public function paseUrl(){
		$result="";
		if(array_key_exists("id",$_GET))$result=$_GET["id"];
		return $result;
	}
	// public $foo="";
}
$p=new Page();
$page=$p->paseUrl();
$id=$p->paseUrl();
$p->treeMain=new Treee($id);
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
<a id="top"></a>
<?php 
switch($page):
case"":?>
<div class="jumbotron">
	<div class="container">
		<h1>Treee 行前說明</h1>
		<p>安安你好，這是一個非會員制的自由討論版</p>
		<p>
		  <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">巨大的按鈕</a>
		</p>
	</div>
</div> <!-- /container -->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>您最近瀏覽</h2>
			<ul class="media-list childrenList">
			  <a id="childPrefab" href="#" class="list-group-item media level0 child leaf">
				<div class="pull-left" href="#">
				  <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC" alt="...">
				</div>
				<span class="badge">14</span>
				<article class="media-body">
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
		<div class="col-md-6">
			<h2>今日熱門</h2>
			<ul class="media-list childrenList">
			  <a id="childPrefab" href="#" class="list-group-item media level0 child leaf">
				<div class="pull-left" href="#">
				  <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC" alt="...">
				</div>
				<span class="badge">14</span>
				<article class="media-body">
					Cras justo odio<br>
					savabab<br>
					savabab<br>
					savabab<br>
				</article>
			  </a>
			</ul>
		</div>
	</div>
	<a href="#top" type="button" class="btn btn-primary btn-lg btn-block">回到最上</a>
	<hr />
	<div class="row">
		<div class="col-md-4">
			<h2>背景故事概念</h2>
			<ul>
				<li>在這裡，發佈新的文章叫做「種樹」
				<li>「樹」可以種在任意一棵樹、或枝芽上，成為他的「枝芽」
				<li>若一棵樹擁有越多枝芽，就會越強壯越不易凋零
				<li>相反的，枝芽稀疏的樹，會逐漸的枯萎
			</ul>
		</div>
		<div class="col-md-4">
			<h2>白話文的本站核心特色</h2>
			<h3>非會員制</h3>
			<p>本站所有功能皆不需註冊會員，也不鼓勵使用者記名種樹</p>
			<h3>無階層架構</h3>
			<p>不區分主題、留言、推文等等「階層」；可以對所有留言做回應，也可以對回應的回應做回應</p>
			<h3>壽命這一回事</h3>
			<p>所有的「樹」都有壽命，時間到了自動被系統刪除。也就是越熱門、擁有越多枝芽的「樹」，壽命越長；反之，冷門、洗版、討論價值不高的樹們，會自動被系統拔除</p>
			<h3>發文限制</h3>
			<p>同 ip 一天僅可種限制數量的樹，這是為了避免洗版與希望重視每次的發言。如果你 ip 真的很多想洗版，那就，給你，洗吧。
		</dl>
			<dl class="dl-horizontal">
	   </div>
		<div class="col-md-4">
		  <h2>一些規定</h2>
		  <ol>
			<li>雖然是匿名發言，但請注意並不是絕對隱匿與安全的，發言仍需注意自身安全，以免被人肉</li>
			<li>討論成人話題必須設定為「限制級」，若發現分級錯誤的樹，也請幫助修改。<a href="#">修改辦法</a></li>
		  </ol>
		  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		</div>
	</div>
	
	
	<a href="#top" type="button" class="btn btn-primary btn-lg btn-block">回到最上</a>
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
			  <img class="imgBlock img-responsive" src="http://tantek.com/presentations/2010/06/html5/hands-on/safarimeteretc.png" alt="picture" />
<?php echo $p->treeMain->content;?>
		  </div>
		  <aside class="panel-footer">
			<time>2014-02-22,19:30</time>
				<span class="label label-default good"><span class="glyphicon glyphicon-thumbs-up"></span> 14</span>
				<span class="label label-default bad"><span class="glyphicon glyphicon-thumbs-down"></span> 14</span>
			<span class="label label-default">類別</span>
			</aside>
		</article>
		<div class="" id="form">
			<a data-toggle="collapse" data-parent="#form" href="#collapseOne" class="btn btn-default btn-block">
				尚可種三棵
				<progress value="3" max="5">some word</progress>
			</a>
			<div id="collapseOne" class="panel-collapse collapse">
			  <div class="panel-body">
				   <form class="form-horizontal+ " role="form">
						<div class="form-group">
							<label>發文要附圖：<input type="file" /></label>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-default">(ﾟ∀ﾟ)/</button>
							<button type="button" class="btn btn-default">(・_ゝ・)</button>
							<button type="button" class="btn btn-default">(´_ゝ`)</button>
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="工威阿" ></textarea>
						</div>
						<div class="form-group ">
							<button class="btn btn-primary">好！ <span class="glyphicon glyphicon-thumbs-up"></button>
							<button class="btn btn-default">爛… <span class="glyphicon glyphicon-thumbs-down"></span></button>
							<label>成人內容：<input type="checkbox" /></label>
							<a href="#" ><span class="glyphicon glyphicon-question-sign"></span></a>
							<div style="display:none">
								<hr>
								<button type="button" class="btn btn-warning">修改分級</button>
								<button type="button" class="btn btn-warning">稼接</button>
								<button type="button" class="btn btn-danger">檢舉</button>
							</div>
						</div>
					</form>
			  </div>
			</div>
		</div>
    </div>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="label label-default good">好！ <span class="glyphicon glyphicon-thumbs-up"></span></h4>
				<ul class="media-list childrenList">
				  <a id="childPrefab" href="#" class="list-group-item media level0 child leaf">
					<div class="pull-left" href="#">
					  <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC" alt="...">
					</div>
					<aside class="pull-right">
						<span class="label label-default"><span class="glyphicon glyphicon-thumbs-up"></span> 14</span>
						<span class="label label-default"><span class="glyphicon glyphicon-thumbs-down"></span> 14</span>
						<span class="label label-default">類別</span>
					</aside>
					<article class="media-body">
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
			<div class="col-md-6">
				<h4 class="label label-default bad">爛… <span class="glyphicon glyphicon-thumbs-down"></span></h4>
				<ul class="media-list childrenList">
				  <a id="childPrefab" href="#" class="list-group-item media level0 child leaf">
					<div class="pull-left" href="#">
					  <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC" alt="...">
					</div>
					<aside class="pull-right">
						<span class="label label-info">14</span>
						<span class="label label-default">類別</span>
					</aside>
					<article class="media-body">
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
		</div>
		<hr>
		<ul class="media-list childrenList">
		  <a id="childPrefab" href="#" class="list-group-item media level0 child leaf">
			<div class="pull-left" href="#">
			  <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC" alt="...">
			</div>
			<aside class="pull-right">
				<span class="label label-good"><span class="glyphicon glyphicon-thumbs-up"></span> 14</span>
				<span class="label label-bad"><span class="glyphicon glyphicon-thumbs-down"></span> 14</span>
				<span class="label label-default">類別</span>
			</aside>
			<article class="media-body">
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
		<a href="#top" type="button" class="btn btn-primary btn-lg btn-block">回到最上</a>
    </div>

<?php endswitch;?>



    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="display:none">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?">Tree</a>
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
        <h4 class="modal-title" id="myModalLabel">種！</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" role="form">		 
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">回應</label>
			<div class="col-sm-10">
				<div class="btn-group ">
				  <button type="button" class="btn btn-danger">修改分級</button>
				  <button type="button" class="btn btn-warning">稼接</button>
				</div>
				<br>
				<div class="btn-group ">
				  <button type="button" class="btn btn-default">(ﾟ∀ﾟ)/</button>
				  <button type="button" class="btn btn-default">(・_ゝ・)</button>
				  <button type="button" class="btn btn-default">(´_ゝ`)</button>
				  <button type="button" class="btn btn-default">Good !</button>
				  <button type="button" class="btn btn-default">Suck</button>
				  <button type="button" class="btn btn-default">Fuck</button>
				</div>
				<br>
			  <textarea class="form-control" placeholder="哩麥種啥" ></textarea>
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