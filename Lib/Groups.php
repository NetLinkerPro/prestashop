<?php
/**
 * Created by PhpStorm.
 * User: mfigueroa
 * Date: 07/10/2017
 * Time: 2:57
 */

namespace NetLinker\KindPrestaShop\Lib;

use NetLinker\KindPrestaShop\Doc\Group;
use NetLinker\KindPrestaShop\Entities\Groups as Entity;
use NetLinker\KindPrestaShop\Doc\Groups as Gro;

class Groups extends WebService
{
    private static $_resource = 'groups';

    /**
     * @param $parameters array
     * @return Gro
     */
    public function findAll(array $parameters = array())
    {
        return $this->wsFindAll(self::$_resource, $parameters);
    }

    /**
     * @param integer $id
     * @param array $parameters
     * @return Group
     */
    public function find($id, array $parameters = array())
    {
        return$this->wsFind(self::$_resource, $id, $parameters);
    }


    /**
     * @param Entity $data
     * @return \SimpleXMLElement|string
     */
    public function create(Entity $data)
    {
        return $this->wsCreate(self::$_resource, $data->getParameters());
    }

    /**
     * @param Entity $data
     * @return \SimpleXMLElement|string
     */
    public function update(Entity $data)
    {
        $id = $data->getId();
        return $this->wsUpdate(self::$_resource, $id, $data->getParameters());
    }

    /**
     * @param $id
     * @return bool|\SimpleXMLElement|string
     */
    public function delete($id)
    {
        return $this->wsDelete(self::$_resource, $id);
    }
}