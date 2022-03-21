<?php
echo"<h3>STATIC METHODS-PHP</h3>";
echo"<br>";
class A{
    public function hello($text="hello world"){
        $this->text=$text;
        return $this->text;
    }
}
class B{
    public static function hello($text){
        $text="this is static text";
        return $text;
    }
}
$object=new A();
echo $object->hello('non static');
echo"<br>";
echo B::hello('non-static');

?>