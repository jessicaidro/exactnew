<select name="txtCategoria" id="id_categoria"> 
										<?php 
											include_once '../BO/cadastrocategoriaBO.php';
											if(1==1){
												$resultado = buscarCategoriaBO();                          
												if($resultado->rowCount() > 0){
												while($registro = $resultado->fetch(PDO::FETCH_OBJ)) 
													{
													?>
													<option value="<?php 
													echo $registro->id_categoria ;
													?>">
													<?php 
													echo $registro->nomeCategoria ;
													?>
													</option> 
													<?php
													}
												}
											}
											?>
									</select>