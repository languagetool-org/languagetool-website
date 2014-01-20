<?php
    function getDefaultDemoTexts() {
        // TODO: some of these texts were manually copied from Transifex (key: guiDemoText) - we need a better process for that:
        $map['ast'] = "Apega testu equí. o revisa toes les pallabres de esti testu pa ver dalgún de los problemis que LanguageTool ye pa deteutar. ¿Afáyeste con los correutores gramaticales? Has date cuenta de que entá nun son perfeutos.";
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
        $map['pt'] = "Cola o teu próprio texto aqui... ou verifica este texto, afim de ver alguns dos dos problemas que o LanguageTool consegue detectar. Isto permitirá corrigir os teus erros à última da hora.";
        $map['ru'] = "Вставьте ваш текст сюда .. или проверьте этот текстт.";
        //$map['be'] = "Гэта прыклад тэксту каб паказаць вам, як працуе LanguageTool. Майце на ўвазе, аднак, што яно не ўключае спраўджванне арфаграфіі.";
        //$map['da'] = "Dette er et teksteksempel for at at vise hvordan LanguageTool virker.";
        //$map['el'] = "";
        $map['es'] = "Este es un un ejemplo de texto de entrada para mostrar como funciona LanguageTool.";
        $map['gl'] = "Esta vai a ser unha mostra de de exemplo para amosar  o funcionamento de LanguageTool.";
        $map['is'] = "Þetta er dæmi um texta sem á að sína farm á hvernig LanguageTool virkar. Það er þó hérmeð gert ljóst að forritið framkvæmir ekki hefðbundna ritvilluleit.";
        //$map['ja'] = "";
        $map['km'] = "ឃ្លា​នេះ​បង្ហាញ​ពី​ពី​កំហុស​វេយ្យាករណ៍ ដើម្បី​បញ្ជាក់​ពី​ប្រសិទ្ធភាព​របស់​កម្មវិធី LanguageTool សំរាប់​ភាសាខ្មែរ។";
        //$map['nl'] = "";
        //$map['ro'] = "";
        $map['sk'] = "Toto je ukážkový vstup, na predvedenie funkčnosti LanguageTool. Pamätajte si si, že neobsahuje \"kontrolu\" preklepo.";
        //$map['sl'] = "";
        $map['tl'] = "Ang LanguageTool ay maganda gamit sa araw-araw. Ang talatang ito ay nagpapakita ng ng kakayahan ng LanguageTool at hinahalimbawa kung paano ito gamitin. Litaw rin sa talatang ito na may mga bagaybagay na hindii pa kayang itama nng LanguageTool.";
        //$map['uk'] = "";
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
