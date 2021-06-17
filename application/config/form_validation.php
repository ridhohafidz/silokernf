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
