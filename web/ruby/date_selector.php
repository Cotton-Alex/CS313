<?php session_start() ?>
<form id="date_selector">
	<?php
	if (!isset($_SESSION['journal_month'])) {
		$_SESSION['journal_month'] = "01";
	}else{ $_SESSION['journal_month'] = htmlspecialchars($_GET['journal_month']);
	}
	
	if (!isset($_SESSION['journal_day'])) {
		$_SESSION['journal_day'] = "01";
	}else{ $_SESSION['journal_day'] = htmlspecialchars($_GET['journal_day']);
	}
	
	if (!isset($_SESSION['journal_name'])) {
		$_SESSION['journal_name'] = ("1946-1950");
	}else{ $_SESSION['journal_name'] = htmlspecialchars($_GET['journal_name']);
	}
	
	echo "get " . $_GET['journal_name'] . '<br>';
	echo "session " . $_SESSION['journal_name'] . '<br>';
	?>
	<span>
		<select name="journal_month" id="journal_month">
			<option value="01" <?php if ($_SESSION['journal_month'] == "01") { echo ' selected';} ?> >January</option>
			<option value="02" <?php if ($_SESSION['journal_month'] == "02") { echo ' selected';} ?> >February</option>
			<option value="03" <?php if ($_SESSION['journal_month'] == "03") { echo ' selected';} ?> >March</option>
			<option value="04" disabled>April</option>
			<option value="05" disabled>May</option>
			<option value="06" disabled>June</option>
			<option value="07" disabled>July</option>
			<option value="08" disabled>August</option>
			<option value="09" disabled>September</option>
			<option value="10" disabled>October</option>
			<option value="11" disabled>November</option>
			<option value="12" disabled>December</option>
		</select> 
	</span>
	<span>
		<select name="journal_day" id="journal_day">
			<option value="01" <?php if ($_SESSION['journal_day'] == "01") { echo ' selected';} ?> >1</option>
			<option value="02" <?php if ($_SESSION['journal_day'] == "02") { echo ' selected';} ?> >2</option>
			<option value="03" <?php if ($_SESSION['journal_day'] == "03") { echo ' selected';} ?> >3</option>
			<option value="04" <?php if ($_SESSION['journal_day'] == "04") { echo ' selected';} ?> >4</option>
			<option value="05" <?php if ($_SESSION['journal_day'] == "05") { echo ' selected';} ?> >5</option>
			<option value="06" <?php if ($_SESSION['journal_day'] == "06") { echo ' selected';} ?> >6</option>
			<option value="07" <?php if ($_SESSION['journal_day'] == "07") { echo ' selected';} ?> >7</option>
			<option value="08" <?php if ($_SESSION['journal_day'] == "08") { echo ' selected';} ?> >8</option>
			<option value="09" <?php if ($_SESSION['journal_day'] == "09") { echo ' selected';} ?> >9</option>
			<option value="10" <?php if ($_SESSION['journal_day'] == "10") { echo ' selected';} ?> >10</option>
			<option value="11" <?php if ($_SESSION['journal_day'] == "11") { echo ' selected';} ?> >11</option>
			<option value="12" <?php if ($_SESSION['journal_day'] == "12") { echo ' selected';} ?> >12</option>
			<option value="13" <?php if ($_SESSION['journal_day'] == "13") { echo ' selected';} ?> >13</option>
			<option value="14" <?php if ($_SESSION['journal_day'] == "14") { echo ' selected';} ?> >14</option>
			<option value="15" <?php if ($_SESSION['journal_day'] == "15") { echo ' selected';} ?> >15</option>
			<option value="16" <?php if ($_SESSION['journal_day'] == "16") { echo ' selected';} ?> >16</option>
			<option value="17" <?php if ($_SESSION['journal_day'] == "17") { echo ' selected';} ?> >17</option>
			<option value="18" disabled>18</option>
			<option value="19" disabled>19</option>
			<option value="20" disabled>20</option>
			<option value="21" disabled>21</option>
			<option value="22" disabled>22</option>
			<option value="23" disabled>23</option>
			<option value="24" disabled>24</option>
			<option value="25" disabled>25</option>
			<option value="26" disabled>26</option>
			<option value="27" disabled>27</option>
			<option value="28" disabled>28</option>
			<option value="29" disabled>29</option>
			<option value="30" disabled>30</option>
			<option value="31" disabled>31</option>
		</select>
	</span>
	<span>
		<select name="journal_name" id="journal_name">
			<option value="1946-1950" <?php if ($_SESSION['journal_name'] == "1946-1950") {echo ' selected';} ?> >1946-1950</option>
			<option value="1951-1955" <?php if ($_SESSION['journal_name'] == "1951-1955") {echo ' selected';} ?> >1951-1955</option>
			<option value="1956-1960" <?php if ($_SESSION['journal_name'] == "1956-1960") {echo ' selected';} ?> >1956-1960</option>
			<option value="1961-1965" disabled>1961-1965</option>
			<option value="1966-1968" disabled>1966-1968</option>
			<option value="1969-1973" disabled>1969-1973</option>
			<option value="1975-1978" disabled>1975-1978</option>
			<option value="1979-1981" disabled>1979-1981</option>
			<option value="1982-1984" disabled>1982-1984</option>
			<option value="1985-1987" disabled>1985-1987</option>
			<option value="1988" disabled>1988</option>
			<option value="1989" disabled>1989</option>
			<option value="1990" disabled>1990</option>
			<option value="1991" disabled>1991</option>
			<option value="1992-1993" disabled>1992-1993</option>
			<option value="1994" disabled>1994</option>
		</select>
	</span>
	<span>
		<input id="date_selector_go" type="submit" name="submit" value="Go">
		<?php
		//if (isset($_POST['journal_name'])) {
			$_SESSION['journal_name'] = $_GET['journal_name'];
		//}
		//if (isset($_POST['journal_month'])) {
			$_SESSION['journal_month'] = $_GET['journal_month'];
		//}
		//if (isset($_POST['journal_day'])) {
			$_SESSION['journal_day'] = $_GET['journal_day'];
		//}
		?>
	</span>
</form>