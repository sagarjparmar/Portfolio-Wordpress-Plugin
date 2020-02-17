<?php
echo  "this is portfolio add template"; 
?>
<div class="wrap">
<h1>Add New Portfolio</h1>

<form method="post" action="" novalidate="">
    <input type="hidden" name="option_page" value="general">
    <input type="hidden" name="action" value="update"><input type="hidden" id="_wpnonce" name="_wpnonce" value="56fe46d028"><input type="hidden" name="_wp_http_referer" value="">
    <table class="form-table" role="presentation">
    <tbody>
        <tr>
            <th scope="row">
                <label for="portfolioTitle">Portfolio Title</label>
            </th>
            <td>
                <input name="portfolio_name" type="text" id="portfolio_name" value="" placeholder="Enter Portfolio title" class="regular-text">
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfolioSubTitle">Portfolio Subtitle</label>
        </th>
        <td>
            <input name="portfolio_subtitle" type="text" id="portfolio_subtitle" value="" placeholder="Enter Portfolio Subtitle" class="regular-text">
            <p class="description" id=""></p></td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfoliourl">Portfolio Address (URL)</label>
            </th>
            <td>
                <input name="portfoliourl" type="portfoliourl" id="portfoliourl" value="" placeholder="www.portfolioexample.com" class="regular-text code">
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="description">Portfolio description</label>
            </th>
            <td>
                <textarea name="portfolio_description"  id="description" class="regular-text code"></textarea>
	            <p class="description" id="home-description"></p>
            </td>
        </tr>
        <tr>
<th scope="row"><label for="new_admin_email">Email Address</label></th>
<td><input name="new_admin_email" type="email" id="new_admin_email" aria-describedby="new-admin-email-description" value="sp@logixbuilt.com" class="regular-text ltr">
<p class="description" id="new-admin-email-description">This address is used for admin purposes. If you change this we will send you an email at your new address to confirm it. <strong>The new address will not become active until confirmed.</strong></p>
</td>
</tr>


<tr>
<th scope="row">Membership</th>
<td> <fieldset><legend class="screen-reader-text"><span>Membership</span></legend><label for="users_can_register">
<input name="users_can_register" type="checkbox" id="users_can_register" value="1">
	Anyone can register</label>
</fieldset></td>
</tr>

<tr>
<th scope="row"><label for="default_role">New User Default Role</label></th>
<td>
<select name="default_role" id="default_role">
</select>
</td>
	</tr>
	<tr>
<th scope="row"><label for="timezone_string">Timezone</label></th>
<td>

<select id="timezone_string" name="timezone_string" aria-describedby="timezone-description">
	</select>

<p class="description" id="timezone-description">Choose either a city in the same timezone as you or a UTC timezone offset.</p>

<p class="timezone-info">
	<span id="utc-time">
	Universal time (<abbr>UTC</abbr>) is <code>2020-02-15 06:48:56</code>.	</span>
</p>

</td>

</tr>
<tr>
<th scope="row">Date Format</th>
<td>
	<fieldset><legend class="screen-reader-text"><span>Date Format</span></legend>
	<label><input type="radio" name="date_format" value="F j, Y" checked="checked"> <span class="date-time-text format-i18n">February 15, 2020</span><code>F j, Y</code></label><br>
	<label><input type="radio" name="date_format" value="Y-m-d"> <span class="date-time-text format-i18n">2020-02-15</span><code>Y-m-d</code></label><br>
	<label><input type="radio" name="date_format" value="m/d/Y"> <span class="date-time-text format-i18n">02/15/2020</span><code>m/d/Y</code></label><br>
	<label><input type="radio" name="date_format" value="d/m/Y"> <span class="date-time-text format-i18n">15/02/2020</span><code>d/m/Y</code></label><br>
<label><input type="radio" name="date_format" id="date_format_custom_radio" value="\c\u\s\t\o\m"> <span class="date-time-text date-time-custom-text">Custom:<span class="screen-reader-text"> enter a custom date format in the following field</span></span></label><label for="date_format_custom" class="screen-reader-text">Custom date format:</label><input type="text" name="date_format_custom" id="date_format_custom" value="F j, Y" class="small-text"><br><p><strong>Preview:</strong> <span class="example">February 15, 2020</span><span class="spinner"></span>
</p>	</fieldset>
</td>
</tr>
<tr>
<th scope="row">Time Format</th>
<td>
	<fieldset><legend class="screen-reader-text"><span>Time Format</span></legend>
	<label><input type="radio" name="time_format" value="g:i a" checked="checked"> <span class="date-time-text format-i18n">6:48 am</span><code>g:i a</code></label><br>
	<label><input type="radio" name="time_format" value="g:i A"> <span class="date-time-text format-i18n">6:48 AM</span><code>g:i A</code></label><br>
	<label><input type="radio" name="time_format" value="H:i"> <span class="date-time-text format-i18n">06:48</span><code>H:i</code></label><br>
<label><input type="radio" name="time_format" id="time_format_custom_radio" value="\c\u\s\t\o\m"> <span class="date-time-text date-time-custom-text">Custom:<span class="screen-reader-text"> enter a custom time format in the following field</span></span></label><label for="time_format_custom" class="screen-reader-text">Custom time format:</label><input type="text" name="time_format_custom" id="time_format_custom" value="g:i a" class="small-text"><br><p><strong>Preview:</strong> <span class="example">6:48 am</span><span class="spinner"></span>
</p>	<p class="date-time-doc"><a href="https://codex.wordpress.org/Formatting_Date_and_Time">Documentation on date and time formatting</a>.</p>
	</fieldset>
</td>
</tr>
<tr>
<th scope="row"><label for="start_of_week">Week Starts On</label></th>
<td><select name="start_of_week" id="start_of_week">

	<option value="0">Sunday</option>
	<option value="1" selected="selected">Monday</option>
	<option value="2">Tuesday</option>
	<option value="3">Wednesday</option>
	<option value="4">Thursday</option>
	<option value="5">Friday</option>
	<option value="6">Saturday</option></select></td>
</tr>
</tbody></table>


<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p></form>

</div>
<?php
?>