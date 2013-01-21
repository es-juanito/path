<?php
/**
 * Class that operate on table 'Productos'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2012-10-29 20:11
 */
class ProductosMySqlDAO implements ProductosDAO{
	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ProductosMySql 
	 */
	public function query($query){
		$sql = $query;
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ProductosMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM Productos WHERE idProducto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM Productos';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM Productos ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param producto primary key
 	 */
	public function delete($idProducto){
		$sql = 'DELETE FROM Productos WHERE idProducto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idProducto);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ProductosMySql producto
 	 */
	public function insert($producto){
		$sql = 'INSERT INTO Productos (producto, precio, descuento) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($producto->producto);
		$sqlQuery->set($producto->precio);
		$sqlQuery->set($producto->descuento);

		$id = $this->executeInsert($sqlQuery);	
		$producto->idProducto = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ProductosMySql producto
 	 */
	public function update($producto){
		$sql = 'UPDATE Productos SET producto = ?, precio = ?, descuento = ? WHERE idProducto = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($producto->producto);
		$sqlQuery->set($producto->precio);
		$sqlQuery->set($producto->descuento);

		$sqlQuery->setNumber($producto->idProducto);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM Productos';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByProducto($value){
		$sql = 'SELECT * FROM Productos WHERE producto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPrecio($value){
		$sql = 'SELECT * FROM Productos WHERE precio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescuento($value){
		$sql = 'SELECT * FROM Productos WHERE descuento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByProducto($value){
		$sql = 'DELETE FROM Productos WHERE producto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPrecio($value){
		$sql = 'DELETE FROM Productos WHERE precio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescuento($value){
		$sql = 'DELETE FROM Productos WHERE descuento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ProductosMySql 
	 */
	protected function readRow($row){
		$producto = new Producto();
		
		$producto->idProducto = $row['idProducto'];
		$producto->producto = $row['producto'];
		$producto->precio = $row['precio'];
		$producto->descuento = $row['descuento'];

		return $producto;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return ProductosMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>