<?php
class pay extends indexMain{
    function init(){
        $this->smarty->display("dtt-pay.html");
    }
    function backPay(){
        $this->smarty->display("zzl-zf-yhk.html");
    }
    function addback(){
        $this->smarty->display("zzl-zf-addcard.html");
    }
}