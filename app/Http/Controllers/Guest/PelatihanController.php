<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\KursusPeserta;
use App\Models\Topik;
use App\Models\Quiz;
use App\Models\Pertanyaan;
use App\Models\LogEnrolledPesertaPelatihan;
use Illuminate\Support\Facades\DB;

class PelatihanController extends Controller
{
    public function index()
    {
        $data = DB::table('t_kursus')->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
            ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
            ->get();

        return view('guest.pelatihan.index', compact('data'));
    }

    public function getDetailPelatihan($id)
    {
        $data = DB::table('t_kursus')->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
            ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
            ->get();

        $pelatihan = DB::table('t_kursus')
            ->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
            ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
            ->first();

        $topiks  = Topik::where('kursus_id', $id)->get();
        $pelatihan = Kursus::where('id',$id)->first();

        $topikQuiz = DB::table('t_topik')->select('t_quiz.id as quiz_id', 't_quiz.judul', 't_topik_quiz.topik_id')
            ->join('t_topik_quiz', 't_topik_quiz.topik_id', '=', 't_topik.id')
            ->join('t_quiz', 't_quiz.id', '=', 't_topik_quiz.quiz_id')
            ->where('t_topik.kursus_id', $id)
            ->get();
        $konten = DB::table('t_topik')
            ->join('t_topik_konten', 't_topik.id', '=', 't_topik_konten.topik_id')
            ->join('t_konten', 't_konten.id', '=', 't_topik_konten.konten_id')
            ->where('kursus_id', $id)
            ->get();

        return view('guest.pelatihan.pelatihan_by_kategori', compact('topiks', 'pelatihan', 'topikQuiz', 'konten', 'data'));
    }

    public function getTopikPembelajaran($pelatihanId, $topikId)
    {
        if(auth()->user() == null){
            return redirect('/login');
        };

        $pelatihan = DB::table('t_kursus')
            ->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
            ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
            ->first();

        $topiks  = Topik::where('kursus_id', $pelatihanId)->get();
        $pelatihan = Kursus::where('id', $pelatihanId)->first();

        $singleTopik = Topik::where('id', $topikId)->first();

        $topikQuiz = DB::table('t_topik')
            ->select('t_quiz.id as quiz_id', 't_quiz.judul', 't_topik_quiz.topik_id','t_peserta_quiz.status')
            ->join('t_topik_quiz', 't_topik_quiz.topik_id', '=', 't_topik.id')
            ->join('t_quiz', 't_quiz.id', '=', 't_topik_quiz.quiz_id')
            ->leftJoin('t_peserta_quiz', 't_peserta_quiz.topik_id', '=', 't_topik_quiz.topik_id')
            ->where('t_topik.kursus_id', $pelatihanId)
            ->get();

        $konten = DB::table('t_topik')
            ->select('t_topik_konten.topik_id','t_konten.id', 't_konten.judul', 't_peserta_konten.status')
            ->join('t_topik_konten', 't_topik.id', '=', 't_topik_konten.topik_id')
            ->join('t_konten', 't_konten.id', '=', 't_topik_konten.konten_id')
            ->leftJoin('t_peserta_konten', 't_peserta_konten.topik_id', '=', 't_topik_konten.topik_id')
            ->where('t_topik.kursus_id', $pelatihanId)
            ->get();

        return view('pembelajaran.index', compact('pelatihan', 'topiks','topikQuiz', 'konten', 'pelatihanId','topikId', 'singleTopik'));
    }

    public function getKontenPembelajaran($pelatihanId, $topikId, $kontenId)
    {
        // $data = DB::table('t_kursus')->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
        //     ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
        //     ->get();

        if(auth()->user() == null){
            return redirect('/login');
        };

        $pelatihan = DB::table('t_kursus')
            ->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
            ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
            ->first();

        $topiks  = Topik::where('kursus_id', $pelatihanId)->get();
        $pelatihan = Kursus::where('id', $pelatihanId)->first();

        $topikQuiz = DB::table('t_topik')
            ->select('t_quiz.id as quiz_id', 't_quiz.judul', 't_topik_quiz.topik_id','t_peserta_quiz.status')
            ->join('t_topik_quiz', 't_topik_quiz.topik_id', '=', 't_topik.id')
            ->join('t_quiz', 't_quiz.id', '=', 't_topik_quiz.quiz_id')
            ->leftJoin('t_peserta_quiz', 't_peserta_quiz.topik_id', '=', 't_topik_quiz.topik_id')
            ->where('t_topik.kursus_id', $pelatihanId)
            ->get();

        $konten = DB::table('t_topik')
            ->select('t_topik_konten.topik_id','t_konten.id', 't_konten.judul', 't_peserta_konten.status')
            ->join('t_topik_konten', 't_topik.id', '=', 't_topik_konten.topik_id')
            ->join('t_konten', 't_konten.id', '=', 't_topik_konten.konten_id')
            ->leftJoin('t_peserta_konten', 't_peserta_konten.topik_id', '=', 't_topik_konten.topik_id')
            ->where('t_topik.kursus_id', $pelatihanId)
            ->get();

        $data = DB::table('t_kursus')
            ->select('t_konten.*', 't_topik.id as topik_id')
            ->join('t_topik', 't_kursus.id', '=', 't_topik.kursus_id')
            ->join('t_topik_konten', 't_topik.id', '=', 't_topik_konten.topik_id')
            ->join('t_konten', 't_konten.id', '=', 't_topik_konten.konten_id')
            ->where('t_topik_konten.topik_id', $topikId)
            ->where('t_topik_konten.konten_id', $kontenId)
            ->first();

        $cekKontenSelesai = $this->cekKontenSelesai($pelatihanId, $topikId, $kontenId);

        return view('pembelajaran.konten', compact('pelatihan', 'topiks','topikQuiz', 'konten', 'data','pelatihanId','topikId', 'cekKontenSelesai','kontenId'));
    }

    public function getQuizPembelajaran($pelatihanId, $topikId, $quizId)
    {

        if(auth()->user() == null){
            return redirect('/login');
        };
        
        $data = DB::table('t_kursus')->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
            ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
            ->get();

        $pelatihan = DB::table('t_kursus')
            ->select('t_kursus.*', 'm_kelompok_keahlian.nama as kategori_kursus')
            ->join('m_kelompok_keahlian', 'm_kelompok_keahlian.id', '=', 't_kursus.kelompok_keahlian_id')
            ->first();

        $topiks  = Topik::where('kursus_id', $pelatihanId)->get();
        $pelatihan = Kursus::where('id', $pelatihanId)->first();

        $topikQuiz = DB::table('t_topik')
            ->select('t_quiz.id as quiz_id', 't_quiz.judul', 't_topik_quiz.topik_id','t_peserta_quiz.status')
            ->join('t_topik_quiz', 't_topik_quiz.topik_id', '=', 't_topik.id')
            ->join('t_quiz', 't_quiz.id', '=', 't_topik_quiz.quiz_id')
            ->leftJoin('t_peserta_quiz', 't_peserta_quiz.topik_id', '=', 't_topik_quiz.topik_id')
            ->where('t_topik.kursus_id', $pelatihanId)
            ->get();

        $konten = DB::table('t_topik')
            ->select('t_topik_konten.topik_id','t_konten.id', 't_konten.judul', 't_peserta_konten.status')
            ->join('t_topik_konten', 't_topik.id', '=', 't_topik_konten.topik_id')
            ->join('t_konten', 't_konten.id', '=', 't_topik_konten.konten_id')
            ->leftJoin('t_peserta_konten', 't_peserta_konten.topik_id', '=', 't_topik_konten.topik_id')
            ->where('t_topik.kursus_id', $pelatihanId)
            ->get();

        $quiz = Quiz::find($topikId);
        $pertanyaan = Pertanyaan::where('quiz_id', $quizId)->get();
        return view('pembelajaran.quiz', compact('pertanyaan', 'pelatihan', 'topiks','topikQuiz', 'konten', 'data','pelatihanId','topikId', 'quizId'));
    }

    public function tandaiKontenSelesai($pelatihanId, $topikId, $kontenId)
    {

        $userdata = DB::table('users')
            ->select('m_peserta.id')
            ->join('m_peserta', 'm_peserta.user_id', '=', 'users.id')
            ->where('users.id', auth()->user()->id)
            ->first();

        $kursusPesertaData = KursusPeserta::where('peserta_id', $userdata->id)->first();

        DB::table('t_peserta_konten')->insert([
            'kursus_peserta_id' => $kursusPesertaData->id,
            'topik_id' => $topikId,
            'konten_id' => $kontenId,
            'status' => 1,
            'tanggal_selesai' => now(),
        ]);

        return redirect()->back();
    }

    public function tandaiQuizSelesai($pelatihanId, $topikId, $quizId, Request $request)
    {
        $jawaban = $request->jawaban;

        $userdata = DB::table('users')
            ->select('m_peserta.id')
            ->join('m_peserta', 'm_peserta.user_id', '=', 'users.id')
            ->where('users.id', auth()->user()->id)
            ->first();

        $pertanyaanJawaban = DB::table('m_pertanyaan')->where('quiz_id', $quizId)->get();
        $totalSoal = DB::table('m_pertanyaan')->where('quiz_id', $quizId)->count();

        $kursusPesertaId = DB::table('t_kursus_peserta')->where('kursus_id', $pelatihanId)->where('peserta_id', $userdata->id)->first();
        $counterJawabanBenar = 0;

        DB::table('t_peserta_quiz')->insert([
            'kursus_peserta_id' => $kursusPesertaId->id,
            'topik_id' => $topikId,
            'quiz_id' => $quizId,
            'nilai_quiz' => 0,
            'status' => 1,
            'tanggal_selesai' => now(),
        ]);

        $pesertaQuizLastId = DB::table('t_peserta_quiz')->orderBy('id', 'DESC')->first();

        foreach ($jawaban as $key => $value) {
            $jawabanBenar = $value['benar'];

            foreach($pertanyaanJawaban as $pj){
                if($pj->id == $key && $pj->jawaban == $jawabanBenar){
                    $counterJawabanBenar++;
                }
            }

            DB::table('t_peserta_quiz_jawaban')->insert([
                'peserta_quiz_id' => $pesertaQuizLastId->id,
                'pertanyaan_id' => $key,
                'jawaban' => $jawabanBenar
            ]);
        }

        $bobotSoal = (100 / (int)$totalSoal);
        $nilaiAkhir = $bobotSoal * $counterJawabanBenar;

        // dd(round($nilaiAkhir, 2));

        DB::table('t_peserta_quiz')->where('id', $pesertaQuizLastId->id)->update([
            'nilai_quiz' => round($nilaiAkhir, 2),
        ]);

        return redirect()->back()->with('nilai-akhir', $nilaiAkhir);
    }


    public function cekKontenSelesai($pelatihanId, $topikId, $kontenId)
    {
        $userdata = DB::table('users')
            ->select('m_peserta.id')
            ->join('m_peserta', 'm_peserta.user_id', '=', 'users.id')
            ->where('users.id', auth()->user()->id)
            ->first();

        $kursusPesertaData = KursusPeserta::where('peserta_id', $userdata->id)->first();

        $data = DB::table('t_peserta_konten')->where('kursus_peserta_id', $kursusPesertaData->id)->where('topik_id', $topikId)->where('konten_id', $kontenId)->first();

        if ($data) {
            return true;
        } else {
            return false;
        }
    }
}
