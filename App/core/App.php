<?php
session_start();
require_once 'Hook.php';
$fileList = glob('App/Shape/*.php');
foreach ($fileList as $fileName) {
    if (is_file($fileName)) {
        require_once "$fileName";
    }
}
class App
{
    public function __construct()
    {
        $this->index();
    }
    
    public function index()
    {
        $nameShape = $this->getNameShape();
        $shapeData = $this->getShape($nameShape);
        if ($shapeData) {
            $perimeter = $shapeData->perimeter();
            $acreage = $shapeData->acreage();
            Hook::view('displayShape', compact('nameShape','perimeter', 'acreage'));
        } else {
            Hook::view($nameShape);
        }
    }
    
    private function getNameShape()
    {
        $nameShape = 'findShape';
        if (isset($_POST['nameShape'])) {
            $nameShape = strtolower($_POST['nameShape']);
    
            if (!class_exists($nameShape)) {
                $_SESSION['error'] = "This shape not in calculator";
                $nameShape = 'findShape';
            }
        }
        return $nameShape;
    }
    
    // trả về object  
    private function getShape($nameShape)
    {
        if (!isset($_POST['submit'])) {
            return false;
        }
        
        $shapes = [
            'square' => ['length'],
            'rectangle' => ['width', 'height'],
            'triangle' => ['edgeOne', 'edgeTwo', 'edgeThree'],
            'parallelogram' => ['length','width', 'height']
        ];
    
        if (!array_key_exists($nameShape, $shapes)) {
            return false;
        }
    // kiểm tra xem các giá trị nhập lên có phải là một number không
        $params = [];
        foreach ($shapes[$nameShape] as $param) {
            if (!is_numeric($_POST[$param])) {
                $_SESSION['error'] = "Please enter an number";
                $_SESSION['nameShape'] = $_POST['nameShape'];
               return false;
            }
            $params[] = $_POST[$param];
        }
    
        $className = ucfirst($nameShape);
        $shape = new $className(...$params);
        return $shape;
    }
    
}
