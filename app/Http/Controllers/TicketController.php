<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TicketController extends Controller
{
    public function index() 
    {
    	return view("eticket.index");
    }

    public function pdf(){
        $pdf = \PDF::loadView('eticket.index');
        return $pdf->download('e-ticket.pdf');
    }

    function convert_eticket_to_html(){
        $output ='
        <div class="container">
    <div class="col-sm">
    <div class="kolom" style="background-color:white; width:900px; height:680px; margin:auto; margin-top:20px; margin-bottom: 20px; box-shadow: 3px 3px 5px 6px #ccc; ">
    <div class="row">
        <div class="col-sm-8 mt-5">
            <h3 style="font-family:Arial; margin-left: 34px;">E-tiket</h3>
            <p style="margin-left: 34px;">Weesantai discover your journey</p>
        </div>
        <div class="col-sm-4 mt-5">
            <img src="img/ic_logo.png" width="170" height="60" alt="">
        </div>
    </div>
    <hr style=" margin:0px; color:#000; border: solid 1px black;"></p>

    <div class="row">
        <div class="col ml-5">

            <table>
            <tr>
                <td>Nomor Ticket</td>
                <td>:</td>
                <td>autogenerate</td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>:</td>
                <td>autogenerate</td>
            </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td>autogenerate</td>
            </tr>
            </table>
    </div>
    <div class="col">
        <table class="table-striped">
            <tr>
                <td>Tanggal Pembelian</td>
                <td>:</td>
                <td>autogenerate</td>
            </tr>
            <tr>
                <td>Valid Hingga</td>
                <td>:</td>
                <td>autogenerate</td>
            </tr>
            </table>
    </div>
</div>

    <div class="row">

        <div class="col ml-5 mt-5 mr-3">
        <h5> Cara Menggunakan / How To Use</h5>
        <ol type="1">
            <li>Ini Adalah E-ticket milik anda untuk masuk ke (nama destinasi) <br> 
                <span class="translate">This is Your E-Ticket for entry (name location)</li></span>
            <li>Tunjukan Tiket ini untuk masuk, Diperlukan Verifikasi Identifikasi yang relevan sebelum masuk lokasi <br>
                <span class="translate">Present This Ticket Upon Entry, Verification of relevant Identification is Required prior to entry location</span></li>
        </ol>
        </div>
    </div>

    <div class="row">
        <div class="col ml-5">
            <img class="float-right mr-4" src="http://placehold.it/128x128">
        </div>
    </div>
    <div class="row">
        <div class="col sm mr-lg-5">
            <p class="float-right"> Scan QR Code</p>
        </div>
    </div>
    <hr style=" margin:0px; color:#000; border: solid 1px black;"></p>


    <div class="row">
    <div class="col ml-3">
            Tiket Ini Tidak dapat dipindah tangakan, Tidak dapat di kembalikan kembali, hanya satu kali pakai di hari yang sama <br>
            <span class="translate">
                This ticket is not transferable, cannot be returned, only one time use on the same day</span>
    </div>

    </div>

    </div>
    </div>
</div>
</div>
        ';
        return $output;
    }
}
