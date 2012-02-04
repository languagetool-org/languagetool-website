		<!-- /MAIN TEXT -->

        <p class="lastmod">Page last modified:
        	<?php
        	list($date, $time, $cet) = split(" ", $lastmod);
        	print $date;
        	?>
        </p>

	</td>
</tr>
</table>

<p class="invisible">Time to generate page:
<?php
	print sprintf("%.2fs", getmicrotime()-$start_time);
?>
</p>

</body>
</html>
