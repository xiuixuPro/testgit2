<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>Test</title>
<style>
  a {
  color:black;
  text-decoration: none;
  }
  #tanchu {  
  visibility: hidden;  
  position: absolute;  
  top: 25%;  
  left: 25%;  
  width: 50%;  
  height: 50%;  
  padding: 16px;  
  border: 10px solid #3071A9;  
  z-index:2;  
  overflow: auto;
  filter: alpha(opacity=70);
  -moz-opacity: 0.7;
  opacity: 0.7;
  }
  </style>
</head>
<body>
<a href="javascript:void(1)" onclick="document.getElementById('tanchu').style.visibility='hidden'">[隐藏]</a>
<a href="javascript:void(2)" onclick="document.getElementById('tanchu').style.visibility='visible'">
    [显示]</a></div>
<div id="tanchu">
这里是弹出层上的文字
</div>
</body>
</html></td>
	  </tr>
	</table>