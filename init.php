<html>
   <head>
      <title>EasyRiddle</title>
      <style>
        /* css code from https://codepen.io/somethingformed/pen/raWJXV, all credits to 未知天地 CLOSED */
        @import url(https://fonts.googleapis.com/css?family=VT323);.emblem,.frame,.scanlines{position:absolute}*{box-sizing:border-box}body{background:#383838;color:#14fdce;font-family:VT323;font-size:24px;-webkit-font-smoothing:none;line-height:1.2}h1{font-size:4rem;margin-bottom:1rem;text-transform:uppercase}p{margin-bottom:2rem}a,a:visited{border-bottom:.2rem solid #14fdce;color:#14fdce;text-decoration:none}a:active,a:focus,a:hover{background-color:#14fdce;color:#031e11}.piece{display:block;height:100%;left:0;top:0;width:100%}.noclick{pointer-events:none}.frame{background-color:transparent;border-radius:2rem;border:1rem solid;box-shadow:inset 0 0 18rem #000,inset 0 0 3rem #000,0 0 10rem #000;height:96%;top:2%;left:2%;width:96%;border-color:#020202 #080808 #121212}.emblem{display:none;left:50%;bottom:0;font-size:2rem;height:3rem;width:3rem;text-align:center;color:#fff;background:-webkit-linear-gradient(#fff,#555);-webkit-background-clip:text;-webkit-text-fill-color:transparent;text-shadow:0 .1rem 0 rgba(0,0,0,.4),0 0 2rem rgba(0,0,0,.8);-webkit-transform:translate(-50%);transform:translate(-50%)}.output{-webkit-animation:crt-output 10ms infinite;animation:crt-output 10ms infinite;background-color:#031e11;overflow-y:scroll;overflow-x:hidden;padding:3rem 2rem;text-shadow:0 .2rem 1rem #0c7b46;z-index:-1}@-webkit-keyframes crt-output{0%{opacity:.9}50%{opacity:1}}@keyframes crt-output{0%{opacity:.9}50%{opacity:1}}.scanlines{background:linear-gradient(to bottom,rgba(255,255,255,0),rgba(255,255,255,0) 50%,rgba(0,0,0,.2) 70%,rgba(0,0,0,.6));background-size:100% .3rem;border-radius:2rem}.glow{-webkit-animation:crt-glow 60s infinite;animation:crt-glow 60s infinite;background:radial-gradient(circle at center,#1bd459 0,rgba(27,212,89,.88) 58%,rgba(21,235,92,.57) 80%,rgba(19,94,29,.27) 93%,rgba(10,23,12,0) 100%);opacity:.15;position:fixed}@-webkit-keyframes crt-glow{0%{opacity:.1}50%{opacity:.2}}@keyframes crt-glow{0%{opacity:.1}50%{opacity:.2}}::-moz-selection{background-color:#14fdce;color:#031e11}::selection{background-color:#14fdce;color:#031e11}@font-face{font-family:uuxsl;src:url(https://i.icomoon.io/public/188ac2dd2d/VOX/uuxsl.eot)}@font-face{font-family:uuxsl;src:url(data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMg8SA1AAAAC8AAAAYGNtYXAaL8yjAAABHAAAAExnYXNwAAAAEAAAAWgAAAAIZ2x5ZiGj2jMAAAFwAAAA7GhlYWQEpbQaAAACXAAAADZoaGVhB6kDxgAAApQAAAAkaG10eAYAABkAAAK4AAAAFGxvY2EAKACKAAACzAAAAAxtYXhwAA0AMgAAAtgAAAAgbmFtZeGQWB4AAAL4AAABM3Bvc3QAAwAAAAAELAAAACAAAwQAAZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADmJgPA/8AAQAPAAEAAAAABAAAAAAAAAAAAAAAgAAAAAAACAAAAAwAAABQAAwABAAAAFAAEADgAAAAKAAgAAgACAAEAIOYm//3//wAAAAAAIOYm//3//wAB/+MZ3gADAAEAAAAAAAAAAAAAAAEAAf//AA8AAQAAAAAAAAAAAAIAADc5AQAAAAABAAAAAAAAAAAAAgAANzkBAAAAAAEAAAAAAAAAAAACAAA3OQEAAAAABwAZ/8YD5wO1AAUADQAVABsAIQAnAC8AABMVFzcnNQMFERcnNzU3ARElBxcVFwcvARUHFzcDJwcVNxcHFzc1JwcBBycHJxUFJeFVb1UZ/uJwAslVAkL+4m5vygjycfvvvs1tu1ntplntu1mbclxkylubhwefabdnmuexzwg9pf61qwh04zh+UQFLpUEx4nVoNEFoMUExAcAwMHwxMNAxMWkvMP67MXV1MXympwAAAAABAAAAAQAAwDym7F8PPPUACwQAAAAAANDPt9EAAAAA0M+30qaa/8yd5wo1aaaacaacaaaaaaaaaaeaaapa/8aaaaqaaaaaaapnaaeaaaaaaaaaaaaaaaaaaaafaaaaaaaaaaaaaaaaagaaaaqaabkaaaaaaaoafaaeahyaaqaaaauamaahaaaaaaacaaaaaaaaaaaaaaaaaaaaaaaaaa4argabaaaaaaabaaoaaaabaaaaaaacaa4aoqabaaaaaaadaaoaiaabaaaaaaaeaaoarwabaaaaaaafabyacgabaaaaaaagaauakgabaaaaaaakadqauqadaaeecqabaaoaaaadaaeecqacaa4aoqadaaeecqadaaoaiaadaaeecqaeaaoarwadaaeecqafabyacgadaaeecqagaaoalwadaaeecqakadqauqb1ahuaeabzagwavgblahiacwbpag8abgagadealgawahuadqb4ahmabhv1ehnsahuadqb4ahmababsaguazwb1agwayqbyahuadqb4ahmababgag8abgb0acaazwblag4azqbyageadablagqaiabiahkaiabjagmabwbnag8abwbuac4aaamaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa=) format("truetype"),url(data:application/font-woff;charset=utf-8;base64,d09GRgABAAAAAASYAAsAAAAABEwAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABPUy8yAAABCAAAAGAAAABgDxIDUGNtYXAAAAFoAAAATAAAAEwaL8yjZ2FzcAAAAbQAAAAIAAAACAAAABBnbHlmAAABvAAAAOwAAADsIaPaM2hlYWQAAAKoAAAANgAAADYEpbQaaGhlYQAAAuAAAAAkAAAAJAepA8ZobXR4AAADBAAAABQAAAAUBgAAGWxvY2EAAAMYAAAADAAAAAwAKACKbWF4cAAAAyQAAAAgAAAAIAANADJuYW1lAAADRAAAATMAAAEz4ZBYHnBvc3QAAAR4AAAAIAAAACAAAwAAAAMEAAGQAAUAAAKZAswAAACPApkCzAAAAesAMwEJAAAAAAAAAAAAAAAAAAAAARAAAAAAAAAAAAAAAAAAAAAAQAAA5iYDwP/AAEADwABAAAAAAQAAAAAAAAAAAAAAIAAAAAAAAgAAAAMAAAAUAAMAAQAAABQABAA4AAAACgAIAAIAAgABACDmJv/9//8AAAAAACDmJv/9//8AAf/jGd4AAwABAAAAAAAAAAAAAAABAAH//wAPAAEAAAAAAAAAAAACAAA3OQEAAAAAAQAAAAAAAAAAAAIAADc5AQAAAAABAAAAAAAAAAAAAgAANzkBAAAAAAcAGf/GA+cDtQAFAA0AFQAbACEAJwAvAAATFRc3JzUDBREXJzc1NwERJQcXFRcHLwEVBxc3AycHFTcXBxc3NScHAQcnBycVBSXhVW9VGf7icALJVQJC/uJuVcoCWHBVb1bNU1NTU6ZTU1NTAXJVyspVAR8BHwG3ZzFBMWcBvaX+tUFodOMx/lEBS6VBMeJ1aDRBaDFBMQHAMDB8MTDQMTFpLzD+uzF1dTF8pqcAAAAAAQAAAAEAAMA8puxfDzz1AAsEAAAAAADQz7fRAAAAANDPt9EAAP/GA+cDtQAAAAgAAgAAAAAAAAABAAADwP/AAAAEAAAAAAAD5wABAAAAAAAAAAAAAAAAAAAABQAAAAAAAAAAAAAAAAIAAAAEAAAZAAAAAAAKABQAHgB2AAEAAAAFADAABwAAAAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAOAK4AAQAAAAAAAQAKAAAAAQAAAAAAAgAOADkAAQAAAAAAAwAKACAAAQAAAAAABAAKAEcAAQAAAAAABQAWAAoAAQAAAAAABgAFACoAAQAAAAAACgA0AFEAAwABBAkAAQAKAAAAAwABBAkAAgAOADkAAwABBAkAAwAKACAAAwABBAkABAAKAEcAAwABBAkABQAWAAoAAwABBAkABgAKAC8AAwABBAkACgA0AFEAdQB1AHgAcwBsAFYAZQByAHMAaQBvAG4AIAAxAC4AMAB1AHUAeABzAGx1dXhzbAB1AHUAeABzAGwAUgBlAGcAdQBsAGEAcgB1AHUAeABzAGwARgBvAG4AdAAgAGcAZQBuAGUAcgBhAHQAZQBkACAAYgB5ACAASQBjAG8ATQBvAG8AbgAuAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA) format("woff");font-weight:400;font-style:normal}::-moz-selection [class*=" icon-"],::-moz-selection [class^=icon-]{font-family:uuxsl;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}::selection [class*=" icon-"],::selection [class^=icon-]{font-family:uuxsl;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}::-moz-selection .icon-information:before{content:"\e626"}::selection .icon-information:before{content:"\e626"}::-moz-selection .noisy{background-image:url(data:image/png;base64,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BdQCt/NFsO7SR3U4wzdIPqVUhTQRsMFkXOLYoxqt/5wmcUeGbvbP3DXMQs+UjtdYbrdYiDHkotm7jhbIOeBIeh+xt5UtOkhXbHNs6oY6d2gNSWo7yYsvsWZrCWHR2nhvTlaRyrRXIPxr92v4FUypdjop3JubW+8rqnoik6tkchkfvktlsu9eoftfa2pqq7x6dkzezeva89dkkxs5hbxoe2ysvgnw3xjrc5cogursildniz3w8jrwiaojrsth6v4gcg9dqiszh4eyomthn1twqzbmftxtqch2d109zy1ms68q3kv32p72jkesqtehb2ddxgnkmnbrhocazrl60hzn5sgq4syypgfzpw2l0d3pigyguqhnnifoztlgfnoxdrlhrsuzfr9x7ww52mahempi1lyllkk+kbGrRnW9xMuzFSsQ6HF4UZa36+58ohrjcd6+1izulnevykioa15h7metxhqyfsuajgrwrv7khz45nfve39udtxjbptduapzahhffdgdapdwhmpquwxpymeusx2uejjfxihfth5/8oo/YhVrd3SuWYKpu1Heqe0Un7awM9+4dhwpnqlxkw6iboeprhegge5tcukksdvlh6zznyh73ru24jfgzhimdqqbc202pytny4vrb3afppuow780xl3kouzobth4e/IfWZ+tiMQYsWTLZ9nNNIWt9oPmdJ61ThjffV4AwbP1sglM7wB4h6QK9vxV92/RkP+32k+9zk2hirvt3t/U6Y4gPrO+14qfpdyjq4thx3vmqxmpjczx9y4nfsl8j62cei4rlctqw3ru8yv0hlpkzcojpthu6le56+0uamvsh7mho5mz/X9JTdLUPSWG3HKk+gzXLtyAHcvdJ/b5cg2sqqJZSQtj61USjDL3dE3yDhnb1OnkK/vx1afjm7le4lhs5U2aJdGHiwaeOM/VkgajD6qeBBrZuWUz3kF0IUTfCaKS58Z/f3zaq4KoY/eTJKDVIxLgLWVxCVoq90pKyWKFP4Y1PbfjCuWamNKDB0AqectEp/JjczR39ah1gz117WrnzNPjdb3iVhGmP5uOar6HuKhg2b9Zd2mCKfY5upytF6cJc7AoIhYX1uz+xsOP4oC9rbebXycDo5EdinLbkc7VrPDkXWwRaLor01s2lV42brf2Ilr6e5LlbZcnn+fttxI1In5J7F18KoefSyCrG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)}::selection .noisy{background-image:url(data:image/png;base64,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BdQCt/NFsO7SR3U4wzdIPqVUhTQRsMFkXOLYoxqt/5wmcUeGbvbP3DXMQs+UjtdYbrdYiDHkotm7jhbIOeBIeh+xt5UtOkhXbHNs6oY6d2gNSWo7yYsvsWZrCWHR2nhvTlaRyrRXIPxr92v4FUypdjop3JubW+8rqnoik6tkchkfvktlsu9eoftfa2pqq7x6dkzezeva89dkkxs5hbxoe2ysvgnw3xjrc5cogursildniz3w8jrwiaojrsth6v4gcg9dqiszh4eyomthn1twqzbmftxtqch2d109zy1ms68q3kv32p72jkesqtehb2ddxgnkmnbrhocazrl60hzn5sgq4syypgfzpw2l0d3pigyguqhnnifoztlgfnoxdrlhrsuzfr9x7ww52mahempi1lyllkk+kbGrRnW9xMuzFSsQ6HF4UZa36+58ohrjcd6+1izulnevykioa15h7metxhqyfsuajgrwrv7khz45nfve39udtxjbptduapzahhffdgdapdwhmpquwxpymeusx2uejjfxihfth5/8oo/YhVrd3SuWYKpu1Heqe0Un7awM9+4dhwpnqlxkw6iboeprhegge5tcukksdvlh6zznyh73ru24jfgzhimdqqbc202pytny4vrb3afppuow780xl3kouzobth4e/IfWZ+tiMQYsWTLZ9nNNIWt9oPmdJ61ThjffV4AwbP1sglM7wB4h6QK9vxV92/RkP+32k+9zk2hirvt3t/U6Y4gPrO+14qfpdyjq4thx3vmqxmpjczx9y4nfsl8j62cei4rlctqw3ru8yv0hlpkzcojpthu6le56+0uamvsh7mho5mz/X9JTdLUPSWG3HKk+gzXLtyAHcvdJ/b5cg2sqqJZSQtj61USjDL3dE3yDhnb1OnkK/vx1afjm7le4lhs5U2aJdGHiwaeOM/VkgajD6qeBBrZuWUz3kF0IUTfCaKS58Z/f3zaq4KoY/eTJKDVIxLgLWVxCVoq90pKyWKFP4Y1PbfjCuWamNKDB0AqectEp/JjczR39ah1gz117WrnzNPjdb3iVhGmP5uOar6HuKhg2b9Zd2mCKfY5upytF6cJc7AoIhYX1uz+xsOP4oC9rbebXycDo5EdinLbkc7VrPDkXWwRaLor01s2lV42brf2Ilr6e5LlbZcnn+fttxI1In5J7F18KoefSyCrG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)}
     </style>
  </head>
<body class="noisy">
   <div class="emblem">
      <span class="icon-information"></span>
   </div>
   <div class="frame">
   <div class="piece output">
<?php
/* 
 * EasyRiddle
 * @ 07/14/2018
 * */

class navigator {
    public function __construct()
    {
        date_default_timezone_set('America/Sao_Paulo');
        print("<h1 style=\"color:#00FF00\">[+] Initialized at " . date("Y-m-d H:i:s") . ", enjoy the ride.</h1>");
    }
    
    public function get($url) {
        $i = curl_init();
        curl_setopt($i, CURLOPT_URL, $url);
        curl_setopt($i, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($i, CURLOPT_SSL_VERIFYPEER, false);
        $_SERVER['NAVIGATOR_HTML'] = curl_exec($i);
        $_SERVER['NAVIGATOR_URL'] = $url;
        curl_close($i);
        print("<p>" . "[+] Discovered URL: <a target=\"_\" href=\"" . $this->getCurrentURL() . "\">" . $this->getCurrentURL() . "</a></p>");
    }
    
    public function getCurrentURL() {
        return $_SERVER['NAVIGATOR_URL'];
    }

    public function getCurrentHTML() {
        return str_replace("http://","https://",$_SERVER['NAVIGATOR_HTML']);
    }
}

class utils {
    public function cut($str, $start, $end){ // https://stackoverflow.com/a/9826656
        $str = ' ' . $str;
        $ini = strpos($str, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($str, $end, $ini) - $ini;
        return substr($str, $ini, $len);
    }
    
    public function decode($js) {
        return rawurldecode($js);
    }
    
    public function hijackFunction($html) {
        print("<p style=\"color:#fdff00\">" . "[+] Hijacking code..." . "</p>");
        $s = "document.write(unescape(\"";
        $e = "\"));";
        $error = "FAILED";
        
        if(strpos($html,$s) && strpos($html,$e)) {
            $encoded = $this->cut(trim($html),$s,$e);
            $decoded = $this->decode($encoded);
            $src = "function fun() {" . $this->cut($decoded,"function myFunction() {","</script>");
            print("<p style=\"color:#00FF00\">" . "[+] Success!" . "</p>");
            return $src;
        } else {
            print("<p style=\"color:#ff0000\">" . "[-] Failed to hijack, are we done?!" . "</p>");
            return $error;
        }
    }
    
    public function getSecretPhrase($function)  {
        if(!strpos($function,"if (person == \""))
            return "FAILED";
        else {
              $secret = $this->cut($function,"if (person == \"","\"");
              print("<p>" . "[+] Secret Phrase: " . $secret . "</p>");
              return $secret;
        }
    }
    
    public function getSecretURL($function) {
        if(!strpos($function,"window.location = \""))
            return "FAILED";
        else
            $function = strtolower($function);
                
        return str_replace("http://","https://",$this->cut($function,"window.location = \"","\""));
    }
}

class timer {
    public function __construct()
    {
        $_SERVER['CLOCK_START'] = $this->getTime();
    }
    
    public function getElapsedTime() {
        $time = strtotime($this->getTime()) - strtotime($_SERVER['CLOCK_START']);
        $str = "";
        
        $days    = floor($time / 86400);
        $hours   = floor(($time - ($days * 86400)) / 3600);
        $minutes = floor(($time - ($days * 86400) - ($hours * 3600))/60);
        $seconds = floor(($time - ($days * 86400) - ($hours * 3600) - ($minutes*60)));
        
        if($days > 0)
            $str .= $days . " days, ";
            
            if($hours > 0)
                $str .= $hours . " hours, ";
                
                if($minutes > 0)
                    $str .= $minutes . " minutes, ";
                    
        $str .= $seconds . " second" . ($seconds != 1 ? "s" : "");
                    
        return $str;
    }
    
    private function getTime() {
        return date("Y-m-d H:i:s");
    }
}

$browser = new navigator();
$utils = new utils();
$timer = new timer();

$browser->get("https://riddlediario.com/br_inicial.html");

$browser->get($utils->cut($browser->getCurrentHTML(),"<area shape=\"rect\" coords=\"810,460,570,400\" href=\"","\""));

while(true) {
    $function = $utils->hijackFunction($browser->getCurrentHTML());
    
    if($function == "FAILED")
        break;
        
    $secretURL = $utils->getSecretURL($function);
    $secretPhrase = $utils->getSecretPhrase($function);
        
    $browser->get($secretURL);
}

print("<p style=\"color:#00FF00\">[+] Finished in " . $timer->getElapsedTime() . ", Final URL: <a target=\"_\" href=\"" . $browser->getCurrentURL() . "\">" . $browser->getCurrentURL() . "</a></p>");

?>
     </div>
     <div class="piece scanlines noclick"></div>
     <div class="piece glow noclick"></div>
  </div>	
  </body>
</html>
