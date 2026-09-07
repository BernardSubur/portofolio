<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $skills = [
            'Frontend' => [
                ['name' => 'HTML', 'icon' => 'bi-filetype-html', 'color' => '#E34F26'],
                ['name' => 'CSS', 'icon' => 'bi-filetype-css', 'color' => '#1572B6'],
                ['name' => 'JavaScript', 'icon' => 'bi-filetype-js', 'color' => '#F7DF1E']
            ],
            'Backend' => [
                ['name' => 'PHP', 'icon' => 'bi-filetype-php', 'color' => '#777BB4']
            ],
            'Database' => [
                ['name' => 'MySQL', 'icon' => 'bi-database', 'color' => '#4479A1']
            ],
            'UI/UX' => [
                ['name' => 'Figma', 'icon' => 'bi-palette', 'color' => '#F24E1E'],
                ['name' => 'Canva', 'icon' => 'bi-brush', 'color' => '#00C4CC']
            ]
        ];

        $projects = [
            [
                'name' => 'Sistem Informasi Manajemen Member dan Reservasi Jadwal Latihan Berbasis Web',
                'company' => 'Satria Training Camp',
                'role' => 'Full Stack Developer',
                'status' => 'Final Project',
                'tech' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
                'description' => 'Sistem informasi yang dirancang untuk membantu pengelolaan member, paket latihan, reservasi jadwal, pembayaran, dan monitoring sesi latihan. Menghadirkan solusi digital yang mempercepat proses administrasi dan memberikan kemudahan bagi member untuk melihat jadwal secara real-time.',
                'demo_links' => [
                    ['name' => 'Demo Register', 'url' => '#', 'icon' => 'bi-person-plus'],
                    ['name' => 'Demo Login', 'url' => '#', 'icon' => 'bi-box-arrow-in-right'],
                    ['name' => 'Demo Reservasi Member', 'url' => '#', 'icon' => 'bi-calendar-check'],
                    ['name' => 'Demo Member Private', 'url' => '#', 'icon' => 'bi-star'],
                ],
                'demo_url' => 'https://satriatrainingcamp.my.id',
                'image' => 'https://satriatrainingcamp.my.id/asset/images/gambar-1.jpeg'
            ],
            [
                'name' => 'Internal Production Management System',
                'company' => 'PT Sumber Prima Mandiri',
                'role' => 'Frontend Developer',
                'status' => 'Kerja Praktik / Magang',
                'tech' => ['HTML', 'CSS', 'JavaScript', 'Figma'],
                'description' => 'Pengembangan antarmuka sistem manajemen produksi internal untuk membantu proses pengelolaan produksi, request management, dan production planning. Solusi ini menghasilkan antarmuka pengguna yang responsif, intuitif, dan konsisten di berbagai ukuran layar.',
                'gallery' => [
                    ['image' => 'images/frontend/login.png', 'caption' => 'Login Page'],
                    ['image' => 'images/frontend/addnew.png', 'caption' => 'Add New Machine'],
                    ['image' => 'images/frontend/produk.png', 'caption' => 'Product Management'],
                    ['image' => 'images/frontend/profil.png', 'caption' => 'Profile Page'],
                    ['image' => 'images/frontend/sidebar.png', 'caption' => 'Sidebar Navigation'],
                    ['image' => 'images/frontend/topbar.png', 'caption' => 'Topbar / Header']
                ]
            ],
            [
                'name' => 'UI/UX Design Aplikasi Web SIM PKB',
                'company' => 'DINKOMINFO Kabupaten Banyumas',
                'role' => 'UI/UX Designer',
                'status' => 'Kerja Praktik/Magang',
                'tech' => ['Figma', 'Prototyping', 'User Flow'],
                'prototype_url' => 'https://www.figma.com/proto/3woblTnKpujcCkCo4BFsOb/PKL-DINKOMINFO?node-id=1-2&starting-point-node-id=1%3A2&t=o69YFxn6A63AHnb5-1',
                'description' => 'Perancangan antarmuka untuk Sistem Pengujian Kendaraan Bermotor (SIM PKB). Menyelesaikan masalah tampilan sistem lama dengan merancang UI yang modern, terstruktur, dan ramah pengguna untuk memudahkan petugas dalam pengelolaan data pengujian.',
                'image' => 'images/project/sim_pkb_prototype.png'
            ]
        ];

        $education = [
            [
                'degree' => 'S1 Sistem Informasi',
                'major' => 'Fakultas Rekayasa Industri',
                'institution' => 'Telkom University',
                'year' => '2021 - 2026'
            ]
        ];

        $certifications = [
            [
                'title' => 'Pengembang Web | Web Developer',
                'issuer' => 'Sertifikasi Kompetensi BNSP',
                'institution' => 'Lembaga Sertifikasi Profesi Informatika',
                'body' => 'Badan Nasional Sertifikasi Profesi (BNSP)',
                'status' => 'KOMPETEN'
            ]
        ];

        $training = [
            [
                'degree' => 'Kerja Praktik/Magang',
                'major' => 'UI/UX Design Aplikasi Web SIM PKB Kabupaten Banyumas',
                'institution' => 'DINKOMINFO Kabupaten Banyumas',
                'year' => 'Januari - Maret 2025'
            ],
            [
                'degree' => 'Kerja Praktik/Magang',
                'major' => 'Frontend Developer Website Sistem Informasi Manufaktur',
                'institution' => 'PT Sumber Prima Mandiri',
                'year' => 'Januari - April 2026'
            ]
        ];

        return view('home', compact('skills', 'projects', 'education', 'certifications', 'training'));
    }

    public function downloadCV()
    {
        $file = public_path('cv/cv.pdf');
        
        if (file_exists($file)) {
            return response()->download($file);
        }

        return redirect()->back()->with('error', 'CV file not found.');
    }
}
