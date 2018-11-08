<?php

class VerificaTipo 
{
    
    public static $imagem = array('jpg', 'jpeg', 'gif', 'png');
    public static $documento = array('doc', 'docx', 'xls', 'xlsx', 'csv');


    /* M�todo que retorna o tipo de arquivo
     * $type =  tipo de arquivo
     * $list =  lista de arquivos aceitos
     *
    */
    public static function valida($type, $list)
    {
        return in_array($type, $list);
    }

    /* M�todo espec�fico para verifica��o de imagem
     * $type =  tipo de arquivo
     * $list =  lista de arquivos aceitos
     *
    */
    public static function validaImagem($type)
    {
        return self::valida($type, self::$imagem);
    }

    /* M�todo espec�fico para verifica��o de documentos
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
