<div class="span12">
<h3>Общая информация</h3> 

<table class="table table-striped table-bordered">
		<tr>
			<th>PHP Version</th>
			<?php if (version_compare(PHP_VERSION, '5.3.3', '>=')): ?>
				<td><?php echo PHP_VERSION ?></td>
			<?php else:  ?>
				<td>Kohana requires PHP 5.3.3 or newer, this version is <?php echo PHP_VERSION ?>.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>System Directory</th>
			<?php if (is_dir(SYSPATH) AND is_file(SYSPATH.'classes/kohana'.EXT)): ?>
				<td><?php echo SYSPATH ?></td>
			<?php else:  ?>
				<td>The configured <code>system</code> directory does not exist or does not contain required files.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Application Directory</th>
			<?php if (is_dir(APPPATH) AND is_file(APPPATH.'bootstrap'.EXT)): ?>
				<td><?php echo APPPATH ?></td>
			<?php else: ?>
				<td>The configured <code>application</code> directory does not exist or does not contain required files.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Cache Directory</th>
			<?php if (is_dir(APPPATH) AND is_dir(APPPATH.'cache') AND is_writable(APPPATH.'cache')): ?>
				<td><?php echo APPPATH.'cache/' ?></td>
			<?php else: ?>
				<td>The <code><?php echo APPPATH.'cache/' ?></code> directory is not writable.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Logs Directory</th>
			<?php if (is_dir(APPPATH) AND is_dir(APPPATH.'logs') AND is_writable(APPPATH.'logs')): ?>
				<td><?php echo APPPATH.'logs/' ?></td>
			<?php else:  ?>
				<td>The <code><?php echo APPPATH.'logs/' ?></code> directory is not writable.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>PCRE UTF-8</th>
			<?php if ( ! @preg_match('/^.$/u', 'ñ')):  ?>
				<td><a href="http://php.net/pcre" target="blank">PCRE</a> has not been compiled with UTF-8 support.</td>
			<?php elseif ( ! @preg_match('/^\pL$/u', 'ñ')):  ?>
				<td><a href="http://php.net/pcre" target="blank">PCRE</a> has not been compiled with Unicode property support.</td>
			<?php else: ?>
				<td class="text-success">Успешно</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>SPL Enabled</th>
			<?php if (function_exists('spl_autoload_register')): ?>
				<td class="text-success">Успешно</td>
			<?php else:  ?>
				<td>PHP <a href="http://www.php.net/spl" target="blank">SPL</a> is either not loaded or not compiled in.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Reflection Enabled</th>
			<?php if (class_exists('ReflectionClass')): ?>
				<td class="text-success">Успешно</td>
			<?php else:  ?>
				<td>PHP <a href="http://www.php.net/reflection" target="blank">reflection</a> is either not loaded or not compiled in.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Filters Enabled</th>
			<?php if (function_exists('filter_list')): ?>
				<td class="text-success">Успешно</td>
			<?php else:  ?>
				<td>The <a href="http://www.php.net/filter" target="blank">filter</a> extension is either not loaded or not compiled in.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Iconv Extension Loaded</th>
			<?php if (extension_loaded('iconv')): ?>
				<td class="text-success">Успешно</td>
			<?php else:  ?>
				<td>The <a href="http://php.net/iconv" target="blank">iconv</a> extension is not loaded.</td>
			<?php endif ?>
		</tr>
		<?php if (extension_loaded('mbstring')): ?>
		<tr>
			<th>Mbstring Not Overloaded</th>
			<?php if (ini_get('mbstring.func_overload') & MB_OVERLOAD_STRING):  ?>
				<td>The <a href="http://php.net/mbstring" target="blank">mbstring</a> extension is overloading PHP's native string functions.</td>
			<?php else: ?>
				<td class="text-success">Успешно</td>
			<?php endif ?>
		</tr>
		<?php endif ?>
		<tr>
			<th>Character Type (CTYPE) Extension</th>
			<?php if ( ! function_exists('ctype_digit')):  ?>
				<td>The <a href="http://php.net/ctype" target="blank">ctype</a> extension is not enabled.</td>
			<?php else: ?>
				<td class="text-success">Успешно</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>URI Determination</th>
			<?php if (isset($_SERVER['REQUEST_URI']) OR isset($_SERVER['PHP_SELF']) OR isset($_SERVER['PATH_INFO'])): ?>
				<td class="text-success">Успешно</td>
			<?php else:  ?>
				<td>Neither <code>$_SERVER['REQUEST_URI']</code>, <code>$_SERVER['PHP_SELF']</code>, or <code>$_SERVER['PATH_INFO']</code> is available.</td>
			<?php endif ?>
		</tr>
		
		<tr>
			<th>PECL HTTP Enabled</th>
			<?php if (extension_loaded('http')): ?>
				<td class="text-success">Успешно</td>
			<?php else: ?>
				<td>Kohana can use the <a href="http://php.net/http" target="blank">http</a> extension for the Request_Client_External class.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>cURL Enabled</th>
			<?php if (extension_loaded('curl')): ?>
				<td class="text-success">Успешно</td>
			<?php else: ?>
				<td>Kohana can use the <a href="http://php.net/curl" target="blank">cURL</a> extension for the Request_Client_External class.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>mcrypt Enabled</th>
			<?php if (extension_loaded('mcrypt')): ?>
				<td class="text-success">Успешно</td>
			<?php else: ?>
				<td>Kohana requires <a href="http://php.net/mcrypt" target="blank">mcrypt</a> for the Encrypt class.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>GD Enabled</th>
			<?php if (function_exists('gd_info')): ?>
				<td class="text-success">Успешно</td>
			<?php else: ?>
				<td>Kohana requires <a href="http://php.net/gd" target="blank">GD</a> v2 for the Image class.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>MySQL Enabled</th>
			<?php if (function_exists('mysql_connect')): ?>
				<td class="text-success">Успешно</td>
			<?php else: ?>
				<td>Kohana can use the <a href="http://php.net/mysql" target="blank">MySQL</a> extension to support MySQL databases.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>PDO Enabled</th>
			<?php if (class_exists('PDO')): ?>
				<td class="text-success">Успешно</td>
			<?php else: ?>
				<td>Kohana can use <a href="http://php.net/pdo" target="blank">PDO</a> to support additional databases.</td>
			<?php endif ?>
		</tr>
</table>
<div class="nav-links">
<i class="icon-tags"></i><?php echo HTML::anchor('apanel/', ' Apanel')?>
</div>
</div>