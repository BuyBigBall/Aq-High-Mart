<?php
use App\Models\Option;

function CalcNewBalance($bal, $hist)
{
    if($hist->money_type==1)    //money
    {
        if( $hist->deal_type==1 )         $bal -= $hist->money;
        else                              $bal += $hist->money;
    }
    if($hist->money_type==2)    //point
    {
        if( $hist->deal_type==1 )         $bal -= $hist->money;
        else if( $hist->deal_type==3 )    $bal -= $hist->money;
        else if( $hist->deal_type==7 )    $bal -= $hist->money;
        else if( $hist->deal_type==8 )    $bal -= $hist->money;
        else                            $bal += $hist->money;
    }

    return $bal;
}
function GetTransactionName($typenum)
{
    //1-mnyin,2-mnyout,3-buy,4-return,5-cancel,6-delete,7-register,8-login
    if($typenum==1) return "充值";
    if($typenum==2) return "消费";  //by buying goods spend point
    if($typenum==3) return "购买";  //by buying goods spend money or add point
    if($typenum==4) return "退回";
    if($typenum==5) return "取消";
    if($typenum==6) return "删除";
    if($typenum==7) return "注册";
    if($typenum==8) return "登陆";
}
function GetHistMoneyL($hist)
{
    if($hist->money_type==1)    //money
    {
        if( $hist->deal_type==1 ) return $hist->money;
        else                    return '';
    }
    if($hist->money_type==2)    //point
    {
        if( $hist->deal_type==1 )         return $hist->money;
        else if( $hist->deal_type==3 )    return $hist->money;
        else if( $hist->deal_type==7 )    return $hist->money;
        else if( $hist->deal_type==8 )    return $hist->money;
        else                            return '';
    }
}
function GetHistMoneyR($hist)
{
    if($hist->money_type==1)    //money
    {
        if( $hist->deal_type==1 ) return '';
        else                    return $hist->money;
    }
    if($hist->money_type==2)    //point
    {
        if( $hist->deal_type==2 )         return $hist->money;
        else                            return '';
    }
}

function GetSiteSetting($key)
{
    
}

function userphoto($path)
{
    //if(!empty($path))     dd(__DIR__ . '/../public/uploads/' . ($path));
    if( !!empty($path) || !file_exists(__DIR__ . '/../public/uploads/' . ($path)))
    {
        return asset('/assets/img/user.png');
    }
    return asset('uploads/'. $path);
}

function userstatus($status)
{
    if($status==0)   return "创建";
    if($status==1)   return "活性";
    if($status==2)   return "停用";
    if($status==3)   return "已删除";
    return "创建";
}

function order_text($order_num)
{
    if($order_num==1)   return "登记顺序";
    if($order_num==2)   return "价格顺：最低优先";
    if($order_num==3)   return "价格顺：最高优先";
    if($order_num==4)   return "名称顺序";
    return "选择排序";
}
function product_tag_name($product)
{
    if($product->hot_deals)     return '热卖';
    if($product->new_arrival)   return '新的';
    if($product->featured)      return '精选';
    if($product->special_offer) return '特色';
    if($product->special_deals) return '优惠';
    return '';
}

function shipping_status_name($status)
{
    if($status=='pending')      return '待定中';
    if($status=='confirmed')    return '已确认';
    if($status=='processing')   return '处理中';
    if($status=='picked')       return '已拣货';
    if($status=='shipped')      return '运输中';
    if($status=='delivered')    return '运输完成';
    if($status=='return')       return '退回';
    if($status=='cancel')       return '取消';
    return $status;
}
function chdate($date, $time=false)
{
    if( !!empty($date) )    return '';
    if( !!empty($time) )    return date( 'Y年n月d日',  strtotime($date));

    return date( 'Y年n月d日 H时i分s吵',  strtotime($date));
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