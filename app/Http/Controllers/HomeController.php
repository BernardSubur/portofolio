<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $skills = [
            'Programming Language' => [
                ['name' => 'HTML', 'icon' => 'bi-filetype-html', 'color' => '#E34F26'],
                ['name' => 'CSS', 'icon' => 'bi-filetype-css', 'color' => '#1572B6'],
                ['name' => 'JavaScript', 'icon' => 'bi-filetype-js', 'color' => '#F7DF1E'],
                ['name' => 'PHP', 'icon' => 'bi-filetype-php', 'color' => '#777BB4']
            ],
            'Framework' => [
                ['name' => 'Laravel', 'icon' => 'bi-braces', 'color' => '#FF2D20'],
                ['name' => 'Bootstrap', 'icon' => 'bi-bootstrap', 'color' => '#7952B3']
            ],
            'Database' => [
                ['name' => 'MySQL', 'icon' => 'bi-database', 'color' => '#4479A1'],
                ['name' => 'Laragon', 'icon' => 'bi-layers', 'color' => '#00A5E5']
            ],
            'Tools' => [
                ['name' => 'Git', 'icon' => 'bi-git', 'color' => '#F05032'],
                ['name' => 'GitHub', 'icon' => 'bi-github', 'color' => '#181717'],
                ['name' => 'Figma', 'icon' => 'bi-palette', 'color' => '#F24E1E'],
                ['name' => 'VS Code', 'icon' => 'bi-code-slash', 'color' => '#007ACC']
            ],
            'Deployment' => [
                ['name' => 'Hostinger', 'icon' => 'bi-cloud', 'color' => '#673AB7'],
                ['name' => 'cPanel', 'icon' => 'bi-server', 'color' => '#FF6C2C']
            ]
        ];

        $projects = [
            [
                'name' => 'Website Sistem Informasi Manajemen Member dan Reservasi Jadwal Latihan di Satria Training Camp',
                'role' => 'Full Stack Developer',
                'status' => 'Final Project',
                'description' => 'Platform manajemen member dan sistem reservasi jadwal latihan untuk Satria Training Camp. Website ini memudahkan admin dalam mengelola data serta memudahkan member untuk memesan jadwal latihan. Silakan klik tombol Live di bawah untuk membuka dan melihat website ini secara langsung!',
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
                'tech' => [
                    'Frontend Development', 'Responsive Web Design', 'User Interface',
                    'Authentication', 'Dashboard', 'Production Planning',
                    'Request Management', 'Machine Management', 'Product Management',
                    'Profile Management', 'Sidebar Navigation', 'Topbar Navigation'
                ],
                'description' => 'Berperan sebagai Frontend Developer dalam pengembangan Internal Production Management System untuk membantu proses pengelolaan produksi, request management, production planning, dan pengelolaan informasi pengguna. Berkontribusi dalam membangun dan mengimplementasikan antarmuka pengguna yang responsif, intuitif, dan konsisten.',
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
                'name' => 'UI UX Design Aplikasi Web SIM PKB Kabupaten Banyumas',
                'role' => 'UI UX Designer',
                'status' => 'Kerja Praktik/Magang',
                'prototype_url' => 'https://www.figma.com/proto/3woblTnKpujcCkCo4BFsOb/PKL-DINKOMINFO?node-id=1-2&starting-point-node-id=1%3A2&t=o69YFxn6A63AHnb5-1',
                'description' => 'Desain antarmuka (UI/UX) untuk Sistem Pengujian Kendaraan Bermotor (SIM PKB) Kabupaten Banyumas. Proyek ini bertujuan merancang antarmuka yang modern dan ramah pengguna untuk membuat tampilan website menjadi lebih menarik serta memudahkan pengelolaan data pengujian kendaraan. Silakan klik tombol Prototype di bawah untuk melihat desain interaktifnya secara langsung!',
                'image' => 'images/project/sim_pkb_prototype.png'
            ]
        ];

        $education = [
            [
                'degree' => 'Sarjana Komputer',
                'major' => 'S1 Sistem Informasi',
                'institution' => 'Telkom University Kampus Purwokerto',
                'year' => '2021 - 2026'
            ],
            [
                'degree' => 'SMA',
                'major' => 'Jurusan IPA',
                'institution' => 'SMA Katolik Fransiskus Xaverius Ruteng',
                'year' => '2018 - 2019'
            ],
            [
                'degree' => 'SMA',
                'major' => 'Jurusan IPA',
                'institution' => 'SMA Seminari Pius XII Kisol',
                'year' => '2016 - 2018'
            ]

        ];

        $certifications = [
            [
                'title' => 'Web Developer',
                'issuer' => 'Sertifikasi Kompetensi',
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
