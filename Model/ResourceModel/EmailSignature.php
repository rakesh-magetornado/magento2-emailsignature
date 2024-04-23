<?php
/**
 * @category   MageTornado
 * @package    MageTornado_EmailSignature
 * @author     prajapatirakesh03@gmial.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace MageTornado\EmailSignature\Model\ResourceModel;

class EmailSignature extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('magetornado_emailsignature', 'emailsignature_id');   //here "magetornado_emailsignature" is table name and "emailsignature_id" is the primary key of custom table
    }
}