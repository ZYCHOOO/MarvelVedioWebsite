<?php 
header('Content-type:text/html;charset=utf8');
$conn = @ mysql_connect("localhost", "root", "671211") or die("datebase can`t been connected");
mysql_select_db("db_marvelzone", $conn);
mysql_query("set names 'utf8'"); //
class Danmu 
{
    public $text;
    public $color;
    public $size;
    public $position;
    public $time;
}
$data = array();
$sql="select text,color,size,position,time from tb_danmu";
$result =mysql_query($sql);
while($row= mysql_fetch_array($result, MYSQL_ASSOC)){
    $danmu = new Danmu();
    $danmu->text = $row["text"];
    $danmu->color = $row["color"];
    $danmu->size = $row["size"];
    $danmu->position = $row["position"];
    $danmu->time = $row["time"];
    $data[]=$danmu;
}   
echo json_encode($data);

?>