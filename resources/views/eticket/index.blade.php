@extends('layout.eticket')

@section('title', 'E-Ticket')
    
@section('container')
<div class="container">
    <div class="row ">
        <div class="col mt-5 ml-5">
        <a class="btn btn-danger" href="{{ url('e-ticket/pdf') }}"> Print Into PDF</a>
        </div>
    </div>
    <div class="col-sm">
    <div class="kolom" style="background-color:white; width:auto; height:480px; margin:auto; margin-top:20px; margin-bottom: 20px; box-shadow: 3px 3px 5px 6px #ccc; ">
    <div class="row">
        <div class="col-sm-4 mt-5">
            <img src="img/ic_logo.png" width="170" height="60" alt="">
        </div>
    </div>
    <hr style=" margin:0px; color:#000; border: solid 1px black;"></p>

    <div class="row" style="margin-left: 5px; padding:5px;">
        <div class="col col-md-offset-1 col-xs-6">
            <table>
            <tr>
                <td>Nomor Ticket</td>
                <td>:</td>
                <td>{{ $last->id }}</td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>:</td>
                <td>{{ $last->destination_name }}</td>
            </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td>{{ $last->name }}</td>
            </tr>
            </table>
    </div>
    <div class="col col-md-offset-1 col-xs-6">
        <table >
            <tr>
                <td>Tanggal Pembelian</td>
                <td>:</td>
                <td>{{ $last->buy_date }}</td>
            </tr>
            <tr>
                <td>Valid Hingga Tanggal</td>
                <td>:</td>
                <td>{{ $last->valid_until }}</td>
            </tr>
            </table>
    </div>
</div>
    <div class="row" style="margin-left: 5px;">

        <div class="col ml-5 mt-5 mr-3">
        <h5> Cara Menggunakan / How To Use</h5>
        <ol type="1">
            <li>Ini Adalah E-ticket milik anda untuk masuk ke (nama destinasi) <br> 
                <span class="translate" style="font-style: italic; font-weight:bold;">This is Your E-Ticket for entry (name location)</li></span>
            <li>Tunjukan Tiket ini untuk masuk, Diperlukan Verifikasi Identifikasi yang relevan sebelum masuk lokasi <br>
                <span class="translate" style="font-style: italic; font-weight:bold;">Present This Ticket Upon Entry, Verification of relevant Identification is Required prior to entry location</span></li>
        </ol>
        </div>
    </div>

    <div class="row">
        <div class="col ml-5" style="float:right; margin-right:35px; margin-bottom:10px;">
            <img class="float-right mr-4" src="http://placehold.it/128x128">
        </div>
    </div>
    <hr style=" margin:0px; color:#000; border: solid 1px black;"></p>


    <div class="row" style="margin-left: 5px;">
    <div class="col ml-3">
            Tiket Ini Tidak dapat dipindah tangakan, Tidak dapat di kembalikan kembali, hanya satu kali pakai di hari yang sama <br>
            <span class="translate" style="font-style: italic; font-weight:bold;">
                This ticket is not transferable, cannot be returned, only one time use on the same day</span>
    </div>

    </div>

    </div>
    </div>
</div>
</div>
