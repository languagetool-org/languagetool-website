<?php
    function getDefaultDemoTexts() {
        $map['en'] = "Paste your own text here. or check this text too see an few of of the problems that LanguageTool can detecd. What do you thinks of grammer checkers? Please not that they are not perfect.";
        $map['br'] = "Lakait amañ ho testenn vrezhonek da vezañ gwiriet. Pe implijit an frazenn-mañ gant meur a fazioù yezhadurel.";
        $map['ca'] = "Introduïu açí el vostre text. o feu servir aquest texts com a a exemple per a alguns errades que LanguageTool hi pot detectat.";
        $map['zh'] = "将文本粘贴在此，或者检测以下文本：我和她去看了二部电影。";
        $map['eo'] = "Alglui vian kontrolendan tekston ĉi tie... Aŭ nur kontrolu tiun ekzemplon. Ĉu vi vi rimarkis, ke estas gramatikaj eraro en tiu frazo? Rimarku, ke Lingvoilo ankaux atentigas pri literumaj erraroj kiel ĉi-tiu.";
        $map['fr'] = "Copiez votre texte ici ou vérifiez cet exemple contenant plusieurs erreur que LanguageTool doit doit pouvoir detecter.";
        $map['de'] = "Fügen Sie hier Ihren Text ein. oder nutzen Sie diesen Text als Beispiel für ein Paar Fehler , die LanguageTool erkennen kann: Nachdem wir die Problem bemerkten, wurden sie schnell behoben. Ihm wurde Angst und bange, als er davon hörte. ( Eine Rechtschreibprüfun findet findet übrigens auch statt.";
        $map['de-DE-x-simple-language'] = "Fügen Sie hier Ihren Text ein oder benutzen Sie diesen Text als Beispiel. Dieser Text wurde nur zum Testen geschrieben. Die Donaudampfschifffahrt darf da nicht fehlen. Und die Nutzung des Genitivs auch nicht.";
        $map['it'] = "Inserite qui lo vostro testo... oppure controlate direttamente questo ed avrete un assaggio di quali errori possono essere identificati con LanguageTool.";
        $map['pl'] = "Wpisz tekst lub użyj istniejącego przykładu. To jest przykładowy tekst który pokazuje, jak jak działa LanguageTool. LanguageTool ma jusz korektor psowni, który wyrurznia bledy na czewrono.";
        $map['pt'] = "Cola o teu próprio texto aqui... ou verifica este texto para ver alguns dos dos problemas que o LanguageTool consegue detectar.";
        $map['ru'] = "Вставьте ваш текст сюда .. или проверьте этот текстт.";
        return $map;
    }

    function getDefaultDemoText($lang) {
        $map = getDefaultDemoTexts();
        return $map[$lang];
    }

    function getDefaultDemoTextMappingForJavaScript() {
        $map = getDefaultDemoTexts();
        $result = "var languageToText = [];\n";
        foreach($map as $key => $value){
            $result = $result . "languageToText['$key'] = '".str_replace("'", "\'", $value)."';\n";
        }
        return $result;
    }

?>
