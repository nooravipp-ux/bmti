@extends('layouts.master')
@section('title', 'BMTI | Dashboard Evaluator')
@section('custom-css')
<style>
  /* Dashboard */
  .bgDashboard {
    position: relative;
    right: 12px;
    background-color: #14395B;
    width: 58px;
    height: 100%;
    overflow: hidden;
  }

  .bgDashboard:hover {
    width: 130px;
  }

  .logoDashboard {
    width: 120px;
    cursor: pointer;
  }

  .logoDashboard hr {
    position: relative;
    right: 8px;
    opacity: 1;
    width: 130px;
    color: #525252;
  }

  .iconDashboard {
    cursor: pointer;
  }

  .iconDashboard i {
    display: flex;
    font-size: 30px;
    color: white;
    margin-left: 5px;
  }

  .iconDashboard i:hover {
    color: #FFF008;
  }

  .iconDashboard span {
    position: relative;
    left: 50px;
    bottom: 28px;
    color: white;
    font-size: 14px;
    font-family: "glory";
    font-weight: 600;
  }

  .iconDashboard span:hover {
    color: #FFF008;
  }

  .textDashboard {
    font-family: "glory";
  }

  .textDashboard h4 {
    font-weight: 600;
  }

  .textDashboard p {
    font-weight: 600;
  }

  .akunButtonDashboard a {
    background: #FFF008;
    border-radius: 15px;
    padding: 11px;
    color: #14395B;
    font-size: 13px;
    font-weight: bold;
    text-decoration: none;
  }

  .akunButtonDashboard a:hover {
    background: #C6C62F;
  }

  /* End Dashboard */

  /* Menu Dashboard */
  .menuDashboard {
    margin-left: -10px;
    margin-top: 12px;
    background-image: url("../public/images/icon-menu.png");
    background-size: cover;
    width: 30px;
    height: 30px;
    cursor: pointer;
  }

  .menuDashboard:hover {
    background-image: url("../public/images/icon-menu-hover.png");
  }

  .menuDashboard2 {
    margin-right: 4px;
    margin-top: 12px;
    background-image: url("../public/images/icon-close.png");
    background-size: cover;
    width: 25px;
    height: 25px;
    cursor: pointer;
  }

  .menuDashboard2:hover {
    background-image: url("../public/images/icon-close-hover.png");
  }

  .bgMenuDashboard {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 99999;
    width: 100%;
    height: 100%;
    background-color: #14395B;
  }

  .iconDashboard2 {
    margin-top: 40px;
  }

  .iconDashboard2 i {
    font-size: 30px;
    color: white;
    cursor: pointer;
  }

  .iconDashboard2 i:hover {
    color: #FFF008;
  }

  .iconDashboard2 span {
    position: relative;
    bottom: 7px;
    left: 10px;
    color: white;
    font-size: 24px;
    font-family: "glory";
    font-weight: 600;
  }

  .iconDashboard2 span:hover {
    color: #FFF008;
  }

  /* End Menu Dashboard */

  /* Dashboard User */

  .cardPelatihan {
    width: 100%;
    height: 100%;
    font-family: "glory";
    overflow: hidden;
  }

  .cardPelatihan h5 {
    font-size: 16px;
    font-weight: 600;
  }

  .chartPelatihan {
    margin-left: auto;
    margin-right: auto;
  }

  .buttonPelatihan {
    height: 40px;
    width: 120px;
    font-weight: 600;
    font-family: "glory";
    color: white;
    border: 1px solid #00BF78;
    background-color: #53C7FF;
    border-radius: 10px;
  }

  .cardSertifikat {
    font-family: "glory";
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardSertifikat h5 {
    font-weight: 600;
    font-size: 16px;
  }

  .textCardSertifikat {
    font-family: "glory";
    font-weight: 600;
    font-size: 12px;
    height: 240px;
    overflow: scroll;
    padding-right: 5px;
  }

  .textCardSertifikat::-webkit-scrollbar {
    width: 10px;
    height: 10px;
  }

  .textCardSertifikat::-webkit-scrollbar-thumb {
    border: 1px solid #9c9c9c;
    background: #c2c2c2;
    border-radius: 10px;
  }

  .textCardSertifikat::-webkit-scrollbar-thumb:hover {
    background: #9c9c9c;
  }

  .textCardSertifikat::-webkit-scrollbar-track {
    background: transparent;
  }

  .textCardSertifikat b {
    cursor: pointer;
    color: #53C7FF;
  }

  .cardKursus {
    font-family: "glory";
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardKursus h5 {
    font-weight: 600;
    font-size: 16px;
  }

  .textCardKursus {
    font-weight: 600;
    font-size: 12px;
    height: 280px;
    overflow: scroll;
    padding-right: 5px;
  }

  .textCardKursus::-webkit-scrollbar {
    width: 10px;
    height: 10px;
  }

  .textCardKursus::-webkit-scrollbar-thumb {
    border: 1px solid #9c9c9c;
    background: #c2c2c2;
    border-radius: 10px;
  }

  .textCardKursus::-webkit-scrollbar-thumb:hover {
    background: #9c9c9c;
  }

  .textCardKursus::-webkit-scrollbar-track {
    background: transparent;
  }

  .textCardKursus span {
    margin-bottom: -10px;
  }

  .cardAktifitas {
    font-family: "glory";
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardAktifitas span {
    font-weight: 600;
    font-size: 12px;
  }

  .cardAktifitas h5 {
    font-weight: 600;
    font-size: 16px;
  }

  .cardAktifitas i {
    color: #8F8F8F;
    padding: 4px;
  }

  .scrollCardAktifitas {
    overflow: scroll;
    height: 280px;
    padding-right: 5px;
  }

  .scrollCardAktifitas::-webkit-scrollbar {
    width: 10px;
    height: 10px;
  }

  .scrollCardAktifitas::-webkit-scrollbar-thumb {
    border: 1px solid #9c9c9c;
    background: #c2c2c2;
    border-radius: 10px;
  }

  .scrollCardAktifitas::-webkit-scrollbar-thumb:hover {
    background: #9c9c9c;
  }

  .scrollCardAktifitas::-webkit-scrollbar-track {
    background: transparent;
  }

  .cardDiklat {
    font-family: "glory";
    font-size: 12px;
    font-weight: 600;
    height: 260px;
    width: 100%;
    overflow: hidden;
  }

  .cardDiklat h5 {
    font-weight: 600;
    font-size: 16px;
  }

  .cardDiklat i {
    padding-top: 5px;
    height: 20px;
    width: 20px;
    text-align: center;
    background-color: #1492E6;
    font-size: 10px;
    color: white;
    cursor: pointer;
  }

  .tablePeserta {
    overflow: scroll;
    height: 230px;
    padding-right: 5px;
  }

  .tablePeserta::-webkit-scrollbar {
    margin: 10px;
    width: 10px;
    height: 10px;
  }

  .tablePeserta::-webkit-scrollbar-thumb {
    border: 1px solid #9c9c9c;
    background: #c2c2c2;
    border-radius: 10px;
  }

  .tablePeserta::-webkit-scrollbar-thumb:hover {
    background: #9c9c9c;
  }

  .tablePeserta::-webkit-scrollbar-track {
    background: transparent;
  }

  .cardStatistikKehadiran {
    font-size: 12px;
    font-weight: 600;
    font-family: "glory";
    height: 260px;
    width: 100%;
    overflow: hidden;
  }

  .cardStatistikKehadiran h5 {
    font-size: 16px;
    font-weight: 600;
  }

  .cardStatistikKehadiran i {
    margin-right: 10px;
  }

  .chartStatistikKehadiran {
    margin-left: auto;
    margin-right: auto;
  }

  .filter button {
    margin-left: 10px;
  }

  /* End Dashboard User */


  /* Dashboard Eksekutif */

  .cardSiswa {
    border-radius: 5px;
    font-family: "glory";
    background-color: #F71F1F;
    color: white;
    height: 165px;
    width: 100%;
    overflow: hidden;
  }

  .cardSiswa h6 {
    font-size: 15px;
    font-weight: 600;
  }

  .cardSiswa h1 {
    font-weight: 600;
    margin: 0;
  }

  .cardSiswa span {
    font-size: 15px;
    font-weight: 600;
  }

  .marginCardSiswa {
    margin-top: 18px;
  }

  .cardGuru {
    border-radius: 5px;
    font-family: "glory";
    background-color: #0E26FF;
    color: white;
    height: 165px;
    width: 100%;
    overflow: hidden;
  }

  .cardGuru h6 {
    font-size: 15px;
    font-weight: 600;
  }

  .cardGuru h1 {
    font-weight: 600;
    margin: 0;
  }

  .cardGuru span {
    font-size: 15px;
    font-weight: 600;
  }

  .cardPerusahaan {
    border-radius: 5px;
    font-family: "glory";
    background-color: #FF7600;
    color: white;
    height: 165px;
    width: 100%;
    overflow: hidden;
  }

  .cardPerusahaan h6 {
    font-size: 15px;
    font-weight: 600;
  }

  .cardPerusahaan h1 {
    font-weight: 600;
    margin: 0;
  }

  .cardPerusahaan span {
    font-size: 15px;
    font-weight: 600;
  }

  .cardRasioSiswa {
    font-family: "glory";
    height: 280px;
    width: 100%;
    overflow: hidden;
  }

  .cardRasioSiswa h6 {
    font-size: 16px;
    font-weight: 600;
  }

  .chartRasioSiswa {
    margin-left: auto;
    margin-right: auto;
  }

  .cardRasioGuru {
    font-family: "glory";
    height: 280px;
    width: 100%;
    overflow: hidden;
  }

  .cardRasioGuru h6 {
    font-size: 16px;
    font-weight: 600;
  }

  .chartRasioGuru {
    margin-left: auto;
    margin-right: auto;
  }

  .cardJenisPelatihan {
    font-family: "glory";
    height: 280px;
    width: 100%;
    overflow: hidden;
  }

  .cardJenisPelatihan h6 {
    font-size: 16px;
    font-weight: 600;
  }

  .cardJenisPelatihan i {
    margin-right: 10px;
  }

  .chartJenisPelatihan {
    margin-left: auto;
    margin-right: auto;
  }

  .cardKunjunganAplikasi {
    font-size: 12px;
    font-weight: 600;
    font-family: "glory";
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardKunjunganAplikasi h5 {
    font-size: 16px;
    font-weight: 600;
  }

  .cardKunjunganAplikasi {
    margin-left: auto;
    margin-right: auto;
  }

  .cardKunjunganAplikasi i {
    margin-right: 10px;
  }

  .chartKunjunganAplikasi {
    margin-left: auto;
    margin-right: auto;
  }

  .cardKelulusanPeserta {
    font-family: "glory";
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardKelulusanPeserta h6 {
    font-size: 16px;
    font-weight: 600;
  }

  .cardKelulusanPeserta i {
    margin-right: 10px;
  }

  .chartKelulusanPeserta {
    margin-left: auto;
    margin-right: auto;
  }


  /* End Dashboard Eksekutif */


  /* Dashboard Penyelenggara */

  .cardKelasPelatihan {
    border-radius: 5px;
    font-family: "glory";
    background-color: #C34414;
    color: white;
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardKelasPelatihan h6 {
    font-size: 15px;
    font-weight: 600;
    margin: 0;
  }

  .cardKelasPelatihan h1 {
    font-weight: 600;
    margin: 0;
  }

  .cardKelasPelatihan span {
    font-size: 14px;
    font-weight: 600;
  }

  .cardPelatiahanTerselenggara {
    border-radius: 5px;
    font-family: "glory";
    background-color: #5534A5;
    color: white;
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardPelatiahanTerselenggara h6 {
    font-size: 15px;
    font-weight: 600;
    margin: 0;
  }

  .cardPelatiahanTerselenggara h1 {
    font-weight: 600;
    margin: 0;
  }

  .cardPelatiahanTerselenggara span {
    font-size: 14px;
    font-weight: 600;
  }

  .cardPelatihanBerjalan {
    border-radius: 5px;
    font-family: "glory";
    background-color: #205375;
    color: white;
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardPelatihanBerjalan h6 {
    font-size: 15px;
    font-weight: 600;
    margin: 0;
  }

  .cardPelatihanBerjalan h1 {
    font-weight: 600;
    margin: 0;
  }

  .cardPelatihanBerjalan span {
    font-size: 14px;
    font-weight: 600;
  }

  .cardPerbandinganKelas {
    font-family: "glory";
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardPerbandinganKelas h6 {
    font-size: 16px;
    font-weight: 600;
  }

  .chartPerbandinganKelas {
    width: 350px;
    margin-left: auto;
    margin-right: auto;
  }

  .cardPesertaPelatihan {
    font-family: "glory";
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardPesertaPelatihan h6 {
    font-size: 16px;
    font-weight: 600;
  }

  .chartPesertaPelatihan {
    width: 350px;
    margin-left: auto;
    margin-right: auto;
  }

  .cardPerbandinganPeserta {
    font-family: "glory";
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardPerbandinganPeserta h6 {
    font-size: 16px;
    font-weight: 600;
  }

  .chartPerbandinganPeserta {
    margin-left: auto;
    margin-right: auto;
  }

  .cardPelatihanSelesai {
    margin-top: 100px;
    margin-left: 100px;
    border-radius: 5px;
    font-family: "glory";
    background-color: #990000;
    color: white;
    height: auto;
    width: 100%;
    overflow: hidden;
  }

  .cardPelatihanSelesai h6 {
    font-size: 15px;
    font-weight: 600;
    margin: 0;
  }

  .cardPelatihanSelesai h1 {
    font-weight: 600;
    margin: 0;
  }

  .cardPelatihanSelesai span {
    font-size: 14px;
    font-weight: 600;
  }


  /* End Dashboard Penyelenggara */


  /* Dashboard Evaluasi Diklat */

  .cardPelatihanTerevaluasi {
    border-radius: 5px;
    font-family: "glory";
    background-color: #7070FF;
    color: white;
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardPelatihanTerevaluasi h6 {
    font-size: 15px;
    font-weight: 600;
  }

  .cardPelatihanTerevaluasi h1 {
    font-weight: 600;
  }

  .cardPelatihanTerevaluasi span {
    font-size: 15px;
    font-weight: 600;
  }

  .cardBelumTerevaluasi {
    border-radius: 5px;
    font-family: "glory";
    background-color: #FF5757;
    color: white;
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardBelumTerevaluasi h6 {
    font-size: 15px;
    font-weight: 600;
  }

  .cardBelumTerevaluasi h1 {
    font-weight: 600;
  }

  .cardBelumTerevaluasi span {
    font-size: 15px;
    font-weight: 600;
  }

  .cardPelatihanSTTPL {
    border-radius: 5px;
    font-family: "glory";
    background-color: #7070FF;
    color: white;
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .cardPelatihanSTTPL h6 {
    font-size: 15px;
    font-weight: 600;
  }

  .cardPelatihanSTTPL h1 {
    font-weight: 600;
  }

  .cardPelatihanSTTPL span {
    font-size: 15px;
    font-weight: 600;
  }

  .cardDimensiLayanan {
    padding: 10px;
    border-radius: 10px;
    background-color: white;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    height: auto;
    width: 100%;
  }

  .cardDimensiLayanan h6 {
    margin-top: 40px;
    font-family: "glory";
    font-size: 15px;
    font-weight: 600;
  }

  .cardEvaluasiPengajar {
    font-family: "glory";
    font-size: 12px;
    font-weight: 600;
    height: 220px;
    width: 100%;
    overflow: hidden;
  }

  .cardEvaluasiPengajar h5 {
    font-weight: 600;
    font-size: 16px;
  }

  .cardEvaluasiPengajar i {
    padding-top: 5px;
    height: 20px;
    width: 20px;
    text-align: center;
    background-color: #1492E6;
    font-size: 10px;
    color: white;
    cursor: pointer;
  }

  .tableEvaluasiPengajar {
    overflow: scroll;
    height: 200px;
    padding-right: 5px;
  }

  .cardEvaluasiPenyelenggara {
    font-family: "glory";
    font-size: 12px;
    font-weight: 600;
    height: 220px;
    width: 100%;
    overflow: hidden;
  }

  .cardEvaluasiPenyelenggara h5 {
    font-weight: 600;
    font-size: 16px;
  }

  .cardEvaluasiPenyelenggara i {
    padding-top: 5px;
    height: 20px;
    width: 20px;
    text-align: center;
    background-color: #1492E6;
    font-size: 10px;
    color: white;
    cursor: pointer;
  }

  .tableEvaluasiPenyelenggara {
    overflow: scroll;
    height: 200px;
    padding-right: 5px;
  }

  .cardStandarPelayanan {
    margin-top: -110px;
    padding: 10px;
    border-radius: 10px;
    background-color: white;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    height: auto;
    width: 100%;
  }

  .cardStandarPelayanan h6 {
    margin-top: 40px;
    font-family: "glory";
    font-size: 15px;
    font-weight: 600;
  }

  .cardSaran {
    font-family: "glory";
    font-size: 12px;
    font-weight: 600;
    height: 220px;
    width: 100%;
    overflow: hidden;
  }

  .cardSaran h5 {
    font-weight: 600;
    font-size: 16px;
  }

  .cardSaran i {
    padding-top: 5px;
    height: 20px;
    width: 20px;
    text-align: center;
    background-color: #1492E6;
    font-size: 10px;
    color: white;
    cursor: pointer;
  }

  .tableSaran {
    overflow: scroll;
    height: 200px;
    padding-right: 5px;
  }

  .cardSertifikatTerbit {
    font-family: "glory";
    font-size: 12px;
    font-weight: 600;
    height: 220px;
    width: 100%;
    overflow: hidden;
  }

  .cardSertifikatTerbit h5 {
    font-weight: 600;
    font-size: 16px;
  }

  .cardSertifikatTerbit i {
    padding-top: 5px;
    height: 20px;
    width: 20px;
    text-align: center;
    background-color: #1492E6;
    font-size: 10px;
    color: white;
    cursor: pointer;
  }

  .tableSertifikatTerbit {
    overflow: scroll;
    height: 200px;
    padding-right: 5px;
  }

  .cardPredikatKelulusan {
    margin-top: -220px;
    padding: 10px;
    border-radius: 10px;
    background-color: white;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    height: auto;
    width: 100%;
  }

  .cardPredikatKelulusan h6 {
    margin-top: 60px;
    font-family: "glory";
    font-size: 15px;
    font-weight: 600;
  }

  .tablePredikatKelulusan {
    overflow: scroll;
    height: 130px;
    padding-right: 5px;
    font-family: "glory";
    font-size: 12px;
    font-weight: 600;
  }

  .textPredikatKelulusan {
    text-align: start;
    font-size: 12px;
    font-weight: 600;
  }


  /* End Dashboard Evaluasi Diklat */

  /* Responsive */
  /* Dashboard*/
  @media only screen and (min-width: 400px) and (max-width: 499px) {
    .bgDashboard {
      background: none;
      width: 100%;
      height: 100%;
    }

    .bgDashboard:hover {
      width: 100%;
    }

    .logoDashboard hr {
      display: none;
    }

    .logoDashboard {
      margin-left: 10px;
    }

    .iconDashboard {
      display: none;
    }

    .textDashboard {
      margin-top: -35px;
      text-align: center;
    }

    .textDashboard h4 {
      font-size: 30px;
    }

    .akunButtonDashboard {
      position: absolute;
      top: 35px;
      left: 65%;
    }

    .menuDashboard {
      position: absolute;
      top: 20px;
      left: 90%;
    }

    .marginCard {
      margin-bottom: 20px;
    }

    .cardRasioSiswa {
      height: 320px;
    }

    .cardRasioGuru {
      height: 320px;
    }

    .cardPelatihanSelesai {
      margin: 0;
    }
  }

  @media only screen and (min-width: 500px) and (max-width: 575px) {
    .bgDashboard {
      background: none;
      width: 100%;
      height: 100%;
    }

    .bgDashboard:hover {
      width: 100%;
    }

    .logoDashboard hr {
      display: none;
    }

    .logoDashboard {
      margin-left: 10px;
    }

    .iconDashboard {
      display: none;
    }

    .textDashboard {
      margin-top: -35px;
      text-align: center;
    }

    .textDashboard h4 {
      font-size: 30px;
    }

    .akunButtonDashboard {
      position: absolute;
      top: 35px;
      left: 72%;
    }

    .menuDashboard {
      position: absolute;
      top: 20px;
      left: 93%;
    }

    .marginCard {
      margin-bottom: 20px;
    }

    .cardRasioSiswa {
      height: 360px;
    }

    .cardRasioGuru {
      height: 360px;
    }

    .cardPelatihanSelesai {
      margin: 0;
    }
  }

  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .bgDashboard {
      background: none;
      width: 100%;
      height: 100%;
    }

    .bgDashboard:hover {
      width: 100%;
    }

    .logoDashboard hr {
      display: none;
    }

    .logoDashboard {
      margin-left: 10px;
    }

    .iconDashboard {
      display: none;
    }

    .textDashboard {
      margin-top: -35px;
      text-align: center;
    }

    .textDashboard h4 {
      font-size: 30px;
    }

    .akunButtonDashboard {
      position: absolute;
      top: 35px;
      left: 74%;
    }

    .menuDashboard {
      position: absolute;
      top: 20px;
      left: 93%;
    }

    .marginCard {
      margin-bottom: 20px;
    }

    .cardRasioSiswa {
      height: 340px;
    }

    .cardRasioGuru {
      height: 340px;
    }

    .cardPelatihanSelesai {
      margin: 0;
    }
  }

  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .bgDashboard {
      background: none;
      width: 100%;
      height: 100%;
    }

    .bgDashboard:hover {
      width: 100%;
    }

    .logoDashboard hr {
      display: none;
    }

    .logoDashboard {
      margin-left: 10px;
    }

    .iconDashboard {
      display: none;
    }

    .textDashboard {
      margin-top: -35px;
      text-align: center;
    }

    .textDashboard h4 {
      font-size: 30px;
    }

    .akunButtonDashboard {
      position: absolute;
      top: 35px;
      left: 80%;
    }

    .menuDashboard {
      position: absolute;
      top: 20px;
      left: 95%;
    }

    .marginCard {
      margin-bottom: 20px;
    }

    .textCardSertifikat {
      height: 285px;
    }

    .textCardKursus {
      height: 280px;
    }

    .cardRasioSiswa {
      height: 250px;
    }

    .cardRasioGuru {
      height: 250px;
    }
  }

  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .bgDashboard {
      background: none;
      width: 100%;
      height: 100%;
    }

    .bgDashboard:hover {
      width: 100%;
    }

    .logoDashboard hr {
      display: none;
    }

    .logoDashboard {
      margin-left: 10px;
    }

    .iconDashboard {
      display: none;
    }

    .textDashboard {
      margin-top: -35px;
      text-align: center;
    }

    .textDashboard h4 {
      font-size: 30px;
    }

    .akunButtonDashboard {
      position: absolute;
      top: 35px;
      left: 85%;
    }

    .menuDashboard {
      position: absolute;
      top: 20px;
      left: 96%;
    }

    .marginCard {
      margin-bottom: 20px;
    }

    .marginCardSiswa {
      margin-top: 0px;
    }
  }

  /* End Dashboard */
  /* End Responsive */
</style>
@endsection
@section('content')
<div class="content-wrapper">
  <div class="row justify-content-start">
    <div class="col-12 col-xl-4">
      <div class="cardPelatihanTerevaluasi">
        <div class="shadow rounded p-3 h-100">
          <div class="row">
            <div class="col-12">
              <h6>Pelatihan yang telat dievaluasi</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-4 mt-3 text-center">
              <h1>26</h1>
              <span>Daring</span>
            </div>
            <div class="col-4 mt-3 text-center">
              <h1>4</h1>
              <span>Luring</span>
            </div>
            <div class="col-4 mt-3 text-center">
              <h1>2</h1>
              <span>Blended</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4">
      <div class="cardBelumTerevaluasi">
        <div class="shadow rounded p-3 h-100">
          <div class="row">
            <div class="col-xl-12">
              <h6>Pelatihan yang belum dievaluasi</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-4 mt-3 text-center">
              <h1>0</h1>
              <span>Daring</span>
            </div>
            <div class="col-4 mt-3 text-center">
              <h1>1</h1>
              <span>Luring</span>
            </div>
            <div class="col-4 mt-3 text-center">
              <h1>0</h1>
              <span>Blended</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4">
      <div class="cardPelatihanSTTPL">
        <div class="shadow rounded p-3 h-100">
          <div class="row">
            <div class="col-12">
              <h6>Pelatihan STTPL yang telah diterbitkan</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-4 mt-3 text-center">
              <h1>477</h1>
              <span>Daring</span>
            </div>
            <div class="col-4 mt-3 text-center">
              <h1>50</h1>
              <span>Luring</span>
            </div>
            <div class="col-4 mt-3 text-center">
              <h1>31</h1>
              <span>Blended</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-12 col-xl-4">
      <div class="cardDimensiLayanan">
        <div class="row">
          <div class="col-2">
            <h6>Dimensi Layanan</h6>
          </div>
          <div class="col-10">
            <Image src="{{asset('guest/assets/images/dimensi-layanan.jpeg')}}" width="310px" height="120px" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4">
      <div class="shadow p-3 bg-white rounded h-100">
        <div class="cardEvaluasiPengajar">
          <h5>Hasil Evaluasi terhadap Pengajar</h5>
          <div class="tableEvaluasiPengajar">
            <table class="table table-striped table-sm text-center">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Pengajar</th>
                  <th scope="col">Rata - Rata</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4">
      <div class="shadow p-3 bg-white rounded h-100">
        <div class="cardEvaluasiPenyelenggara">
          <h5>Hasil Evaluasi Penyelenggara Pelatihan</h5>
          <div class="tableEvaluasiPenyelenggara">
            <table class="table table-striped table-sm text-center">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Pengajar</th>
                  <th scope="col">Rata - Rata</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-12 col-xl-4">
      <div class="cardStandarPelayanan">
        <div class="row">
          <div class="col-2">
            <h6>Standar Pelayanan</h6>
          </div>

          <div class="col-10">
            <Image src="{{asset('guest/assets/images/standar-pelayanan.jpeg')}}" width="310px" height="130px" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4">
      <div class="shadow p-3 bg-white rounded h-100">
        <div class="cardSaran">
          <h5>Saran/Masukan/Testimoni Peserta</h5>
          <div class="tableSaran">
            <table class="table table-striped table-sm text-center">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Pengajar</th>
                  <th scope="col">Rata - Rata</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4">
      <div class="shadow p-3 bg-white rounded h-100">
        <div class="cardSertifikatTerbit">
          <h5>Sertifikat yang sudah diterbitkan</h5>
          <div class="tableSertifikatTerbit">
            <table class="table table-striped table-sm text-center">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Pengajar</th>
                  <th scope="col">Rata - Rata</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td></td>
                  <td></td>
                  <td><i class="fa-solid fa-eye"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-12 col-xl-4">
      <div class="cardPredikatKelulusan">
        <div class="row">
          <div class="col-3">
            <h6>Predikat dan Kriteria Kelulusan</h6>
          </div>

          <div class="col-9">
            <div class="tablePredikatKelulusan">
              <table class="table table-striped table-sm text-center">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Skala Nilai</th>
                    <th scope="col">Predikat</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="textPredikatKelulusan">Peserta yang memperoleh predikat minimal cukup akan diberikan sertifikat</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script>
  $('.modal-footer')
</script>
@endsection