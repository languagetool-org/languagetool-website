<div id="pricing">

    <h2>Pricing</h2>

    <?php
    $y = "<img src='images/check.png' alt='supported'>";
    $n = "<img src='images/cancel_grey.png' alt='unsupported'>";
    ?>
    
    <table style="width:100%">
        
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
        <!--
        <tr>
            <td>Access via HTTP API</td>
            <td><?=$n?></td>
            <td><?=$n?></td>
            <td><?=$y?></td>
        </tr>
        -->
        <!--
        <tr>
            <td>Price</td>
            <td>free</td>
            <td>
                19€/month or<br>
                79€/year = <b>less than 7€/month</b>
            </td>
            <td>
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
        -->
        <tr>
            <td>Price</td>
            <td>free</td>
            <td>
                <a id="order-link" href='#' data-fsc-action="Add,Checkout" data-fsc-item-path-value="languagetool-plus-premium-monthly-subscription">
                    <div class="buyButton">
                        19€/month<br>
                        <b>BUY NOW</b>
                    </div>
                </a>
                <br>
                <a id="order-link" href='#' data-fsc-action="Add,Checkout" data-fsc-item-path-value="languagetool-plus-premium-1-year-subscription">
                    <div style="margin:0" class="buyButton">
                        79€/year<br>
                        <b>BUY NOW</b>
                    </div>
                </a>
                <br>or buy at <a href="https://languagetoolplus.com/#premium">languagetoolplus.com</a>
            </td>
            <td>
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
        
    </table>
    
</div>