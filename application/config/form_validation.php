<?php

$config['career'] = [
  [
    'field'   => 'info',
    'label'   => 'Info',
    'rules'   => 'required|trim',
  ],
  [
    'field'   => 'jabatan',
    'label'   => 'Jabatan',
    'rules'   => 'required|trim'
  ],
  [
    'field'   => 'bagian',
    'label'   => 'Bagian',
    'rules'   => 'required|trim'
  ],
  [
    'field'   => 'tgl_akhir',
    'label'   => 'Tanggal akhir',
    'rules'   => 'required|trim'
  ],
];

$config['prodi'] = [
  [
    'field'   => 'kode',
    'label'   => 'Kode',
    'rules'   => 'required|trim',
  ],
  [
    'field'   => 'nama',
    'label'   => 'Nama',
    'rules'   => 'required|trim'
  ],
];

$config['bidang_usaha'] = [
  [
    'field'   => 'nama',
    'label'   => 'Nama',
    'rules'   => 'required|trim'
  ],
];

$config['sektor_usaha'] = [
  [
    'field'   => 'nama',
    'label'   => 'Nama',
    'rules'   => 'required|trim'
  ],
];

$config['mitra'] = [
  [
    'field'   => 'nama',
    'label'   => 'Nama',
    'rules'   => 'required|trim',
  ],
  [
    'field'   => 'alamat',
    'label'   => 'Alamat',
    'rules'   => 'required|trim'
  ],
  [
    'field'   => 'kontak',
    'label'   => 'Kontak',
    'rules'   => 'required|trim'
  ],
  [
    'field'   => 'telpon',
    'label'   => 'Telpon',
    'rules'   => 'required|trim'
  ],
  [
    'field'   => 'email',
    'label'   => 'Email',
    'rules'   => 'required|trim'
  ],
  [
    'field'   => 'web',
    'label'   => 'Web',
    'rules'   => 'required|trim'
  ],    
  [
    'field'   => 'bidang_usaha_id',
    'label'   => 'Bidang Usaha',
    'rules'   => 'required|trim'
  ],    
  [
    'field'   => 'sektor_usaha_id',
    'label'   => 'Sektor Usaha',
    'rules'   => 'required|trim'
  ],        
];


$config['soal'] = [
  [
    'field'   => 'nomor',
    'label'   => 'Nomor',
    'rules'   => 'required'
  ],
  [
    'field'   => 'soal',
    'label'   => 'Soal',
    'rules'   => 'required'
  ],
  [
    'field'   => 'a',
    'label'   => 'A',
    'rules'   => 'required',
  ],
  [
    'field'   => 'b',
    'label'   => 'B',
    'rules'   => 'required',
  ],
  [
    'field'   => 'c',
    'label'   => 'C',
    'rules'   => 'required',
  ],
  [
    'field'   => 'jawaban',
    'label'   => 'Jawaban',
    'rules'   => 'required',
  ],
];
