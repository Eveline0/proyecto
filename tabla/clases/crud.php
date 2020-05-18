<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into producto (codigo,nombre,precio)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT codigo,
							nombre,
							precio
					from producto 
					where codigo='$idjuego'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'codigo' => $ver[0],
				'nombre' => $ver[1],
				'precio' => $ver[2]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE producto set nombre='$datos[0]',
										precio='$datos[1]'
						where codigo='$datos[2]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from producto where codigo='$idjuego'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>