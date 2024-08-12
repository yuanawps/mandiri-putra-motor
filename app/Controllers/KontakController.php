<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class KontakController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Mandiri Putra Motor';
        return view('user/kontak/index', $data);
    }

    public function sendEmail()
    {
        // Validasi form
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'email' => 'required|valid_email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, kembalikan pesan error dalam format JSON
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $validation->getErrors()
            ]);
        }

        $nama = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $subjek = $this->request->getPost('subject');
        $pesan = $this->request->getPost('message');

        $mail = new PHPMailer(true);

        try {
            // Pengaturan server
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dindap696@gmail.com';
            $mail->Password = 'daco whte efti gmvw';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Pengirim dan penerima
            $mail->setFrom($email, $nama);
            $mail->addAddress('dindap696@gmail.com', 'Nama Sekolah');

            // Konten
            $mail->isHTML(true);
            $mail->Subject = $subjek;
            $mail->Body = "<h4>Nama: $nama</h4><p>Email: $email</p><p>Pesan: $pesan</p>";
            $mail->AltBody = "Nama: $nama\nEmail: $email\nPesan: $pesan";

            $mail->send();

            // Jika pengiriman berhasil, kembalikan pesan sukses dalam format JSON
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Pesan kamu telah dikirim. Terimakasih!'
            ]);
        } catch (Exception $e) {
            // Tangkap kesalahan dan kembalikan pesan error dalam format JSON
            return $this->response->setJSON([
                'status' => 'error',
                'message' => "Pesan tidak dapat dikirim. Mailer Error: {$e->getMessage()}"
            ]);
        }
    }
}