<?php


if($fp = fopen("http://www.myspace.com/antoyau",'r')){

$fed = fread($fp,150000);
$fed2 = $fed;

$content = explode("Displaying",$fed);
$comments = explode("Add Comment",$content[1]);
$cont = eregi_replace("ff9933","ffffff",$comments[0]);
$cont1 = eregi_replace("ff9933","ffffff",$comments[1]);
$conty = eregi_replace("F9D6B4","ffffff",$cont);
$conty1 = eregi_replace("F9D6B4","ffffff",$cont1);
?>
                <table bordercolor="000000" cellspacing="3" cellpadding="0" width="435" align="center"
                    bgcolor="ffffff" border="0">
                
                    <tr>
                        <td>
                            <b>Displaying

<?php

print $conty;
print $conty1;



?>
 Add Comment</a></td>
        </tr>
        </table> </td>
    </tr>
</table>

<?php


}