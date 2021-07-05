# Pemrograman WEB Lanjutan
## Sistem Informasi Lowongan Kerja NF - SILOKER
STT Terpadu Nurul Fikri
TI 07

## KELOMPOK 

```bash
0110219051 - Muhammad Ridho Hafidz
0110220030 - Putri Ramadhan
0110220154 - Sahrul Romadhon
0110220227 - Sheilla Inayatul Maula
```

# SilokerNF

Sistem Lowongan Kerja adalah aplikasi management penerimaan pegawai menggunakan Framework Codeigniter3.

## Installation

Buka file application/config/database.php sesuaikan konfigurasi database.

``` php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'dblokernf',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
