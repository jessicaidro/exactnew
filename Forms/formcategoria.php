<?php 

include_once '../BO/cadastrocategoriaBO.php';

	if(isset($_POST['txtCategoria']))
	{
		$NomeCategoria = $_POST['txtCategoria'];
		
		
		CategoriaBO($NomeCategoria);

		include '../Paginas/cadastrocategoria.php';

		$result = consultarCategoriaBO();
		if ($result) {
			while ($row = $result->fetch(PDO::FETCH_OBJ)) {
				echo $row->id_categoria;
			}
		}

	}
	

?>










