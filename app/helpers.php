<?php

function shipping_status_name($status)
{
    if($status=='pendding')     return '待定中';
    if($status=='confirmed')    return '已确认';
    if($status=='processing')   return '处理中';
    if($status=='picked')       return '已拣货';
    if($status=='shipped')      return '运输中';
    if($status=='delivered')    return '运输完成';
    if($status=='return')       return '退回';
    if($status=='cancel')       return '取消';
    return $status;
}

function agotime($date)
{
    $diff = date_diff( new \DateTime( "now" ), new \DateTime( date( 'Y-n-d H:i:s', strtotime($date))) );
    $ago_time = (($diff->y>=1) ? (($diff->y+1) . ' 年前' ) : 
                (($diff->m>=1) ? (($diff->m+1) . ' 个月前' ) : 
                (($diff->d>=1) ? (($diff->d+1) . ' 天前' ) : 
                (($diff->h>=1) ? (($diff->h+1) . ' 小时前' ) : 
                (($diff->i>=1) ? (($diff->i+1) . ' 小分前' ) : 
                date( 'l d M Y H:i:s P (T)', strtotime($date) )   )))));
    return $ago_time;
}

function size($size)
{
    if($size>=1024*1024) return round($size/1024/1024,1).'MB';
    else if($size>=1024) return round($size/1024,1).'KB';
    return $size.'B';
}

function GetFirstWordFromLine($line)
{
    $line = trim($line);
    $pos = stripos($line, ' ', 0);
    if($pos===false || $pos<=0)
    {
        return '';
    }
    else
    {
        return substr($line, 0, $pos);
    }
}