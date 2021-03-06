<?php
/*
 *  Copyright (C) 2017, 2018 Laksamadi Guko.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();
?>
<?php
error_reporting(0);
require('./lib/api.php');
include('./config.php');

if(!isset($_SESSION['usermikhmon'])){
	header("Location:login.php");
}

$API = new RouterosAPI();
$API->debug = false;

?>
<?php
  // Cek OTA Update
  if(isset($_POST['btnupdate'])){
   copy("http://laksa.mooo.com/ota-update/app/build.txt","build.txt");
   copy("http://laksa.mooo.com/ota-update/app/otaupdate.dat","otaupdate.php");
   echo "<script>location.href='otaupdate.php';</script>";
  }
  

?>
<?php

	if(isset($_POST['setup'])){
	  $setupdata = ($_POST['setupdata']);
		$siphost = ($_POST['ipmik']);
		$suserhost = ($_POST['usermik']);
		$spasswdhost = ($_POST['passmik']);
		$suseradm = ($_POST['useradm']);
		$spassadm = ($_POST['passadm']);
		$sprofile1 = ($_POST['prof1']);
		$sprofile2 = ($_POST['prof2']);
		$sprofile3 = ($_POST['prof3']);
		$sprofile4 = ($_POST['prof4']);
		$sprofile5 = ($_POST['prof5']);
		$sprofile6 = ($_POST['prof6']);
		$sprofile7 = ($_POST['prof7']);
		$sprofile8 = ($_POST['prof8']);
		$sprofile9 = ($_POST['prof9']);
		$sprofile10 = ($_POST['prof10']);
		$sprofile11 = ($_POST['prof11']);
		$sprofile12 = ($_POST['prof12']);
		$sprofile13 = ($_POST['prof13']);
		$sprofile14 = ($_POST['prof14']);
		$sprofile15 = ($_POST['prof15']);
		$sheaderv = ($_POST['namahotspot']);
		$snotev = ($_POST['notev']);
		$sreloadindex = ($_POST['reloadindex']);
		$h="Jam";
		$d="Hari";
// Title Masa Aktif
		$active1 = ($_POST['active1']);
			if (substr($active1, -1) == "h"){
				$uactiv = substr($active1, 0,-1);
				$suactive1t = $uactiv ."". $h;
			}elseif (substr($active1, -1) == "d"){
				$uactiv = substr($active1, 0,-1);
				$suactive1t = $uactiv ."". $d;
			}
		$active2 = ($_POST['active2']);
			if (substr($active2, -1) == "h"){
				$uactiv = substr($active2, 0,-1);
				$suactive2t = $uactiv ."". $h;
			}elseif (substr($active2, -1) == "d"){
				$uactiv = substr($active2, 0,-1);
				$suactive2t = $uactiv ."". $d;
			}
		$active3 = ($_POST['active3']);
			if (substr($active3, -1) == "h"){
				$uactiv = substr($active3, 0,-1);
				$suactive3t = $uactiv ."". $h;
			}elseif (substr($active3, -1) == "d"){
				$uactiv = substr($active3, 0,-1);
				$suactive3t = $uactiv ."". $d;
			}
		$active4 = ($_POST['active4']);
			if (substr($active4, -1) == "h"){
				$uactiv = substr($active4, 0,-1);
				$suactive4t = $uactiv ."". $h;
			}elseif (substr($active4, -1) == "d"){
				$uactiv = substr($active4, 0,-1);
				$suactive4t = $uactiv ."". $d;
			}
		$active5 = ($_POST['active5']);
			if (substr($active5, -1) == "h"){
				$uactiv = substr($active5, 0,-1);
				$suactive5t = $uactiv ."". $h;
			}elseif (substr($active5, -1) == "d"){
				$uactiv = substr($active5, 0,-1);
				$suactive5t = $uactiv ."". $d;
			}
		$active6 = ($_POST['active6']);
			if (substr($active6, -1) == "h"){
				$uactiv = substr($active6, 0,-1);
				$suactive6t = $uactiv ."". $h;
			}elseif (substr($active6, -1) == "d"){
				$uactiv = substr($active6, 0,-1);
				$suactive6t = $uactiv ."". $d;
			}
		$active7 = ($_POST['active7']);
			if (substr($active7, -1) == "h"){
				$uactiv = substr($active7, 0,-1);
				$suactive7t = $uactiv ."". $h;
			}elseif (substr($active7, -1) == "d"){
				$uactiv = substr($active7, 0,-1);
				$suactive7t = $uactiv ."". $d;
			}
		$active8 = ($_POST['active8']);
			if (substr($active8, -1) == "h"){
				$uactiv = substr($active8, 0,-1);
				$suactive8t = $uactiv ."". $h;
			}elseif (substr($active8, -1) == "d"){
				$uactiv = substr($active8, 0,-1);
				$suactive8t = $uactiv ."". $d;
			}
		$active9 = ($_POST['active9']);
			if (substr($active9, -1) == "h"){
				$uactiv = substr($active9, 0,-1);
				$suactive9t = $uactiv ."". $h;
			}elseif (substr($active9, -1) == "d"){
				$uactiv = substr($active9, 0,-1);
				$suactive9t = $uactiv ."". $d;
			}
		$active10 = ($_POST['active10']);
			if (substr($active10, -1) == "h"){
				$uactiv = substr($active10, 0,-1);
				$suactive10t = $uactiv ."". $h;
			}elseif (substr($active10, -1) == "d"){
				$uactiv = substr($active10, 0,-1);
				$suactive10t = $uactiv ."". $d;
			}
		$active11 = ($_POST['active11']);
			if (substr($active11, -1) == "h"){
				$uactiv = substr($active11, 0,-1);
				$suactive11t = $uactiv ."". $h;
			}elseif (substr($active11, -1) == "d"){
				$uactiv = substr($active11, 0,-1);
				$suactive11t = $uactiv ."". $d;
			}
		$active12 = ($_POST['active12']);
			if (substr($active12, -1) == "h"){
				$uactiv = substr($active12, 0,-1);
				$suactive12t = $uactiv ."". $h;
			}elseif (substr($active12, -1) == "d"){
				$uactiv = substr($active12, 0,-1);
				$suactive12t = $uactiv ."". $d;
			}
		$active13 = ($_POST['active13']);
			if (substr($active13, -1) == "h"){
				$uactiv = substr($active13, 0,-1);
				$suactive13t = $uactiv ."". $h;
			}elseif (substr($active13, -1) == "d"){
				$uactiv = substr($active13, 0,-1);
				$suactive13t = $uactiv ."". $d;
			}
		$active14 = ($_POST['active14']);
			if (substr($active14, -1) == "h"){
				$uactiv = substr($active14, 0,-1);
				$suactive14t = $uactiv ."". $h;
			}elseif (substr($active14, -1) == "d"){
				$uactiv = substr($active14, 0,-1);
				$suactive14t = $uactiv ."". $d;
			}
		$active15 = ($_POST['active15']);
			if (substr($active15, -1) == "h"){
				$uactiv = substr($active15, 0,-1);
				$suactive15t = $uactiv ."". $h;
			}elseif (substr($active15, -1) == "d"){
				$uactiv = substr($active15, 0,-1);
				$suactive15t = $uactiv ."". $d;
			}
// Title Durasi
		$tlimit1 = ($_POST['durasi1']);
			if (substr($tlimit1, -1) == "h"){
				$timel = substr($tlimit1, 0,-1);
				$stimelimit1t = $timel ."". $h;
			}elseif (substr($tlimit1, -1) == "d"){
				$timel = substr($tlimit1, 0,-1);
				$stimelimit1t = $timel ."". $d;
			}
		$tlimit2 = ($_POST['durasi2']);
			if (substr($tlimit2, -1) == "h"){
				$timel = substr($tlimit2, 0,-1);
				$stimelimit2t = $timel ."". $h;
			}elseif (substr($tlimit2, -1) == "d"){
				$timel = substr($tlimit2, 0,-1);
				$stimelimit2t = $timel ."". $d;
			}
		$tlimit3 = ($_POST['durasi3']);
			if (substr($tlimit3, -1) == "h"){
				$timel = substr($tlimit3, 0,-1);
				$stimelimit3t = $timel ."". $h;
			}elseif (substr($tlimit3, -1) == "d"){
				$timel = substr($tlimit3, 0,-1);
				$stimelimit3t = $timel ."". $d;
			}
		$tlimit4 = ($_POST['durasi4']);
			if (substr($tlimit4, -1) == "h"){
				$timel = substr($tlimit4, 0,-1);
				$stimelimit4t = $timel ."". $h;
			}elseif (substr($tlimit4, -1) == "d"){
				$timel = substr($tlimit4, 0,-1);
				$stimelimit4t = $timel ."". $d;
			}
		$tlimit5 = ($_POST['durasi5']);
			if (substr($tlimit5, -1) == "h"){
				$timel = substr($tlimit5, 0,-1);
				$stimelimit5t = $timel ."". $h;
			}elseif (substr($tlimit5, -1) == "d"){
				$timel = substr($tlimit5, 0,-1);
				$stimelimit5t = $timel ."". $d;
			}
		$tlimit6 = ($_POST['durasi6']);
			if (substr($tlimit6, -1) == "h"){
				$timel = substr($tlimit6, 0,-1);
				$stimelimit6t = $timel ."". $h;
			}elseif (substr($tlimit6, -1) == "d"){
				$timel = substr($tlimit6, 0,-1);
				$stimelimit6t = $timel ."". $d;
			}
		$tlimit7 = ($_POST['durasi7']);
			if (substr($tlimit7, -1) == "h"){
				$timel = substr($tlimit7, 0,-1);
				$stimelimit7t = $timel ."". $h;
			}elseif (substr($tlimit7, -1) == "d"){
				$timel = substr($tlimit7, 0,-1);
				$stimelimit7t = $timel ."". $d;
			}
		$tlimit8 = ($_POST['durasi8']);
			if (substr($tlimit8, -1) == "h"){
				$timel = substr($tlimit8, 0,-1);
				$stimelimit8t = $timel ."". $h;
			}elseif (substr($tlimit8, -1) == "d"){
				$timel = substr($tlimit8, 0,-1);
				$stimelimit8t = $timel ."". $d;
			}
		$tlimit9 = ($_POST['durasi9']);
			if (substr($tlimit9, -1) == "h"){
				$timel = substr($tlimit9, 0,-1);
				$stimelimit9t = $timel ."". $h;
			}elseif (substr($tlimit9, -1) == "d"){
				$timel = substr($tlimit9, 0,-1);
				$stimelimit9t = $timel ."". $d;
			}
		$tlimit10 = ($_POST['durasi10']);
			if (substr($tlimit10, -1) == "h"){
				$timel = substr($tlimit10, 0,-1);
				$stimelimit10t = $timel ."". $h;
			}elseif (substr($tlimit10, -1) == "d"){
				$timel = substr($tlimit10, 0,-1);
				$stimelimit10t = $timel ."". $d;
			}
// Kuota
		$MB="000000";
		$GB="000000000";
		$blimit1 = ($_POST['kuota1']);
			if (substr($blimit1, -2) == "MB"){
				$bytel = substr($blimit1, 0,-2);
				$bytelimit1 = $bytel."". $MB;
			}elseif (substr($blimit1, -2) == "GB"){
				$bytel = substr($blimit1, 0,-2);
				$bytelimit1 = $bytel ."". $GB;
			}
		$blimit2 = ($_POST['kuota2']);
			if (substr($blimit2, -2) == "MB"){
				$bytel = substr($blimit2, 0,-2);
				$bytelimit2 = $bytel."". $MB;
			}elseif (substr($blimit2, -2) == "GB"){
				$bytel = substr($blimit2, 0,-2);
				$bytelimit2 = $bytel ."". $GB;
			}
		$blimit3 = ($_POST['kuota3']);
			if (substr($blimit3, -2) == "MB"){
				$bytel = substr($blimit3, 0,-2);
				$bytelimit3 = $bytel."". $MB;
			}elseif (substr($blimit3, -2) == "GB"){
				$bytel = substr($blimit3, 0,-2);
				$bytelimit3 = $bytel ."". $GB;
			}
		$blimit4 = ($_POST['kuota4']);
			if (substr($blimit4, -2) == "MB"){
				$bytel = substr($blimit4, 0,-2);
				$bytelimit4 = $bytel."". $MB;
			}elseif (substr($blimit4, -2) == "GB"){
				$bytel = substr($blimit4, 0,-2);
				$bytelimit4 = $bytel ."". $GB;
			}
		$blimit5 = ($_POST['kuota5']);
			if (substr($blimit5, -2) == "MB"){
				$bytel = substr($blimit5, 0,-2);
				$bytelimit5 = $bytel."". $MB;
			}elseif (substr($blimit5, -2) == "GB"){
				$bytel = substr($blimit5, 0,-2);
				$bytelimit5 = $bytel ."". $GB;
			}
		$blimit6 = ($_POST['kuota6']);
			if (substr($blimit6, -2) == "MB"){
				$bytel = substr($blimit6, 0,-2);
				$bytelimit6 = $bytel."". $MB;
			}elseif (substr($blimit6, -2) == "GB"){
				$bytel = substr($blimit6, 0,-2);
				$bytelimit6 = $bytel ."". $GB;
			}
		$blimit7 = ($_POST['kuota7']);
			if (substr($blimit7, -2) == "MB"){
				$bytel = substr($blimit7, 0,-2);
				$bytelimit7 = $bytel."". $MB;
			}elseif (substr($blimit7, -2) == "GB"){
				$bytel = substr($blimit7, 0,-2);
				$bytelimit7 = $bytel ."". $GB;
			}
		$blimit8 = ($_POST['kuota8']);
			if (substr($blimit8, -2) == "MB"){
				$bytel = substr($blimit8, 0,-2);
				$bytelimit8 = $bytel."". $MB;
			}elseif (substr($blimit8, -2) == "GB"){
				$bytel = substr($blimit8, 0,-2);
				$bytelimit8 = $bytel ."". $GB;
			}
		$blimit9 = ($_POST['kuota9']);
			if (substr($blimit9, -2) == "MB"){
				$bytel = substr($blimit9, 0,-2);
				$bytelimit9 = $bytel."". $MB;
			}elseif (substr($blimit9, -2) == "GB"){
				$bytel = substr($blimit9, 0,-2);
				$bytelimit9 = $bytel ."". $GB;
			}
		$blimit10 = ($_POST['kuota10']);
			if (substr($blimit10, -2) == "MB"){
				$bytel = substr($blimit10, 0,-2);
				$bytelimit10 = $bytel."". $MB;
			}elseif (substr($blimit10, -2) == "GB"){
				$bytel = substr($blimit10, 0,-2);
				$bytelimit10 = $bytel ."". $GB;
			}
		// Simpan Local
		if($setupdata == "local"){
		$my_file = 'config.php';
		$my_file1 = '../status/config.php';
		
		$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
		$handle1 = fopen($my_file1, 'w') or die('Cannot open file:  '.$my_file1);
		
		$data = '<?php $iphost="'.$siphost.'"; $userhost="'.$suserhost.'"; $passwdhost="'.$spasswdhost.'"; $useradm="'.$suseradm.'"; $passadm="'.$spassadm.'"; $reloadindex="'.$sreloadindex.'"; $profile1="'.$sprofile1.'"; $profile2="'.$sprofile2.'"; $profile3="'.$sprofile3.'"; $profile4="'.$sprofile4.'"; $profile5="'.$sprofile5.'"; $profile6="'.$sprofile6.'"; $profile7="'.$sprofile7.'"; $profile8="'.$sprofile8.'"; $profile9="'.$sprofile9.'"; $profile10="'.$sprofile10.'"; $profile11="'.$sprofile11.'"; $profile12="'.$sprofile12.'"; $profile13="'.$sprofile13.'"; $profile14="'.$sprofile14.'"; $profile15="'.$sprofile15.'"; $uactive1="'.$active1.'"; $uactive2="'.$active2.'"; $uactive3="'.$active3.'"; $uactive4="'.$active4.'"; $uactive5="'.$active5.'"; $uactive6="'.$active6.'"; $uactive7="'.$active7.'"; $uactive8="'.$active8.'"; $uactive9="'.$active9.'"; $uactive10="'.$active10.'"; $uactive11="'.$active11.'"; $uactive12="'.$active12.'"; $uactive13="'.$active13.'"; $uactive14="'.$active14.'"; $uactive15="'.$active15.'"; $vname1="'.$suactive1t.'"; $vname2="'.$suactive2t.'"; $vname3="'.$suactive3t.'"; $vname4="'.$suactive4t.'"; $vname5="'.$suactive5t.'"; $vname6="'.$suactive6t.'"; $vname7="'.$suactive7t.'"; $vname8="'.$suactive8t.'"; $vname9="'.$suactive9t.'"; $vname10="'.$suactive10t.'";  $vname11="'.$suactive11t.'"; $vname12="'.$suactive12t.'"; $vname13="'.$suactive13t.'"; $vname14="'.$suactive14t.'"; $vname15="'.$suactive15t.'"; $utimelimit1="'.$tlimit1.'"; $utimelimit2="'.$tlimit2.'"; $utimelimit3="'.$tlimit3.'"; $utimelimit4="'.$tlimit4.'"; $utimelimit5="'.$tlimit5.'"; $utimelimit6="'.$tlimit6.'"; $utimelimit7="'.$tlimit7.'";  $utimelimit8="'.$tlimit8.'"; $utimelimit9="'.$tlimit9.'"; $utimelimit10="'.$tlimit10.'"; $utimelimit1t="'.$stimelimit1t.'"; $utimelimit2t="'.$stimelimit2t.'"; $utimelimit3t="'.$stimelimit3t.'"; $utimelimit4t="'.$stimelimit4t.'"; $utimelimit5t="'.$stimelimit5t.'"; $utimelimit6t="'.$stimelimit6t.'"; $utimelimit7t="'.$stimelimit7t.'"; $utimelimit8t="'.$stimelimit8t.'"; $utimelimit9t="'.$stimelimit9t.'"; $utimelimit10t="'.$stimelimit10t.'"; $ubytelimit1="'.$bytelimit1.'"; $ubytelimit2="'.$bytelimit2.'"; $ubytelimit3="'.$bytelimit3.'"; $ubytelimit4="'.$bytelimit4.'"; $ubytelimit5="'.$bytelimit5.'"; $ubytelimit6="'.$bytelimit6.'"; $ubytelimit7="'.$bytelimit7.'";  $ubytelimit8="'.$bytelimit8.'"; $ubytelimit9="'.$bytelimit9.'"; $ubytelimit10="'.$bytelimit10.'"; $ubytelimit1t="'.$blimit1.'"; $ubytelimit2t="'.$blimit2.'"; $ubytelimit3t="'.$blimit3.'"; $ubytelimit4t="'.$blimit4.'"; $ubytelimit5t="'.$blimit5.'"; $ubytelimit6t="'.$blimit6.'"; $ubytelimit7t="'.$blimit7.'"; $ubytelimit8t="'.$blimit8.'"; $ubytelimit9t="'.$blimit9.'"; $ubytelimit10t="'.$blimit10.'"; $headerv="'.$sheaderv.'"; $notev="'.$snotev.'"; ?>';
		
		$data1 = '<?php  $iphost="'.$siphost.'"; $userhost="'.$suserhost.'"; $passwdhost="'.$spasswdhost.'"; $headerv="'.$sheaderv.'";?>';
		
	
		fwrite($handle, $data);
		fwrite($handle1, $data1);
	// Export ke Mikrotik
	}elseif($setupdata == "export"){
	if ($API->connect( $iphost, $userhost, $passwdhost )) {
	   $arrID=$API->comm("/system/script/getall",
						  array(
				  ".proplist"=> ".id",
				  "?name" => "mikhmon",
				  ));
	  $API->comm("/system/script/remove", array(
	    ".id" => $arrID[0][".id"],
	    ));
	    $API->disconnect();
	}
	  
  $export = "$sreloadindex-|-$sheaderv-|-$snotev-|-$sprofile1-|-$sprofile2-|-$sprofile3-|-$sprofile4-|-$sprofile5-|-$sprofile6-|-$sprofile7-|-$sprofile8-|-$sprofile9-|-$sprofile10-|-$sprofile11-|-$sprofile12-|-$sprofile13-|-$sprofile14-|-$sprofile15-|-$active1-|-$active2-|-$active3-|-$active4-|-$active5-|-$active6-|-$active7-|-$active8-|-$active9-|-$active10-|-$active11-|-$active12-|-$active13-|-$active14-|-$active15-|-$tlimit1-|-$tlimit2-|-$tlimit3-|-$tlimit4-|-$tlimit5-|-$tlimit6-|-$tlimit7-|-$tlimit8-|-$tlimit9-|-$tlimit10-|-$bytelimit1-|-$bytelimit2-|-$bytelimit3-|-$bytelimit4-|-$bytelimit5-|-$bytelimit6-|-$bytelimit7-|-$bytelimit8-|-$bytelimit9-|-$bytelimit10-|-$blimit1-|-$blimit2-|-$blimit3-|-$blimit4-|-$blimit5-|-$blimit6-|-$blimit7-|-$blimit8-|-$blimit9-|-$blimit10-|-$suactive1t-|-$suactive2t-|-$suactive3t-|-$suactive4t-|-$suactive5t-|-$suactive6t-|-$suactive7t-|-$suactive8t-|-$suactive9t-|-$suactive10t-|-$suactive11t-|-$suactive12t-|-$suactive13t-|-$suactive14t-|-$suactive15t-|-$stimelimit1t-|-$stimelimit2t-|-$stimelimit3t-|-$stimelimit4t-|-$stimelimit5t-|-$stimelimit6t-|-$stimelimit7t-|-$stimelimit8t-|-$stimelimit9t-|-$stimelimit10t";
  
  if ($API->connect($iphost, $userhost, $passwdhost)) {
  $API->comm("/system/script/add", array(
					  "name" => "mikhmon",
					  "source" => "$export",
			));
  }
//Import dari Mikrotik
	}elseif($setupdata == "import"){
	if ($API->connect( $iphost, $userhost, $passwdhost )) {
	$API->write('/system/script/print', false);
	$API->write('?=name=mikhmon');
	$ARRAY = $API->read();
	}
  $regtable = $ARRAY[0];
  $import = $regtable['source'];
  if($import == ""){}else{
  $importl = explode("-|-",$import);
   $sreloadindex = $importl[0];
   $sheaderv = $importl[1];
   $snotev = $importl[2];
   $sprofile1 = $importl[3];
   $sprofile2 = $importl[4];
   $sprofile3 = $importl[5];
   $sprofile4 = $importl[6];
   $sprofile5 = $importl[7];
   $sprofile6 = $importl[8];
   $sprofile7 = $importl[9];
   $sprofile8 = $importl[10];
   $sprofile9 = $importl[11];
   $sprofile10 = $importl[12];
   $sprofile11 = $importl[13];
   $sprofile12 = $importl[14];
   $sprofile13 = $importl[15];
   $sprofile14 = $importl[16];
   $sprofile15 = $importl[17];
   $active1 = $importl[18];
   $active2 = $importl[19];
   $active3 = $importl[20];
   $active4 = $importl[21];
   $active5 = $importl[22];
   $active6 = $importl[23];
   $active7 = $importl[24];
   $active8 = $importl[25];
   $active9 = $importl[26];
   $active10 = $importl[27];
   $active11 = $importl[28];
   $active12 = $importl[29];
   $active13 = $importl[30];
   $active14 = $importl[31];
   $active15 = $importl[32];
   $tlimit1 = $importl[33];
   $tlimit2 = $importl[34];
   $tlimit3 = $importl[35];
   $tlimit4 = $importl[36];
   $tlimit5 = $importl[37];
   $tlimit6 = $importl[38];
   $tlimit7 = $importl[39];
   $tlimit8 = $importl[40];
   $tlimit9 = $importl[41];
   $tlimit10 = $importl[42];
   $bytelimit1 = $importl[43];
   $bytelimit2 = $importl[44];
   $bytelimit3 = $importl[45];
   $bytelimit4 = $importl[46];
   $bytelimit5 = $importl[47];
   $bytelimit6 = $importl[48];
   $bytelimit7 = $importl[49];
   $bytelimit8 = $importl[50];
   $bytelimit9 = $importl[51];
   $bytelimit10 = $importl[52];
   $blimit1 = $importl[53];
   $blimit2 = $importl[54];
   $blimit3 = $importl[55];
   $blimit4 = $importl[56];
   $blimit5 = $importl[57];
   $blimit6 = $importl[58];
   $blimit7 = $importl[59];
   $blimit8 = $importl[60];
   $blimit9 = $importl[61];
   $blimit10 = $importl[62];
   $suactive1t = $importl[63];
   $suactive2t = $importl[64];
   $suactive3t = $importl[65];
   $suactive4t = $importl[66];
   $suactive5t = $importl[67];
   $suactive6t = $importl[68];
   $suactive7t = $importl[69];
   $suactive8t = $importl[70];
   $suactive9t = $importl[71];
   $suactive10t = $importl[72];
   $suactive11t = $importl[73];
   $suactive12t = $importl[74];
   $suactive13t = $importl[75];
   $suactive14t = $importl[76];
   $suactive15t = $importl[77];
   $stimelimit1t = $importl[78];
   $stimelimit2t = $importl[70];
	 $stimelimit3t = $importl[80];
	 $stimelimit4t = $importl[81];
	 $stimelimit5t = $importl[82];
	 $stimelimit6t = $importl[83];
	 $stimelimit7t = $importl[84];
	 $stimelimit8t = $importl[85];
	 $stimelimit9t = $importl[86];
	 $stimelimit10t = $importl[87];
	  $my_file = 'config.php';
		$my_file1 = '../status/config.php';
		
		$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);

		$data = '<?php $iphost="'.$siphost.'"; $userhost="'.$suserhost.'"; $passwdhost="'.$spasswdhost.'"; $useradm="'.$suseradm.'"; $passadm="'.$spassadm.'"; $reloadindex="'.$sreloadindex.'"; $profile1="'.$sprofile1.'"; $profile2="'.$sprofile2.'"; $profile3="'.$sprofile3.'"; $profile4="'.$sprofile4.'"; $profile5="'.$sprofile5.'"; $profile6="'.$sprofile6.'"; $profile7="'.$sprofile7.'"; $profile8="'.$sprofile8.'"; $profile9="'.$sprofile9.'"; $profile10="'.$sprofile10.'"; $profile11="'.$sprofile11.'"; $profile12="'.$sprofile12.'"; $profile13="'.$sprofile13.'"; $profile14="'.$sprofile14.'"; $profile15="'.$sprofile15.'"; $uactive1="'.$active1.'"; $uactive2="'.$active2.'"; $uactive3="'.$active3.'"; $uactive4="'.$active4.'"; $uactive5="'.$active5.'"; $uactive6="'.$active6.'"; $uactive7="'.$active7.'"; $uactive8="'.$active8.'"; $uactive9="'.$active9.'"; $uactive10="'.$active10.'"; $uactive11="'.$active11.'"; $uactive12="'.$active12.'"; $uactive13="'.$active13.'"; $uactive14="'.$active14.'"; $uactive15="'.$active15.'"; $vname1="'.$suactive1t.'"; $vname2="'.$suactive2t.'"; $vname3="'.$suactive3t.'"; $vname4="'.$suactive4t.'"; $vname5="'.$suactive5t.'"; $vname6="'.$suactive6t.'"; $vname7="'.$suactive7t.'"; $vname8="'.$suactive8t.'"; $vname9="'.$suactive9t.'"; $vname10="'.$suactive10t.'";  $vname11="'.$suactive11t.'"; $vname12="'.$suactive12t.'"; $vname13="'.$suactive13t.'"; $vname14="'.$suactive14t.'"; $vname15="'.$suactive15t.'"; $utimelimit1="'.$tlimit1.'"; $utimelimit2="'.$tlimit2.'"; $utimelimit3="'.$tlimit3.'"; $utimelimit4="'.$tlimit4.'"; $utimelimit5="'.$tlimit5.'"; $utimelimit6="'.$tlimit6.'"; $utimelimit7="'.$tlimit7.'";  $utimelimit8="'.$tlimit8.'"; $utimelimit9="'.$tlimit9.'"; $utimelimit10="'.$tlimit10.'"; $utimelimit1t="'.$stimelimit1t.'"; $utimelimit2t="'.$stimelimit2t.'"; $utimelimit3t="'.$stimelimit3t.'"; $utimelimit4t="'.$stimelimit4t.'"; $utimelimit5t="'.$stimelimit5t.'"; $utimelimit6t="'.$stimelimit6t.'"; $utimelimit7t="'.$stimelimit7t.'"; $utimelimit8t="'.$stimelimit8t.'"; $utimelimit9t="'.$stimelimit9t.'"; $utimelimit10t="'.$stimelimit10t.'"; $ubytelimit1="'.$bytelimit1.'"; $ubytelimit2="'.$bytelimit2.'"; $ubytelimit3="'.$bytelimit3.'"; $ubytelimit4="'.$bytelimit4.'"; $ubytelimit5="'.$bytelimit5.'"; $ubytelimit6="'.$bytelimit6.'"; $ubytelimit7="'.$bytelimit7.'";  $ubytelimit8="'.$bytelimit8.'"; $ubytelimit9="'.$bytelimit9.'"; $ubytelimit10="'.$bytelimit10.'"; $ubytelimit1t="'.$blimit1.'"; $ubytelimit2t="'.$blimit2.'"; $ubytelimit3t="'.$blimit3.'"; $ubytelimit4t="'.$blimit4.'"; $ubytelimit5t="'.$blimit5.'"; $ubytelimit6t="'.$blimit6.'"; $ubytelimit7t="'.$blimit7.'"; $ubytelimit8t="'.$blimit8.'"; $ubytelimit9t="'.$blimit9.'"; $ubytelimit10t="'.$blimit10.'"; $headerv="'.$sheaderv.'"; $notev="'.$snotev.'"; ?>';
		
		fwrite($handle, $data);
	}
	}
  
  header('Location: setup.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Setup Mikrotik Hotspot Monitor</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="pragma" content="no-cache" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
		<link rel="icon" href="img/favicon.png" />
		<link rel="stylesheet" href="css/style.css" media="screen">
		<style>
table.tsetup {
  margin-left:auto;
  margin-right:auto;
  width: 100%;
  border-collapse: collapse;
}
table.tsetup th {
  background: #008CCA;
  color: white;
  font-weight: bold;
  text-align: center;
}
table.tsetup td {
  padding: 2px;
  border: 1px solid #ccc;
  text-align: center;
}
		</style>
		<script>
			function Reload() {
				location.reload();
			}
		</script>
		<script>
		function resetConfig() {
		var txt;
		var r = confirm("Yakin akan me-reset config?\n Username | Password default (admin | 1234)");
		if (r == true) {
			window.open("./resetconfig.php", "_self");
		} else {
			
		}
		}
		</script>
		<script>
		function rebootMikrotik() {
		var txt;
		var r = confirm("Mikrotik akan di-Reboot!\nYakin melakukannya?");
		if (r == true) {
			window.open("./reboot.php", "_self");
		} else {
			
		}
		}
		</script>
	</head>
	<body>
		<div class="main">
			<div style="overflow-x:auto;">
			<table class="tnav">
				<tr>
					<td style="text-align: center;" colspan=2>Mikrotik Hotspot Monitor</td>
				</tr>
				<tr>
					<td>Setup</td>
					<td>
						<button class="material-icons" onclick="Reload()"	title="Reload">autorenew</button>
						<button class="material-icons" onclick="rebootMikrotik()" title="Reboot Mikrotik">power_settings_new</button>
						<button class="material-icons"	onclick="location.href='logout.php';" 	title="Logout">lock</button>
						<button class="material-icons" onclick="resetConfig()" title="Reset Config">history</button>
						<button class="material-icons" onclick="location.href='conntest.php';" title="Tes Koneksi ke Mikrotik">settings_ethernet</button>
						<button class="material-icons"	onclick="location.href='./uprofileadd.php';"	title="User Profile">local_library</button>
						<button class="material-icons" onclick="location.href='./';" title="Dashboard">dashboard</button>
						<form  method="post"><input type="submit" name="btnupdate" class="material-icons"	title="Cek Update" value="system_update_alt"></form>
						<!--<button class="material-icons"	onclick="window.open('https://github.com/laksa19/mikrotik-hotspot-monitor','_blank');" 	title="Check Update">system_update_alt</button>-->
					</td>
				</tr>
			</table>
			<form autocomplete="off" method="post" action="">
				<table class="tnav">
					<tr>
					  <td>
					  <select style="float:left;" name="setupdata" required="1">
							<option value="local">Local Server</option>
							<option value="export">Export ke Mikrotik</option>
							<option value="import">Import dari Mikrotik</option>
						</select>
						<input type="submit" class="btnsubmit" name="setup" value="Simpan"/>
					  </td>
					</tr>
				</table>
				<div style="overflow-x:auto;">
				<table class="tsetup" align="center"  >
					<tr>
						<th>IP</th>
						<th>Username</th>
						<th>Password</th>
					</tr>
					<tr>
					<td><input type="text" size="15" name="ipmik" placeholder="IP Mikrotik" value="<?php print_r($iphost);?>" required="1"/></td>
					<td><input type="text" size="10" name="usermik" placeholder="User Mikrotik" value="<?php print_r($userhost);?>" required="1"/></td>
					<td><input type="password" size="10" name="passmik" placeholder="Password Mikrotik" value="<?php print_r($passwdhost);?>" required="1"/></td>
					</tr>
					<tr>
					<td style="color:white; font-weight:bold; background:#008CCA;">User Pass Admin ==></td>
					<td><input type="text" size="10" name="useradm" placeholder="User Admin" value="<?php print_r($useradm);?>" required="1"/></td>
					<td><input type="password" size="10" name="passadm" placeholder="Password Admin" value="<?php print_r($passadm);?>" required="1"/></td>
					</tr>
					<tr>
						<td style="text-align:left" colspan=3>
						Ganti Username Password Admin untuk keamanan. <b style="color:red;">Disarankan  user Admin berbeda dengan user Mikrotik.</b>
						</td>
					</tr>
				</table>
				</div>
				<br>
				<div style="overflow-x:auto;">
				<table class="tsetup" align="center"  >
					<tr>
						<th>NAMA HOTSPOT</th>
						<th>DNS NAME</th>
						<th>AUTO RELOAD</th>
					</tr>
					<tr>
					<td><input type="text" size="15" maxlength="50" name="namahotspot" placeholder="Nama Hotspot" value="<?php print_r($headerv);?>" required="1"/></td>
					<td><input type="text" size="17" maxlength="500" name="notev" placeholder="Catatan Voucher" value="<?php print_r($notev);?>" required="1"/></td>
					<td><input type="text" size="3" maxlength="4" name="reloadindex" placeholder="Auto Reload Page" title="Reload otomatis laman index, dengan satuan detik" value="<?php print_r($reloadindex);?>" required="1"/></td>
					</tr>
					<tr>
						<td style="text-align:left" colspan=3>
						Auto Reload berfungsi untuk auto reload pada laman Dashbord, ditulis dalam satuan detik. Jika tidak dibutuhkan isi huruf [x] pada kolom Auto Reload.
						</td>
					</tr>
				</table>
				</div>
				<br>
				<div style="overflow-x:auto;">
				<table class="tsetup" align="center"  >
					<tr>
						<th colspan=2>USER PROFILE</th>
						<th colspan=2>USER LIMIT</th>
					</tr>
					<tr>
						<th>NAMA PROFILE</th>
						<th>MASA AKTIF</th>
						<!--<th>HARGA VOUCHER</th>-->
						<th>DURASI</th>
						<th>KUOTA</th>
					</tr>
					<tr>
						<td style="text-align:left" colspan=2>Profile Baris ke 1 di Dashboard</td>
						<td colspan=2></td>
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof1" placeholder="Profile1" value="<?php print_r($profile1);?>" required="1"/></td>
						<td><input type="text" size="3" maxlength="3" name="active1" placeholder="Masa Aktif1" value="<?php print_r($uactive1);?>" required="1"/></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga1" placeholder="Harga Voucher1" value="<?php print_r($price1);?>" required="1"/></td>-->
						<td><input type="text" size="5" maxlength="3" name="durasi1"  value="<?php print_r($utimelimit1);?>" required="1"/></td>
						<td><input type="text" size="5" maxlength="5" name="kuota1"  value="<?php print_r($ubytelimit1t);?>" required="1"/></td>
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof2" value="<?php print_r($profile2);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active2" value="<?php print_r($uactive2);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga2" value="<?php print_r($price2);?>" /></td>-->
						<td><input type="text" size="5" maxlength="3" name="durasi2"  value="<?php print_r($utimelimit2);?>" /></td>
						<td><input type="text" size="5" maxlength="5" name="kuota2"  value="<?php print_r($ubytelimit2t);?>" /></td>
						
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof3" value="<?php print_r($profile3);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active3" value="<?php print_r($uactive3);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga3" value="<?php print_r($price3);?>" /></td>-->
						<td><input type="text" size="5" maxlength="3" name="durasi3"  value="<?php print_r($utimelimit3);?>" /></td>
						<td><input type="text" size="5" maxlength="5" name="kuota3"  value="<?php print_r($ubytelimit3t);?>" /></td>
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof4" value="<?php print_r($profile4);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active4" value="<?php print_r($uactive4);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga4" value="<?php print_r($price4);?>" /></td>-->
						<td><input type="text" size="5" maxlength="3" name="durasi4"  value="<?php print_r($utimelimit4);?>" /></td>
						<td><input type="text" size="5" maxlength="5" name="kuota4"  value="<?php print_r($ubytelimit4t);?>" /></td>
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof5" value="<?php print_r($profile5);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active5" value="<?php print_r($uactive5);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga5" value="<?php print_r($price5);?>" /></td>-->
						<td><input type="text" size="5" maxlength="3" name="durasi5"  value="<?php print_r($utimelimit5);?>" /></td>
						<td><input type="text" size="5" maxlength="5" name="kuota5"  value="<?php print_r($ubytelimit5t);?>" /></td>
					</tr>
					<tr>
						<td style="text-align:left" colspan=2>Profile Baris ke 2 di Dashboard</td>
						<td colspan=2></td>
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof6" value="<?php print_r($profile6);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active6" value="<?php print_r($uactive6);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga6" value="<?php print_r($price6);?>" /></td>-->
						<td><input type="text" size="5" maxlength="3" name="durasi6"  value="<?php print_r($utimelimit6);?>" /></td>
						<td><input type="text" size="5" maxlength="5" name="kuota6"  value="<?php print_r($ubytelimit6t);?>" /></td>
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof7" value="<?php print_r($profile7);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active7" value="<?php print_r($uactive7);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga7" value="<?php print_r($price7);?>" /></td>-->
						<td><input type="text" size="5" maxlength="3" name="durasi7"  value="<?php print_r($utimelimit7);?>" /></td>
						<td><input type="text" size="5" maxlength="5" name="kuota7"  value="<?php print_r($ubytelimit7t);?>" /></td>
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof8" value="<?php print_r($profile8);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active8" value="<?php print_r($uactive8);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga8" value="<?php print_r($price8);?>" /></td>-->
						<td><input type="text" size="5" maxlength="3" name="durasi8"  value="<?php print_r($utimelimit8);?>" /></td>
						<td><input type="text" size="5" maxlength="5" name="kuota8"  value="<?php print_r($ubytelimit8t);?>" /></td>
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof9" value="<?php print_r($profile9);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active9" value="<?php print_r($uactive9);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga9" value="<?php print_r($price9);?>" /></td>-->
						<td><input type="text" size="5" maxlength="3" name="durasi9"  value="<?php print_r($utimelimit9);?>" /></td>
						<td><input type="text" size="5" maxlength="5" name="kuota9" value="<?php print_r($ubytelimit9t);?>" /></td>
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof10" value="<?php print_r($profile10);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active10" value="<?php print_r($uactive10);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga10" value="<?php print_r($price10);?>" /></td>-->
						<td><input type="text" size="5" maxlength="3" name="durasi10"  value="<?php print_r($utimelimit10);?>" /></td>
						<td><input type="text" size="5" maxlength="5" name="kuota10"  value="<?php print_r($ubytelimit10t);?>" /></td>
					</tr>
					<tr>
						<td style="text-align:left" colspan=2>Profile Baris ke 3 di Dashboard</td>
						<td style="text-align:left" valign="top" colspan=2 rowspan=7>
							Durasi dan Kuota adalah adalah opsi tambahan pada saat generate voucher. <br>Satuan Durasi : (h atau d) <br>Satuan Kuota : (MB atau GB).
						</td>
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof11" value="<?php print_r($profile11);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active11" value="<?php print_r($uactive11);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga11" value="<?php print_r($price11);?>" /></td>-->
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof12" value="<?php print_r($profile12);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active12" value="<?php print_r($uactive12);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga12" value="<?php print_r($price12);?>" /></td>-->
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof13" value="<?php print_r($profile13);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active13" value="<?php print_r($uactive13);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga13" value="<?php print_r($price13);?>" /></td>-->
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof14" value="<?php print_r($profile14);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active14" value="<?php print_r($uactive14);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga14" value="<?php print_r($price14);?>" /></td>-->
					</tr>
					<tr>
						<td><input type="text" size="15" maxlength="20" name="prof15" value="<?php print_r($profile15);?>" /></td>
						<td><input type="text" size="3" maxlength="3" name="active15" value="<?php print_r($uactive15);?>" /></td>
						<!--<td><input type="text" size="15" maxlength="20" name="harga15" value="<?php print_r($price15);?>" /></td>-->
					</tr>
					<tr>
						<td style="text-align:left" colspan=2>
							Nama Profile dan Masa Aktif dibuat linier, agar dapat mengnali masa aktif Profile dengan mudah. <br>Contoh: Profile 3Jam, Masa Aktif 3h (h=jam d=hari).<br><b style="color:red">Nama Profle tidak menggunakan spasi</b>
						</td>
						
					</tr>
			</table>
      </div>
			<br>
			</form>
	</body>
</html>
