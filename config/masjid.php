<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Informasi Umum & Kontak
    |--------------------------------------------------------------------------
    */
    'name' => 'Masjid Atas Muer',
    'arabic_name' => 'المسجد الأتاس',
    'contact' => [
        'phone' => '+62 812-3456-7890',
        'email' => 'admin@masjidatasmuer.com',
        'address' => 'Desa Muer, Kec. Plampang, Kabupaten Sumbawa, NTB.',
        'location_short' => 'Muer, Kec. Plampang, Sumbawa',
        'google_maps_link' => 'https://maps.google.com/?cid=1926899457740035325',
        'google_maps_embed' => 'https://maps.google.com/maps?q=Masjid%20Atas%20Muer,%20Brang%20Kolong,%20Sumbawa&t=&z=16&ie=UTF8&iwloc=&output=embed',
    ],

    /*
    |--------------------------------------------------------------------------
    | Tautan Sosial Media
    |--------------------------------------------------------------------------
    */
    'social' => [
        'facebook' => 'https://www.facebook.com/',
        'instagram' => 'https://www.instagram.com/',
        'youtube' => 'https://www.youtube.com/',
        'twitter' => 'https://twitter.com/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Informasi Donasi / ZISWAF
    |--------------------------------------------------------------------------
    */
    'donasi' => [
        'bank' => [
            [
                'name' => 'Bank NTB Syariah',
                'number' => '501 020 3040',
                'owner' => 'a.n. DKM Masjid Atas Muer',
                'color' => 'islamic-green'
            ],
            [
                'name' => 'Bank Syariah Indonesia (BSI)',
                'number' => '711 888 9999',
                'owner' => 'a.n. DKM Masjid Atas Muer',
                'color' => 'islamic-gold'
            ],
        ],
        'qris_image_url' => '', // Kosongkan jika belum ada gambar QRIS
        'konfirmasi_whatsapp' => '+62 812-3456-7890',
    ],

    /*
    |--------------------------------------------------------------------------
    | Susunan Pengurus
    |--------------------------------------------------------------------------
    */
    'pengurus' => [
        'penasehat' => [
            'Kepala Desa Muer',
            'Ketua BPD Desa Muer',
            'Ketua LPM Desa Muer',
            'Kepala Dusun Muer A',
            'H. A Manan HU'
        ],
        'ketua_umum' => 'SAEPUL BAHRI, S.Pd.I',
        'wakil_ketua' => 'Indir Jaya',
        
        'sekretaris' => 'Peni Susanto, S.Pd',
        'wakil_sekretaris' => 'Akhdiat Fahmi, SP.,Si',
        
        'bendahara' => 'Elyas Kusfirmanto',
        'wakil_bendahara' => 'Almukhlis, SP',

        'imam' => [
            'ketua' => 'M Ali B',
            'anggota' => [
                'Ahmad Hanafi, S.Pd',
                'H. Maharollah',
                'H. Husni HA',
                'H.A. Rahman',
                'A. Latif B',
                'Usman'
            ]
        ],

        'bidang_idarah' => [
            'ketua' => 'Adi Sucipto MS',
            'anggota' => [
                'Akhdiat Fahmi, SP.,Si',
                'Hardianto',
                'Hasanuddin',
                'Almukhlis, SP'
            ]
        ],

        'bidang_imarah' => [
            'ketua' => 'Akib AW',
            'anggota' => [
                'Japaruddin S',
                'Burhanuddin',
                'Jamaluddin HA',
                'Saparuddin B',
                'Amrullah',
                'M Nur Naim'
            ]
        ],

        'bidang_riayah' => [
            'ketua' => 'Japaruddin S',
            'anggota' => [
                'A. Razak',
                'Zulkifli',
                'M. Nur',
                'Ayupuddin',
                'Burhanuddin HD',
                'Amrullah'
            ]
        ],

        'khatib' => [
            'ketua' => 'Indir Jaya',
            'anggota' => [
                'Weny Prabujaya',
                'Akib AW',
                'Fauzan Muslim',
                'Saeful Bahri',
                'Ahmad Hanafi, S.Pd'
            ]
        ],

        'muazin' => [
            'ketua' => 'Surbini',
            'anggota' => [
                'Hardianto',
                'Hasanuddin'
            ]
        ],

        'marbot' => [
            'anggota' => [
                'M. Saleh Monde'
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Jadwal Sholat Default (Statis jika tidak pakai API)
    |--------------------------------------------------------------------------
    */
    'jadwal_sholat' => [
        'subuh'   => '04:53',
        'dzuhur'  => '12:23',
        'ashar'   => '15:28',
        'maghrib' => '18:32',
        'isya'    => '19:43',
    ]
];
