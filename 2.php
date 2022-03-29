<?php

//https://vod.stream.hndt.com/HeNanFF3/20220319/HeNanFF3_20220319_0000_0240.mp4

$today = date("Ymd");

$url = "https://vod.stream.hndt.com/HeNanFF3/".$today."/HeNanFF3_".$today."_0000_0240.mp4";

header('location:'.$url);
