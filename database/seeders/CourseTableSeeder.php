<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'writer' => "Cersei Lannister",
                'title' => "Belajar HCI dari 0 sampai ahli",
                'description' => "Belajar HCI (Human-Computer Interaction) dari 0 sampai Ahli adalah kursus komprehensif yang dirancang untuk membawa Anda memahami dan menguasai prinsip-prinsip interaksi manusia dan komputer dari dasar hingga tingkat lanjutan. Dalam kursus ini, Anda akan mempelajari konsep-konsep HCI, mulai dari desain antarmuka yang ramah pengguna, analisis kebutuhan pengguna, hingga teknik evaluasi pengalaman pengguna. Kursus ini juga mencakup berbagai studi kasus, praktik terbaik, dan keterampilan yang diperlukan untuk merancang produk digital yang intuitif dan efektif.",
                'image' => "https://i.ytimg.com/vi/1wdxVcWksuw/sddefault.jpg",
                'specialist' => "Specialis in web development",
                'category' => "Interractive Multimedia",
                'writerImage' => 'https://cdn2.psychologytoday.com/assets/styles/manual_crop_16_9_1200x675/public/field_blog_entry_images/2018-09/shutterstock_648907024.jpg?itok=07tF_dnG',
            ],
            [
                'writer' => "Robert Baratheon",
                'title' => "Ingin belajar user interface? Ketemu langsung sama ahlinya",
                'description' => "Dibimbing oleh instruktur berpengalaman, kursus ini cocok untuk pemula yang baru mengenal dunia HCI, serta profesional yang ingin memperdalam keahlian mereka. Di akhir kursus, Anda akan memiliki kemampuan untuk mengembangkan antarmuka yang tidak hanya fungsional, tetapi juga memberikan pengalaman positif bagi pengguna. Bergabunglah dan mulai perjalanan Anda menjadi ahli HCI sekarang juga",
                'image' => "https://media.licdn.com/dms/image/D4E12AQEF7uycdCRZEg/article-cover_image-shrink_720_1280/0/1718794142951?e=2147483647&v=beta&t=YKe4PJpmvLhLobEmHbviF1AvophRpdF6b36V4S6DCFk",
                'specialist' => "Specialis in Front End Development",
                'category' => "Interractive Multimedia",
                'writerImage' => 'https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg',
            ],
            [
                'writer' => "Eddard Stark",
                'title' => "Design from zero to hero dengan coach Ali",
                'description' => "Kursus ini dirancang untuk memandu Anda dari pemahaman dasar hingga menjadi seorang ahli dalam dunia desain. Dimulai dari pengenalan konsep-konsep dasar desain grafis, Anda akan belajar tentang prinsip desain yang solid, alat-alat desain terbaik, serta teknik-teknik yang digunakan oleh para profesional untuk menciptakan karya visual yang menarik dan efektif.",
                'image' => "https://i.ytimg.com/vi/EhQjaNn1yuM/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLAQQ-Avw4u7OheSX_v8MrtWIY9eVw",
                'specialist' => "Specialis in Design and User Interface",
                'category' => "Interractive Multimedia",
                'writerImage' => 'https://images.inc.com/uploaded_files/image/1024x576/getty_481292845_77896.jpg',
            ],
            [
                'writer' => "Robert Baratheon",
                'title' => "Belajar Software Engineer Dengan Fanes Liu",
                'description' => "Course ini dirancang untuk siapa saja yang ingin memulai karier sebagai Software Engineer. Bersama Fanes Liu, seorang praktisi berpengalaman di bidang teknologi, peserta akan diajak memahami dasar-dasar pengembangan perangkat lunak hingga teknik lanjutan yang digunakan dalam industri. Materi mencakup dasar pemrograman, algoritma, pengembangan aplikasi web, penggunaan alat-alat versi kontrol, serta penerapan metodologi Agile dalam proyek nyata.",
                'image' => "https://edukators.in/wp-content/uploads/2023/11/front-end.jpg",
                'specialist' => "Specialis in Front End Development",
                'category' => "Software Engineering",
                'writerImage' => 'https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg',
            ],
            [
                'writer' => "Eddard Stark",
                'title' => "Website Dengan Ahlinya",
                'description' => "Course Website Dengan Ahlinya adalah panduan lengkap untuk siapa saja yang ingin menguasai pembuatan website dari dasar hingga tingkat lanjut. Dipandu oleh para ahli berpengalaman di bidang web development, peserta akan belajar langkah demi langkah cara membangun website yang profesional dan responsif.",
                'image' => "https://brollyacademy.com/wp-content/uploads/2023/12/Front-end-Developer-Course-in-Hyderabad-1024x683.jpeg",
                'specialist' => "Specialis in Design and User Interface",
                'writerImage' => 'https://images.inc.com/uploaded_files/image/1024x576/getty_481292845_77896.jpg',
                'category' => "Software Engineering",
            ],
            [
                'writer' => "Eddard Stark",
                'title' => "Ingin Front end sampai expert",
                'description' => "Course iongin Front-End Sampai Expert adalah pilihan ideal bagi siapa saja yang ingin menguasai keterampilan front-end development dari tingkat dasar hingga mahir. Dalam course ini, peserta akan belajar semua aspek pengembangan front-end, mulai dari dasar HTML, CSS, dan JavaScript hingga teknik lanjutan seperti animasi, aksesibilitas, dan optimasi performa.",
                'image' => "https://media.geeksforgeeks.org/wp-content/cdn-uploads/20201111215809/How-to-Become-a-Front-End-Developer-in-2020.png",
                'specialist' => "Specialis in Front End Development",
                'category' => "Software Engineering",
                'writerImage' => 'https://images.inc.com/uploaded_files/image/1024x576/getty_481292845_77896.jpg',
            ],
        ];

        DB::table('courses')->insert($data);
    }
}
