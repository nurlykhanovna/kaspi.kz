<?php

/* @var $this yii\web\View */

$this->title = 'Quick Translit';
?>

    <div id="container" class=container>
        <div class=lcenter>
            <div class=input-top>
                <div class=input-top-left>
                    <button type=button class=convert-button id=convert-text><?=Yii::t('app','convert');?></button>
                </div>
                <div class=input-top-right>
                    <input type=checkbox checked class=checkbox-auto-convert>&nbsp; Ілеспе сәйкестендіру
                </div>
                    <div class=clearfix>

                    </div>
            </div>
            <div class=input-content><div class="input-box input-left">
                    <a class=clear-textarea-icon> <i class="fa fa-eraser" aria-hidden=true></i> </a>
                    <i class=word-counter-icon><i class=current-word-count>0</i> / 5000</i>
                    <textarea id="Articles_name_text" class=convert-textarea spellcheck=false autocapitalize=off autocomplete=off autocorrect=off></textarea>
                </div>
                <div class="input-box input-right">
                    <div class=input-result-box>
                        <div class=convert-result id="Articles_url_text">

                        </div>
                        <div class=convert-result-copy><a class=copy-result-btn href=javascript:void(0) title=Көшіру>
                                <i class="fa fa-copy" aria-hidden=true></i>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class=clearfix>

            </div>
        </div>
    </div>
    <!--<div class=convert-file>
        <div class="lcenter file-box">
            <div class=file-box-left>
                <p><button class=file-button id=upload-file type=button>Құжатты таңдаңыз (.docx,.xlsx)</button>
                    <input type=file id=files name=files multiple style=display:none accept=".docx, .xlsx">
                <p>Құжат үлкендігі 30mb тан аспауы тиіс және ең көп болғанда 5 құжат жүктей аласыз!</div>
            <div class=file-box-right>
                <button type=button disabled class=convert-button id=convert-file>Сәйкестендіру</button>
            </div>
            <div class=clearfix></div>
        </div>
    </div>-->

    <div class="smpdf_X5_ZVfbBLEGlDR">
        <div>
            <label for="omnibox-file-input" class="omnibox start accept-file-input" data-type="regular">
                <div class="progress"></div>
                <div class="omnibox-inner">
                    <div class="panel status-panel">
                        <div class="panel-inner">
                            <span class="file-status smpdf_2GsMtVJZ-b3zc5 smpdf_IiJr5OS4rrdoAH smpdf_3qt7CAJFP8NsFL">
                                <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" id="svg4709" version="1.1" viewBox="0 0 50 62"><g id="pdf"><path fill="none" d="M 7.0019531,2 C 5.8819024,2 5,2.8827234 5,3.9960938 V 37 h 21 c 1.662,0 3,1.338 3,3 v 10 c 0,1.662 -1.338,3 -3,3 H 5 v 5.003906 C 5,59.121786 5.8835012,60 7.0058594,60 H 45.994141 C 47.113827,60 48,59.11647 48,58.007812 V 15.654297 C 47.952823,14.719459 47.83578,13.90564 47.53125,13.361328 47.087107,12.567475 46.318217,12 44,12 H 38 V 5.9960938 C 38,4.0794384 37.726732,3.1306339 37.291016,2.6933594 37.168649,2.570552 36.891379,2.4980719 36.679688,2.4042969 36.276252,2.2752734 35.896505,2.170831 35.544922,2.125 35.094351,2.065436 34.677833,1.99491 34.007812,2 Z M 39.84375,4.2578125 C 39.91174,4.8110345 40,5.3354446 40,5.9960938 V 10 h 4 c 0.793017,-2e-7 1.340004,0.219667 1.960938,0.375 z M 12,23 h 1 26 1 v 2 H 39 13 12 Z m 0,7 h 1 26 1 v 2 H 39 13 12 Z m 20.742188,7 h 1 H 39 40 v 2 h -1 -5.257812 -1 z m 0,7 h 1 H 39 40 v 2 h -1 -5.257812 -1 z M 7.7695312,44.564453 c -0.1453681,0.120723 -0.3270436,0.211523 -0.546875,0.271485 0.2198969,-0.06002 0.4014195,-0.148737 0.546875,-0.269532 z M 32.742188,51 h 1 H 39 40 v 2 h -1 -5.257812 -1 z" id="icon-background"></path><path fill="#000000" d="M 7.0019531,0 C 4.8039119,0 3,1.8002431 3,3.9960938 V 37 c -1.662,0 -3,1.338 -3,3 v 10 c 0,1.662 1.338,3 3,3 v 5.003906 C 3,60.203281 4.8090781,62 7.0058594,62 H 45.994141 C 48.190766,62 50,60.203373 50,58.007812 V 14.992188 C 50,12.954402 49.026128,10.612065 47.585938,9.171875 L 40.828125,2.4140625 C 39.384608,0.97054651 37.037098,0 34.998047,0 Z m 0,2 H 34.998047 c 1.277261,0 3.512459,0.9245684 4.416015,1.828125 l 6.757813,6.757813 C 47.074379,11.488441 48,13.719241 48,14.992188 V 58.007812 C 48,59.11647 47.113827,60 45.994141,60 H 7.0058594 C 5.8835012,60 5,59.121786 5,58.003906 V 53 h 21 c 1.662,0 3,-1.338 3,-3 V 40 c 0,-1.662 -1.338,-3 -3,-3 H 5 V 3.9960938 C 5,2.8827234 5.8819024,2 7.0019531,2 Z M 4,41 h 1 1.5097656 c 1.7667898,0 3.0839844,0.611376 3.0839844,2.470703 0,0.221713 -0.021208,0.428935 -0.060547,0.621094 -0.07874,0.384344 -0.2325171,0.709203 -0.4472656,0.978515 -0.5365339,0.673142 -1.453562,0.994141 -2.5273437,0.994141 H 5.4140625 V 49 H 5 4 Z m 7.628906,0 h 2.132813 c 1.827713,0 3.092714,0.742277 3.611328,2.228516 0.08645,0.247687 0.153184,0.515708 0.197265,0.804687 0.04427,0.289557 0.06641,0.598658 0.06641,0.929688 0,0.331804 -0.02248,0.643713 -0.06641,0.935547 -0.04396,0.291845 -0.109396,0.563 -0.195312,0.814453 -0.429053,1.258196 -1.370908,2.007655 -2.699219,2.222656 C 14.410209,48.978539 14.129465,49 13.833984,49 h -2.205078 z m 8.152344,0 h 4.814453 v 1.199219 h -3.400391 v 2.261719 h 2.900391 v 1.199218 H 21.195312 V 49 H 19.78125 Z M 5.4140625,42.136719 v 2.789062 h 1.0351563 c 0.1477401,0 0.2853087,-0.0065 0.4140624,-0.02148 0.1287729,-0.01496 0.2494267,-0.03835 0.359375,-0.06836 0.2198313,-0.05996 0.4015068,-0.150762 0.546875,-0.271485 0.1453683,-0.120723 0.2540808,-0.27084 0.3261719,-0.453125 0.072091,-0.182285 0.1074219,-0.395977 0.1074219,-0.640625 0,-0.502283 -0.154988,-0.835082 -0.4589844,-1.042969 C 7.6684048,42.375706 7.5843211,42.331944 7.4902344,42.294922 7.2078669,42.18397 6.8436112,42.136719 6.4003906,42.136719 Z m 7.6289065,0.01367 v 5.699218 h 0.621093 c 0.201049,0 0.391418,-0.01404 0.570313,-0.04297 0.895143,-0.144754 1.506438,-0.654032 1.783203,-1.5625 0.110734,-0.362947 0.167969,-0.788896 0.167969,-1.28125 0,-0.489297 -0.05723,-0.91021 -0.167969,-1.265625 -0.332415,-1.066514 -1.147224,-1.546875 -2.353516,-1.546875 z" id="icon-outlines"></path><path fill="#000000" d="m 34.007812,2 c 0.670021,-0.00509 1.086539,0.065436 1.53711,0.125 0.351583,0.045831 0.73133,0.1502734 1.134766,0.2792969 0.211691,0.093775 0.488961,0.1662551 0.611328,0.2890625 C 37.726732,3.1306339 38,4.0794384 38,5.9960938 V 12 h 6 c 2.318217,0 3.087107,0.567475 3.53125,1.361328 0.30453,0.544312 0.421573,1.358131 0.46875,2.292969 v -0.662109 c 0,-1.272947 -0.925621,-3.503747 -1.828125,-4.40625 L 45.960938,10.375 C 45.340004,10.219667 44.793017,9.9999998 44,10 H 40 V 5.9960938 C 40,5.3354446 39.91174,4.8110345 39.84375,4.2578125 L 39.414062,3.828125 C 38.510506,2.9245684 36.275308,2 34.998047,2 Z" id="icon-fold"></path><path fill="#ffffff" d="M 4,49 H 5.4134318 V 46.06422 H 6.558799 c 1.7180508,0 3.0340045,-0.819572 3.0340045,-2.593272 C 9.5928035,41.611621 8.2768498,41 6.51006,41 H 4 Z m 1.4134318,-4.073395 v -2.78899 h 0.9869654 c 1.1819214,0 1.803344,0.330275 1.803344,1.333333 0,0.978593 -0.5726836,1.455657 -1.754605,1.455657 z M 11.629092,49 h 2.205441 c 2.363842,0 3.801644,-1.382263 3.801644,-4.036697 C 17.636177,42.321101 16.198375,41 13.761424,41 h -2.132332 z m 1.413431,-1.149847 v -5.700306 h 0.621423 c 1.608388,0 2.522245,0.856269 2.522245,2.813456 0,1.969419 -0.913857,2.88685 -2.522245,2.88685 z M 19.782128,49 h 1.413432 v -3.33945 h 2.899972 V 44.461774 H 21.19556 v -2.262997 h 3.399547 V 41 h -4.812979 z" id="icon-label"></path><path fill="#000000" d="m 12,23 v 2 h 1 26 1 V 23 H 39 13 Z m 0,7 v 2 h 1 26 1 V 30 H 39 13 Z m 20.742188,7 v 2 h 1 H 39 40 v -2 h -1 -5.257812 z m 0,7 v 2 h 1 H 39 40 v -2 h -1 -5.257812 z m 0,7 v 2 h 1 H 39 40 v -2 h -1 -5.257812 z" id="icon-content"></path></g></svg>
                            </span>
                            <div class="current-state current-state-regular">
                                <p class="state state-start state-dragging">Перетяните PDF сюда
                                    <span class="omnibox-choose">
                                        <span class="omnibox-link">Выберите файл</span>
                                    </span>
                                </p>
                                <p class="state state-uploading" style="display: none;">Загрузка</p>
                                <p class="state state-processing" style="display: none;">Конвертирую</p>
                            </div>
                        </div>
                    </div>
                </div>
            </label>
            <div class="omnibox-input">
                <input id="omnibox-file-input" name="file-input" type="file" multiple="true">
            </div>
        </div><noscript></noscript></div>

<script>
    $('.clear-textarea-icon').click(function () {
        $('textarea#Articles_name_text').val('');
        $(".convert-result").text('');
    });

    function Checkstatus() {
        var check = 1;
            if ( $("input[type='checkbox']").is(":checked") ) {
                check = 1;
            }else {
                check = 0;
            }
        return check;
    }
    if ( Checkstatus() == 1) {
        //or use keyup(function(){});
        $('textarea#Articles_name_text').bind("input propertychange", function () {
            var text = cyr2lat($('textarea#Articles_name_text').val());
            var length = $(this).val().length;
            $(".convert-result").text(text);
            $(".current-word-count").text(length);
        });
    }else {
    }

        function cyr2lat(str) {
            var cyr2latChars = new Array(
                ['а', 'a'], ['б', 'b'], ['в', 'v'], ['г', 'g'],
                ['д', 'd'], ['е', 'e'], ['ё', 'yo'], ['ж', 'zh'], ['з', 'z'],
                ['и', 'i'], ['й', 'y'], ['к', 'k'], ['л', 'l'],
                ['м', 'm'], ['н', 'n'], ['о', 'o'], ['п', 'p'], ['р', 'r'],
                ['с', 's'], ['т', 't'], ['у', 'y'], ['ф', 'f'],
                ['х', 'h'], ['ц', 'c'], ['ч', 'ch'], ['ш', 'sh'], ['щ', 'shch'],
                ['ъ', ''], ['ы', 'y'], ['ь', ''], ['э', 'e'], ['ю', 'yu'], ['я', 'ya'],
                ['ә', "a'"],
                ['і', "i'"],
                ['ң', "n'"],
                ['ғ', "g'"],
                ['ү', "u'"],
                ['ұ', "u"],
                ['қ', "q"],
                ['ө', "o'"],
                ['һ', "h"],

                ['А', 'A'], ['Б', 'B'], ['В', 'V'], ['Г', 'G'],
                ['Д', 'D'], ['Е', 'E'], ['Ё', 'YO'], ['Ж', 'ZH'], ['З', 'Z'],
                ['И', 'I'], ['Й', 'I'], ['К', 'K'], ['Л', 'L'],
                ['М', 'M'], ['Н', 'N'], ['О', 'O'], ['П', 'P'], ['Р', 'R'],
                ['С', 'S'], ['Т', 'T'], ['У', "Y'"], ['Ф', 'F'],
                ['Х', 'H'], ['Ц', 'C'], ['Ч', 'CH'], ['Ш', 'SH'], ['Щ', 'SHCH'],
                ['Ъ', ''], ['Ы', 'Y'],
                ['Ь', ''],
                ['Э', 'E'],
                ['Ю', 'YU'],
                ['Я', 'YA'],

                ['Ә', "A'"],
                ['І', "I'"],
                ['Ң', "N'"],
                ['Ғ', "G'"],
                ['Ү', "U'"],
                ['Ұ', "U"],
                ['Қ', "Q"],
                ['Ө', "O'"],
                ['Һ', "H"],

                ['a', 'a'], ['b', 'b'], ['c', 'c'], ['d', 'd'], ['e', 'e'],
                ['f', 'f'], ['g', 'g'], ['h', 'h'], ['i', 'i'], ['j', 'j'],
                ['k', 'k'], ['l', 'l'], ['m', 'm'], ['n', 'n'], ['o', 'o'],
                ['p', 'p'], ['q', 'q'], ['r', 'r'], ['s', 's'], ['t', 't'],
                ['u', 'u'], ['v', 'v'], ['w', 'w'], ['x', 'x'], ['y', 'y'],
                ['z', 'z'],

                ['A', 'A'], ['B', 'B'], ['C', 'C'], ['D', 'D'], ['E', 'E'],
                ['F', 'F'], ['G', 'G'], ['H', 'H'], ['I', 'I'], ['J', 'J'], ['K', 'K'],
                ['L', 'L'], ['M', 'M'], ['N', 'N'], ['O', 'O'], ['P', 'P'],
                ['Q', 'Q'], ['R', 'R'], ['S', 'S'], ['T', 'T'], ['U', 'U'], ['V', 'V'],
                ['W', 'W'], ['X', 'X'], ['Y', 'Y'], ['Z', 'Z'],

                [' ', ' '], ['0', '0'], ['1', '1'], ['2', '2'], ['3', '3'],
                ['4', '4'], ['5', '5'], ['6', '6'], ['7', '7'], ['8', '8'], ['9', '9'],
                ['-', '-'], ["\n", "\n"],
            );

            var Categorytr = new String();
            for (var i = 0; i < str.length; i++) {
                ch = str.charAt(i);
                var newCh = '';
                for (var j = 0; j < cyr2latChars.length; j++) {
                    if (ch == cyr2latChars[j][0]) {
                        newCh = cyr2latChars[j][1];
                    }

                }
                // Если найдено совпадение, то добавляется соответствие, если нет - пустая строка
                Categorytr += newCh;
            }
            // Удаляем повторяющие знаки - Именно на них заменяются пробелы.
            // Так же удаляем символы перевода строки, но это наверное уже лишнее
            return Categorytr;
            /*.replace(/[-]{2,}/gim, '-').replace(/\n/gim, '')*/
        }
</script>
<!--
<script type='text/javascript'>
    var arrru = new Array ('Я','я','Ю','ю','Ч','ч','Ш','ш','Щ','щ','Ж','ж','А','а','Б','б','В','в','Г','г','Д','д','Е','е','Ё','ё','З','з','И','и','Й','й','К','к','Л','л','М','м','Н','н', 'О','о','П','п','Р','р','С','с','Т','т','У','у','Ф','ф','Х','х','Ц','ц','Ы','ы','Ь','ь','Ъ','ъ','Э','э');

    var arren = new Array ('Ya','ya','Yu','yu','Ch','ch','Sh','sh','Sh','sh','Zh','zh','A','a','B','b','V','v','G','g','D','d','E','e','E','e','Z','z','I','i','J','j','K','k','L','l','M','m','N','n', 'O','o','P','p','R','r','S','s','T','t','U','u','F','f','H','h','C','c','Y','y','`','`','\'','\'','E', 'e');

    function cyrill_to_latin(text){
        for(var i=0; i<arrru.length; i++){
            var reg = new RegExp(arrru[i], "g");
            text = text.replace(reg, arren[i]);
        }
        return text;
    }

    function latin_to_cyrill(id){
        var text = $("#"+id).html();
        for(var i=0; i<arren.length; i++){
            var reg = new RegExp(arren[i], "g");
            text = text.replace(reg, arrru[i]);
        }
        $("#"+id).html(text);
    }


    function translit(){
        $("[name=result]").val(cyrill_to_latin($("[name=translit]").val()));
    }

    $('textarea#Articles_name_text').bind("input propertychange",function() {
        var text = cyr2lat($('textarea#Articles_name_text').val());
        $( ".convert-result" ).text( text );
    });
</script>-->