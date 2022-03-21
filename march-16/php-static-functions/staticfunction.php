<?php
echo"<h3>STATIC FUNCTIONS-PHP</h3>";
echo"<br>";
class countfunc{
      
    static $count;
      
    public static function getCount() {
        return self::$count++;
    }
}
  
countfunc::$count = 1;
 
for($i = 0; $i < 5; ++$i) {
    echo 'value of count is : '. 
    countfunc::getCount();
    echo"<br>";
}
  
?>
