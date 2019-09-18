<?php 
    require('./partials/fpdf.php');
    $id = $_GET['id'];
    require("./partials/database_credentials.php");
    $sql = "select * from registration where id = $id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    $name = $row['NameJuvenile'];
    $img = "pimage/".$row['pimage'];
    $file = !$row['fileNo'] ? "NA" : $row['fileNo'];
    $missingchno = !$row['missingChildNo'] ? "NA" : $row['missingChildNo'];
    $aadhar = !$row['adharCardNo'] ? "NA" : $row['adharCardNo'];
    $permadd = !$row['permentaddress'] ? "NA" : $row['permentaddress'];
    $locadd = !$row['localaddress'] ? "NA" : $row['localaddress'];
    $tehsil = !$row['Tashil'] ? "NA" : $row['Tashil'];
    $vill = !$row['village'] ? "NA" : $row['village'];
    $mob = !$row['mobileNo'] ? "NA" : $row['mobileNo'];
    $age = !$row['age'] ? "NA" : $row['age'];
    $dob = !$row['dateofbirth'] ? "NA" : $row['dateofbirth'];
    $height = !$row['hight'] ? "NA" : $row['hight'];
    $weight = !$row['waight'] ? "NA" : $row['waight'];
    $chest = !$row['chest'] ? "NA" : $row['chest'];
    $eyes = !isset($row['eyes']) ? "NA" : $row['eyes'];
    $hair = !$row['hair'] ? "NA" : $row['hair'];
    $childco = !$row['childrenCourt'] ? "NA" : $row['childrenCourt'];
    $case = !$row['caseNo'] ? "NA" : $row['caseNo'];
    $polic = !$row['PoliceSatation'] ? "NA" : $row['PoliceSatation'];
    $fir = !$row['FIR'] ? "NA" : $row['FIR'];
    $dateadd = !$row['dateAdmission'] ? "NA" : $row['dateAdmission'];
    $datedis = !$row['datedischarge'] ? "NA" : $row['datedischarge'];
    if($row['dept_id'] == 0){
        $branch = 'N/A';
    }
    else if ($row['dept_id'] == 1){
        $branch = "Chembur Children's Home";
    }
    else if ($row['dept_id'] == 2){
        $branch = "Additional Children's Home";
    }
    else if ($row['dept_id'] == 3){
        $branch = "Bal Kalyan Nagari";
    }
    else if ($row['dept_id'] == 4){
        $branch = "David Sassoon Industrial School";
    }
    else if ($row['dept_id'] == 5){
        $branch = "New Childrens Home";
    }
    else if ($row['dept_id'] == 6){
        $branch = "Childrens Home";
    }
    
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(0,5,'The Childrens Aid Society, Mumbai. 
    (An Autonomous Organization of Govt. of Maharashtra of Women and Child Development)(Junior Childrens Home for Boys & Girls) V.N.Purav Marg, Opp. Anushakti Nagar Best Bus Stand,Mankhurd (East), Mumbai -400 088. 
    Email id:addchildrenshome@gmail.com Phone: 022-25514561',0,'C');
    $pdf->Ln();
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Helvetica', 'B');
    $pdf->Cell(0, 10, "$branch", 0, 1, 'C', true);
    $pdf->SetTextColor(0,0,0);
    $pdf->Ln();
    $pdf->Cell(0, 7, 'FACE SHEET/CASE RECORD', 0, 1, 'C');
    $pdf->SetFont('Arial','',10);
    $pdf->Write(5,'Personal Details');
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Image($img, 150,60,50,50,'JPG');
    $pdf->Write(5,"Name: $name");
    $pdf->Ln();
    $pdf->Write(5,"File No: $file");
    $pdf->Ln();
    $pdf->Write(5,"Missing Child No: $missingchno");
    $pdf->Ln();
    $pdf->Write(5,"Aadhaar No: $aadhar");
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Write(5, "Permanent Address : $permadd");
    $pdf->Ln();
    $pdf->Write(5, "Local Address : $locadd");
    $pdf->Ln();
    $pdf->Write(5, "Tehsil: $tehsil            ");
    //$pdf->Ln();
    $pdf->Write(5, "Village: $vill            ");
    //$pdf->Ln();
    $pdf->Write(5, "Mobile: $mob");
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Write(5, "Age: $age            ");
    
    $pdf->Write(5, "Date of Birth: $dob            ");
    
    $pdf->Write(5, "Height: $height            ");
    //$pdf->Ln();
    $pdf->Write(5, "Weight: $weight            ");
    $pdf->Write(5, "Chest: $chest            ");
    $pdf->Write(5, "Eyes: $eyes            ");
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    
    $pdf->Write(5, "Child Court: $childco            ");
    $pdf->Write(5, "Case No: $case            ");
    $pdf->Write(5, "Police Station: $polic            ");
    $pdf->Write(5, "FIR : $fir            ");

    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();

    $pdf->Write(5, "Date of Admission: $dateadd                    ");
    $pdf->Write(5, "Date of Discharge: $datedis                    ");
    
    $pdf->Output();
?>