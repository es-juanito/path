<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2012-10-29 20:11
 */
interface ProductosDAO{
	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Productos 
	 */
	public function query($query);

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Productos 
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
 	 * @param producto primary key
 	 */
	public function delete($idProducto);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Productos producto
 	 */
	public function insert($producto);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Productos producto
 	 */
	public function update($producto);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByProducto($value);

	public function queryByPrecio($value);

	public function queryByDescuento($value);


	public function deleteByProducto($value);

	public function deleteByPrecio($value);

	public function deleteByDescuento($value);


}
?>