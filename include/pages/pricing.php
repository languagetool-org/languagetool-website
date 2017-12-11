<div id="pricing">

    <?php if ($_SERVER['REQUEST_URI'] == "/") { ?>
        <h2>Pricing</h2>
    <?php } else if ($_SERVER['REQUEST_URI'] == "/de/") { ?>
        <h2>Preise</h2>
    <?php } ?>

    <?php
    $y = "<img src='/images/check.png' alt='supported'>";
    $n = "<img src='/images/cancel_grey.png' alt='unsupported'>";
    ?>
    
    <table style="width:100%">

        <?php if ($_SERVER['REQUEST_URI'] == "/") { ?>

            <tr>
                <td></td>
                <th>Free</th>
                <th>Premium</th>
                <th>Enterprise</th>
            </tr>
            <tr>
                <td></td>
                <td>languagetool.org</td>
                <td><a href="https://languagetoolplus.com/">languagetoolplus.com</a></td>
                <td><a href="https://languagetoolplus.com/">languagetoolplus.com</a></td>
            </tr>
            <tr>
                <td>Maximum characters per check</td>
                <td>20,000</td>
                <td>40,000</td>
                <td>40,000+</td>
            </tr>
            <tr>
                <td>Basic error detection for 20+ languages</td>
                <td><?=$y?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>Personal dictionary</td>
                <td><?=$n?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>More than 100 additional English errors detected</td>
                <td><?=$n?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>More than 100 additional German errors detected</td>
                <td><?=$n?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>Add-on for Firefox &amp; Chrome</td>
                <td><?=$y?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>Add-on for Google Docs</td>
                <td><?=$y?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>Add-on for MS Word (<a href="https://languagetoolplus.com/#msword">details</a>)</td>
                <td><?=$n?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td style="vertical-align:top">Price</td>
                <td style="vertical-align:top">free</td>
                <td style="vertical-align:top">
                    <a id="order-link" href='#' data-fsc-action="Add,Checkout" data-fsc-item-path-value="languagetool-plus-premium-monthly-subscription">
                        <div class="buyButton">
                            €19/month<br>
                            <b>BUY NOW</b>
                        </div>
                    </a>
                    <br>
                    <a id="order-link" href='#' data-fsc-action="Add,Checkout" data-fsc-item-path-value="languagetool-plus-premium-1-year-subscription">
                        <div style="margin:0" class="buyButton">
                            €79/year<br>
                            <span>i.e. less than <b>€7/month</b></span><br>
                            <b>BUY NOW</b>
                        </div>
                    </a>
                    <br>or buy at <a href="https://languagetoolplus.com/#premium">languagetoolplus.com</a>
                    <!--
                    <a href="https://languagetoolplus.com/#premium">
                        <div class="buyButton">
                            buy at languagetoolplus.com
                        </div>
                    </a>
                    -->
                </td>
                <td style="vertical-align:top">
                    <script>
                        var mt = "mail" + "to";
                        var fp = "support";
                        var domain = "languagetoolplus";
                        var subject = "?subject=contact request for business premium (via lt.org)";
                        var buttonText = "On Request";
                        document.write("<a class='plan-button' href='" + mt + ":" + fp + "@" + domain + ".com" + subject + "'>" + buttonText + "</a>");
                    </script>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="background-color: white">all prices incl. VAT</td>
                <td></td>
            </tr>

        <?php } if ($_SERVER['REQUEST_URI'] == "/de/") { ?>

            <tr>
                <td></td>
                <th>Kostenlos</th>
                <th>Premium</th>
                <th>Enterprise</th>
            </tr>
            <tr>
                <td></td>
                <td>languagetool.org</td>
                <td><a href="https://languagetoolplus.com/">languagetoolplus.com</a></td>
                <td><a href="https://languagetoolplus.com/">languagetoolplus.com</a></td>
            </tr>
            <tr>
                <td>Maximale Textgröße pro Prüfung</td>
                <td>20.000</td>
                <td>40.000</td>
                <td>40.000+</td>
            </tr>
            <tr>
                <td>Fehlererkennung für über 20 Sprachen</td>
                <td><?=$y?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>Persönliches Wörterbuch</td>
                <td><?=$n?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>Englisch: Über 100 zusätzliche Fehler erkannt</td>
                <td><?=$n?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>Deutsch: Über 100 zusätzliche Fehler erkannt</td>
                <td><?=$n?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>Add-on für Firefox &amp; Chrome</td>
                <td><?=$y?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>Add-on für Google Docs</td>
                <td><?=$y?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td>Add-on für MS Word (<a href="https://languagetoolplus.com/#msword">Details</a>)</td>
                <td><?=$n?></td>
                <td><?=$y?></td>
                <td><?=$y?></td>
            </tr>
            <tr>
                <td style="vertical-align:top">Preis</td>
                <td style="vertical-align:top">kostenlos</td>
                <td style="vertical-align:top">
                    <a id="order-link" href='#' data-fsc-action="Add,Checkout" data-fsc-item-path-value="languagetool-plus-premium-monthly-subscription">
                        <div class="buyButton">
                            19€/Monat<br>
                            <b>KAUFEN</b>
                        </div>
                    </a>
                    <br>
                    <a id="order-link" href='#' data-fsc-action="Add,Checkout" data-fsc-item-path-value="languagetool-plus-premium-1-year-subscription">
                        <div style="margin:0" class="buyButton">
                            79€/Jahr<br>
                            <span>entspricht <b>6,58€/Monat</b></span><br>
                            <b>KAUFEN</b>
                        </div>
                    </a>
                    <br>oder auf <a href="https://languagetoolplus.com/#premium">languagetoolplus.com</a> kaufen
                    <!--
                    <a href="https://languagetoolplus.com/#premium">
                        <div class="buyButton">
                            auf languagetoolplus.com kaufen
                        </div>
                    </a>
                    -->
                </td>
                <td style="vertical-align:top">
                    <script>
                        var mt = "mail" + "to";
                        var fp = "support";
                        var domain = "languagetoolplus";
                        var subject = "?subject=contact request for business premium (via lt.org)";
                        var buttonText = "Auf Anfrage";
                        document.write("<a class='plan-button' href='" + mt + ":" + fp + "@" + domain + ".com" + subject + "'>" + buttonText + "</a>");
                    </script>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="background-color: white">alle Preise inkl. Mehrwertsteuer</td>
                <td></td>
            </tr>

        <?php } ?>
        
    </table>
    
</div>