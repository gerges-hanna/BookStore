<?php

require_once '../fpdf182/fpdf.php';
require_once '../Services/OrderService.php';
require_once '../Services/BookService.php';
require_once '../Services/CustomerService.php';
class TestPDF extends FPDF{
    function header() {
        $this->Image('logo.png',80,3);
        $this->SetFont('Arial', 'B', 30);
        $this->Cell(276,18,'Book Store',0,0,'C');
        $this->Ln();
    }
    function footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', '', 8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTsble(){
        $this->SetFont('Times','B',18);
        $this->Ln();
        $this->Cell(40,10,'ID',1,0,'C');
        $this->Cell(80,10,'Book Name',1,0,'C');
        $this->Cell(30,10,'Quantity',1,0,'C');
        $this->Cell(45,10,'Payment Type',1,0,'C');
        $this->Cell(40,10,'Seller',1,0,'C');
        $this->Cell(50,10,'Total',1,0,'C');
        $this->Ln();
        
    }
    function viewTable($id,$name,$qty,$type,$seller,$total)
    {
            $this->SetFont('Times','',10);
            $this->Cell(40,10,$id,1,0,'L');
            $this->Cell(80,10,$name,1,0,'L');
            $this->Cell(30,10,$qty,1,0,'L');
            $this->Cell(45,10,$type,1,0,'L');
            $this->Cell(40,10,$seller,1,0,'L');
            $this->Cell(50,10,$total,1,0,'L');
            $this->Ln();
        
    }
    function RunPDF()
    {
        session_start();
        $ord=new OrderService();
        $book=new BookService();
        $cs=new CustomerService();
        if($_SESSION['usType']==0)
        {
            $OrArr=$ord->getOrderById($_SESSION['usId']);
        }  else if($_SESSION['usType']==1) {
            $OrArr=$ord->getOrders();
        }
        $pdf=new TestPDF();
        $pdf->AliasNbPages();
        $pdf->AddPage('L', 'A4', 0);
        $pdf->headerTsble();
        for($i=0;$i<  count($OrArr);$i++)
        {
            
            $boArr=$book->getBookById($OrArr[$i]->getBook_id());
            $csArr=$cs->getCustomerById($boArr[0]->getCustomer_id());
            $pdf->viewTable($OrArr[$i]->getID(),$boArr[0]->getName(),$OrArr[$i]->getQuantity()
                    ,$OrArr[$i]->getPayment_method(),$csArr[0]->getName(),$OrArr[$i]->getTotal());
        }
        $pdf->Output();
    }
}



$q=new TestPDF();
$q->RunPDF();