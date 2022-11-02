<?php
echo "LINE NUMBER IS =" . __LINE__;
echo "<br>FILE PATH  IS =" . __FILE__;
echo "<br>DIR NAME  IS =" . __DIR__;
function Test()
{
    return __FUNCTION__;
}
echo "<br>FUNCTION NAME  IS =" . test();
class BMW
{
    public function get_Class_Name()
    {
        return __CLASS__;
    }
    public function get_Method_Name()
    {
        return __METHOD__;
    }
}
$class_name = __NAMESPACE__.'BMW'; // Creating NameSpace
$bmwc = new $class_name();         // Using NameSpace
echo "<br>CLASS_NAME  IS =" . $bmwc->get_Class_Name();
echo "<br>METHOD_NAME  IS =" . $bmwc->get_Method_Name();
?>