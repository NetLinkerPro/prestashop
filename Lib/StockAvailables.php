<?php
/**
 * Created by PhpStorm.
 * User: mfigueroa
 * Date: 10/10/2017
 * Time: 16:21
 */

namespace NetLinker\KindPrestaShop\Lib;

class StockAvailables extends WebService
{
    private static $_resource = 'stock_availables';

    /**
     * @param $parameters array
     * @return \SimpleXMLElement|string
     */
    public function findAll(array $parameters = array())
    {
        return $this->wsFindAll(self::$_resource, $parameters);
    }

    /**
     * @param $parameters array
     * @return \SimpleXMLElement|string
     */
    public function findIndex(array $parameters)
    {
        return $this->wsFindIndex(self::$_resource, $parameters);
    }

    /**
     * @param integer $id
     * @param array $parameters
     * @return \SimpleXMLElement|string
     */
    public function find($id, array $parameters = array())
    {
        return$this->wsFind(self::$_resource, $id, $parameters);
    }


    /**
     * @param array $data
     * @return \SimpleXMLElement|string
     */
    public function create(array $data)
    {
        return $this->wsCreate(self::$_resource, $data);
    }

    /**
     * @param $data
     * @return \SimpleXMLElement|string
     */
    public function update($data,$xmlCallback=null)
    {
        $id = $data['id'];
        return $this->wsUpdate(self::$_resource, $id, $data, $xmlCallback);
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
