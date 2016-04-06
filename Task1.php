<?php
/**
 * Входные данные
 */
$shapes = array(
    array('type' => 'circle', 'params' => array(
        'color' => 'red',    'weight' => 'normal')),
    array('type' => 'circle', 'params' => array(
        'color' => 'red',    'weight' => 'bold')),
    array('type' => 'circle', 'params' => array(
        'color' => 'blue',   'weight' => 'normal'))
);

interface IShape
{
    public function drawPoints();
    public function drawImage();
}

/**
 * Base class shape
 */
class Shape implements IShape
{
    /**
     * params of shapes
     * @var array
     */
    protected $params;

    /**
     * @param array $params
     */
    protected function  __construct(array $params){
        $this->params = $params;
    }
    public function drawPoints(){
       // 'Draw Points';
    }
    public function drawImage(){
       // 'Draw Image';
    }
}

class CircleShape extends Shape {
    public function drawPoints(){
       // 'Draw Points for Circle';
    }
}

class SquareShape extends  Shape {
    public function drawImage(){
        // 'Draw Image for Square';
    }
}

class DrawManager
{
    /**
     * Create Square or Square
     *
     * @param array $shapeData
     * @return Shape
     * @throws Exception
     */
    public static function create($shapeData){
           $name   = $shapeData['type'];
           $params = $shapeData['params'];
           $object = ucfirst($name).'Shape';
           if (!class_exists($object)){
               throw new Exception('Unknown Shape');
           }
           return new $object($params);
       }
}

foreach($shapes as $shape){
    $shapeObj = DrawManager::create($shape);
    $shapeObj->drawPoints();
    $shapeObj->drawImage();
}
