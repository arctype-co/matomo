<?php
/**
 * Piwik - Open source web analytics
 * 
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id$
 */

/**
 * Country code and continent database
 * 
 * @package Piwik_DataFiles
 */
if(!isset($GLOBALS['Piwik_CountryList']))
{
	$GLOBALS['Piwik_CountryList'] = array(
			'xx' => array('unk'),
			'ac' => array('afr'),
			'ad' => array('eur'),
			'ae' => array('asi'),
			'af' => array('asi'),
			'ag' => array('ams'),
			'ai' => array('ams'),
			'al' => array('eur'),
			'am' => array('asi'),
			'an' => array('ams'),
			'ao' => array('afr'),
			'aq' => array('aut'),
			'ar' => array('ams'),
			'as' => array('oce'),
			'at' => array('eur'),
			'au' => array('oce'),
			'aw' => array('ams'),
			'az' => array('asi'),
			'ba' => array('eur'),
			'bb' => array('ams'),
			'bd' => array('asi'),
			'be' => array('eur'),
			'bf' => array('afr'),
			'bg' => array('eur'),
			'bh' => array('asi'),
			'bi' => array('afr'),
			'bj' => array('afr'),
			'bm' => array('ams'),
			'bn' => array('asi'),
			'bo' => array('ams'),
			'br' => array('ams'),
			'bs' => array('ams'),
			'bt' => array('asi'),
			'bw' => array('afr'),
			'by' => array('eur'),
			'bz' => array('ams'),
			'ca' => array('amn'),
			'cc' => array('oce'),
			'cd' => array('afr'),
			'cf' => array('afr'),
			'cg' => array('afr'),
			'ch' => array('eur'),
			'ci' => array('afr'),
			'ck' => array('asi'),
			'cl' => array('ams'),
			'cm' => array('afr'),
			'cn' => array('asi'),
			'co' => array('ams'),
			'cs' => array('eur'),
			'cr' => array('ams'),
			'cu' => array('ams'),
			'cv' => array('afr'),
			'cy' => array('eur'),
			'cz' => array('eur'),
			'de' => array('eur'),
			'dj' => array('afr'),
			'dk' => array('eur'),
			'dm' => array('ams'),
			'do' => array('ams'),
			'dz' => array('afr'),
			'ec' => array('ams'),
			'ee' => array('eur'),
			'eg' => array('afr'),
			'eh' => array('afr'),
			'er' => array('afr'),
			'es' => array('eur'),
			'et' => array('afr'),
			'fi' => array('eur'),
			'fj' => array('oce'),
			'fk' => array('ams'),
			'fm' => array('oce'),
			'fr' => array('eur'),
			'ga' => array('afr'),
			'gb' => array('eur'),
			'gd' => array('ams'),
			'ge' => array('asi'),
			'gf' => array('ams'),
			'gg' => array('eur'),
			'gh' => array('afr'),
			'gi' => array('afr'),
			'gl' => array('amn'),
			'gm' => array('afr'),
			'gn' => array('afr'),
			'gp' => array('ams'),
			'gq' => array('afr'),
			'gr' => array('eur'),
			'gs' => array('eur'),
			'gt' => array('ams'),
			'gw' => array('afr'),
			'gy' => array('ams'),
			'hk' => array('asi'),
			'hn' => array('ams'),
			'hr' => array('eur'),
			'ht' => array('ams'),
			'hu' => array('eur'),
			'id' => array('asi'),
			'ie' => array('eur'),
			'il' => array('asi'),
			'in' => array('asi'),
			'iq' => array('asi'),
			'ir' => array('asi'),
			'is' => array('eur'),
			'it' => array('eur'),
			'jm' => array('ams'),
			'jo' => array('asi'),
			'jp' => array('asi'),
			'ke' => array('afr'),
			'kg' => array('asi'),
			'kh' => array('asi'),
			'ki' => array('oce'),
			'km' => array('afr'),
			'kp' => array('asi'),
			'kr' => array('asi'),
			'kw' => array('asi'),
			'ky' => array('ams'),
			'kz' => array('asi'),
			'la' => array('asi'),
			'lb' => array('asi'),
			'li' => array('eur'),
			'lk' => array('asi'),
			'lr' => array('afr'),
			'ls' => array('afr'),
			'lt' => array('eur'),
			'lu' => array('eur'),
			'lv' => array('eur'),
			'ly' => array('afr'),
			'ma' => array('afr'),
			'mc' => array('eur'),
			'md' => array('eur'),
			'mg' => array('afr'),
			'mh' => array('oce'),
			'mk' => array('eur'),
			'ml' => array('afr'),
			'mm' => array('asi'),
			'mn' => array('asi'),
			'mo' => array('asi'),
			'mq' => array('ams'),
			'mr' => array('afr'),
			'mt' => array('eur'),
			'mu' => array('afr'),
			'mv' => array('asi'),
			'mw' => array('afr'),
			'mx' => array('ams'),
			'my' => array('asi'),
			'mz' => array('afr'),
			'na' => array('afr'),
			'nc' => array('oce'),
			'ne' => array('afr'),
			'ng' => array('afr'),
			'ni' => array('ams'),
			'nl' => array('eur'),
			'no' => array('eur'),
			'np' => array('asi'),
			'nr' => array('oce'),
			'nz' => array('oce'),
			'om' => array('asi'),
			'pa' => array('ams'),
			'pe' => array('ams'),
			'pf' => array('oce'),
			'pg' => array('oce'),
			'ph' => array('asi'),
			'pk' => array('asi'),
			'pl' => array('eur'),
			'pm' => array('amn'),
			'pr' => array('ams'),
			'pt' => array('eur'),
			'pw' => array('oce'),
			'py' => array('ams'),
			'qa' => array('asi'),
			're' => array('afr'),
			'ro' => array('eur'),
			'ru' => array('asi'),
			'rs' => array('asi'),
			'rw' => array('afr'),
			'sa' => array('asi'),
			'sb' => array('oce'),
			'sc' => array('afr'),
			'sd' => array('afr'),
			'se' => array('eur'),
			'sg' => array('asi'),
			'si' => array('eur'),
			'sk' => array('eur'),
			'sl' => array('afr'),
			'sm' => array('eur'),
			'sn' => array('afr'),
			'so' => array('afr'),
			'sr' => array('ams'),
			'sv' => array('ams'),
			'sy' => array('asi'),
			'sz' => array('afr'),
			'td' => array('afr'),
			'tg' => array('afr'),
			'th' => array('asi'),
			'tj' => array('asi'),
			'tm' => array('asi'),
			'tn' => array('afr'),
			'to' => array('oce'),
			'tp' => array('oce'),
			'tr' => array('eur'),
			'tt' => array('ams'),
			'tw' => array('asi'),
			'tz' => array('afr'),
			'ua' => array('eur'),
			'ug' => array('afr'),
			'uk' => array('eur'),
			'us' => array('amn'),
			'uy' => array('ams'),
			'uz' => array('asi'),
			'va' => array('eur'),
			've' => array('ams'),
			'vn' => array('asi'),
			'vu' => array('oce'),
			'wf' => array('oce'),
			'ye' => array('asi'),
			'yu' => array('eur'),
			'za' => array('afr'),
			'zm' => array('afr'),
			'zw' => array('afr'),
		);
}

