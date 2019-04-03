<?php
    /**
     * Created by PhpStorm.
     * User: julien
     * Date: 2019-04-02
     * Time: 14:25
     */
    require_once '../vendor/autoload.php';
    
    use App\Wcs\Hello;
    use HelloWorld\SayHello;
    
    $hel = new Hello();
    $helop = new SayHello();
    
    echo $helop->world();
    echo '</br>';
    echo $hel->talk();
    
    
