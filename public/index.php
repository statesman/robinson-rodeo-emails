<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <?php
      $meta = array(
        'title' => "Breaking down the state auditor’s 21CT report",
        'description' => 'Read key excerpts from the report released by the State Auditor’s Office into the 21CT contracting scandal.',
        'thumbnail' => 'http://projects.statesman.com/news/21ct-auditors-report/assets/share.jpg',
        'url' => 'http://projects.statesman.com/news/21ct-auditors-report/',
        'twitter' => 'statesman'
      );
    ?>

    <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
    <link rel="icon" type="image/png" href="//projects.statesman.com/common/favicon.ico">

    <link rel="canonical" href="<?php print $meta['url']; ?>" />

    <meta name="description" content="<?php print $meta['description']; ?>">

    <meta property="og:title" content="<?php print $meta['title']; ?>"/>
    <meta property="og:description" content="<?php print $meta['description']; ?>"/>
    <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
    <meta property="og:url" content="<?php print $meta['url']; ?>"/>

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
    <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
    <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
    <meta name="twitter:creator:id" content="15464292" />
    <meta name="twitter:creator:id" content="16235644" />
    <meta name="twitter:image:src" content="<?php print $meta['thumbnail']; ?>" />
    <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

    <link href="dist/style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/advertising.inc";?>
    <?php include "includes/metrics-head.inc";?>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
            <img width="273" height="26" src="assets/logo.png" />
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </nav>

    <article class="container">
      <div class="header">
        <h4>Texas state government</h4>
        <h1><?php print $meta['title']; ?></h1>
        <p class="author">Interactive by Andrew Chavez, J. David McSwane and Andrea Ball, American-Statesman<br />Published April 3, 2015</p>
        <p>A report by State Auditor John Keel confirmed the findings of an American-Statesman investigation into a Medicaid fraud detection contract. The auditor found former Health and Human Services Commission official Jack Stick violated purchasing rules, misled the federal government and misused a state contracting program as he brokered multimillion deals with the company. The key findings from the report are below.</p>
        <p><span>Related:</span> <a target="_blank" href="http://www.mystatesman.com/news/news/state-regional/audit-confirms-statesman-findings-that-21ct-deal-b/nkkty/">Audit confirms Statesman findings that 21CT deal broke rules, misled <i class="fa fa-angle-double-right"></i></a></p>
      </div>

      <hr />

      <ul class="nav nav-pills nav-justified">
        <li role="presentation" class="nav-title">Jump to<br />a conversation:</li>
        <li role="presentation">
          <a href="#williams"><span class="hidden-xs">Irene </span>Williams<span class="hidden-xs"><br><small>21CT</small></span></a>
        </li>
        <li role="presentation">
          <a href="#hebert"><span class="hidden-xs">Fred </span>Hebert<span class="hidden-xs"><br><small>Hewlett-Packard</small></span></a>
        </li>
        <li role="presentation">
          <a href="#bentley"><span class="hidden-xs">David </span>Bentley<span class="hidden-xs"><br><small>Accenture</small></span></a>
        </li>
      </ul>

      <?php
        include_once("includes/emails.inc");
        $json = file_get_contents('data/emails.json');
        $emails = json_decode($json);
      ?>

      <div id="williams">

        <div class="row">
          <div class="col-xs-12">
            <h3 class="date"><i class="fa fa-clock-o"></i> Aug. 8, 2013</h3>

            <h4 class="note text-center"><i class="fa fa-envelope"></i> <span>Irene Williams</span> e-mails <span>Karen Robinson</span> after a meeting at 21CT</h4>
          </div>
          <?php echo email('080813.jpg', $emails, 'right'); ?>
          <?php echo speaker('williams', 'right', true); ?>
        </div>

        <div class="row">
          <?php echo note('Robinson', 'Williams'); ?>
          <?php echo email('080813-kr1.jpg', $emails); ?>
          <?php echo speaker('robinson', 'left', true); ?>
        </div>

        <div class="row">
          <?php echo note('Williams', 'Robinson'); ?>
          <?php echo email('080813-iw2.jpg', $emails, 'right'); ?>
          <?php echo speaker('williams', 'right'); ?>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <h3 class="date"><i class="fa fa-clock-o"></i> Oct. 8, 2013</h3>
          </div>

          <?php echo note('Robinson', 'Williams'); ?>
          <?php echo email('100813-kr1.jpg', $emails); ?>
          <?php echo speaker('robinson'); ?>
        </div>

        <div class="row">
          <?php echo note('Williams', 'Robinson'); ?>
          <?php echo email('100813-iw1.jpg', $emails, 'right'); ?>
          <?php echo speaker('williams', 'right'); ?>
        </div>

      </div>

      <hr />

      <div id="hebert">

        <div class="row">
          <div class="col-xs-12">
            <h3 class="date"><i class="fa fa-clock-o"></i> Nov. 15, 2013</h3>

            <h4 class="note text-center"><i class="fa fa-envelope"></i> <span>Fred Hebert</span> e-mails <span>Robinson</span> after </h4>
          </div>
          <?php echo email('111513-hebert1.jpg', $emails, 'right'); ?>
          <?php echo speaker('hebert', 'right', true); ?>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <h3 class="date"><i class="fa fa-clock-o"></i> Nov. 26, 2013</h3>
          </div>

          <?php echo note('Robinson', 'Hebert'); ?>
          <?php echo email('112613robinson1.jpg', $emails); ?>
          <?php echo speaker('robinson', 'left', true); ?>
        </div>

        <div class="row">
          <?php echo note('Hebert', 'Robinson'); ?>
          <?php echo email('112613hebert1.jpg', $emails, 'right'); ?>
          <?php echo speaker('hebert', 'right'); ?>
        </div>

      </div>

      <hr />

      <div id="bentley">

        <div class="row">
          <div class="col-xs-12">
            <h3 class="date"><i class="fa fa-clock-o"></i> Oct. 16, 2014</h3>

            <h4 class="note text-center"><i class="fa fa-envelope"></i> <span>David Bentley</span> e-mails <span>Robinson</span> two days after she announces her retirement</h4>
          </div>
          <?php echo email('101614-bentley1.jpg', $emails, 'right'); ?>
          <?php echo speaker('bentley', 'right', true); ?>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <h3 class="date"><i class="fa fa-clock-o"></i> Oct. 20, 2014</h3>
          </div>

          <?php echo note('Robinson', 'Bentley'); ?>
          <?php echo email('102014-robinson.jpg', $emails); ?>
          <?php echo speaker('robinson', 'left', true); ?>
        </div>

        <div class="row">
          <?php echo note('Bentley', 'Robinson'); ?>
          <?php echo email('102014-bentley2.jpg', $emails, 'right'); ?>
          <?php echo speaker('bentley', 'right'); ?>
        </div>

      </div>
    </article>

    <div class="clearfix" id="ads">
      <div class="visible-xs hidden-sm hidden-md hidden-lg col-xs-12">
        <div id="div-gpt-ad-1403295829614-3" class="center-block" style="width:320px; height:50px;">
          <script type="text/javascript">
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1403295829614-3'); });
          </script>
        </div>
      </div>
      <div class="hidden-xs visible-sm visible-md visible-lg col-xs-12">
        <div id="div-gpt-ad-1403295829614-1" class="center-block" style="width:728px; height:90px;">
          <script type="text/javascript">
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1403295829614-1'); });
          </script>
        </div>
      </div>
    </div>

    <p id="legal" class="center-block text-center"><small>© <?php print date("Y"); ?> <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
      <script src="//localhost:35729/livereload.js"></script>
    <?php endif; ?>
  </body>
</html>
