<?php

class VerificaTipo 
{
    
    public static $imagem = array('jpg', 'jpeg', 'gif', 'png');
    public static $documento = array('doc', 'docx', 'xls', 'xlsx', 'csv');


    /* Mйtodo que retorna o tipo de arquivo
     * $type =  tipo de arquivo
     * $list =  lista de arquivos aceitos
     *
    */
    public static function valida($type, $list)
    {
        return in_array($type, $list);
    }

    /* Mйtodo especнfico para verificaзгo de imagem
     * $type =  tipo de arquivo
     * $list =  lista de arquivos aceitos
     *
    */
    public static function validaImagem($type)
    {
        return self::valida($type, self::$imagem);
    }

    /* Mйtodo especнfico para verificaзгo de documentos
     * $type =  tipo de arquivo
     * $list =  lista de arquivos aceitos
     *
    */
    public static function validaDocumento($type)
    {
        return self::valida($type, self::$imagem);
    }

}

$documentoAceito = VerificaTipo::validaDocumento('jpg');

echo $documentoAceito;
