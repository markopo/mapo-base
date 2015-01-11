<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 13/11/2014
 * Time: 19:10
 */

/**
 * Class Template
 */
class Template {

    /**
     * @return string
     */
    public static function Header() {
        $header = "
          <div class='sitetitle'>Mapo - base</div>
            <br style='clear:both;' />
            <div class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</div>
            ";
        return $header;
    }

    /**
     * @return string
     */
    public static function Footer() {
        $footer = "
            <div>
            <span class='sitefooter'>Copyright (c) Marko Poikkimäki |
            </div>";
        return $footer;
    }



} 