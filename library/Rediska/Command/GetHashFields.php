<?php

/**
 * Get hash fields
 * 
 * @param string  $name Key name
 * @return mixin
 * 
 * @author Ivan Shumkov
 * @package Rediska
 * @version @package_version@
 * @link http://rediska.geometria-lab.net
 * @licence http://www.opensource.org/licenses/bsd-license.php
 */
class Rediska_Command_GetHashFields extends Rediska_Command_Abstract
{ 
    protected $_version = '1.3.10';

    protected $_fields = array();

    public function create($name)
    {
        $connection = $this->_rediska->getConnectionByKeyName($name);
        $command = array('HKEYS', $this->_rediska->getOption('namespace') . $name);
        
        return new Rediska_Connection_Exec($connection, $command);
    }
}