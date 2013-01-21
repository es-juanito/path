<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return ProductosDAO
	 */
	public static function getProductosDAO(){
		return new ProductosMySqlExtDAO();
	}

	/**
	 * @return VentasDAO
	 */
	public static function getVentasDAO(){
		return new VentasMySqlExtDAO();
	}


}
?>