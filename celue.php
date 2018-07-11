<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/7
 * Time: 15:14
 */
//定义接口
interface CeLue{
    public function ProOn();
    public function ProTo();
}
//实现接口1
class Page implements CeLue{
    function ProOn()
    {
        // TODO: Implement ProOn() method.
        echo 'SE';
    }
    function ProTo()
    {
        // TODO: Implement ProTo() method.
        echo 'SO';
    }
}
//实现接口2
class Pages implements CeLue{
    function ProOn()
    {
        // TODO: Implement ProOn() method.
        echo 'SEO';
    }
    function ProTo()
    {
        // TODO: Implement ProTo() method.
        echo 'ESO';
    }
}

class Stone
{
    protected $strategy;
    function index(){
        echo "AD";
        $this->strategy->ProOn();
        echo "<br>";
        echo "Category";
        $this->strategy->ProTo();
        echo "<br>";
    }
    function setStrategy(CeLue $strategy){
        $this->strategy=$strategy;
    }
}
//策略模式
$page = new Stone();
if(isset($_GET['male'])){
    $strategy = new Page();
}else {
    $strategy = new Pages();
}
$page->setStrategy($strategy);
$page->index();