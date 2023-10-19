<?php 

class Store{

    public static function file($src, $dst, $filename){
        $url_dst_folder = $_SERVER['DOCUMENT_ROOT'] . "/Public/Assets/" . $dst;
        $url_dst_file = $url_dst_folder . $filename;

        if (!file_exists($url_dst_folder)) {
            mkdir($url_dst_folder, 0777, true); 
        }

        if (move_uploaded_file($src, $url_dst_file)) {
            echo "El fitxer " . htmlspecialchars(basename($filename)) . " s'ha carregat amb èxit!";
        } else {
            echo "Error al carregar el fitxer.";
        }

    }

}

?>