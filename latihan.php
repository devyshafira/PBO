<form class="btn" method="POST" action="">
    <input type="submit" name="image" value="ImageButton" style="width:120px;height:60px;">
    <input type="submit" name="shape" value="ShapeButton" style="width:150px;height:75px;">
</form>
<?php
class button {
        public $x;
        public $y;
        public $width;
        public $height;
}
class imageButton extends Button{
    public $ukuran ;
    public function cekUkuran(){
        echo "Lebarnya adalah ".$this ->ukuran;
        echo "<br>";
        echo "Tingginya adalah ".$this ->tinggi;
    }
}
class ShapeButton extends Button{
    public $Klic ;
    public function cekKlic(){
        echo "Lebarnya adalah ".$this ->ukuran;
        echo "<br>";
        echo "Tingginya adalah ".$this ->tinggi;
    }
}
function satu(){
    $Button = new ImageButton();
    $ukuran = $Button ->ukuran= 120.0;
    $tinggi = $Button ->tinggi= 60.0;
    
    echo $Button->cekUkuran();
}
function dua(){
    $Button = new ShapeButton();
    $ukuran = $Button ->ukuran= 150.0;
    $tinggi = $Button ->tinggi= 75.0;
    
    echo $Button->cekKlic();
}
if(isset($_POST['image'])){
    echo satu();
}
else if(isset($_POST['shape'])){
    echo dua();
}
?>