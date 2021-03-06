<?php
/** 
 * Тег <td>
 * 
 * Предназначен для создания одной ячейки таблицы.
 * 
 * @author    Sergey Baigudin <baigudin@mail.ru>
 * @copyright 2012-2014
 * @license   http://baigudin.com/license/
 * @link      http://baigudin.com 
 */

namespace DomBuilder\Tag; 

class Td extends \DomBuilder\Tag
{
  /** 
   * Конструктор класса
   * 
   * @return void
   */
  function __construct()
  {
    parent::__construct();
    $this->tagName('td')->tagStyle(self::TAG_STYLE_DOUBLE)->tagType(self::TAG_TYPE_BLOCK);            
  }
  
  /** 
   * Получение/установка значения атрибута action
   *
   * @param string $value Значение [optional]   
   * @return string Возвращает значения поля или false
   */   
  public function colspan( $value=NULL )
  {
    if( isset($value) ) return $this->attr('colspan', $value);
    return $this->attr('colspan');
  }  
}