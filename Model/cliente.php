<?php
class cliente
{
	private $pdo;
    
    public $idcliente;
    public $nombres;
    public $apellidoP;
    public $fecha_nmto;
    public $direcc;
    public $telefono;
	public $email;
	public $c_postal;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM cliente");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idcliente)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cliente WHERE idcliente = ?");
			          

			$stm->execute(array($idcliente));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idcliente)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM cliente WHERE idcliente = ?");			          

			$stm->execute(array($idcliente));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE cliente SET 
						nombres          = ?, 
						apellidoP        = ?,
                        fecha_nmto        = ?,
						direcc            = ?, 
						telefono = ?,
						email = ?,
						c_postal = ?
				    WHERE idcliente = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombres, 
                        $data->apellidoP,
                        $data->fecha_nmto,
                        $data->direcc,
                        $data->telefono,
						$data->email,
						$data->c_postal,
                        $data->idcliente
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `cliente` (nombres,apellidoP,fecha_nmto,direcc,telefono,email,c_postal) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombres, 
                    $data->apellidoP,
                    $data->fecha_nmto,
                    $data->direcc,
                    $data->telefono,
					$data->email,
					$data->c_postal                 
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
