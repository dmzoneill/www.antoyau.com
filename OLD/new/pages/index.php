<?php

include("header.php"); 

?>

<table width="900" bgcolor='#000000'  border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td><table width="900" bgcolor='#ffffff'  border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width='180' valign=top></td>
          <td width='720' valign=top><?php include("topright.php"); ?></td>
        </tr>
        <tr>
          <td width='180' valign=top><?php include("menu.php"); ?>
          </td>
          <td width='*' valign=top align=left><table width="100%" border="0" cellspacing="15">
              <tr>
                <td width='*' valign=top><b>
                  <?php $z=3; include("pages.php"); ?>
                  </b>
                  <table width="100%" bgcolor='#000000' border="0" cellspacing="0" cellpadding="1">
                    <tr>
                      <td width='100%' valign=top><table width="100%" bgcolor='#ffffff' border="0" cellspacing="0" cellpadding="10">
                          <tr>
                            <td width='100%' valign=top><?php $z=2; include("pages.php"); ?>
                            </td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
				  <td width='250'><div align=center>
				  <?php
				  if(!$pagename){
				  	$pagename = "Welcome";
				  }
				
				$tt = ucwords($pagename);
				
				$ttt = substr($tt,0,1);
				$ttt2 = substr($tt,1,strlen($pagename));
				
				print "<font class='pagetitlelarge'>$ttt</font>"; 
				print "<font class='pagetitlesmall'>$ttt2</font>"; 
				
				
				
				?></div>
				  </td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0"	cellpadding="15">
              <tr>
                <td width='100%' valign=top>
								<font color='FF6600'><b>Related Links >>>>
                  <?php $z=0; include("pages.php"); ?>
                  </b></font>
                  <table width="100%" bgcolor='#000000'  border="0" cellspacing="0" cellpadding="1">
                    <tr>
                      <td width='100%' valign=top>
					  <table width="100%" bgcolor='#ffffff'  border="0" cellspacing="0" cellpadding="10">
                          <tr>
                            <td width='100%' valign=top><table  width="100%"  border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td valign=top><?php $z=1; include("pages.php"); ?></td>
                                </tr>
                                <tr>
                                  <td align=right valign=bottom>
								  <?php include("listform.php"); ?></td>
                                </tr>
                              </table></td>
                          </tr>
                        </table>
                        <table width="100%" bgcolor='#ffffff' border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width='100%' valign=top></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                  <div align=center> 
				  <a href='javascript:history.back(-1)'><b>&larr; Back</b></a> | 
				  <a href='index.php'><b>Homepage</b></a> | 
				  <a href='javascript:history.forward()'><b>Forward &rarr;</b></a> 
				  </div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php include("footer.php"); ?>
