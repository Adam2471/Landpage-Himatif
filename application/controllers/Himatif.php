<?php

/**
 * @property CI_Input $input
 * @property CI_Upload $upload
 * @property CI_Loader $load
 * @property M_login $m_login
 */
class himatif extends CI_Controller
{
    public function galeri()
    {
        $this->load->view('galeri');
    }


    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('template/footer');
    }
    function pm()
    {
        $this->load->view('template/header');
        $this->load->view('pm');
        $this->load->view('template/footer');
    }
    function ksb()
    {
        $this->load->view('template/header');
        $this->load->view('ksb');
        $this->load->view('template/footer');
    }
    function po()
    {
        $this->load->view('template/header');
        $this->load->view('po');
        $this->load->view('template/footer');
    }
    function miba()
    {
        $this->load->view('template/header');
        $this->load->view('miba');
        $this->load->view('template/footer');
    }
    function medkom()
    {
        $this->load->view('template/header');
        $this->load->view('medkom');
        $this->load->view('template/footer');
    }
    function litbang()
    {
        $this->load->view('template/header');
        $this->load->view('litbang');
        $this->load->view('template/footer');
    }

    function hubin()
    {
        $this->load->view('template/header');
        $this->load->view('hubin');
        $this->load->view('template/footer');
    }

    function itfast_2()
    {
        #$this->load->view('template/header');
        $this->load->view('itfast_2');
        #$this->load->view('template/footer');
    }

    function contact()
    {
        $this->load->view('contact');
    }
    function lomba_esport()
    {
        $this->load->view('lomba_esport');
    }
    function lomba_sport()
    {
        $this->load->view('lomba_sport');
    }
    function lomba_iot()
    {
        $this->load->view('lomba_iot');
    }
    function lomba_uiux()
    {
        $this->load->view('lomba_uiux');
    }
    function lomba_poster()
    {
        $this->load->view('lomba_poster');
    }
    function lomba_film()
    {
        $this->load->view('lomba_film');
    }
    function workshop()
    {
        $this->load->view('workshop');
    }
    function festival_musik()
    {
        $this->load->view('festival_musik');
    }
    function seminar_nasional()
    {
        $this->load->view('seminar_nasional');
    }

    function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $no_telp = $this->input->post('no_telp');
        $kelas = $this->input->post('kelas');
        $angkatan = $this->input->post('angkatan');
        $lomba = $this->input->post('lomba');
        $pembayaran = $this->input->post('pembayaran');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/bukti';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "<script>alert('" . $this->upload->display_errors() . "');
				window.history.back();</script>";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'no_telp' => $no_telp,
            'kelas' => $kelas,
            'angkatan' => $angkatan,
            'lomba' => $lomba,
            'pembayaran' => $pembayaran,
            'foto' => $foto
        );
        $this->m_login->input_data($data, 'pendaftaran');
        echo "<script>alert('Data berhasil disimpan');
				location.href = 'itfast_2';</script>";
    }
    function seminar_nasional_aksi()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $no_tlp = $this->input->post('no_tlp');
        $asal = $this->input->post('asal');
        $lomba = $this->input->post('lomba');
        $foto = $_FILES['foto'];
        $cek_duplikat = $this->check_double_data_semnas($nim);

        if ($cek_duplikat == 0) {
            if ($foto = '') {
            } else {
                $config['upload_path'] = './assets/bukti';
                $config['allowed_types'] = 'jpg|png|gif|jpeg';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "<script>alert('" . $this->upload->display_errors() . " Jika masih error coba registrasi lewat laptop/pc, atau hubungi panitia.');
				window.history.back();</script>";
                    die();
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama' => $nama,
                'nim' => $nim,
                'no_hp' => $no_tlp,
                'asal' => $asal,
                'kegiatan' => $lomba,
                'foto' => $foto
            );
            $this->m_login->input_data($data, 'semnas');
            // echo "<script>alert('Silahkan Join Group Watshapp, https://chat.whatsapp.com/EySrhiaCcd3LcIkX2jei6a');
            // 		location.href = 'itfast_2';</script>";
            $this->view_success_register_semnas($data);
        } else {
            $data = [
                'nama' => $nama,
                'nim' => $nim,
                'no_hp' => $no_tlp,
                'asal' => $asal,
                'kegiatan' => $lomba,
                'sudah_terdaftar' => "NIM <b> $nim </b> sudah terdaftar sebelumnya, hubungi panitia jika ada kendala atau perubahan data, Terima kasih <i class='fa-regular fa-face-smile-tongue'></i>"
            ];

            $this->load->view("success_regis_semnas", $data);
        }
    }
    // Added by Reza Riyaldi - 06/Sept/2022
    public function check_double_data_semnas($nim)
    {
        $jumlah_data = $this->m_login->check_peserta_semnas($nim);
        return $jumlah_data;
    }
    public function view_success_register_semnas($data = [])
    {
        $data = [
            'nama' => $data['nama'],
            'nim' => $data['nim'],
            'no_hp' => $data['no_hp'],
            'asal' => $data['asal'],
            'kegiatan' => $data['kegiatan']
        ];

        $this->load->view("success_regis_semnas", $data);
    }
    function tambah_aksi_esport()
    {
        $nama = $this->input->post('nama');
        $no_telp = $this->input->post('no_telp');
        $lomba = $this->input->post('lomba');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/bukti';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "<script>alert('Foto harus berupa JPG, PNG, atau JPEG');
				window.history.back();</script>";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_tim' => $nama,
            'no_hp' => $no_telp,
            'lomba' => $lomba,
            'foto' => $foto
        );
        $this->m_login->input_data($data, 'lomba_esport');
        echo "<script>alert('Data berhasil disimpan');
				location.href = 'itfast_2';</script>";
    }
    function tambah_aksi_lomba_sport()
    {
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $no_tlp = $this->input->post('no_tlp');
        $angkatan = $this->input->post('angkatan');
        $lomba = $this->input->post('lomba');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/bukti';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "<script>alert('Foto harus berupa JPG, PNG, atau JPEG');
				window.history.back();</script>";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_pj' => $nama,
            'kelas' => $kelas,
            'no_hp' => $no_tlp,
            'angkatan' => $angkatan,
            'lomba' => $lomba,
            'foto' => $foto
        );
        $this->m_login->input_data($data, 'lomba_sport');
        echo "<script>alert('Data berhasil disimpan');
				location.href = 'https://chat.whatsapp.com/HWeTxfYbwEc3pUYabzGwoC';</script>";
    }
    function tambah_aksi_lomba_iot()
    {
        $nama_ketua = $this->input->post('nama_ketua');
        $nama_tim = $this->input->post('nama_tim');
        $asal = $this->input->post('asal');
        $no_tlp = $this->input->post('no_tlp');
        $lomba = $this->input->post('lomba');
        $dokumen = $this->input->post('dokumen');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/bukti';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "<script>alert('Foto harus berupa JPG, PNG, atau JPEG');
				window.history.back();</script>";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_ketua' => $nama_ketua,
            'nama_tim' => $nama_tim,
            'asal' => $asal,
            'no_hp' => $no_tlp,
            'lomba' => $lomba,
            'dokumen_pendukung' => $dokumen,
            'foto' => $foto
        );
        $this->m_login->input_data($data, 'iot');
        echo "<script>alert('Data berhasil disimpan');
				location.href = 'itfast_2';</script>";
    }
    function tambah_aksi_lomba_uiux()
    {
        $nama_ketua = $this->input->post('nama_ketua');
        $nama_tim = $this->input->post('nama_tim');
        $asal = $this->input->post('asal');
        $no_tlp = $this->input->post('no_tlp');
        $lomba = $this->input->post('lomba');
        $dokumen = $this->input->post('dokumen');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/bukti';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "<script>alert('Foto harus berupa JPG, PNG, atau JPEG');
				window.history.back();</script>";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_ketua' => $nama_ketua,
            'nama_tim' => $nama_tim,
            'asal' => $asal,
            'no_hp' => $no_tlp,
            'lomba' => $lomba,
            'dokumen_pendukung' => $dokumen,
            'foto' => $foto
        );
        $this->m_login->input_data($data, 'uiux');
        echo "<script>alert('Data berhasil disimpan');
				location.href = 'itfast_2';</script>";
    }
    function tambah_aksi_lomba_poster()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $asal = $this->input->post('asal');
        $no_tlp = $this->input->post('no_tlp');
        $lomba = $this->input->post('lomba');
        $dokumen = $this->input->post('dokumen');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/bukti';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "<script>alert('Foto harus berupa JPG, PNG, atau JPEG');
				window.history.back();</script>";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'asal' => $asal,
            'no_hp' => $no_tlp,
            'lomba' => $lomba,
            'dokumen_pendukung' => $dokumen,
            'foto' => $foto
        );
        $this->m_login->input_data($data, 'poster');
        echo "<script>alert('Data berhasil disimpan');
				location.href = 'itfast_2';</script>";
    }
    function tambah_aksi_lomba_film()
    {
        $nama_ketua = $this->input->post('nama_ketua');
        $nama_tim = $this->input->post('nama_tim');
        $asal = $this->input->post('asal');
        $no_tlp = $this->input->post('no_tlp');
        $lomba = $this->input->post('lomba');
        $dokumen = $this->input->post('dokumen');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/bukti';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "<script>alert('Foto harus berupa JPG, PNG, atau JPEG');
				window.history.back();</script>";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_ketua' => $nama_ketua,
            'nama_tim' => $nama_tim,
            'asal' => $asal,
            'no_hp' => $no_tlp,
            'lomba' => $lomba,
            'dokumen_pendukung' => $dokumen,
            'foto' => $foto
        );
        $this->m_login->input_data($data, 'film');
        echo "<script>alert('Data berhasil disimpan');
				location.href = 'itfast_2';</script>";
    }
    function tambah_aksi_lomba_workshop()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $no_tlp = $this->input->post('no_tlp');
        $lomba = $this->input->post('lomba');
        $dokumen = $this->input->post('dokumen');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/bukti';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "<script>alert('" . $this->upload->display_errors() . "');
				window.history.back();</script>";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'no_hp' => $no_tlp,
            'materi' => $lomba,
            'dokumen_pendukung' => $dokumen,
            'foto' => $foto
        );
        $this->m_login->input_data($data, 'workshop');
        echo "<script>alert('Data berhasil disimpan');
				location.href = 'itfast_2';</script>";
    }
    function tambah_aksi_festival_musik()
    {
        $nama = $this->input->post('nama');
        $no_telp = $this->input->post('no_telp');
        $hifast = $this->input->post('hifast');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/bukti';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "<script>alert('Foto harus berupa JPG, PNG, atau JPEG');
				window.history.back();</script>";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_tim' => $nama,
            'no_hp' => $no_telp,
            'hifast' => $hifast,
            'foto' => $foto
        );
        $this->m_login->input_data($data, 'festival_musik');
        echo "<script>alert('Data berhasil disimpan');
				location.href = 'itfast_2';</script>";
    }
}