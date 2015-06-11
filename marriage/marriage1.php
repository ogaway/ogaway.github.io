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

<form action='marriage2.php' method='post'>
<pre><code><?php
  $malenum = $_REQUEST['malenum'];
  $femalenum = $_REQUEST['femalenum'];
  print "男性の人数は".$malenum."人です。<br />";
  print "女性の人数は".$femalenum."人です。<br /><br />";
  print "順位付けをしてください。左から順番に第１希望としてください。<br />";
  print "なお、どうしても付き合いたく人がいる場合は残りの欄に0を記入して送信してください。<br />";
  for($i=1;$i<=$malenum;$i++){
    print "男性No.".$i.":";
    for($j=1;$j<=$femalenum;$j++){
      print "<input type='text' name='male".$i.$j."'>";
    }
    print "<br />";
  }
  print "<br />";
  for($i=1;$i<=$femalenum;$i++){
    print "女性No.".$i.":";
    for($j=1;$j<=$malenum;$j++){
      print "<input type='text' name='female".$i.$j."'>";
    }
    print "<br />";
  }
  print "<input type='hidden' name='malenum' value='".$malenum."'>";
  print "<input type='hidden' name='femalenum' value='".$femalenum."'>";
  ?>
  <input type='submit'>
</code></pre>
</form>

  </body>
</html>
