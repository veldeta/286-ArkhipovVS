<?php
/**
 * Created by PhpStorm.
 * User: ClassUser
 * Date: 05.03.2020
 * Time: 11:53
 */

require_once __DIR__ .  '/db-work/class/vendor/autoload.php';
use App\Plugins\PopClass;
use App\Plugins\Lion;


class Snake
{
    public $color = 'green';
    public $x = '---------';
    public $z = '>';
    public function pop()
    {
        $arr = str_split($this->x);
        foreach($arr as $key=>$value)
        {
            echo '<br>';
            $arr[$key] = '*';
            $key++;
            $arr[$key] = '>';
            echo implode($arr);
        }
    }
}
$snake = new Snake();
$snake-> pop();
echo '<br>';
PopClass::help();
echo '<br>';
$lion = new Lion();
$lion->jump();
echo '<br>';