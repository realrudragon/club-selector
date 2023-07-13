<?php
class Datethai
{
  //Datethai

  public function __construct()
  {

  }

  /* Somkhane LB Date Thai */
  public function Datethai()
  {
    $CI = & get_instance();
  }

  public function get_lb_date_time()
  {
    return date('Y-m-d H:i:s');
  }

  public function get_lb_date()
  {
    return date('Y-m-d');
  }

  public function date_lb_thai($strDate, $format = NULL, $short = NULL)
  {
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strSeconds = date("s", strtotime($strDate));
    if ($short == NULL)
    {
      $strMonthCut = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
      //$strMonthCut = Array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    }
    else
    {
      //$strMonthCut = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
      $strMonthCut = Array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    }
    $strMonthThai = $strMonthCut[$strMonth];
    if ($format == NULL)
    {
      $format = '%d %m %y, %h %i %s';
    }
    $find = array('%d', '%m', '%y', '%h', '%i', '%s');
    $replace = array($strDay, $strMonthThai, $strYear, $strHour, $strMinute, $strSeconds);
    return str_replace($find, $replace, $format);
  }

  public function get_lb_thai_date()
  {
    return $this->date_lb_thai(date('Y-m-d H:i:s'), '%d %m %y %h:%i:%s');
  }
  /* Somkhane LB Date Thai */

  /* Somkhane LB Date Thai ไม่ได้ใช้ */
  public function date_lb_th_en($date_select)
  {
    $date_concat = '';
    $date_concat = $date_concat . (intval(substr($date_select, 0, 4)) - 543);
    $date_concat = $date_concat . substr($date_select, 4, 6);
    return $date_concat;
  }

  public function date_lb_en_th($date_select)
  {
    $date_concat = '';
    $date_concat = $date_concat . (intval(substr($date_select, 0, 4)) + 543);
    $date_concat = $date_concat . substr($date_select, 4, 6);
    return $date_concat;
  }

  public function day_lb_thai($date)
  {
    $daythai = array("", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์", "อาทิตย์");
    $strDay = date('N', strtotime($date));
    return $daythai[$strDay];
  }

  public function date_th_stringth($strYmd)
  {
    $arrayYmd = explode('-', $strYmd);
    $y = $arrayYmd[0];
    $m = intval($arrayYmd[1]);
    $d = intval($arrayYmd[2]);
    $strMonth = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    return $d . ' ' . $strMonth[$m] . ' ' . $y;
  }

  public function date_en_stringth($strYmd, $short = NULL)
  {
    $arrayYmd = explode('-', $strYmd);
    $y = $arrayYmd[0] + 543;
    $m = intval($arrayYmd[1]);
    $d = intval($arrayYmd[2]);
    if ($short == NULL)
    {
      $strMonth = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    }
    else
    {
      $strMonth = Array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    }
    return $d . ' ' . $strMonth[$m] . ' ' . $y;
  }

  public function date_th_string_th_M($strYmd)
  {
    $m = $strYmd;
    $strMonth = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    return $strMonth[$m];
  }

  public function date_en_string_th_MS($strYmd = null)
  {
    if ($strYmd != null)
    {
      $arrayYmd = explode('-', $strYmd);
      $y = $arrayYmd[0] + 543;
      $m = intval($arrayYmd[1]);
      $d = intval($arrayYmd[2]);
      $strMonth = Array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
      return $d . ' ' . $strMonth[$m] . ' ' . $y;
    }
  }

  public function date_en_string_th_num($strYmd)
  {
    $arrayYmd = explode('-', $strYmd);
    $y = $arrayYmd[0] + 543;
    $m = intval($arrayYmd[1]);
    $d = intval($arrayYmd[2]);
    return $d . '/' . $m . '/' . $y;
  }

  public function countAgeNow($param)
  {
    $End_time = new DateTime($param);
    $Answer = $End_time->diff(new DateTime);
    return $Answer;
  }
  /* Somkhane LB Date Thai ไม่ได้ใช้ */

  //Datethai
}
