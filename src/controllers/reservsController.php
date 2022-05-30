<?php 
    include("../models/DB.php");
    include("../models/Reservacion.php");

    try {
        $connection = DBConnection::getConnection();
    }
    catch(PDOException $e) {
        error_log("Error de conexión - " . $e, 0);
        exit();
    }

    if($_SERVER["REQUEST_METHOD"] === "GET") {
        if (array_key_exists("id", $_GET)) {
            try {
                $id = $_GET["id"];
    
                $query = $connection->prepare('SELECT * FROM reservaciones WHERE id = :id');
                $query->bindParam(':id', $id, PDO::PARAM_INT);
                $query->execute();

                if ($query->rowCount() === 0) {
                    echo "Reservacion no encontrada";
                    exit();
                }
        
                $reserv;
        
                while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $reserv = new Reservacion($row['id'], $row['nombre'], $row['telefono'], $row['sucursal'], $row['NoPersonas'], $row['horario'], $row['activo']);
                }
        
                echo json_encode($reserv->getArray());
            }
            catch(PDOException $e) {
                echo $e;
            }
        }else {
            try {
                $query = $connection->prepare('SELECT * FROM reservaciones WHERE activo = 1');
                $query->execute();

                if ($query->rowCount() === 0) {
                    echo "Reservacion no encontrada";
                    exit();
                }

                $reservs = array();
                while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $reserv = new Reservacion($row['id'], $row['nombre'], $row['telefono'], $row['sucursal'], $row['NoPersonas'], $row['horario'], $row['activo']);
                    $reservs[] = $reserv->getArray();
                }

                echo json_encode($reservs);

            } catch(PDOException $e) {
                error_log("Error de consulta - " . $e, 0);
            }
        }
    } else if($_SERVER["REQUEST_METHOD"] === "POST") {
        if(array_key_exists("reservName", $_POST)) {
            postReserv($_POST["reservName"], $_POST["reservPhone"], $_POST["reservBranches"], $_POST["reservNoPersons"], $_POST["reservSchedules"]);
        }else if (array_key_exists("id", $_POST)) {
            if ($_POST["_method"] === "DELETE") {
                deleteReserv($_POST["id"]);
            }
        }
    }

    function postReserv($rName, $rPhone, $rBranche, $rNP, $rSchedule) {
        global $connection;

        try{
            $query = $connection->prepare('INSERT INTO reservaciones VALUES (NULL, :nombre, :telefono, :sucursal, :NoPersonas, :horario, 1)');
            $query->bindParam(':nombre', $rName, PDO::PARAM_STR);
            $query->bindParam(':telefono', $rPhone, PDO::PARAM_STR);
            $query->bindParam(':sucursal', $rBranche, PDO::PARAM_STR);
            $query->bindParam(':NoPersonas', $rNP, PDO::PARAM_INT);
            $query->bindParam(':horario', $rSchedule, PDO::PARAM_STR);
            $query->execute();
            
            if($query->rowCount() > 0) {
                echo'<script type="text/javascript">
                        window.location.href="../views/others/reservations.php";
                        alert("Reservacion agregada");
                    </script>';
            }
            else {
                echo "Error al agregar reservacion";
            }
        }catch(PDOException $e) {
            error_log("Error de conexión - " . $e, 0);
            exit();
        }    
    }

    function deleteReserv($rId) {
        global $connection;
    
        try {
            $query = $connection->prepare('UPDATE reservaciones SET activo = 0 WHERE id = :id');
            $query->bindParam(':id', $rId, PDO::PARAM_INT);
            $query->execute();
    
            if($query->rowCount() > 0) {
                echo'<script type="text/javascript">
                        window.location.href="../views/admin/reservationsControl.php";
                        alert("Reservacion eliminada");
                    </script>';
            }
            else {
                var_dump($rId);
                echo "Error al eliminar reservacion";
            }
        }
        catch(PDOException $e) {
            echo $e;
        }
    }
?>
