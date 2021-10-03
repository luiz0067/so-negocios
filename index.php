<?php	
	include('conecta.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <title>So Negocios PR</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
		<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
		<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
		<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			td img {display: block;}
            td.canto{
                    height:100%;
                    width:100%;
                    background-repeat:repeat;
            }
            td.lateral{
                width:100%;
                background-repeat:repeat-x;
            }
            td.topo_rodape{
                width:1234;
                height:100%;
                background-repeat:repeat-y;
                
            }
            body.tudo{
                margin-top:0px;
                margin-right:0px;
                margin-left:0px;
                margin-bottom:0px;
            }
            td.fundo{
                background-repeat:repeat-x;
                width:1234;
            }
        </style>
		
	</head>
    <body bgcolor="#ffffff" class="tudo">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" hspace="0" vspace="0" style="position:absolute;">
          <tr>
           <td class="canto" style="background:#FFFFFF" >&nbsp;</td>
           <td class="topo_rodape" style="background:#FFFFFF" valign="top" align="center">&nbsp;</td>
           <td class="canto" style="background:#FFFFFF">&nbsp;</td>
          </tr>
          
          <tr>
           <td class="lateral" style="background:url(./imagem/index/lateral_1.jpg);height:37px;">&nbsp;</td>
           <td class="fundo" style="background:url(./imagem/index/lateral_1.jpg);height:37px"><?php include("include/topo.php");?></td>
           <td class="lateral" style="background:url(./imagem/index/lateral_1.jpg);height:37px;">&nbsp;</td>
          </tr>
          <tr>
           <td class="lateral" style="background:url(./imagem/index/lateral_2.jpg);height:199px;">&nbsp;</td>
           <td  class="fundo" style="background:url(./imagem/index/lateral_2.jpg);height:199px;" align="center" >
           <div style="height:1px;">&nbsp;</div>
           <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="196" border="0" >
             <param name="movie" value="swf/bANNER sITE.swf" />
             <param name="quality" value="high" />
             <param name="wmode" value="opaque" />
             <param name="swfversion" value="6.0.65.0" />
             <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
             <param name="expressinstall" value="Scripts/expressInstall.swf" />
             <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
             <!--[if !IE]>-->
             <object type="application/x-shockwave-flash" data="swf/bANNER sITE.swf" width="1000" height="196">
               <!--<![endif]-->
               <param name="quality" value="high" />
               <param name="wmode" value="opaque" />
               <param name="swfversion" value="6.0.65.0" />
               <param name="expressinstall" value="Scripts/expressInstall.swf" />
               <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
               <div>
                 <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                 <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
               </div>
               <!--[if !IE]>-->
             </object>
             <!--<![endif]-->
           </object><!--<div style="height:2px;">&nbsp;</div>--></td>
           <td class="lateral" style="background:url(./imagem/index/lateral_2.jpg);height:199px;">&nbsp;</td>
        
          </tr>
          <tr>
           <td class="lateral" style="background:url(./imagem/index/lateral_3.jpg);height:592px;">&nbsp;</td>
           <td class="fundo" style="background:url(./imagem/index/lateral_3.jpg);height:592px;" align="center">
           
           
                <table border="0" cellpadding="0" cellspacing="0" width="1003">
                    <tr>
                        <td valign="top">
                        <img src="imagem/index/cima_menu.jpg" width="164" height="34" />
							<ul id="MenuBar1" class="MenuBarVertical">
                <?php include("include/menu_categoria.php")?>             
                      `		</ul>
                        </td>
                        <td><img name="conteudo" src="url(./imagem/index/conteudo/conteudo.jpg" width="672" height="592" border="0"/></td>
                        <td bgcolor="#E8E8E8" width="164" border="0" valign="top"> <img src="imagem/index/cima_menu.jpg" width="170" height="34" /><?php include("include/anuncios.php")?></td>  
                    </tr>
                </table>
            
            
           </td>
           <td class="lateral" style="background:url(./imagem/index/lateral_3.jpg);height:592px;">&nbsp;</td>
          </tr>
          <tr>
           <td class="lateral" style="background:url(./imagem/index/lateral_4.jpg);height:122px;">&nbsp;</td>
           <td><?php include("include/rodape.php")?>      </td>
           <td class="lateral" style="background:url(./imagem/index/lateral_4.jpg);height:122px;">&nbsp;</td>
          </tr>
          <tr>
           <td class="canto" style="background:#003300;">&nbsp;</td>
           <td class="topo_rodape" style="background:#003300;">&nbsp;</td>
           <td class="canto" style="background:#003300;">&nbsp;</td>
          </tr>
        </table>
        <script type="text/javascript">
        <!--
        swfobject.registerObject("FlashID");
        swfobject.registerObject("FlashID");
        //-->
        </script>
        </body>
</html>
<?php	
	mysql_close($link);
?>
