<?php
// phpcs:ignoreFile
// jscpd:ignore-start


/* 
EvoGB written by neiller at evobb dot com (neiller@evobb.com)

Also available EvoBB and EvoNews co-producer with Xavic and fod 
available for download @ http://www.evobb.com...

Note: you can edit below this but its not advised unless asked to do so
No nead to delete install.php after an install // // codespell:ignore nead

Make sure to edit the connect.php before you start installing your EvoGB :)

NB : once logged in change your password :)

If you wish to make contributions / changes to the Evolution Products
do so and send what you have done with explanations to webmaster@evobb.com
*/




/** @psalm-suppress InvalidGlobal */ global $stream, $declared_class_db;

if (!$stream && $declared_class_db!="yes"){



class db {



    /** @psalm-suppress MissingReturnType */ function graberrordesc() {

      /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedThisPropertyAssignment, UndefinedFunction */ $this->error=mysql_error();

      return $this->error;

    }



    /** @psalm-suppress MissingReturnType */ function graberrornum() {

      /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedThisPropertyAssignment, UndefinedFunction */ $this->errornum=mysql_errno();

      return $this->errornum;

    }





    /** @psalm-suppress MissingReturnType */ function connect(){



    /** @psalm-suppress InvalidGlobal */ global $fcwhost, $fcwusername, $fcwpassword2, $fcwdb_name;



           /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedThisPropertyAssignment, UndefinedFunction */ $this->db = @mysql_connect($fcwhost,$fcwusername,$fcwpassword2);

           /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ @mysql_select_db($fcwdb_name, $this->db);



    }



    /** @psalm-suppress MissingReturnType, MissingParamType */ function do_query($query, $ret) {



      /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedThisPropertyAssignment, UndefinedFunction, UndefinedThisPropertyFetch */ $this->result = @mysql_query($query, $this->db);



      if (!$this->result || !$ret) {

      /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ echo "<script language=javascript>\n<!--\nalert(\"There was an error in the sql statement.\\nmysql said: ".ereg_replace('"', "&quot;", $this->graberrordesc())."\");\n//-->\n</script>";

      return "bad";

      } else {



                if ($ret=="array"){



                /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedThisPropertyAssignment */ $this->return = array();

                /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction */ while ($row = @mysql_fetch_row($this->result)){

                /** @psalm-suppress UndefinedThisPropertyAssignment */ $this->return[] = $row;

                }



                } elseif ($ret=="one"){



                /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedThisPropertyAssignment, UndefinedFunction */ $this->return = @mysql_result($this->result,0,0);



                } elseif ($ret=="row"){



                /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedThisPropertyAssignment, UndefinedFunction */ $this->return = @mysql_fetch_row($this->result);



                } else {



                /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedThisPropertyAssignment */ $this->return = "bad";



                }



        return $this->return;



      }



    }


    /** @psalm-suppress MissingReturnType */ function close(){
           /* @phpstan-ignore-line */ /** @psalm-suppress UndefinedFunction, UndefinedThisPropertyFetch */ @mysql_close($this->db);
    }



}



$declared_class_db = "yes";



}
// jscpd:ignore-end
