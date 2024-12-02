<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripción Curso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            text-align: center;
        }
        .form-container p {
            text-align: center;
            color: gray;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-group-inline {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        .form-group-inline .form-group {
            flex: 1;
        }
        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Formulario de Inscripción Curso</h1>
        <p>Rellene cuidadosamente el formulario de inscripción</p>
        <form action="#" method="POST">
            <!-- Nombre -->
            <div class="form-group-inline">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="segundo-nombre">Segundo Nombre</label>
                    <input type="text" id="segundo-nombre" name="segundo-nombre" placeholder="Segundo Nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido">
                </div>
            </div>
            <!-- Fecha de nacimiento y Género -->
            <div class="form-group-inline">
                <div class="form-group">
                    <label for="fecha-nacimiento">Fecha de nacimiento</label>
                    <input type="date" id="fecha-nacimiento" name="fecha-nacimiento">
                </div>
                <div class="form-group">
                    <label for="genero">Género</label>
                    <select id="genero" name="genero">
                        <option value="">Seleccione</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
            </div>
            <!-- Dirección -->
            <div class="form-group">
                <label for="direccion">Crear curso</label>
                <input type="text" id="Crear curso" name="Crear curso" placeholder="Cursos de materia"> 
            </div>
            <div class="form-group">
                <input type="text" id="direccion-linea2" name="direccion-linea2" placeholder="Dirección de la calle Línea 2">
            </div>
            <div class="form-group-inline">
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad">
                </div>
                <div class="form-group">
                    <label for="estado">Estado / Provincia</label>
                    <input type="text" id="estado" name="estado" placeholder="Estado / Provincia">
                </div>
            </div>
            <!-- Botón -->
            <button type="submit" class="submit-btn">Enviar</button>
        </form>
    </div>
</body>

<div class="form-container" style="margin-top: 30px;">
    
    
    
    <h2>Listado de Cursos</h2>
    <p>Seleccione el curso de su interés</p>
    
    <form methodo="POST">
        <input type="text"
               name="meteri_curs"
               placeholder="materia del curso" required>
        
        <input type="nombre"
               name="meteri_selec" placeholder= "materia seleccionada" step="1"required>
        
    <input type="Nombre"
               name="materi_modul" placeholder= "Año del mudulo de la materia" required>
        
        <select name="brand_id"
                required>
        <option
                value="">seleccionar curso</option>
            <?php
            //consultar ala base de daatos la tabla de materias
            
         foreach ($brands as $brand):?> 
            
            <option value="<?=$brand ["id"]?>"<?=$brand ["name"]?>>
            </option>
            <?php endforeach;?> 
            
        </select>
        
        
        <button type="submit">crear cursos</button>
    
    </form>
    
    
    
    <h2>Modulo de Curso</h2>
    <table>
    
    <tr>
        <th>Materia</th>
        <th>Modulo</th>
        <th>Año</th>
        <th>Curso</th>
        <th>Acciones</th>
        
        
        </tr>
        
        <?php foreach ($vehicles as $vehicles):?>
        
      <!-- Botón     <tr>
            <td><?=htmlspecialchars($materi["curso"]) ?>
            </td>
            
            <td><?= number_format ($materi["nivel"],2) ?>
            </td>
            
             <td><?= htmlspecialchars ($materi["brand_name"]) ?>
            </td>
            
            <td>
                <a href="edit.php">Editar</a>
                <a href="delete.php">Eleminar</a>
            
            </td>
        
        </tr> -->
        <?php endforeach; ?>
    
    </table>
    </body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
 
          
        