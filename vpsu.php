<?php echo('<?xml version = "1.0"  encoding = "utf-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Author: Tony Florida; Date: 11 July 2012 -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Swamp View Studios</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject.js"></script>
    <script type="text/javascript">
    <!--
    function GetUnity() {
      if (typeof unityObject != "undefined") {
        return unityObject.getObjectById("unityPlayer");
      }
      return null;
    }
    if (typeof unityObject != "undefined") {
      unityObject.embedUnity("unityPlayer", "WebPlayer.unity3d", 480, 640);
      
    }
    -->
    </script>
    <style type="text/css">
    <!--
    body {
      font-family: Helvetica, Verdana, Arial, sans-serif;
      background-color: black;
      color: white;
      text-align: center;
    }
    a:link, a:visited {
      color: #bfbfbf;
    }
    a:active, a:hover {
      color: #bfbfbf;
    }
    p.header {
      font-size: small;
    }
    p.header span {
      font-weight: bold;
    }
    p.footer {
      font-size: x-small;
    }
    div.content {
      margin: auto;
      width: 480px;
    }
    div.missing {
      margin: auto;
      position: relative;
      top: 50%;
      width: 193px;
    }
    div.missing a {
      height: 63px;
      position: relative;
      top: -31px;
    }
    div.missing img {
      border-width: 0px;
    }
    div#unityPlayer {
      cursor: default;
      height: 640px;
      width: 480px;
    }
    -->
    </style>
</head>
<body>
  <?php include "header.php"; ?>
  
  <p class="header"><span>Unity Web Player | </span>WebPlayer</p>
    <div class="content">
      <div id="unityPlayer">
        <div class="missing">
          <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
            <img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
          </a>
        </div>
      </div>
    </div>
  <p class="footer">&laquo; created with <a href="http://unity3d.com/unity/" title="Go to unity3d.com">Unity</a> &raquo;</p>

  <?php include "footer.php"; ?>
</body>
</html>