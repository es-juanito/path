<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2012-10-29 20:11
 */
interface VentasDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Ventas 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param venta primary key
 	 */
	public function delete($idVenta);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Ventas venta
 	 */
	public function insert($venta);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Ventas venta
 	 */
	public function update($venta);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFecha($value);

	public function queryByTotal($value);


	public function deleteByFecha($value);

	public function deleteByTotal($value);


}
?>