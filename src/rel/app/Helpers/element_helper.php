<?php
$name_index = 0;

function translit($value)
{
	$converter = array(
		'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
		'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
		'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
		'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
		'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
		'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
		'э' => 'e',    'ю' => 'yu',   'я' => 'ya',	 ' ' => '_',	'<' => '_',
 
		'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
		'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
		'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
		'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
		'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
		'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
		'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',	 '>' => '_',	'/' => '_'
	);
 
	$value = strtr($value, $converter);
	return $value;
}

function head($title,$number)
{
	$page_title = translit($title) . "Page";
	print <<<END
	<div data-role="page" id="$page_title">
	<div data-role="panel" id="ZhalobyPanel$number" data-position="left">
		<h2>Жалобы</h2>
		<div class="zhaloby_content"></div>
		<a href="#ZhalobyPage" class="ui-btn ui-btn-inline">Изменить</a>
		<a data-rel="close" class="ui-btn ui-btn-inline">Отмена</a>
	</div>
	<div data-role="panel" id="AnamnezPanel$number" data-position="left">
		<h2>Анамнез</h2>
		<div class="anamnez_content"></div>
		<a href="#AnamnezPage" class="ui-btn ui-btn-inline">Изменить</a>
		<a data-rel="close" class="ui-btn ui-btn-inline">Отмена</a>
	</div>
	<div data-role="header">
		<a href="#" class="goback" data-role="button" data-icon="arrow-l" data-iconpos="notext"></a>
		<h1>$title</h1>
		<a href="#" class="goforward" data-role="button" data-icon="arrow-r" data-iconpos="notext"></a>
	</div>
	<div role="main" class="ui-content">

END;
}

function my_form_firstpage() {
	global $name_index;
	$name_index+=1;
	print <<<END
	<div data-role="page" id="ZhalobyPage">
	<div data-role="panel" id="ZhalobyPanel1" data-position="left">
		<h2>Жалобы</h2>
		<div class="zhaloby_content"></div>
		<a href="#ZhalobyPage" class="ui-btn ui-btn-inline">Изменить</a>
		<a data-rel="close" class="ui-btn ui-btn-inline">Отмена</a>
	</div>
	<div data-role="panel" id="AnamnezPanel1" data-position="left">
		<h2>Анамнез</h2>
		<div class="anamnez_content"></div>
		<a href="#AnamnezPage" class="ui-btn ui-btn-inline">Изменить</a>
		<a data-rel="close" class="ui-btn ui-btn-inline">Отмена</a>
	</div>
	<div data-role="header">
		<a href="#UpdatePage" data-role="button" data-icon="edit" data-iconpos="notext"></a>
		<h1>Жалобы</h1>
		<a href="#" class="goforward" data-icon="arrow-r" data-iconpos="notext"></a>
	</div>
	<div data-role="main" class="ui-content">
	<textarea name="$name_index" id="form$name_index" rows="5" class="form-control" data-autogrow="false"></textarea>
	<input type="button" class="next-input" value="Далее">

END;
	foot(1);
}

function foot($number)
{
	print <<<END
	</div>
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar" >
			<ul>
				<li><a href="#ZhalobyPanel$number" data-icon="comment">Жалобы</a></li>
				<li><a href="#AnamnezPanel$number" data-icon="calendar">Анамнез</a></li>
				<li><a href="#TocPage" data-icon="bullets">Карта</a></li>
				<li><a href="#UpdatePage" data-icon="edit">Сохранить</a></li>
			</ul>
		</div>
	</div>
</div>

END;
}

function my_form_disable($name)
{
	global $name_index;
	$name_index+=1;
}

function my_form_textarea($name)
{
	global $name_index;
	$name_index+=1;
	head($name,$name_index);
	print <<<END

	<textarea name="$name_index" id="form$name_index" rows="5" class="form-control" data-autogrow="false"></textarea>
	<input type="button" class="next-input" value="Далее">

END;
	foot($name_index);
}

function my_form_temp()
{
	global $name_index;
	$name_index+=1;
	head("Температура",$name_index);
	print <<<END

	<input type="range" name="$name_index" id="form$name_index" min="35.0" max="42.0" step="0.1" value="36.6">
	<input type="button" class="next-input" value="Далее">

END;
	foot($name_index);
}

function my_form_input($name)
{
	global $name_index;
	$name_index+=1;
	head($name,$name_index);
	print <<<END

	<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
	<input type="button" class="next-input" value="Далее">

END;
	foot($name_index);
}

function my_form_select_input($name, $buttons)
{
	global $name_index;
	$name_index+=1;
	head($name,$name_index);
	print <<<END

	<label class="form-label">$name</label><br>
	<select class="form-control">

END;
	foreach ($buttons as $button_text) {
		print <<<END
	<option class="add-text">$button_text</option>

END;
	}
	print <<<END
	</select>
	<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
	<input type="button" class="next-input" value="Далее">

END;
	foot($name_index);
}

function my_form_select_buttons_input($name, $buttons, $buttons_second)
{
	global $name_index;
	$name_index+=1;
	head($name,$name_index);
	print <<<END

	<label class="form-label">$name</label><br>
	<select class="form-control">

END;
	foreach ($buttons as $button_text) {
		print <<<END
	<option class="add-text">$button_text</option>

END;
	}
	print "</select>";
	foreach ($buttons_second as $button_text) {
		print <<<END
	<button type="button" class="btn btn-primary add-text">$button_text</button>

END;
	}
	print <<<END
	<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
	<input type="button" class="next-input" value="Далее">

END;
	foot($name_index);
}

function my_form_buttons_input($name, $buttons)
{
	global $name_index;
	$name_index+=1;
	head($name,$name_index);
	print <<<END

	<label class="form-label">$name</label>

END;
	foreach ($buttons as $button_text) {
		print <<<END
	<button type="button" class="btn btn-primary add-text">$button_text</button>

END;
	}
	print <<<END
	<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
	<input type="button" class="next-input" value="Далее">

END;
	foot($name_index);
}

function my_form_button_input($name, $button_text)
{
	global $name_index;
	$name_index+=1;
	head($name,$name_index);
	print <<<END
	<label class="form-label">$name</label>
	<button type="button" class="btn btn-primary add-text next-input">$button_text</button>
	<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
	<input type="button" class="next-input" value="Далее">

END;
	foot($name_index);
}

function my_form_date()
{
	$today = date("d.m.Y");
	$yesterday = date('d.m.Y',strtotime("-1 days"));
	global $name_index;
	$name_index+=1;
	head("Дата",$name_index);
	print <<<END
	<input type="date" data-clear-btn="true" name="$name_index" id="form$name_index" value="$today">

END;
	foot($name_index);
}

function my_form_rbuttons_input($name, $buttons)
{
	global $name_index;
	$name_index+=1;
	head($name,$name_index);
	print <<<END
	<label class="form-label">$name</label>

END;
	foreach ($buttons as $button_text) {
		print <<<END
	<button type="button" class="btn btn-primary next-input add-text">$button_text</button>

END;
	}
	print <<<END
	<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
	<input type="button" class="next-input" value="Далее">

END;
	foot($name_index);
}

function my_form_radio_button_input($name, $list, $button_text, $label)
{
	global $name_index;
	$name_index+=1;
	$footer_index = $name_index;
	head($name,$name_index);
	print <<<END
	<label>$name</label>
	<fieldset data-role="controlgroup">

END;
	foreach ($list as $item) {
		print <<<END
<div class="form-check">
	<label class="form-check-label">
		<input class="form-check-input radio-toggle" type="radio" name="$name_index" id="form$name_index" value="$item">
		$item
	</label>
</div>

END;
	}
	$name_index++;
	print <<<END
	</fieldset>
	<button type="button" class="btn btn-primary add-text next-input">$button_text</button>
	<label>$label</label>
<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
<input type="button" class="next-input" value="Далее">

END;
	foot($footer_index);
}

function my_form_check_button_input($name, $list, $button_text, $label)
{
	global $name_index;
	$footer_index = $name_index+1;
	head($name,$name_index+1);
	print <<<END
<label>$name</label>
<fieldset data-role="controlgroup">

END;
	foreach ($list as $item) {
		$name_index++;
		print <<<END
<div class="form-check">
	<label class="form-check-label">
		<input class="form-check-input" type="checkbox" name="$name_index" id="form$name_index" value="$item">
		$item
	</label>
</div>

END;
	}
	$name_index++;
	print <<<END
	</fieldset>
	<button type="button" class="btn btn-primary add-text next-input">$button_text</button>
	<label>$label</label>
<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
<input type="button" class="next-input" value="Далее">

END;
	foot($footer_index);
}

function my_form_check_input($name, $list, $label)
{
	global $name_index;
	$footer_index = $name_index+1;
	head($name,$name_index+1);
	print <<<END
<label>$name</label>
<fieldset data-role="controlgroup">

END;
	foreach ($list as $item) {
		$name_index++;
		print <<<END
<div class="form-check">
	<label class="form-check-label">
		<input class="form-check-input" type="checkbox" name="$name_index" id="form$name_index" value="$item">
		$item
	</label>
</div>

END;
	}
	$name_index++;
	print <<<END
	</fieldset>
	<label>$label</label>
<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
<input type="button" class="next-input" value="Далее">

END;
	foot($footer_index);
}

function my_form_check($name, $list)
{
	global $name_index;
	$footer_index = $name_index+1;
	head($name,$name_index+1);
	print <<<END
<label>$name</label>
<fieldset data-role="controlgroup">

END;
	foreach ($list as $item) {
		$name_index++;
		print <<<END
<div class="form-check">
	<label class="form-check-label">
		<input class="form-check-input" type="checkbox" name="$name_index" id="form$name_index" value="$item">
		$item
	</label>
</div>

END;
	}
	print <<<END
	</fieldset>
	<input type="button" class="next-input" value="Далее">

END;
	foot($footer_index);
}

function my_form_radio_input($name, $list, $label)
{
	global $name_index;
	$name_index+=1;
	$footer_index = $name_index;
	head($name,$name_index);
	print <<<END
<fieldset data-role="controlgroup">
<legend>$name</legend>

END;
	foreach ($list as $item) {
		print <<<END
<div class="form-check">
	<label class="form-check-label">
		<input class="form-check-input radio-toggle" type="radio" name="$name_index" id="form$name_index" value="$item">
		$item
	</label>

END;
	}
	$name_index++;
	print <<<END
	</fieldset>
	<label>$label</label>
	<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
	<input type="button" class="next-input" value="Далее">

END;
	foot($footer_index);
}
 
function my_form_radio($name, $list)
{
	global $name_index;
	$name_index+=1;
	$footer_index = $name_index;
	head($name,$name_index);
	print <<<END
<div class="form-group" data-role="controlgroup">

END;
	foreach ($list as $item) {
		print <<<END
	<label>
	<input type="radio" class="radio-toggle form-check-input next-input" name="$name_index" id="form$name_index" value="$item">
	$item</label>

END;
}
	print "</div>";
	foot($footer_index);
}

function my_form_count($name)
{
	global $name_index;
	$name_index+=1;
	$footer_index = $name_index;
	head($name,$name_index);
	print <<<END

<div class="col-sm-12 col-md-6 col-lg-4">
 <div class="row mb-2">
 <div class="col">
	<label>$name</label>
</div>
<div class="col">
	<div class="input-group">
		<div class="input-group-prepend">
			<button type="button" class="btn btn-danger minus">-</button>
		</div>
		<input type="text" data-clear-btn="true" class="form-control" name="$name_index" id="form$name_index" value="0" min="0" max="10">
		<div class="input-group-append">
			<button type="button" class="btn btn-success plus">+</button>
		</div>
	</div>
</div>
</div>
</div>

END;
	foot($footer_index);
}

function my_form_rashod($list){
	global $name_index;
	print <<<END
	<div data-role="page" id="RashodnikiPage">
	<div data-role="panel" id="ZhalobyPanelRashodniki" data-position="left">
		<h2>Жалобы</h2>
		<div class="zhaloby_content"></div>
		<a href="#ZhalobyPage" class="ui-btn ui-btn-inline">Изменить</a>
		<a href="#TocPage" data-rel="close" class="ui-btn ui-btn-inline">Отмена</a>
	</div>
	<div data-role="panel" id="AnamnezPanelRashodniki" data-position="left">
		<h2>Анамнез</h2>
		<div class="anamnez_content"></div>
		<a href="#AnamnezPage" class="ui-btn ui-btn-inline">Изменить</a>
		<a href="#TocPage" data-rel="close" class="ui-btn ui-btn-inline">Отмена</a>
	</div>
	<div data-role="header">
		<a href="#" class="goback" data-role="button" data-icon="arrow-l" data-iconpos="notext"></a>
		<h1>Расходники</h1>
		<a href="#UpdatePage" data-role="button" data-icon="edit" data-iconpos="notext"></a>
	</div>
	<div role="main" class="ui-content">

END;
	foreach ($list as $item) {
		$name_index++;
		print <<<END
<label>$item</label>
<input type="number" name="$name_index" id="form$name_index" value="0">

END;
	}
	$name_index++;
	print <<<END
	<label>Прочее</label>
	<input type="text" data-clear-btn="true" name="$name_index" id="form$name_index" class="form-control">
	<a href="#UpdatePage" class="ui-btn">Далее</a>

END;
	foot("Rashodniki");
}
?>
