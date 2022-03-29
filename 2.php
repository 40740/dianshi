$today = date("Ymd");

$url = "https://vod.stream.hndt.com/HeNanFF3/".$today."/HeNanFF3_".$today."_0000_0240.mp4";

header('location:'.$url);
