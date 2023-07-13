/*
 |  tail.datetime - The vanilla way to select dates and times!
 |  @file       ./langs/tail.datetime-tr.js
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    0.4.13 - Beta
 |
 |  @website    https://github.com/pytesNET/tail.DateTime
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
/*
 |  Translator:     Murat Pala - (https://github.com/Prozexis)
 |  GitHub:         https://github.com/pytesNET/tail.DateTime/pull/30
 */
;(function(factory){
   if(typeof(define) == "function" && define.amd){
       define(function(){
           return function(datetime){ factory(datetime); };
       });
   } else {
       if(typeof(window.tail) != "undefined" && window.tail.DateTime){
           factory(window.tail.DateTime);
       }
   }
}(function(datetime){
    datetime.strings.register("th", {
        months: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "ตุลาคม", "ธันวาคม" ],
        days: ["วันอาทิตย์", "วันจันทร์", "วันอังคาร", "วันพุธ", "วันพฤหัสบดี", "วันศุกร์", "วันเสาร์"],
        shorts: ["อ.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
        time: ["ชั่วโมง", "นาที", "วินาที"],
        header: ["เลือกเดือน", "เลือกปี", "เลือกทศวรรษ", "เลือกเวลา"]
    });
    return datetime;
}));
