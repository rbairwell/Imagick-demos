<?php

namespace ImagickDemo\Imagick;


class equalizeImage extends \ImagickDemo\Example {

    function renderImageURL() {
        return "<img src='/image/Imagick/equalizeImage'/>";
    }

    function renderDescription() {

    }

    function renderImage() {
        $imagick = new \Imagick(realpath($this->imagePath));

        $imagick->equalizeImage();

        header("Content-Type: image/jpg");
        echo $imagick->getImageBlob();
    }
}