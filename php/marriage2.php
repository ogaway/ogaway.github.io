<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="description" content="Yoshimasaogawa.GitHub.io : ">

    <link rel="stylesheet" type="text/css" media="screen" href="../stylesheets/stylesheet.css">

    <title>Y.Ogawa</title>
  </head>

  <body>

    <!-- HEADER -->
    <div id="header_wrap" class="outer">
        <header class="inner">
          <a id="forkme_banner" href="https://github.com/yoshimasaogawa">View on GitHub</a>

          <h1 id="project_title">Y.Ogawa</h1>
          <h2 id="project_tagline"></h2>

        </header>
    </div>

    <!-- MAIN CONTENT -->
    <div id="main_content_wrap" class="outer">
      <section id="main_content" class="inner">
        <h3>
<a id="welcome-to-github-pages" class="anchor" href="#welcome-to-github-pages" aria-hidden="true"><span class="octicon octicon-link"></span></a>安定結婚問題</h3>

<pre><code><?php
  $malenum = $_REQUEST['malenum'];
  $femalenum = $_REQUEST['femalenum'];
  print "男性の人数は".$malenum."人です。<br />";
  print "女性の人数は".$femalenum."人です。<br /><br />";
  $fullPath = 'python call_from_php.py';
  $fullPath = $fullPath." ".$malenum." ".$femalenum;
  $mprefer = array();
  $fprefer = array();

  for($i=1;$i<=$malenum;$i++){
    $pre = array();
    print "男性No.".$i."は、<br />";
    for($j=1;$j<=$femalenum;$j++){
      $malepre = $_REQUEST['male'.$i.$j];
      $pre += array($j=>$malepre);
      $fullPath = $fullPath." ".$malepre;
      print "第".$j."希望に";
      print "女性No.".$malepre."<br />";
    }
    $mprefer += array($i=>$pre);
    print "を指名しました。<br />";
  }
  for($i=1;$i<=$femalenum;$i++){
    $pre = array();
    print "女性No.".$i."は、<br />";
    for($j=1;$j<=$malenum;$j++){
      $femalepre = $_REQUEST['female'.$i.$j];
      $pre += array($j=>$femalepre);
      $fullPath = $fullPath." ".$femalepre;
      print "第".$j."希望に";
      print "男性No.".$malepre."<br />";
    }
    $fprefer += array($i=>$pre);
    print "を指名しました。<br />";
  }

  print "<br />その結果、<br />";
  exec($fullPath, $outpara);
  for($k=0;$k<=$malenum+$femalenum-1;$k++){
    print($outpara[$k]."<br />");
  }
  ?>
</code></pre>

<p>
  <a href="../index.php">トップに戻る</a>
</p>

  </body>
</html>
