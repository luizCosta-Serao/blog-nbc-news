<?php

  class Painel {
    public static function imagemValida($imagem) {
      if (
        $imagem['type'] === 'image/jpeg' ||
        $imagem['type'] === 'image/jpg' ||
        $imagem['type'] === 'image/png'
      ) {
        return true;
      } else {
        return false;
      }
    }
    public static function uploadFile($file) {
      $formatoImagem = explode('.', $file['name'])[1];
      $nomeImagem = uniqid().'.'.$formatoImagem;
      if(move_uploaded_file($file['tmp_name'], BASE_DIR.'/uploads/'.$nomeImagem)) {
        return $nomeImagem;
      } else {
        return false;
      }
    }
  }

?>