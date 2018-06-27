<?php
	public function getdatos('$dato'){
        $texto="";
        $texto=str_replace('"','',$iduno);
        $texto=str_replace('{','',$texto);
        $texto=str_replace('}','',$texto);
        $texto=str_replace('[','',$texto);
        $texto=str_replace(']','',$texto);
        $texto=str_replace('id','',$texto);
        $texto=str_replace(':','',$texto);
        $iduno=$texto;
        return $iduno;
	}
?>