<?php
require 'pdfcrowd.php';

Class PDF{

    function generate_pdf($result){
        $path_info = $result['report'];


//        $path = 'http://localhost/medilab/admin/'.$path_info;
        $path = "http:/localhost/medilab/admin/media/reports".$path_info;
//        'http://localhost/medilab/admin/media/reports/imagescancer.jpg';

        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        try
        {
            $temp = "999999";
            $data = $this->html_page($base64,$result);
            // create the API client instance
            $client = new \Pdfcrowd\HtmlToPdfClient("ibrar", "f69f5af10b716e0f70d8119a56872009");
//            $random = rand() . ".pdf";
//            $pdf= 'pdf';
            // run the conversion and write the result to a file
            $client->convertStringToFile($data,  'media/reports/'. rand(). ".pdf");
            return 'ok';
        }
        catch(\Pdfcrowd\Error $why)
        {
            // report the error
            error_log("Pdfcrowd Error: {$why}\n");

            // rethrow or handle the exception
            return $why;
        }
    }

    function html_page($img,$data ){
        $image = $data['report'];

        $patient_name = $data['user_name'];
        $patient_id = $data['user_id'];
        $contact = $data['contact'];
        $price = $data['price'];
        $payment = $data['payment_method'];
        $product_name = $data['name'];

        $date = date("l jS \of F Y h:i:s A") ;




        return '<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    .rtl {
        direction: rtl;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="'.$image.'" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: <br>
                                Created: '.$date.' <br>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Medilab Pvt Ltd.<br>
                                12345 Sunny Road<br>
                                Lahore, CA 12345
                            </td>
                            
                            <td>
                                
                                <h3>Patient Record:</h3><br>
                                
                                Name: '.$patient_name.' <br>
                                ID : '.$patient_id.' <br>
                                Contact : '.$contact.'<br>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method: 
                </td>
                
                <td>
                    '.$payment.' 
                </td>
            </tr>
            
            
            <tr class="heading">
                <td>
                    Test Name
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td>
                     '.$product_name.'
                </td>
                
                <td>
                   '.$price.'
                </td>
            </tr>
            
          
            
            
            </tr>
        </table>
    </div>
</body>
</html>';
    }
}

$obj = new PDF();

//$client = new \Pdfcrowd\HtmlToPdfClient("ibrar", "052f3b7182fcf4f136dd4001616a42d7");
//$pdf = $client->convertUrl('https://en.wikipedia.org/');
//$pdf = $client->convertFile('/');
//$pdf = $client->convertString('<b>bold</b> and <i>italic</i>');

?>