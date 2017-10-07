<?php
namespace GDO\Core;
use GDO\DB\GDT_Char;
/**
 * @author gizmore
 */
final class GDT_MD5 extends GDT_Char
{
	public $encoding = self::BINARY;
	public $caseSensitive = true;
	
	public function __construct()
	{
		$this->size(16);
	}
	
	public function renderCell()
	{
		return GDT_Template::php('Type', 'cell/md5', ['field'=>$this]);
	}
}
