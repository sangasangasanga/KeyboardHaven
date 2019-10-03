<?php

function _html_toStr($x) 
{
	if ($x === true) return 'true';
	if ($x === false) return 'false';
	return strval($x);
}

function _html_autoFixCSS($css) 
{
	static $cssNumber;
	static $css2Props;
	static $cssPrefixes;

	if (!isset($cssNumber)) {
		$cssNumber = explode(',', 'column-count,fill-opacity,font-weight,line-height,opacity,orphans,widows,z-index,zoom');	
	} 
	if (!isset($css2Props)) {
		$css2Props = explode(',', 'azimuth,background,background-attachment,background-color,background-image,background-position,background-repeat,border,border-bottom,border-bottom-color,border-bottom-style,border-bottom-width,border-collapse,border-color,border-left,border-left-color,border-left-style,border-left-width,border-right,border-right-color,border-right-style,border-right-width,border-spacing,border-style,border-top,border-top-color,border-top-style,border-top-width,border-width,bottom,caption-side,clear,clip,color,content,counter-increment,counter-reset,cue,cue-after,cue-before,cursor,direction,display,elevation,empty-cells,float,font,font-family,font-size,font-style,font-variant,font-weight,height,inline-table,left,letter-spacing,line-height,list-style,list-style-image,list-style-position,list-style-type,ltr,margin,margin-bottom,margin-left,margin-right,margin-top,max-height,max-width,min-height,min-width,orphans,outline,outline-color,outline-style,outline-width,overflow,padding,padding-bottom,padding-left,padding-right,padding-top,page-break-after,page-break-before,page-break-inside,pause,pause-after,pause-before,pitch,pitch-range,play-during,position,quotes,richness,right,rtl,speak,speak-header,speak-numeral,speak-punctuation,speech-rate,stress,table,table-caption,table-cell,table-layout,text-align,text-decoration,text-indent,text-transform,top,unicode-bidi,vertical-align,visibility,voice-family,volume,white-space,widows,width,word-spacing');
	}
	if (!isset($cssPrefixes)) {
		$cssPrefixes = explode(',', '-webkit-,-moz-,-ms-,-o-');
	}
	
	$fixed = array();
	foreach ($css as $key => $value) {
		$key = trim(strtolower($key));
		$value = _html_toStr($value);
		if (is_numeric($value) && !in_array($key, $cssNumber)) {
			$value .= 'px';
		}
		if (!in_array($key, $css2Props)) {
			foreach ($cssPrefixes as $pf) {
				$fixed[$pf . $key] = $value;
			}
		} 
		$fixed[$key] = $value;
	}
	return $fixed;
}

function _html_collectAttr(&$attrs, &$key, &$value) 
{
	$key = trim(strtolower(_html_toStr($key)));
	if ($key === 'style' && is_string($value)) {
		preg_match_all($cssPropRe, $value, $matches);
		$css = array();
		if (isset($matches[0])) 
			for ($j = 0; $j < sizeof($matches[0]); ++$j) 
				$css[$matches[1][$j]] = $matches[2][$j];
		$value = $css;
	} 

	if (is_array($value)) {
		if (!array_key_exists($key, $attrs) || !is_array($attrs[$key]))
			$attrs[$key] = array();
		foreach ($value as $k2 => $v2) {
			$attrs[$key][$k2] = $v2;
		}
	} else {
		if ($key !== 'class' || !array_key_exists($key, $attrs)) {
			$attrs[$key] = $value;
		} else {
			$attrs[$key] .= ' ' . $value;
		}
	}
}

function _html_isAttrArray(&$a) 
{
	return is_array($a) && !isset($a[0]) && sizeof($a) > 0;
}

function HTML($context, $depth=0) 
{
	$content = '';
	if (!is_array($context)) 
		return htmlspecialchars(_html_toStr($context), ENT_COMPAT, 'ISO-8859-1', false);

	$indent = "\n";
	for ($j = 0; $j < $depth; ++$j) $indent .= '    ';
	if (isset($context[0]) && is_array($context[0])) {
		$r = '';
		foreach ($context as $value) {
			$r .= $indent . HTML($value, $depth);
		}
		return $r;
	}
	
	$cssPropRe = '/(?:^|\{|\s|;)([A-Za-z0-9\-]+)\s*\:\s*?((?:\\.|("|\')(?:\\.|.)*?\3|[^;}])*)/';

	// key values for elements with non numeric indices
	$attrs = array(); 
	// array of values for elements with numeric indices
	$a = array();

	foreach ($context as $key => $value) {
		if (is_int($key)) {
			if (_html_isAttrArray($value)) {
				foreach ($value as $k2 => $v2) {
					_html_collectAttr($attrs, $k2, $v2);
				}
			} else {
				$a[] = $value;	
			}
		} else {
			_html_collectAttr($attrs, $key, $value);
		}
	}
	$indent .= '    ';
	for ($j = 1; $j < sizeof($a); ++ $j) {
		$content .= $indent . HTML($a[$j], $depth+1);
	}
	$content .= "\n";
	for ($j = 0; $j < $depth; ++$j) $content .= '    ';
	
	if (isset($a[0])) {
		$r = '<' . $a[0];
		foreach ($attrs as $key => $value) {
			$t = '';
			if (is_array($value)) { // css case
				$css = _html_autoFixCSS($value);
				foreach ($css as $k2 => $v2) {
					$t .= $k2 . ': ' . $v2 . '; ';
				}
			} else {
				$t = _html_toStr($value);
			}
			$r .= ' ' . _html_toStr($key) . '="' . $t . '"';	
		}
		return $r . '>' . $content . '</' . $a[0] . '>';
	} else {
		return '';
	}
}

/*echo HTML(["div", 
	'id' => "y", 
	'class' => "a b", 
	'style' => ['color' => "red"], 
	'aria_label' => 'x', 
	
	"Text",

    ["a", 'href' => "example.com", 'target' => "_blank", "link"],

	'style' => ['width' => 1, 'opacity' => 0.5, 'color' => '#f00'], 
	'class' => "c", 
	'pos' => 1,

    [
    	["div", 0], 
    	["div", 1]
    ]
]);*/