<?php 
    require('fpdf/fpdf.php');

    class PDF extends FPDF{
        //Cabecera de la pagina
        function Header(){
            //Arial Bold
            $this->SetFont('Arial', 'B', 16);
            //Movernos hacia la derecha
            $this->Cell(60);
            //Titulo
            $this->Cell(80, 10, utf8_decode('Reporte de Monitoreo'), 1, 0,'C');
            //Salto de Linea
            $this->Ln(20);
            $this->Cell(10, 10, 'ID', 1, 0, 'C',0);
            $this->Cell(30, 10, utf8_decode('Árbol'), 1, 0, 'C',0);
            $this->Cell(30, 10, utf8_decode('Fruto'), 1, 0, 'C',0);
            $this->Cell(30, 10, utf8_decode('Incidencia'), 1, 0, 'C',0);
            $this->Cell(30, 10, utf8_decode('Severidad'), 1, 0, 'C',0);
            $this->Cell(30, 10, utf8_decode('Zona'), 1, 1, 'C',0);
        }

        function Footer(){
            //Posicion a 1,5 cm del final
            $this->SetY(-15);
            //Arial Italic 8
            $this->SetFont('Arial', 'I', 8);
            //Numer de pagina
            $this->Cell(0, 10, utf8_decode('Página '), $this->PageNo(). '/{nb}', 0, 0, 'C');
            //Titulo
        }
    }
    
    //Generar la conexion de la base de datos

    require 'conexion.php';
    $consulta = "SELECT * FROM monitoreo";
    $resultado = $mysqli->query($consulta);

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

    while($row = $resultado->fetch_assoc()){
        $pdf->Cell(10, 10, $row['numMonitoreo'], 1, 0, 'C',0);
        $pdf->Cell(30, 10, $row['codigoArbol'], 1, 0, 'C',0);
        $pdf->Cell(30, 10, $row['codFruto'], 1, 0, 'C',0);
        $pdf->Cell(30, 10, $row['incidencia'], 1, 0, 'C',0);
        $pdf->Cell(30, 10, $row['severidad'], 1, 1, 'C',0);

    }


    $pdf->Output();
 